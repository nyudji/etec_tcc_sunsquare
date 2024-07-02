<?php
	class Cadastro{
		public function cadastrar($nome_vis, $cep_vis, $rua_vis, $bairro_vis, $numero_vis, $telefone_vis, $cidade_vis, $email_vis, $senha_vis, $dt_nasc_vis, $uf_vis, $rg_vis, $sexo_vis, $complemento_vis, $cpf_vis){

			//Inserção no banco de dados
			$validaremail=mysql_query("SELECT * FROM visitas WHERE email_vis='$email_vis'");
			$contar=mysql_num_rows($validaremail);
			if($contar == 0){
			$insert=mysql_query("INSERT INTO visitas (nome_vis, cep_vis, rua_vis, bairro_vis, numero_vis, telefone_vis, cidade_vis, email_vis, senha_vis, dt_nasc_vis, uf_vis, rg_vis, sexo_vis, complemento_vis, cpf_vis, nivel_vis)VALUES('$nome_vis', '$cep_vis', '$rua_vis', '$bairro_vis', '$numero_vis', '$telefone_vis', '$cidade_vis', '$email_vis', '$senha_vis', '$dt_nasc_vis', '$uf_vis', '$rg_vis', '$sexo_vis', '$complemento_vis', '$cpf_vis','1')");}else{
			$msg="Desculpe, mas já existe um usuário cadastrado com este e-mail em nosso sistema!";
			}
			if(isset($insert)){
				$msg="Cadastro realizado com sucesso!";
			}else{
				if(empty($msg)){
				$msg="Ops! Houve um erro em nosso sistema, contate o administrador!";
				}
			}
			
		}
	
	}

?>