<?php
include 'controllers/Organizator_controller.php';

$url = getFileName($_SERVER['REQUEST_URI']);

switch($url) {
	case "index.php":
		include("views/glowna.php");
		break;
	case "zarejestruj":
		include("views/Organizator/rejestracja.php");
		break;
	case "zarejestrowany":
		$organizator_rejestracja = new Orgranizator_controller();
		$organizator_rejestracja->validacja();
		include("views/Organizator/zarejestrowany.php");
		break;
	case "logowanie":
		include("views/Organizator/logowanie.php");
		break;
	case "zalogowany":
		$organizator_logowanie = new Orgranizator_controller();
		$organizator_logowanie->zaloguj();
		include("views/Organizator/zalogowany.php");
		break;
	case "dodajImpreze":
		include("views/Imprezy/dodajImpreze.php");
		break;
}
function getFileName($php_self) {
	$filename = explode("/",$php_self);
	$filename = array_reverse($filename);
	return $filename[0];
}

?>






