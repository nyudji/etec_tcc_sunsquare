<?php
if($startaction == 1 && $acao == "consultar"){
			$nome=$_POST["nome"];
			$cpf=$_POST["cpf"];
			$nomedr=$_POST["nomedr"];
			$data=$_POST["data"];
			$horario=$_POST["horario"];
		
		if(empty($nome) || empty($cpf) || empty($nomedr)  || empty($data)|| empty($horario)){
			$msg="Preencha todos os campos!";
		}
		//Todos os campos preenchidos
		else{
			//Email válido
			
				//Senha inválida
				if(strlen($data) < 8){
					$msg="coloque a data corretamente";
				}
				//Senha válida
				else{
					//Executa a classe de cadastro
					$conectar=new Consulta;
					echo $msg;
					$conectar=$conectar->consultar($nome, $cpf, $nomedr, $data, $horario); 

				}
			}
			
		}


?>