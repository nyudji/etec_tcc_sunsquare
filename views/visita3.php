<?php
$page="Tártaro - Visitas";
include("header.php");

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
	<div id="contents2">
		<div class="features">
		 *Status <br><a style="color:green";>1 - Realizado</a>   /  <a style="color:#CC9900;">2 - Aguardando aprovação</a>    /    <a style="color:red";>3 - Reprovado.</a>
				<div id="logout"  style="float:right;">
				
				    <form action="visita.php" method="post" style="float:right;">		   
					<input type="submit" value="Voltar" class="button1" />	
					</form>
				</div>
											<div style="margin-left:10%;position:absolute; border:1px solid; border-radius:5px; background-color:#F0F0F0; padding:30px;opacity:0.98;" class="infodetento">
				<?php
				$id_det=$_GET["id_det"];
				$query2=mysql_query("SELECT * FROM detento WHERE id_det='$id_det'");
				$det=mysql_fetch_array($query2);
				$nome_det=$det["nome_det"];
				$sexo_det=$det["sexo_det"];
				$dt_nasc_det=$det["dt_nasc_det"];
				$rg_det=$det["rg_det"];
			    $cpf=$det["cpf_det"];
				$rua_det=$det["rua_det"];
				$numero_det=$det["numero_det"];
				$cep_det=$det["cep_det"];
				$cidade_det=$det["cidade_det"];
				$uf_det=$det["uf_det"];
				$pena_det=$det["pena_det"];
			    $acusação_det=$det["acusação_det"];
				$entrada_det=$det["entrada_det"];
				$saida_det=$det["saida_det"];
				$cela_det=$det["cela_det"];
				$bloco_det=$det["bloco_det"];
				$pai_det=$det["pai_det"];
				$mae_det=$det["mae_det"];
				$telefone_det=$det["telefone_det"];
   $cpf_det = substr($cpf , 0, 3).".".substr($cpf , 3, 3).".".substr($cpf , 6, 3)."-".substr($cpf , 9, 2);

			
				

?><button style="float:right;" type="submit" class="buttonb" id="fechardet">Fechar</button>
				<h1>Dados do Detento</h1>
                    <p>Nome:<input size="30" type="text" value="<?php echo $nome_det;?>"  style="margin-right:20px;"readonly >Sexo:<input size="10"  type="text"  style="margin-right:20px;" value="<?php echo $sexo_det;?>" readonly>Dt Nascimento:<input size="9" type="text" value="<?php echo $dt_nasc_det;?>" readonly></p>
					<p>RG:<input size="12" type="text" value="<?php echo $rg_det;?>"  style="margin-right:20px;"readonly>CPF:<input size="13" type="text" style="margin-right:20px;" value="<?php echo $cpf_det;?>"readonly>Telefone:<input size="12" type="text" value="<?php echo $telefone_det;?>"readonly></p>
					<p>Endereço:<input size="30" type="text" value="<?php echo $rua_det;?>"  style="margin-right:20px;" readonly> nº<input size="5" type="text" value="<?php echo $numero_det;?>"readonly></p>
					<p>CEP:<input size="9" type="text" value="<?php echo $cep_det;?>"  style="margin-right:20px;"readonly>  Cidade:<input size="20" type="text" style="margin-right:20px;" value="<?php echo $cidade_det;?>" readonly> UF:<input size="2" type="text" value="<?php echo $uf_det;?>" readonly></p>
					<p>Pena:<input size="30" type="text" value="<?php echo $pena_det;?>"  style="margin-right:20px;"readonly >Acusação:<input size="30" type="text" value="<?php echo $acusação_det;?>" readonly></p>
					<p>Entrada:<input size="10" type="text" value="<?php echo $entrada_det;?>"  style="margin-right:20px;"readonly >Saida:<input size="10" type="text"  style="margin-right:20px;" value="<?php echo $saida_det;?>" readonly>Cela:<input size="9" type="text" value="<?php echo $cela_det;?>" readonly>Bloco:<input size="4" type="text" value="<?php echo $bloco_det;?>" readonly></p>
					<p>Pai:<input size="25" type="text" value="<?php if(empty($pai_det)){echo "Pai não registrado";}else{echo $pai_det;}?>"  style="margin-right:20px;"readonly>  Mãe:<input size="25" type="text" value="<?php echo $mae_det;?>" readonly></p>	
				

		<div  style="float:right;margin-right:20px; color:red; font-size:15px;<?php echo $display ?>;">
				<?php echo $msg2 ?>
				</div>
				</div>
							<div style="margin-left:10%;position:absolute; border:1px solid; border-radius:5px; background-color:#F0F0F0; padding:30px;opacity:0.98;" class="infovisitante">
				<?php
				$id_vis=$_GET["id_vis"];
				$query=mysql_query("SELECT * FROM visitas WHERE id_vis='$id_vis'");
				$vis=mysql_fetch_array($query);
				$nome_vis=$vis["nome_vis"];
				$sexo_vis=$vis["sexo_vis"];
				$rg_vis=$vis["rg_vis"];
				$cpf=$vis["cpf_vis"];
				$rua_vis=$vis["rua_vis"];
				$numero_vis=$vis["numero_vis"];
				$cep_vis=$vis["cep_vis"];
				$telefone_vis=$vis["telefone_vis"];
				   $cpf_vis = substr($cpf , 0, 3).".".substr($cpf , 3, 3).".".substr($cpf , 6, 3)."-".substr($cpf , 9, 2);
			
				

?><button style="float:right;" type="submit" class="buttonb" id="fechar">Fechar</button>
				<h1>Dados do Visitante</h1>
                    <p>Nome:<input size="30" type="text" value="<?php echo $nome_vis;?>"  style="margin-right:20px;"readonly >Sexo:<input size="10" type="text" value="<?php echo $sexo_vis;?>" readonly></p>
					<p>RG:<input size="12" type="text" value="<?php echo $rg_vis;?>"  style="margin-right:20px;"readonly>CPF:<input size="13" type="text" value="<?php echo $cpf_vis;?>"readonly></p>
					<p>Endereço:<input size="30" type="text" value="<?php echo $rua_vis;?>"  style="margin-right:20px;" readonly> nº<input size="5" type="text" value="<?php echo $numero_vis;?>"readonly></p>
					<p>CEP:<input size="9" type="text" value="<?php echo $cep_vis;?>"  style="margin-right:20px;"readonly>  Telefone:<input size="30" type="text" value="<?php echo $telefone_vis;?>" readonly></p>
						
				

		<div  style="float:right;margin-right:20px; color:red; font-size:15px;<?php echo $display ?>;">
				<?php echo $msg2 ?>
				</div>
				</div>
		<div class="msgn" style="float:left; <?php echo $display ?>;">
				<?php echo $msg ?>
				</div>
				<br><br><br><br>

			<p style="font-size:10px;color:red;float:right;">*para filtrar por mês , clique na caixa para digitar a data e clique com a seta do teclado do para o lado até  antes do "/" mês</p>
					<form action="visita3.php?acao=buscadv" method="post" style="float:left">		
				<p>Buscar:  <input type="text" id="buscar" name="buscar" value=""> <input type="radio" name="busca" value="visita" checked>Visita<input type="radio" name="busca" value="detento">Detento <input type="radio" name="busca" value="penitenciaria">Penitenciária <input type="submit" value="" class="btn2"/></p>
				</form><form action="visita3.php?acao=buscadt" method="post" style="float:right">		
				<p>Data:  <input class="datamask" type="text" name="buscar" value="" size="6"><input type="submit" value="" class="btn3"/></p>

				</form>
				
				
				<table width="110%" border="0" style="margin-top:10px; font-size:15px;float:lef;">
				
            	<tr>
								  <th style="background-color:#D8D8D8">Protocolo</th>
				  <th style="padding:1px;background-color:#D8D8D8">Status</th>
                	<th style="padding:2px;background-color:#D8D8D8">Nome do detento</th>
                    <th style="padding:2px;background-color:#D8D8D8">Data da visita</th>
                    <th style="padding:2px;background-color:#D8D8D8">Horário</th>
                    <th style="padding:2px;background-color:#D8D8D8">Penitenciária</th>
					<th style="padding:2px;background-color:#D8D8D8">Visitante</th>
					<th style="padding:2px;background-color:#D8D8D8">Acompanhante</th>
					<th style="padding:2px;background-color:#D8D8D8">RG-Acompanhante</th>
					<th style="padding:2px;background-color:#D8D8D8">Gerenciamento</th>
                </tr>
				
                <?php
				$data_atual = date("Ymd");
				$buscarvisitas=mysql_query("SELECT *,concat(substring(data_calv,7,4),substring(data_calv,4,2),substring(data_calv,1,2)) as data  from calendariov WHERE concat(substring(data_calv,7,4),substring(data_calv,4,2),substring(data_calv,1,2)) < '$data_atual' OR status='3' order by data asc");
			
				
					if(isset($buscarvisitass)){
						$buscavisita=$buscarvisitass;
					}
					else{
					 $buscavisita=$buscarvisitas;
					}
					while($busc=mysql_fetch_array($buscavisita)){
					$id_dete=$busc["id_det"];
				    $id_visi=$busc["id_vis"];
					$buscardet=mysql_query("SELECT * FROM detento where id_det = '$id_dete' ");
					if(isset($buscardett)){
					$buscar =($_POST['buscar']);
					$buscadetento=$buscardett=mysql_query("SELECT * FROM detento where id_det = '$id_dete' and nome_det like '%$buscar%' ");
					}
					else{
					 $buscadetento=$buscardet;
					}
					$buscarvis=mysql_query("SELECT * FROM visitas where id_vis = '$id_visi'");
					while($vis=mysql_fetch_array($buscarvis)){
					while($det=mysql_fetch_array($buscadetento)){
					$status=$busc["status"];
				
				?>
                <tr style="text-align:center;"> 
				<td style="background-color:#F0F0F0"><?php echo $busc["id_calv"];?></td>
				<td style="padding:10px;background-color:#F0F0F0"><?php if($status=="1"){$cor="color:green";}else if($status=="2"){$cor="color:#CC9900";}else if($status=="3"){$cor="color:red";}echo"<a style='";echo $cor;echo"'>";echo $busc["status"];echo"</a>";?></td>
                	<td style="width:15%;padding:2px;background-color:#F0F0F0"><?php echo $det["nome_det"];?></td>
                    <td style="padding:2px;background-color:#F0F0F0"><?php echo $busc["data_calv"];?></td>
                    <td style="padding:2px;background-color:#F0F0F0"><?php echo $busc["horario_calv"];?></td>
                    <td style="padding:2px;background-color:#F0F0F0"><?php echo $busc["penit_calv"];?></td>
					<td style="width:15%;padding:2px;background-color:#F0F0F0"><?php echo $vis["nome_vis"];?></td>
					<td style="width:22%;padding:2px;background-color:#F0F0F0"><?php if(empty($busc["acomp_vis"]) && empty($busc["acomp2_vis"]) && empty($busc["acomp3_vis"])){echo "Nenhum Acompanhante" ;}if(!empty($busc["acomp_vis"])){ echo "A1=";echo $busc["acomp_vis"];}if(!empty($busc["acomp2_vis"])){ echo"<br>A2=";echo $busc["acomp2_vis"]; }if(!empty($busc["acomp3_vis"])){echo"<br>A3=";echo $busc["acomp3_vis"];}?></td>
					<td style="width:18%;padding:2px;background-color:#F0F0F0"><?php if(empty($busc["acomp_vis"]) && empty($busc["acomp2_vis"]) && empty($busc["acomp3_vis"])){echo "Nenhum Acompanhante" ;}if(!empty($busc["acomp_vis"])){ echo "RG1=";echo $busc["acomp_rg"]; } if(!empty($busc["acomp2_vis"])){echo"<br>RG2=";echo $busc["acomp2_rg"];}if(!empty($busc["acomp3_vis"])){echo"<br>RG3=";echo $busc["acomp3_rg"];}?></td>
					<td style="width:15%;padding:6px;background-color:#F0F0F0"><?php $id_det=$busc["id_det"];$id_vis=$busc["id_vis"];  echo "<a style='padding:3px;color:#990033 ;solid' href=\"visita3.php?acao=mostrar&amp;id_vis=$id_vis#\" class=\"mostrarinfo\" >Ver-Visitante</a>";echo "<br><a  href=\"visita3.php?acao=mostrardet&amp;id_det=$id_det;#\" class=\"mostrardet\" style='padding:3px;color:#990033  ;solid' data-role=\"button\">Ver-Detento</a>";}?></td>
               
                </tr>
                <?php }} ?>
            </table>
                      <?php if(mysql_num_rows($buscarvisitas) == 0){echo "<p style='text-align:center;color:blue;'>Nenhuma visita cadastrada no sistema</p>";}?>
                      
		
                      
		

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