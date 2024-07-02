<?php    
	class DB{
	//Conexão com o Banco de Dados
		public function conectar(){
			$host="localhost";
			$user="root";
			$pass="";
			$dbname="sunsquare";
			
			$conexao=@mysql_connect($host,$user,$pass);
			$selectdb=@mysql_select_db($dbname);
			
			
			return $conexao;
		}
	
	
	}




?>