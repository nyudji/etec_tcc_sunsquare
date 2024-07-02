<?php
	class Consulta{
		public function consultar($nome, $cpf, $nomedr, $data, $horario){

			//Inserção no banco de dados
			$validarcons=mysql_query("SELECT * FROM consultas WHERE data='$data' AND horario='$horario'");
			$contar=mysql_num_rows($validarcons);
			if($contar == 0){
			$insert=mysql_query("INSERT INTO consultas(nome, cpf, nomedr, data, horario, status)VALUES('$nome','$cpf','$nomedr','$data', '$horario', 0)");}else{
			$msg="Desculpe, mas já existe uma consulta nesse dia e horário!";
			}
			if(isset($insert)){
				$msg="Consulta agendada com sucesso!";
			}else{
				if(empty($msg)){
				$msg="Ops! Houve um erro em nosso sistema, contate o administrador!";
				}
			}
			
			//Retorno para o usuário
			echo $msg;
		}
	
	}

?>