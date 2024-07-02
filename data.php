
<?php
include("includes/header.php");
    $data_calv=$_POST["postdata_calv"];
	$horario_calv=$_POST["posthorario_calv"];
	$sqldata=mysql_query("SELECT * FROM calendariov WHERE data_calv='$data_calv' and horario_calv='$horario_calv' AND(status='1' or status='2')");
	if(mysql_num_rows($sqldata) < 20){
	$res=mysql_num_rows($sqldata);
	$resultado=$res - "20";
	echo "<p><a style='color:green;'>Data/horário disponível</a> . <a style='font-size:13px;'> $resultado visitas disponíveis</a></p>";
	}
else{
	echo "<p><a style='color:red;'>Desculpe data lotado , favor escolher outra data/horário</a></p>";
	}

?>