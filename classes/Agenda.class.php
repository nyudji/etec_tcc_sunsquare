<?php
	class Agenda{
		public function agendar( $data_calv, $horario_calv, $penit_calv, $id_vis,$id_det ){
			$buscar=mysql_query("SELECT * FROM calendariov WHERE data_calv='$data_calv' AND horario_calv='$horario_calv'");
			if(mysql_num_rows($buscar) == 0){
			$insert=mysql_query("INSERT INTO calendariov ( data_calv, horario_calv, penit_calv, id_vis, id_det)VALUES('$data_calv', '$horario_calv', '$penit_calv', '$id_vis', '$id_det')");
			}
			else{
			$msg="Desculpe mas a data/horario selecionada está lotada. Por favor selecionar outra data/hora.";
			}
		 if(isset($insert)){
				$msg="Agendamento realizado com sucesso!";
			}else{
				$msg="Ops! Houve um erro em nosso sistema, contate o administrador!";
	
				}
				return $msg;
			}
			}
			
		
	
	
?>