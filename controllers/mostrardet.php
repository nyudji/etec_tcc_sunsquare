<?php
if($startaction == 1 && $acao == "mostrardet"){
			if(isset($_GET["id_det"])){
				$id_det=$_GET["id_det"];
				$query2=mysql_query("SELECT * FROM detento WHERE id_det='$id_det'");
				$det=mysql_fetch_array($query2);
				
			}
		
}
?>