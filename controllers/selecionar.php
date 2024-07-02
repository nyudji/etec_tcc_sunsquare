<?php
if($startaction == 1 && $acao == "selecionar"){
			if(isset($_GET["id_det"])){
				$id_det=$_GET["id_det"];
				$id_vis=($_SESSION["id_vis"]);
				$query=mysql_query("UPDATE detento SET id_vis='$id_vis' WHERE id_det='$id_det'");
				header ("location:visita.php");
			}
		
}
?>