<?php
include("/../db/Database.php");
class Imprezy_model {
	
	public $db;
	public $id_Imprezy;
	public $pseudonim_Organizator;
	public $Nazwa;
	public $Opis;
	public $Miasto;
	public $Ulica;
	public $Numer;
	public $Data_rozpoczecia;
	public $Data_zakonczenia;
	public $Data_zakonczenia_Rekrutacji;

	public function __construct() {
		$this->db = new Database("root", "", "loteria_biletów");
		$this->db->connect();
		session_start();
		//$this->pseudonim_Organizator = $_SESSION['pseudonim']; TODO tylko podczas testow
		$this->Nazwa = $_POST['Nazwa'];
		$this->Opis = $_POST['Opis'];
		$this->Miasto = $_POST['Miasto'];
		$this->Ulica =$_POST['Ulica'];
		$this->Numer = $_POST['Numer'];
		$this->Data_rozpoczecia = $_POST['rok']."-".$_POST['miesiac']."-".$_POST['dzien'];
		$this->Data_zakonczenia = $_POST['rokZ']."-".$_POST['miesiacZ']."-".$_POST['dzienZ'];
		$this->Data_zakonczenia_Rekrutacji = $_POST['rokR']."-".$_POST['miesiacR']."-".$_POST['dzienR'];
		echo $this->pseudonim_Organizator;
	}


	public function INSERT_Dodaj_organizatora() {
		$md5 = md5($this->haslo) ;
		$this->db->PDO->exec("INSERT INTO imprezy
				(Nazwa,Opis,Miasto,Ulica,Numer,Data_rozpoczecia,Data_zakoñczenia,Data_zakoñczenia_Rekrutacji) VALUES (
				'$this->Imie',
				'$this->Nazwisko',
				'$this->Telefon',
				'$this->e_mail',
				'$this->Pseudonim',
				'$md5'
		)");
	}

}
?>