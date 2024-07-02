<?php
if($startaction == 1 && $acao == "buscadv"){
$busca =($_POST['busca']);
$buscar =($_POST['buscar']);

					if(isset($busca)){
					if(empty($buscar)){
					$msg="*Preencha o campo buscar";
					return $msg;
					}else{
					
					if($busca == 'detento'){
					$buscardett="1";
				 }
				else  if($busca == 'penitenciaria'){
				 $data_atual = date("Ymd");	
                 	unset($buscarvisitas);	
					$buscarvisitass=mysql_query("SELECT *,concat(substring(data_calv,7,4),substring(data_calv,4,2),substring(data_calv,1,2)) as data  from calendariov WHERE concat(substring(data_calv,7,4),substring(data_calv,4,2),substring(data_calv,1,2)) < '$data_atual' and penit_calv like '%$buscar%'  order by data,horario_calv asc");
				 }
				  
	else{
			     	$data_atual = date("Ymd");	
                 	unset($buscarvisitas);	
					$buscarvisitass=mysql_query("SELECT *,concat(substring(data_calv,7,4),substring(data_calv,4,2),substring(data_calv,1,2)) as data  from calendariov WHERE concat(substring(data_calv,7,4),substring(data_calv,4,2),substring(data_calv,1,2)) < '$data_atual' and id_vis like '%$buscar%'  order by data,horario_calv asc");
				
					  }	
					  }
					 
}
}
?>
