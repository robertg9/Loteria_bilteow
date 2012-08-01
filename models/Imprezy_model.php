<?php
class Imprezy_model {

	public $db;
	public $idImprezy;
	public $pseudonimOrganizator;
	public $nazwa;
	public $opis;
	public $miasto;
	public $ulica;
	public $numer;
	public $dataRozpoczecia;
	public $dataZakonczenia;
	public $dataZakonczeniaRekrutacji;

	public function __construct($database) {
		$this->db = $database;
		$this->db->connect();
		session_start();
		$this->pseudonimOrganizator = $_SESSION['pseudonim']; //TODO tylko podczas testow
		$this->nazwa = $_POST['nazwa'];
		$this->opis = $_POST['opis'];
		$this->miasto = $_POST['miasto'];
		$this->ulica =$_POST['ulica'];
		$this->numer = $_POST['numer'];
		$this->dataRozpoczecia = $_POST['rok']."-".$_POST['miesiac']."-".$_POST['dzien'];
		$this->dataZakonczenia = $_POST['rokZ']."-".$_POST['miesiacZ']."-".$_POST['dzienZ'];
		$this->dataZakonczeniaRekrutacji = $_POST['rokR']."-".$_POST['miesiacR']."-".$_POST['dzienR'];
		echo $this->pseudonimOrganizator;
	}

	public function dodajImpreze() {
		//$md5 = md5($this->haslo) ;
		$dodajImpreze = "INSERT INTO imprezy
		(FK_id_Organizator,Nazwa,Opis,Miasto,Ulica,Numer,
		Data_rozpoczecia,Data_zakoñczenia,Data_zakoñczenia_Rekrutacji
		) VALUES (
		'$this->pseudonimOrganizator','$this->nazwa','$this->opis','$this->miasto','$this->ulica','$this->numer',
		'$this->dataRozpoczecia','$this->dataZakonczenia','$this->dataZakonczeniaRekrutacji'
		)
		";

		$this->db->PDO->exec("INSERT INTO imprezy
				(FK_id_Organizator,Nazwa,Opis,Miasto,Ulica,Numer,
				Data_rozpoczecia,dataZakonczenia,dataZakonczeniaRekrutacji
		) VALUES (
				'$this->pseudonimOrganizator','$this->nazwa','$this->opis','$this->miasto','$this->ulica','$this->numer',
				'$this->dataRozpoczecia','$this->dataZakonczenia','$this->dataZakonczeniaRekrutacji'
		)
				");
	}

}
?>