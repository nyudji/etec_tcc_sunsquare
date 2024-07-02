<?php
if($startaction == 1 && $acao == "buscadt2"){

$buscar =$_POST['buscar'];

					if(empty($buscar)){
					$msg="*Informe a data a ser filtrada";
					return $msg;
					}else{
			     	$data_atual = date("Ymd");		
					$buscarvisitass=mysql_query("SELECT *,concat(substring(data_calv,7,4),substring(data_calv,4,2),substring(data_calv,1,2)) as data  from calendariov WHERE concat(substring(data_calv,7,4),substring(data_calv,4,2),substring(data_calv,1,2)) >= '$data_atual' and data_calv like '%$buscar%'  order by data,horario_calv asc");
					  }	
					  }
					 


?>
