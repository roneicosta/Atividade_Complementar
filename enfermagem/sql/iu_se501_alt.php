<?php
      global $turgrup;
      $turgrup = $_POST['GG_idtur'];
	  $sql_insert_se501 = "EXECUTE PROCEDURE SP_IE_GRUPO (".$_POST['IDalu'].","
	  ."'".$_POST['E5_anomat']."'," 
	  ."'".$_POST['E5_semmat']."',"
	  ."'".$_POST['idtur']."',"
	  ."'".$_POST['E5_grupo']."',"
	  ."'".$_POST['acao']."')";
	 //echo $sql_insert_se501;
	 try {
	   if ($sql_insert_se501 != '') {
	      $result = @ibase_query($conn,$sql_insert_se501);
	      if($_POST['acao'] == "Alt"){
	        $msg = "Aluno(a) incluido(a)) com sucesso no Grupo: ".$_POST['E5_grupo'];}
	      else{$msg = "Aluno(a) excluido(a)) com sucesso do Grupo: ".$_POST['E5_grupo'];};

		  if (!$result){
		    throw new Exception(ibase_errmsg());}}}
	 catch(Exception $e){
		$msg = $e->getMessage();
		$_REQUEST['form'] = 'msgerr';
	    ibase_rollback_ret();};  

?>


