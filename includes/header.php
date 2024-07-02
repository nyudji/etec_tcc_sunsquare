<?php
//Starts
ob_start();
session_start();

//Globais
include("globais.php");

//Include das classes
include("classes/DB.class.php");
include("classes/Cadastro.class.php");
include("classes/Login.class.php");
include("classes/Agenda.class.php");


//Conexão com o banco de dados
$conectar=new DB;
$conectar=$conectar->conectar();
@mysql_query("SET NAMES 'utf8'");
@mysql_query("SET character_set_connection=utf8");
@mysql_query("SET character_set_client=utf8");
@mysql_query("SET character_set_results=utf8");


//Métodos
include("controllers/mostrardet.php");
include("controllers/mostrar.php");
include("controllers/buscardt2.php");
include("controllers/buscardv2.php");
include("controllers/buscardt.php");
include("controllers/buscardv.php");
include("controllers/buscar.php");
include("controllers/selecionar.php");
include("controllers/agenda.php");
include("controllers/consulta.php");
include("controllers/cadastro.php");
include("controllers/confirma.php");
include("controllers/cadastro2.php");
include("controllers/check.php");
include("controllers/style.php");
include("controllers/exibir.php");
include("controllers/ocultar.php");
include("controllers/login.php");
include("controllers/logout.php");
include("controllers/aprovar.php");
include("controllers/reprovar.php");
include("controllers/excluir.php");?>