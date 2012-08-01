<?php
//include("/../db/Database.php");
//include('test1.php');
class  test2 extends test1 {
	public $db;



	public function __construct($pdo) {
		$this->db = $pdo;
		$this->db->connect();
	}


}

//$b = new test2();