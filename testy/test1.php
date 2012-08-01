<?php
include("/../db/Database.php");
include('test2.php');

$PDO = new Database("root", "", "loteria_biletów");
class  test1 {
	public $db;

	public function __construct($pdo) {
		$this->db = $pdo;
		$this->db->connect();
	}
}

//$a = new test1();
$b = new test1($PDO);
$b = new test2($PDO);

?>

<a href="test2.php" >test2</a>