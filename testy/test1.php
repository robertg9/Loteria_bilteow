<?php
include("/../db/Database.php");
include('test2.php');


class  test1 {
	public $db;

	public function __construct($pdo) {
		$this->db = $pdo;
		$this->db->connect();
	}
	public function tt() {
		$query = $this->db->PDO->query("SELECT *FROM imprezy");
		foreach($query->fetchAll() as $row) {
			echo $row['Opis']."<br>";
		}
	}
}

//$a = new test1();
$PDO = new Database("root", "", "loteria_biletów");
$b = new test1($PDO);
$b->tt();
//$b = new test2($PDO);

?>

<a href="test2.php">test2</a>
