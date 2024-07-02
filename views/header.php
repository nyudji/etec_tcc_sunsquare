<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $page; ?></title>
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
	function data(data_calv, horario_calv){
		var data_calv = $('#data_calv').val();
		var horario_calv = $('#horario_calv').val();
		$.post("data.php",{postdata_calv:data_calv, posthorario_calv:horario_calv}, function(oi){
			 $('#result').html(oi);
			 
		
		
});
}

	function infovis(id_vis){
		$.post("visitante.php",{id_vis:id_vis}, function(retorno){
		dados = retorno.split("/");
		$("#nomevis").val(dados[0]);
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
   $(".cpfmask").mask("999.999.999-99");
   });
	</script>
		<script type="text/javascript">
$(document).ready(function(){

   $(".btn-apagar").click( function(event) {
   	
      var apagar = confirm('Deseja realmente reprovar essa visita?');
      if (apagar){
	// aqui vai a instrução para apagar registro			
      }else{
         event.preventDefault();
      }	
   });
      $(".btn-aprovar").click( function(event) {
   	
      var apagar = confirm('Deseja realmente aprovar essa visita?');
      if (apagar){
	// aqui vai a instrução para apagar registro			
      }else{
         event.preventDefault();
      }	
   });
      $(".btn-selecionar").click( function(event) {
	
	  var selecionar = confirm('Tem certeza que deseja selecionar esse detento ?');
      if (selecionar){
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

  <script type="text/javascript">
  $(document).ready(function(){
  $(".infovisitante").hide();
  $(".infodetento").hide();

  
 
  $('.mostrarinfo ').on( "click", function() {
$(".infovisitante").fadeIn().focus();

});
  

	
	 $("#fechar").click(function() {
   $(".infovisitante").hide();
    });

 
  $('.mostrardet ').on( "click", function() {

$(".infodetento").fadeIn().focus();

});
  

	
	$("#fechardet").click(function() {
   $(".infodetento").hide();
    });
});
  </script>

</head>
<body>