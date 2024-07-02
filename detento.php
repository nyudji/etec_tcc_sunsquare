
<?php
include("includes/header.php");

          $id_det=$_POST["id_det"];
           $sqlDet=mysql_query("SELECT * FROM detento WHERE id_det='$id_det'");
		   $busca=mysql_fetch_object($sqlDet);
		  $dados=$busca->nome_det."/".$busca->cpf_det."/".$busca->rg_det."/".$busca->sexo_det."/".$busca->rua_det."/".$busca->bairro_det."/".$busca->numero_det."/".$busca->cep_det."/".$busca->uf_det."/".$busca->pena_det."/".$busca->entrada_det."/".$busca->saida_det."/".$busca->auxilio_det."/".$busca->autoridade_det."/".$busca->antecedentes_det."/".$busca->cidade_det."/".$busca->dt_nasc_det."/".$busca->cela_det."/".$busca->bloco_det."/".$busca->acusação_det."/".$busca->telefone_det."/".$busca->id_pen."/".$busca->complemento_det."/".$busca->pai_det."/".$busca->mae_det."/".$busca->id_vis;	   
			$id_pen=$busca->id_pen;	   
			$buscarpeni=mysql_query("SELECT * FROM penitenciaria WHERE id_pen='$id_pen'");
			$busco=mysql_fetch_object($buscarpeni);
			$dado=$busco->nome_pen."/".$busco->rua_pen."/".$busco->bairro_pen."/".$busco->rua_pen."/".$busco->cep_pen."/".$busco->numero_pen."/".$busco->uf_pen."/".$busco->cidade_pen."/".$busco->cnpj_pen."/".$busco->complemento_pen."/".$busco->tel_pen."/".$busco->email_pen;
		  echo $dado;
		  echo $dados;
return $dados;
return $dado;

?>