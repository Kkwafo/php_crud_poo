<?php 
require_once("../head/head.php");
require_once("../../controller/usernameController.php");


$obj = new usernameController();
$obj->save($_GET['name']);






 

require_once("../head/footer.php");
?>