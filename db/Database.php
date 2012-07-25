<?php
class Database {

	public $PDO;

	public $host = "localhost";
	public $username;
	public $password;
	public $database;

	public function __construct($username,$password,$database,$host = "localhost") {
		$this->host     = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}

	public function __destruct() {
		//	echo "Utraci³eœ po³¹czenie z baz¹ $this->database";
	}
	public function connect() {
		try {
			$this->PDO = new PDO(
					'mysql:dbname='.$this->database.
					';host='.$this->host,
					$this->username,
					$this->password);
			$this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e) {
			echo 'Connection failed: ' .$e->getMessage();
		}
	}
}

?>
