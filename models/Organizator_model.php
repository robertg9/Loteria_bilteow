<?php
include("/../db/Database.php");

class Organizator_model {

	const pseudonim_query = 'SELECT Pseudonim FROM organizator';

	public $db;
	public $id_Organizator;
	public $Imie;
	public $Nazwisko;
	public $Telefon;
	public $e_mail;
	public $validacja_e_mail;
	public $Pseudonim;
	public $haslo;
	public $validacja_haslo;

	public function __construct($bool_rejestracja) {
		$this->db = new Database("root", "", "loteria_biletów");
		$this->db->connect();
		
		if($bool_rejestracja == true) {
			$this->Pseudonim = $_POST['pseudonim'];
			$this->Imie = $_POST['imie'];
			$this->Nazwisko = $_POST['nazwisko'];
			$this->Telefon = $_POST['telefon'];
			$this->e_mail = $_POST['e_mail'];
			$this->validacja_e_mail = $_POST['validacja_e_mail'];
			$this->haslo = $_POST['haslo'];
			$this->validacja_haslo = $_POST['validacja_haslo'];
		}
		else if($bool_rejestracja == false) {
			$this->Pseudonim = $_POST['pseudonim'];
			$this->haslo = $_POST['haslo'];
		}
		else {
			echo "zmienna podana w konstruktorze musi byæ typu boolena(true lub false)";
		}
	}


	public function INSERT_Dodaj_organizatora() {
		$md5 = md5($this->haslo) ;
		$this->db->PDO->exec("INSERT INTO organizator
				(Imie,Nazwisko,Telefon,e_mail,Pseudonim,haslo) VALUES (
				'$this->Imie',
				'$this->Nazwisko',
				'$this->Telefon',
				'$this->e_mail',
				'$this->Pseudonim',
				'$md5'
		)");
	}

	public function getHasloByPseudonim() {
		$haslo_query = "SELECT haslo FROM organizator WHERE Pseudonim = '$this->Pseudonim'";
		return $haslo_query;
	}
	public function DELETE() {
		$query="SELECT * FROM kontakt";
	}
	public function SELECT() {
		return $query="SELECT * FROM organizator";
	}
	public function UPDATE() {
		//TODO .
	}


}