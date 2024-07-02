<?php
include("includes/header.php");

if(isset($logado)){
	include("views/visita3.php");
}else{
	include("views/visitalogin.php");
}
?>

