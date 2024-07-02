<?php
if($startaction == 1 && $acao == "logar"){
		//Dados
		$email_vis=($_POST["email_vis"]);
		$senha_vis=($_POST["senha_vis"]);
		
		if(empty($email_vis) || empty($senha_vis)){
			$msg="Preencha todos os campos!";
		}else{
			if(!filter_var($email_vis,FILTER_VALIDATE_EMAIL)){
				$msg="Digite seu e-mail corretamente";
			}else{
				//Executa a busca pelo usuário
				$buscar=mysql_query("SELECT * FROM visitas WHERE email_vis='$email_vis' AND senha_vis='$senha_vis' LIMIT 1");
			if(mysql_num_rows($buscar) == 1){
			$dados=mysql_fetch_array($buscar);
					$_SESSION["nome_vis"]=$dados["nome_vis"];
					$_SESSION["email_vis"]=$dados["email_vis"];
					$_SESSION["senha_vis"]=$dados["senha_vis"];
					$_SESSION["id_vis"]=$dados["id_vis"];
					$_SESSION["nivel_vis"]=$dados["nivel_vis"];
					setcookie("logado",1);
				    header ("location:visita.php");
}				
				else{
					$msg="E-mail ou senha incorreta";
				return $msg;
				}
				
			}
		}
}
?>