<?php

include '/../models/Organizator_model.php';

class Orgranizator_controller {

	public $Org_mdl;
	public $validacja_telefon;
	public $validacja_haslo;
	public $validacja_e_mail;
	public $validacja_pseudonim = true;

	public function __construct() {
		if($this->getFileName($_SERVER['PHP_SELF']) == "zarejestrowany.php") {
			$this->Org_mdl = new Organizator_model(true);
		}
		else {
			$this->Org_mdl = new Organizator_model(false);
		}
	}

	public function validacja() {

		$this->val_telefon();
		$this->val_haslo();
		$this->val_e_mail();
		$this->val_pseudonim();

		if ($this->validacja_pseudonim == true &&
				$this->validacja_haslo == true &&
				$this->validacja_telefon == true &&
				$this->validacja_e_mail == true) {
			$this->Org_mdl->INSERT_Dodaj_organizatora();
		}

	}

	public function zaloguj() {
		session_start();
		$_SESSION['pseudonim'] = $this->Org_mdl->Pseudonim;

	}

	private function val_haslo() {
		if ($this->Org_mdl->haslo == NULL) {
			echo "Musisz podaæ has³o <br>";
		}
		else if($this->Org_mdl->haslo == $this->Org_mdl->validacja_haslo) {
			$this->validacja_haslo = true;
		}
		else {
			echo "Wprowadzone has³a nie s¹ jednoznaczne<br>";
		}
	}

	private function val_e_mail() {
		if($this->Org_mdl->e_mail == NULL) {
			echo "Musisz podaæ adres e_mail <br>";
		}
		else if(filter_var($this->Org_mdl->e_mail,FILTER_VALIDATE_EMAIL)) {
			if($this->Org_mdl->e_mail == $this->Org_mdl->validacja_e_mail) {
				$this->validacja_e_mail = true;
			}
		}
		else if ($this->Org_mdl->e_mail !==  $this->Org_mdl->validacja_e_mail) {
			echo "Wprowadzone adresy e-mail nie s¹ jednoznaczne<br>";
			$this->validacja_e_mail = false;
		}
		else {
			$this->validacja_e_mail = false;
			echo "Adres e-mail nie jest poprawny";
		}
	}

	private function val_pseudonim() {

		$pseudonim_query = "SELECT Pseudonim FROM organizator";
		foreach ($this->Org_mdl->db->PDO->query($pseudonim_query) as $wiersz) {
			if((string)$this->Org_mdl->Pseudonim == $wiersz['Pseudonim']) {
				print "Podana nazwa ".  $this->Org_mdl->Pseudonim   ." jest ju¿ zajêta spróbuj innej <br>";
				$this->validacja_pseudonim = false;
			}
		}
	}

	private function val_telefon() {

		if(strlen((string)$this->Org_mdl->Telefon) >6 && strlen((string)$this->Org_mdl->Telefon) <13) {
			if(filter_var($this->Org_mdl->Telefon,FILTER_VALIDATE_INT)) {
				$this->validacja_telefon = true;
			}
		}
		else {
			$this->validacja_telefon = false;
			echo "numer telefonu nie jest poprawny<br>";
		}
	}

	private function getFileName($php_self) {
		$filename = explode("/",$php_self); // THIS WILL BREAK DOWN THE PATH INTO AN ARRAY
		$filename = array_reverse($filename); // THIS WILL MAKE LAST ELEMENT THE FIRST
		return $filename[0];
	}

}

?>