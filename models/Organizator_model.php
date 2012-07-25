<?php
include("/../db/Database.php");

class Organizator_model {

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

	public function __construct() {
		$this->Pseudonim = $_POST['pseudonim'];
		$this->Imie = $_POST['imie'];
		$this->Nazwisko = $_POST['nazwisko'];
		$this->Telefon = $_POST['telefon'];
		$this->e_mail = $_POST['e_mail'];
		$this->validacja_e_mail['validacja_e_mail'];
		$this->haslo = $_POST['haslo'];
		$this->validacja_haslo = $_POST['validacja_haslo'];

		$this->db = new Database("root", "", "loteria_biletów");
		$this->db->connect();
	}

	public function INSERT_Dodaj_organizatora() {
		$this->db->PDO->exec("INSERT INTO organizator
				(Imie,Nazwisko,Telefon,e_mail,Pseudonim,haslo) VALUES (
				'$this->Imie',
				'$this->Nazwisko',
				'$this->Telefon',
				'$this->e_mail',
				'$this->Pseudonim',
				'$this->haslo'
		)");
		/*
		if($this->haslo == NULL) { zwrca NULL
			echo "NULL";       
		}
 		
		if($this->haslo == $this->validacja_haslo) {
		echo "hasloval";
		}
		else {
			echo "Has³o validacja nie jest takie samo jak has³o";
		}
		*/
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