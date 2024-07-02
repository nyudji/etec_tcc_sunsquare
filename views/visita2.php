<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tártaro - Visitas</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="includes/jquery-ui.css" type="text/css">
	<script type="text/javascript" src="includes/jquery-1.11.1.min.js"></script>
    <script src="includes/jquery.maskedinput.js" type="text/javascript"></script>
	<script src="includes/jquery-ui.js"></script>


		<script type="text/javascript">
		
	function nomedetento(id_det){
		$.post("detento.php",{id_det:id_det}, function(retorno){
		dados = retorno.split("/");
		$(".penit_calv").val(dados[0]);
});
}
function cancelar(){
var exibi="2";
alert(exibi);
};

void function liberar(){
var exibi="";
alert(exibi);
};

jQuery(function($){
   $(".datamask").mask("99/99/9999");
   $(".rgmask").mask("99.999.999-*");
   });
	</script>
		<script type="text/javascript">
$(document).ready(function(){

   $(".btn-apagar").click( function(event) {
   	
      var apagar = confirm('Deseja realmente desmarcar essa visita?');
      if (apagar){
	// aqui vai a instrução para apagar registro			
      }else{
         event.preventDefault();
      }	
   });
    
});


function onlyWeekends(date) {
      var day = date.getDay();
      return [(day == 0 || day == 6 || day == 2 || day == 4), ''];
}


$(function() {
	
    $(".datapicker").datepicker({
	    beforeShowDay: onlyWeekends,
		showOtherMonths: true,
        selectOtherMonths: true,
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		markWeekends: true,
        minDate: +1,
		maxDate: "+3M +10D"
    });	
    });


  </script>
  <script type="text/javascript">
$(document).ready(function(){
	$("#acompanhante > div").hide();
	$("#nao").show();
	$("#mais1").hide();
	$("#mais2").hide();
	$("input[value='nao']").attr({checked: 'checked'});
	$("input[value='nao']").click(function(){
		$( '#'+$( this ).val() ).show('fast');
		$("#sim").hide("fast");
		$("#acompanhante_vis").val('');
		$("#acompanhante_rg").val('');
        
	});
		$("input[value='sim']").click(function(){
		$( '#'+$( this ).val() ).show('fast');
		$("#nao").hide("fast");
        
	});
    $("#maisb").click(function() {
       $("#mais1").show("fast");
    });
	    $("#maisb1").click(function() {
       $("#mais2").show("fast");
    });
	$("#menosb").click(function() {
       $("#mais1").hide("fast");
	   $("#acompanhante2_vis").val('');
	   $("#acompanhante2_rg").val('');
    });
	$("#menosb1").click(function() {
       $("#mais2").hide("fast");
	   $("#acompanhante3_vis").val('');
	   $("#acompanhante2_rg").val('');
    });
});
</script>
  

</head>
<body>

<?php
include("views/header.php");
$id_vis=($_SESSION["id_vis"]);
header('Content-Type: text/html; charset=utf-8');
?>

		
  <div id="header">
		
			<div class="logo">
				<a href="index.php"></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php">Início</a>
				</li>
				<li>
					<a href="sobre.php">Sobre</a>
				</li>
				<li>
					<a href="sap.php">SAP</a>
				</li>
				<li class="active">
					<a href="visita.php">Visita</a>
				</li>
				<li>
					<a href="ouvidoria.php">Ouvidoria</a>
				</li>
				<li>
					<a href="contato.php">Contato</a>
				</li>
				
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="features">
		<div id="logout"  style="float:right;">
		<form action="?acao=logout" method="post" style="float:right;">		   
				<input type="submit" value="Logout" class="button1" />	
					</form>
			 <form action="visita.php" method="post" style="float:right;">		   
				<input type="submit" value="Voltar" class="button1" />	
					</form>
					</div>
				<div class="selecionar">
				<div class="msgn" style="float:right; <?php echo $display ?>;">
				<?php echo $msg ?>
				</div>
					 <form action="visita2.php?acao=buscar" method="post">	
				
				<h1 style="margin:30px;">Buscar detento</h1> 	
		
					 		
				<p style="margin:20px;">Detento:  <input type="text" id="buscar" name="buscar" value=""> <input type="radio" name="busca" value="nome" checked>Nome<input type="radio" name="busca" value="cpf">Cpf <input type="submit" value="Buscar"/></p>
				</form>
		
				 <table width="600px" border="0" style="margin-top:6%">
				 <tr>
                	<th>Nome Detento</th>
                    <th>6 Primeiros Digitos Cpf</th>
					<th>Selecione</th>
					</tr>

             <tr> 
			 <?php if(isset($buscardet)){ while($linha=mysql_fetch_array($buscardet)){
			 $cpf=$linha["cpf_det"];
			  $cpf_det = substr($cpf , 0, 3).".".substr($cpf , 3, 3).".".substr($cpf , 6, 3)."-".substr($cpf , 9, 2);
			 
			 $cpfminimizado = substr($cpf_det, 0,7);
			 $nomedet = $linha["nome_det"]; ?>
			
					<td style="padding:3px;background-color:#F0F0F0; text-align:center;"><?php echo $linha["nome_det"];?></td>
					<td style="padding:3px;background-color:#F0F0F0;text-align:center;"><?php echo $cpfminimizado;?></td>
					<td style="padding:3px;background-color:#F0F0F0; text-align:center;"><?php $id_det=$linha["id_det"];  echo "<a href=\"visita2.php?acao=selecionar&amp;id_det=$id_det\" class='btn-selecionar'>Selecionar</a>";?></td>
                </tr>
					<?php } }?>
				 </table>
			
				</div>
			
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a>
			</div>
			<p>
				© 2014 Tártaro. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>