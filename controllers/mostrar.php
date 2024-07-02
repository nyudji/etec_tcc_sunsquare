<?php
if($startaction == 1 && $acao == "mostrar"){
			if(isset($_GET["id_vis"])){
				$id_vis=$_GET["id_vis"];
				$query=mysql_query("SELECT * FROM visitas WHERE id_vis='$id_vis'");
				$vis=mysql_fetch_array($query);

	
			}
		
}
?>