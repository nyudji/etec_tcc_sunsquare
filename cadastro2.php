<?php
include("includes/header.php");
if(isset($logado)){
	include("views/cadastro2.php");
}else{
	include("views/visitalogin.php");
}
?>
