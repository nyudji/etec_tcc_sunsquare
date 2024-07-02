<?php
if($startaction == 1 && $acao == "confirma"){
		//Dados
		$senha_vis=($_SESSION["senha_vis"]);
		$confirmar_senha=($_POST["confirmar_senha"]);
		
		if(empty($confirmar_senha)){
			$msg2="Digite a confirmação de senha";
			$exibir="2";
		}else{
			$buscar=mysql_query("SELECT * FROM visitas WHERE senha_vis='$confirmar_senha' LIMIT 1");
			if(mysql_num_rows($buscar) == 1){
			$dados=mysql_fetch_array($buscar);
				    header("location:cadastro2.php");
					}				
				else{
				$msg2="*Senha digitada não é válida";
				$exibir="2";
				   }
				
			}
		}

?>