<?php
include 'controllers/Organizator_controller.php';
include 'models/Imprezy_model.php';
include("db/Database.php");
require_once 'libs/Smarty.class.php';

$database = new Database("root", "", "loteria_biletów");

$url = getFileName($_SERVER['REQUEST_URI']);
$smarty = new Smarty();
$smarty->template_dir = "views";
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$tmp = "pusta";

switch($url) {
	case "zalogowany":
		$organizator_logowanie = new Orgranizator_controller($database);
		$organizator_logowanie->zaloguj();
		$organizator_logowanie->smarty->display('Organizator/zalogowany.tpl');
		break;
	case "index.php":
		session_start();
		if(isset($_SESSION['pseudonim'])) {
			$smarty->assign("uzytkownik",$_SESSION['pseudonim']);
		}
		$smarty->display("glowna.tpl");
		break;
	case "zarejestruj":
		include("views/Organizator/rejestracja.php");
		break;
	case "zarejestrowany":
		$organizator_rejestracja = new Orgranizator_controller($database);
		$organizator_rejestracja->validacja();
		include("views/Organizator/zarejestrowany.php");
		break;
	case "logowanie":
		include("views/Organizator/logowanie.php");
		break;

	case "dodajImpreze":
		session_start();
		$smarty->display("Imprezy/dodajImpreze.tpl");
		break;
	case "imprezaDodana":
		$imprezyMmodel = new Imprezy_model($database);
		$imprezyMmodel->dodajImpreze();
		include("views/Imprezy/impreza_dodana.php");
		break;
}
function getFileName($php_self) {
	$filename = explode("/",$php_self);
	$filename = array_reverse($filename);
	return $filename[0];
}

?>




