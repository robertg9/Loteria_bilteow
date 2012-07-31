<?php
require_once '/libs/Smarty.class.php';
class smarty {
public $smarty;

public function __construct() {
$smarty = new Smarty();
$smarty->template_dir = "views";
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;	
}

}