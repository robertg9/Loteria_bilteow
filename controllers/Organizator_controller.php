<?php

include '/../models/Organizator_model.php';
require '/../libs/Smarty.class.php';


class Orgranizator_controller {

	//private $host;
	//private $uri;
	private $formularzLogowanie;

	public $smarty;
	public $Org_mdl;
	public $zalogowany = false;
	public $validacja_telefon;
	public $validacja_haslo;
	public $validacja_e_mail;
	public $validacja_pseudonim = true;

	public function __construct($database) {
		$this->db = $database;
		$this->smarty = new Smarty();
		$this->smarty->template_dir = "views";
		$this->smarty->debugging = true;
		$this->smarty->caching = true;
		$this->smarty->cache_lifetime = 120;

		//$this->host = $_SERVER['HTTP_HOST'];
		//$this->uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		$this->formularzLogowanie = 'formularz_Logowania.php';
		$this->Org_mdl = new Organizator_model($this->db);
	}


	public function validacja() {
		$this->Org_mdl->rejestracja();

		$this->val_telefon();
		$this->val_haslo();
		$this->val_e_mail();
		$this->val_pseudonim();

		if ($this->validacja_pseudonim == true &&
				$this->validacja_haslo == true &&
				$this->validacja_telefon == true &&
				$this->validacja_e_mail == true) {
			$this->Org_mdl->INSERT_Dodaj_organizatora();
			echo "Twoje konto zosta�o utworzone mo�esz si� teraz zalogowa�<br>
					<a href='logowanie'>Przejd� do logowania</a><br> ";
			//header("Location: http://$this->host.$this->uri/$this->formularzLogowanie"); //TODO przyk�ad przekierowania

		}
	}

	public function zaloguj() {
		$this->Org_mdl->logowanie();
		foreach ($this->Org_mdl->db->PDO->query(constant('Organizator_model::pseudonim_query')) as $wiersz) {
			if((string)$this->Org_mdl->Pseudonim == $wiersz['Pseudonim']) {
				foreach($this->Org_mdl->db->PDO->query($this->Org_mdl->getHasloByPseudonim()) as $haslo) {
					if(md5($this->Org_mdl->haslo) == $haslo['haslo']) {
						$this->zalogowany = true;
						echo "zostales zalogowany :   Witamy w portalu <b>mojaimpreza.pl</b>";
						session_start();
						$_SESSION['pseudonim'] = $this->Org_mdl->Pseudonim;
						break;
					}
				}
			}
		}
		if($this->zalogowany == false) {
			echo "Podano b��dny login lub has�o";
		}
	}

	private function val_haslo() {

		if ($this->Org_mdl->haslo == NULL) {
			echo "Musisz poda� has�o <br>";
			$this->validacja_haslo = false;
		}
		else if($this->pregMatch($this->Org_mdl->haslo, "AZ09") == true) {
			if($this->Org_mdl->haslo == $this->Org_mdl->validacja_haslo) {
				$this->validacja_haslo = true;
			}
		}
		else {
			$this->validacja_haslo = false;
			echo "Wprowadzone has�a nie s� jednoznaczne , b�d� zawiera znaki specjalne takie jak !@#$%^&*()<br>";
		}
	}

	private function val_e_mail() {
		if($this->Org_mdl->e_mail == NULL) {
			echo "Musisz poda� adres e_mail <br>";
		}
		else if(filter_var($this->Org_mdl->e_mail,FILTER_VALIDATE_EMAIL)) {
			if($this->Org_mdl->e_mail == $this->Org_mdl->validacja_e_mail) {
				$this->validacja_e_mail = true;
			}
		}
		else if ($this->Org_mdl->e_mail !==  $this->Org_mdl->validacja_e_mail) {
			echo "Wprowadzone adresy e-mail nie s� jednoznaczne<br>";
			$this->validacja_e_mail = false;
		}
		else {
			$this->validacja_e_mail = false;
			echo "Adres e-mail nie jest poprawny";
		}
	}

	private function val_pseudonim() {

		foreach ($this->Org_mdl->db->PDO->query(constant('Organizator_model::pseudonim_query')) as $wiersz) {
			if((string)$this->Org_mdl->Pseudonim == $wiersz['Pseudonim']) {
				print "Podana nazwa ".  $this->Org_mdl->Pseudonim   ." jest ju� zaj�ta spr�buj innej";
				$this->validacja_pseudonim = false;
			}
			else if(!$this->pregMatch($this->Org_mdl->Pseudonim, "AZ09") == true) {
				$this->validacja_pseudonim = false;
				echo "Pseudonim nie mo�e zawiera� znak�w specjalnych<br>";
				break;
			}
		}
	}

	private function val_telefon() {
		if(strlen((string)$this->Org_mdl->Telefon) >6 &&
				strlen((string)$this->Org_mdl->Telefon) <13) {
			if(filter_var($this->Org_mdl->Telefon,FILTER_VALIDATE_INT)) {
				$this->validacja_telefon = true;
			}
		}
		elseif($this->Org_mdl->Telefon == NULL) {
			echo "Musisz poda� jaki� numer telefonu<br>";
		}
		else {
			$this->validacja_telefon = false;
			echo "numer telefonu nie jest poprawny<br>";
		}
	}

	private function getFileName($php_self) {
		$filename = explode("/",$php_self);
		$filename = array_reverse($filename);
		return $filename[0];
	}

	private function pregMatch($string,$rodzaj) {  //TODO preg_match
		if($rodzaj == "AZ") {
			if(preg_match('/^[A-Za-z]*$/i', $string)) {
				return true;
			}
			else {
				return false;
			}
		}
		if($rodzaj == "AZ09") {
			if(preg_match('/^[A-Za-z0-9]*$/i', $string)) {
				return true;
			}
			else {
				return false;
			}

		}
	}

}


?>

