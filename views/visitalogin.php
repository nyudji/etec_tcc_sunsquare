<?php
$page="Tártaro - Visitas";
include("views/header.php");

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
		<div class="main">
			<h1>Visitas</h1>
			<ul class="news">
				<li>

<p style="font-size:15px;"><br>O requerimento deverá estar instruído com um dos seguintes documentos:
<br><br>Cédula de Identidade ou documento equivalente;
<br>Cadastro de Pessoa Física (CPF) para maiores de 18 anos;
<br>Comprovante de residência;
<br>Certidão de antecedentes criminais da Justiça Estadual e Federal do domicílio.
<br>Certidão de Casamento (cônjuge);
<br>Declaração de Coabitação ou União Estável com assinatura de duas testemunhas, com firma reconhecida;
<br>Autorização Judicial para menor de 18 anos que não seja casado.
<br><br>O visitante cadastrado e autorizado a visitar o preso ingressará na Penitenciária Federal se estiver de acordo as seguintes regras:
<br>-Respeitar as normas contidas na Portaria do DEPEN nº 122, de 19 de setembro de 2007, que disciplina o procedimento de visitas aos presos nos estabelecimentos penais federais e demais normas penitenciárias em vigor e aplicáveis à visitação e as normas previstas na Portaria GM nº 1.190, de 19 de junho de 2008, que regulamenta a visita íntima no interior das penitenciárias federais e demais normas aplicáveis à visita íntima.
<br>-Observar os dias de visita e o horário fixado para sua entrada e saída.
<br>-Apresentar-se sóbrio, asseado e adequadamente vestido. A vestimenta deve ser de cor clara, saia ou vestido abaixo do joelho ou calça de malha o similar, desde que acompanhadas de camisetas ou blusas de comprimento adequado, bem como a roupa íntima não pode conter nenhum detalhe em metal ou confeccionado em plástico resistente;
<br>-Substituir o calçado dos visitantes por chinelos fornecidos pela Penitenciária Federal;
<br>-Substituir os absorventes e fraldas descartáveis fornecidos pela Penitenciária Federal;
<br>-Apresentar a documentação exigida e prestar informações fidedignas para os trâmites de visita;
<br>-Abster-se de introduzir ou retirar objetos, elementos ou substâncias não autorizados expressamente;
<br>-Durante sua permanência na Penitenciária Federal as jóias, bijuterias, objetos do gênero e os pertences dos visitantes ficarão guardados no armário com chave, sendo devolvidos ao final da visita;
<br>-Não portar aparelho celular (assemelhados e acessórios como chip, bateria e carregadores);
<br>-Respeitar a proibição de fumar no interior da Penitenciária;
<br>-Guardar correção no trato com o pessoal penitenciário e com terceiros;
<br>-Não danificar as instalações e o mobiliário da Penitenciária e qualquer elemento disponível para a visita;
<br>-Acatar as orientações e determinações dos funcionários da Penitenciária para a visita;
<br>-Manter a higiene do setor destinado à visita;
<br>-Respeitar a segurança da Penitenciária e não realizar atos que possam acarretar indisciplina ou fuga;
<br>-Adotar comportamento de forma que não ofenda a ordem ou a moral pública.
<br>-No caso de descumprimento de qualquer dos deveres aqui estabelecidos, a visita poderá ser interrompida e o visitante convidado a retirar-se do estabelecimento, podendo, ainda, o Diretor da Penitenciária, adverti-lo ou suspendê-lo temporariamente ou definitivamente do direito de visita, de acordo com a gravidade da falta praticada, as circunstâncias de tempo, modo, lugar e a sua reiteração. 
	</p>			</li>
			</ul>
		</div>
		<div id="login">
		<div class="sidebar">
			<h1 style="margin-left:30px;">Login</h1>
			<ul class="posts">
			<form action="visita.php?acao=logar" method="post" class="login-form"  style="margin-left:30px;">
	 <div class="msgn" style="float:right;">
				<?php echo $msg ?>
				</div> 
				<br>
			
	<!--HEADER-->

    <div class="header">
	<!--DESCRIPTION--><span>Para o agendamento de visita efetue o login.</span><!--END DESCRIPTION-->
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<!--USERNAME--><input name="email_vis" type="text" id="email_vis" class="input username" placeholder="Email"/><!--END USERNAME-->
    <!--PASSWORD--><input name="senha_vis" type="password" id="senha_vis" class="input password" placeholder="Senha" /><!--END PASSWORD-->
    </div>

	
	
    <!--END CONTENT-->

    <!--FOOTER-->
    <div class="footer"">
    <!--LOGIN BUTTON-->    <input type="submit" value="Login" class="button" /><!--END LOGIN BUTTON-->
	<!--REGISTER BUTTON--><a href="cadastro.php" title="Cadastre-se" class="register">Registre-se &raquo;</a><!--END REGISTER BUTTON-->

    </div>
    <!--END FOOTER-->

</form>
			</ul>
		</div>
	</div>
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