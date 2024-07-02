<?php
include("includes/header.php");
if(isset($logado)){
	include("views/visitalogado.php");
}else{
	include("views/cadastro.php");
}
?>
