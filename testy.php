<?php
require_once '/libs/Smarty.class.php';


	/*
if(preg_match('/^[A-Za-z0-9]*$/i', "asd@")) {
	echo "z cyframi";
}
else {
	echo "bez cyfr";
}
*/



$smarty = new Smarty();
$smarty->template_dir = "views";
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$array = array(
		'asd' => 25,
		'rege' => 23
		);
$smarty->assign("Name","Fred Irving Johnathan Bradley Peppergill");
$smarty->display('index.tpl');