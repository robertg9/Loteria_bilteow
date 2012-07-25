<?php

include '/../models/Organizator_model.php';

class Orgranizator_controller {
	public $Org_mdl;
	public $validacja_haslo;
	public $validacja_e_mail;
	public $validacja_pseudonim;

	public function __construct() {
		$this->Org_mdl = new Organizator_model();
	}


	public function validacja() {
		if($this->Org_mdl->haslo == $this->Org_mdl->validacja_haslo) {
			$this->validacja_haslo = true;
		}
		else {
			echo "Wprowadzone has³a nie s¹ jednoznaczne<br>";
		}
		
		if($this->Org_mdl->e_mail == $this->Org_mdl->validacja_e_mail) {
			$this->validacja_e_mail = true;
		}
		else {
			echo "Wprowadzone adresy e_mail nie s¹ jednoznaczne<br>";
		}

	}
	
	public function zaloguj() {
		session_start();


	}

}

?>