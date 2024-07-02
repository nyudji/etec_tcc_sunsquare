<?php
if($startaction == 1 && $acao == "logout"){
		setcookie("logado","");
		unset($_SESSION["email_vis"],$_SESSION["senha_vis"]);
		header ("location:visita.php");
}
?>