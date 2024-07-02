<?php
if($startaction == 1 && $acao == "cadastrar"){
			$nome_vis=$_POST["nome_vis"];
			$cep_vis=$_POST["cep_vis"];
			$rua_vis=$_POST["rua_vis"];
			$bairro_vis=$_POST["bairro_vis"];
			$numero_vis=$_POST["numero_vis"];
			$telefone_vis=$_POST["telefone_vis"];
			$cidade_vis=$_POST["cidade_vis"];
			$email_vis=$_POST["email_vis"];
			$senha_conf=$_POST["senha_conf"];
		    $senha_vis=$_POST["senha_vis"];
			$dt_nasc_vis=$_POST["dt_nasc_vis"];
			$uf_vis=$_POST["uf_vis"];
			$rg_vis=$_POST["rg_vis"];
		    $sexo_vis=$_POST["sexo_vis"];
			$complemento_vis=$_POST["complemento_vis"];
			$cpf=$_POST["cpf_vis"];
			if(!empty($cpf)){
			$quebra=explode(".", $cpf); //vai quebrar a variavel cpf onde ouver ponto, você vai fkar com 3 partes, a ultima contem o traço, intaum
            $quebra2=explode("-", $quebra[2]); //o 2 eh pq eh a 3ª parte do array criado na função $quebra
			$cpf_vis=$quebra[0].$quebra[1].$quebra2[0].$quebra2[1];
		}
		if(empty($nome_vis) || empty($cep_vis) || empty($rua_vis)  || empty($bairro_vis)|| empty($numero_vis) || empty($telefone_vis) || empty($cidade_vis) || empty($email_vis) || empty($senha_vis)|| empty($dt_nasc_vis)|| empty($uf_vis) || empty($rg_vis) ||  empty($sexo_vis)|| empty($cpf_vis)){
			echo "<script>alert('Preencha todos os campos!')</script>";
			echo "<script>history.go(-1)</script>";
		}
		//Todos os campos preenchidos
		else{
			//Email válido
			if(filter_var($email_vis,FILTER_VALIDATE_EMAIL)){
				//Senha inválida
				if(strlen($senha_vis) < 6){
					echo "<script>alert('A senha deve ter no mínimo 6 letras')</script>";
						echo "<script>history.go(-1)</script>";
				}
				if($senha_conf != $senha_vis){
					echo "<script>alert('A senha digitada não confere com a outra.')</script>";
						echo "<script>history.go(-1)</script>";
					
				
				}
				//Senha válida
				else{
					//Executa a classe de cadastro
$validaremail=mysql_query("SELECT * FROM visitas WHERE email_vis='$email_vis'");
			$contar=mysql_num_rows($validaremail);
			if($contar == 0){
			$insert=mysql_query("INSERT INTO visitas (nome_vis, cep_vis, rua_vis, bairro_vis, numero_vis, telefone_vis, cidade_vis, email_vis, senha_vis, dt_nasc_vis, uf_vis, rg_vis, sexo_vis, complemento_vis, cpf_vis, nivel_vis)VALUES('$nome_vis', '$cep_vis', '$rua_vis', '$bairro_vis', '$numero_vis', '$telefone_vis', '$cidade_vis', '$email_vis', '$senha_vis', '$dt_nasc_vis', '$uf_vis', '$rg_vis', '$sexo_vis', '$complemento_vis', '$cpf_vis','1')");
			echo "<script>alert('Cadastro realizado com sucesso')</script>";
			}else{
			$msg="Desculpe, mas já existe um usuário cadastrado com este e-mail em nosso sistema!";
			}
			if(isset($insert)){
				echo "<script>alert('Cadastro realizado com sucesso')</script>";
				 header ("location:visita.php");
			}else{
				if(empty($msg)){
				$msg="Ops! Houve um erro em nosso sistema, contate o administrador!";
				}
			}
			
				}
			}
			//E-mail inválido
			else{
				echo "<script>alert('E-mail inválido')</script>";
					echo "<script>history.go(-1)</script>";
			}
		}
}

?>