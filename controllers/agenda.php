<?php
if($startaction == 1 && $acao == "agendar"){

	        $data_calv=$_POST["data_calv"];
			$horario_calv=$_POST["horario_calv"];
			$penit_calv=$_POST["penit_calv"];
			$id_vis=$_SESSION["id_vis"];
			$acomp_vis=$_POST["acomp_vis"];
			$acomp2_vis=$_POST["acomp2_vis"];
			$acomp3_vis=$_POST["acomp3_vis"];
			$acomp_rg=$_POST["acomp_rg"];
			$acomp2_rg=$_POST["acomp2_rg"];
			$acomp3_rg=$_POST["acomp3_rg"];
		
	
		if(!empty($acomp_vis)  && empty($acomp_rg)){
		$msg="Digite o RG do acompanhante";
		}
			
		else if(!isset($_POST["id_det"])){
		$msg="*Selecione um detento";
		
		}
			
			else if(empty($data_calv)){

			$msg="*Escolha a data da visita";
	
		}
		else{
        $menossem = date('Ymd',mktime(0,0,0,date('m') ,date('d')-7,date('Y')));		
		 $daquiumasem		 = date('Ymd',mktime(0,0,0,date('m') ,date('d')+7,date('Y')));
		    $data_atual = date("Ymd");
			$id_det=$_POST["id_det"];
			$count3=mysql_query("SELECT * FROM calendariov WHERE id_det='$id_det' AND concat(substring(data_calv,7,4),substring(data_calv,4,2),substring(data_calv,1,2)) between '$menossem' and '$data_atual'");
		    if(mysql_num_rows($count3) == 0 ){
			$count2=mysql_query("SELECT *,concat(substring(data_calv,7,4),substring(data_calv,4,2),substring(data_calv,1,2)) as data  from calendariov WHERE concat(substring(data_calv,7,4),substring(data_calv,4,2),substring(data_calv,1,2)) >= '$data_atual' AND id_det='$id_det'");
		    if(mysql_num_rows($count2) == 0 ){
			$count=mysql_query("SELECT * FROM calendariov WHERE id_det='$id_det' AND concat(substring(data_calv,7,4),substring(data_calv,4,2),substring(data_calv,1,2)) between '$data_atual' and '$daquiumasem'");
		    if(mysql_num_rows($count) == 0 ){
		    $buscar=mysql_query("SELECT * FROM calendariov WHERE data_calv='$data_calv' AND horario_calv='$horario_calv'");
			if(mysql_num_rows($buscar) < 20){
			$insert=mysql_query("INSERT INTO calendariov ( data_calv, horario_calv, penit_calv, id_vis, id_det,acomp_vis,acomp2_vis,acomp3_vis,acomp_rg,acomp2_rg,acomp3_rg,status)VALUES('$data_calv', '$horario_calv', '$penit_calv', '$id_vis', '$id_det', '$acomp_vis', '$acomp2_vis', '$acomp3_vis', '$acomp_rg', '$acomp2_rg', '$acomp3_rg','2')");
			$ids = mysql_insert_id();
			
			}else{
			$msg="Desculpe mas a data/horario selecionada está lotada. Por favor selecionar outra data/hora.";
			}}else{
			$msg="Desculpe, cada detento tem direito a 1 visita por semana";
			}
			}
			else{
			$msg="Desculpe mas você já marcou uma visita para esse detento";
	
}}
else{
			$msg="Desculpe, cada detento tem direito a 1 visita por semana";
	
}	
			
		 if(isset($insert)){
$id_vis=($_SESSION["id_vis"]);
$buscaremail=mysql_query("SELECT * FROM visitas WHERE id_vis='$id_vis'");
$dados=mysql_fetch_array($buscaremail);
$emaildestinatario = $dados["email_vis"];
$nomedestinatario = $dados["nome_vis"];
require_once("phpmailer/class.phpmailer.php");		 

$mail = new PHPMailer();

$mail->IsSMTP();

$mail->SMTPAuth = true; 

$mail->Host = 'smtp.gmail.com';

$mail->Username = 'tartarogroup@gmail.com'; 

$mail->Password = 'sunsquare';

$mail->SMTPSecure = "tls";

$mail->Port = 587;

$mail->From = 'tartarogroup@gmail.com';

$mail->FromName = 'Penitenciária Tremembé';

$mail->AddAddress($emaildestinatario, 'Penitenciária Tremembé');

$mail->IsHTML(true);

$mail->CharSet  = 'utf-8';

$mail->Subject  = "Agendamento de visita Protocolo:".$ids; 

$mail->Body = "".$nomedestinatario.", <br> O agendamento de visita foi agendado com sucesso, seu <b>PROTOCOLO é : ".$ids."</b>. <br><b> Data: ".$data_calv."<br>Horário: ".$horario_calv."<br>Local: ".$penit_calv."</b><br>Aguarde nossa aprovação que chegará em seu e-mail.<br><br><br>Muito Obrigado, Penitenciária Tremembé.";

$mail->AltBody = "";

if(!$mail->Send()) {
					echo "<script>alert('Sistema encontrou um erro ao enviar o e-mail, por favor entre em contato no email tartarogroup@gmail.com!')</script>";

}else{
echo "<script>alert('Foi enviado um e-mail de agendamento com sucesso!')</script>";
				echo "<script>history.go(-1)</script>";
	 }
            
        
if (!empty($error)) {echo $error;}
				echo "Agendamento realizado com sucesso! Seu protocolo é : $ids . Anote esse protocolo e aguarde a respota da aprovação via e-mail";
								echo "<script>history.go(-1)</script>";
			}
		}
}

?>