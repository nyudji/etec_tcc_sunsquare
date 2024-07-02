<?php
if($startaction == 1 && $acao == "reprovar"){
		
			if(isset($_GET["id_calv"])){
				$id_calv=$_GET["id_calv"];
				$query=mysql_query("UPDATE calendariov SET status='3' WHERE id_calv='$id_calv'");
			    $buscara=mysql_query("SELECT * FROM calendariov  WHERE id_calv='$id_calv'");
				$info=mysql_fetch_array($buscara);
				$data_calv = $info["data_calv"];
				$horario_calv = $info["horario_calv"];
				$penit_calv = $info["penit_calv"];
				$id_vis = $info["id_vis"];
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

$mail->Subject  = "Agendamento de visita 'Reprovado'"; 

$mail->Body = "".$nomedestinatario.", <br> O agendamento de visita foi <a style='color:red'<b>REPROVADO</b></a>, seu <b>PROTOCOLO é : ".$id_calv."</b>.<br>Por favor entre em contato : tartarogroup@gmail.com para saber qual o motivo da sua reprovação no agendamento de vista !!<br><br><br>Muito Obrigado, Penitenciária Tremembé.";

$mail->AltBody = "";

if(!$mail->Send()) {
					echo "<script>alert('Erro ao enviar mensagem via e-mail , por favor enviar manualmente')</script>";

}else{
echo "<script>alert('E-mail de feedback enviado com sucesso!')</script>";
	 }
		}
}
?>