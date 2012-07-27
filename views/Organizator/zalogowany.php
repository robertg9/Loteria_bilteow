<?php 
include '../../controllers/Organizator_controller.php';
$Org_con = new Orgranizator_controller();
$Org_con->zaloguj();
?>
<br>Zalogowany jako : <?php  echo $_SESSION['pseudonim']  ?> <br>
<a href="../../views/Imprezy/index.php">Dodaj Ofertê Imrpezy</a> 
