<?php
if($startaction == 1 && $acao == "excluir"){
			if(isset($_GET["id_calv"])){
				$id_calv=$_GET["id_calv"];
				$query=mysql_query("DELETE FROM calendariov WHERE id_calv='$id_calv'");
			}
		
}
?>