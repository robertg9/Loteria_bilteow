<?php

include '/../models/Organizator_model.php';

class Orgranizator_controller {
	
	public $sciezka_zalogowany = "/Loteria_bilteow/views/Organizator/zalogowany.php";
	public $Org_mdl;
	public $validacja_haslo;
	public $validacja_e_mail;
	public $validacja_pseudonim = true;

	public function __construct() {
		echo explode("/",$PHP_SELF) . "FILE <br>";
		$this->Org_mdl = new Organizator_model(true);
	}

	public function validacja() {

		$this->val_haslo();
		$this->val_e_mail();
		$this->val_pseudonim();

		if ($this->validacja_pseudonim == true &&
				$this->validacja_haslo == true &&
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

		else if($this->Org_mdl->e_mail == $this->Org_mdl->validacja_e_mail) {
			$this->validacja_e_mail = true;
		}
		else {
			echo "Wprowadzone adresy e_mail nie s¹ jednoznaczne<br>";
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
	
	private function getFileName    webune.com /forums/20101007cgfh.html

}

?>