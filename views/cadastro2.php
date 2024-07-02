<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Cadastro - Tártaro</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="includes/jquery-ui.css" type="text/css">
	<script type="text/javascript" src="includes/jquery-1.11.1.min.js"></script>
     <script src="includes/jquery.maskedinput.js" type="text/javascript"></script>
	
	<script language="javascript">
    function mascara_data(dt_nasc_vis){ 
              var mydata = ''; 
              mydata = mydata + dt_nasc_vis; 
              if (mydata.length == 2){ 
                  mydata = mydata + '/'; 
                  document.forms[1].dt_nasc_vis.value = mydata; 
              } 
              if (mydata.length == 5){ 
                  mydata = mydata + '/'; 
                  document.forms[11].dt_nasc_vis.value = mydata; 
              } 
              if (mydata.length == 10){ 
                  verifica_data(); 
              } 
          } 
           
          function verifica_data () { 

            dia = (document.forms[1].dt_nasc_vis.value.substring(0,2)); 
            mes = (document.forms[1].dt_nasc_vis.value.substring(3,5)); 
            ano = (document.forms[1].dt_nasc_vis.value.substring(6,10)); 

            situacao = ""; 
            // verifica o dia valido para cada mes 
            if ((dia < 01)||(dia < 01 || dia > 30) && (  mes == 04 || mes == 06 || mes == 09 || mes == 11 ) || dia > 31) { 
                situacao = "falsa"; 
            } 

            // verifica se o mes e valido 
            if (mes < 01 || mes > 12 ) { 
                situacao = "falsa"; 
			
            } 
						
	hoje = new Date();
	anoy = hoje.getFullYear()-18;
	anox = hoje.getFullYear()-120;
	
				  if (ano < anox || ano > anoy) { 
                alert("Ano inválido! \n*obs é necessário ter 18 anos para efetuar o cadastro"); 
                document.forms[1].dt_nasc_vis.focus(); 
				$(".datamask").val(""); 
            } 

            // verifica se e ano bissexto 
            if (mes == 2 && ( dia < 01 || dia > 29 || ( dia > 28 && (parseInt(ano / 4) != ano / 4)))) { 
                situacao = "falsa"; 
            } 
    
         
		
	
            if (situacao == "falsa") { 
                alert("Data inválida!"); 
                document.forms[1].dt_nasc_vis.focus(); 
				$(".datamask").val(""); 
            } 
          } 

function mascara(o,f){  
v_obj=o  
v_fun=f  
setTimeout("execmascara()",1)  
}  
  
function execmascara(){  
v_obj.value=v_fun(v_obj.value)  
}  
  
  
function soLetras(v){  
return v.replace(/\d/g,"") //Remove tudo o que não é Letra  
}  
  
function soLetrasMA(v){  
v=v.toUpperCase() //Maiúsculas  
return v.replace(/\d/g,"") //Remove tudo o que não é Letra ->maiusculas  
}  
  
function soLetrasMI(v){  
v=v.toLowerCase() //Minusculas  
return v.replace(/\d/g,"") //Remove tudo o que não é Letra ->minusculas  
}  
  
function soNumeros(v){  
return v.replace(/\D/g,"") //Remove tudo o que não é dígito  
}  
</script>


		<script>
jQuery(function($){
   $(".datamask").mask("99/99/9999");
   $(".cpfmask").mask("999.999.999-99");
   $(".cepmask").mask("99999-999");
   $(".telmask").mask("(99)9999-9999");
   $(".rgmask").mask("99.999.999-*");
});

</script>


</head>
<body>
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
				<li>
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
		  <form action="visita.php" method="post" style="float:right;">		   
					<input type="submit" value="Voltar" class="button1" />	
					</form>
		</div>
		     <p style="float:right;">
			 <div class="msgn" style="float:right;<?php echo $display;?>">
				<?php echo $msg ?>
				</div> </p>
				
			<h1>Cadastro de Administrador</h1>
			<form action="cadastro2.php?acao=cadastrar2" method="post">
			 <table style="width: 500px; line-height:30px;" border="0">

<tbody>

             
    <tr>

      <td width="69">Nome:</td>

      <td width="400"><input id="nome_vis" maxlength="35" name="nome_vis" size="50" type="text" onkeypress="mascara(this,soLetras)" style="text-transform:capitalize;"/>

       <span class="style1" style="color:red">*</span></td>

    </tr>
    <tr>

      <td width="69">RG:</td>

      <td width="400"><input class="rgmask" id="rg_vis" maxlength="11" name="rg_vis" size="20" type="text" />

       <span class="style1" style="color:red">*</span></td>

    </tr>
      <td width="69">CPF:</td>

      <td width="400"><input class="cpfmask" id="cpf_vis" maxlength="11" name="cpf_vis" size="20" type="text" />

        <span class="style1" style="color:red">*</span></td>

    </tr>
	
     </tr>
      <td width="69">Dt Nascimento:</td>

      <td width="400"><input type="text" name="dt_nasc_vis" id="dt_nasc_vis" OnKeyUp="mascara_data(this.value)" class="datamask" maxlength="10"/>

       <span class="style1" style="color:red">*</span></td>

    </tr>
	 <tr>

      <td>Sexo :</td>

      <td><input type="radio" name="sexo_vis" id="sexo_vis" value="Masculino" checked>Masculino  <input type="radio" name="sexo_vis" id="sexo_vis" value="Feminino">Feminino
       <span class="style1" style="color:red">*</span></td>

    </tr>
	
	
    <tr>

      <td>Telefone:</td>

      <td>
        <input class="telmask"id="telefone_vis" name="telefone_vis" maxlength="14" type="text" />

        <span class="style3"></span><br> </td>

    </tr>
	 <tr>

      <td>CEP:</td>

      <td><input class="cepmask" id="cep_vis" maxlength="9" name="cep_vis" size="9" type="text" />
     <span class="style1" style="color:red">*</span></td>

    </tr>

    <tr>

      <td>Endereço:</td>

      <td><input style="text-transform:capitalize;" id="rua_vis" maxlength="35" name="rua_vis" size="40" type="text" onkeypress="mascara(this,soLetras)"/> nº<input id="numero_vis" maxlength="8" name="numero_vis" size="5"  style="text-transform:capitalize;" type="text" />
      <span class="style1" style="color:red">*</span></td>

    </tr>

    <tr>

      <td>Cidade:</td>

      <td><input style="text-transform:capitalize;" id="cidade_vis" maxlength="35" name="cidade_vis" type="text" onkeypress="mascara(this,soLetras)"/> UF :<input id="uf_vis" maxlength="2" name="uf_vis" size="3" type="text" onkeypress="mascara(this,soLetras)"/>

      <span class="style1" style="color:red">*</span></td>

    </tr>


    <tr>

      <td>Bairro:</td>

      <td><input  style="text-transform:capitalize;" id="bairro_vis" maxlength="35" name="bairro_vis" type="text" onkeypress="mascara(this,soLetras)" />

        <span class="style1" style="color:red">*</span></td>

    </tr>

    <tr>

      <td>Complemento:</td>

      <td><input id="complemento_vis" size="50" name="complemento_vis" type="text" />

    </tr>

    <tr>

      <td>Email:</td>

      <td><input id="email_vis" maxlength="35" name="email_vis" size="40" type="text" />

      <span class="style1" style="color:red">*</span></td>

    </tr>

    <tr>

      <td>Senha:</td>

      <td><input id="senha_vis" maxlength="50" name="senha_vis" type="password" />

          <span class="style1" style="color:red">*</span></td>

    </tr>
	
	   <tr>

      <td>Confirmar Senha :</td>

      <td><input id="senha_conf" maxlength="50" name="senha_conf" type="password" />

          <span class="style1" style="color:red">*</span></td>

    </tr>

    <tr>

      <td colspan="2"><p>
<br>


        <input id="cadastrar" name="cadastrar" type="submit" value="Cadastrar" class="buttonx" /> 

          <input id="limpar" name="limpar" type="reset" value="Limpar" class="buttonx" />

          <br>
         <span class="style1" style="float:right; color:red;">* Campos com * são obrigatórios!    </span>





         </p>

 </td>

    </tr>


  </tbody></table>
</form>		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a>
			</div>
			<p>
				© 2014 Tartaro. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>