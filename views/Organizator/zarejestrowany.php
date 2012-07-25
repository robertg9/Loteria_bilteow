<?php 
//include("../../models/Organizator_model.php");
//$zarejestruj = new Organizator_model();
//$zarejestruj->INSERT_Dodaj_organizatora();
include '../../controllers/Organizator_controller.php';
$Org_con = new Orgranizator_controller();
$Org_con->validacja();
?>
Twoje konto zosta³o utworzone 
