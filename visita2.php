<?php
include("includes/header.php");

if(isset($logado)){
	include("views/visita2.php");
}else{
	include("views/visitalogin.php");
}
?>

