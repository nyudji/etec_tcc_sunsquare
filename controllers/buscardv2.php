<?php
if($startaction == 1 && $acao == "buscadv2"){
$busca =($_POST['busca']);
$buscar =($_POST['buscar']);

					if(isset($busca)){
					if(empty($buscar)){
					$msg="*Preencha o campo buscar";
					
					}else{
					
						  if($busca == 'penitenciaria'){
				 $data_atual = date("Ymd");	
					$buscarvisitass=mysql_query("SELECT *,concat(substring(data_calv,7,4),substring(data_calv,4,2),substring(data_calv,1,2)) as data  from calendariov WHERE concat(substring(data_calv,7,4),substring(data_calv,4,2),substring(data_calv,1,2)) >= '$data_atual' and penit_calv like '%$buscar%' status='1'or status = '2'  order by data,horario_calv asc");
				 }
				  
				else if($busca == 'detento'){
					$buscardete="1";
				 }
			
				  else{
			     		$buscardete="1";
					  }	
					  }
					 
}
}
?>
