<?php
	class Login{
		public function logar($email_vis, $senha_vis){
			$buscar=mysql_query("SELECT * FROM visitas WHERE email_vis='$email_vis' AND senha_vis='$senha_vis'");
			if(mysql_num_rows($buscar) == 1){
			$dados=mysql_fetch_array($buscar);
					$_SESSION["nome_vis"]=$dados["nome_vis"];
					$_SESSION["email_vis"]=$dados["email_vis"];
					$_SESSION["senha_vis"]=$dados["senha_vis"];
					$_SESSION["id_vis"]=$dados["id_vis"];
					setcookie("logado",1);

}				
				else{
					$msg="EMAIL OU SENHA INCORRETO";
				return $msg;
				}
				}
}
	?>