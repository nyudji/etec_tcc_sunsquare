<?php

	session_start();
	
	require_once "../includes/conexao.php"; /* Conecta com o BD */

	$user=$_POST['txtUsuario'];/*Recebe o usuario*/
	$pswd=$_POST['txtSenha'];/*Recebe a Senha*/

	//$sql_login_fun=mysql_query("SELECT * FROM funcionario WHERE login_fun=\"".$user."\" AND senha_fun=\"".$pswd."\"");
	$sql_login_fun=mysql_query("SELECT * FROM funcionario WHERE login_fun='$user' AND senha_fun='$pswd'");
	$sql_login_cli=mysql_query("SELECT * FROM cliente WHERE login_cli='$user' AND senha_cli='$pswd'");
	
	
   if($login=mysql_fetch_array($sql_login_fun)){
    $_SESSION['logado']=true;
	$_SESSION['erro']=0;
	$_SESSION['nomeLogin']=$login['login_fun'];
	$_SESSION['nome']=$login['nome_fun'];
	header("Location:../Home.php");
	}
	elseif($login=mysql_fetch_array($sql_login_cli)){
    $_SESSION['logado']=true;
	$_SESSION['erro']=0;
	$_SESSION['nomeLogin']=$login['login_cli'];
	$_SESSION['nome']=$login['nome_cli'];
	header("Location:../Home.php");
	}
	else {
	$_SESSION['erro']=1;
	$_SESSION['logado']=false;
	header("Location:login.php"); // REDIRECIONA PARA A PG DE LOGIN
	}
	?>
	
