<?php
if($startaction == 1 && $acao == "buscar"){
$busca =($_POST['busca']);
$buscar =($_POST['buscar']);
					if(isset($busca)){
					if(empty($buscar)){
					$msg="Informe o nome ou cpf do detento";
					return $msg;
					}else{
					if($busca == 'nome'){
			     $buscardet=mysql_query("SELECT * FROM detento WHERE nome_det LIKE '%$buscar%' AND det_estado='Ativo'");
				 }
				  else{ 
					  $buscardet=mysql_query("SELECT * FROM detento WHERE cpf_det LIKE '%$buscar%' AND det_estado='Ativo'");							
					  }	
					  }
					 
}
}
?>
