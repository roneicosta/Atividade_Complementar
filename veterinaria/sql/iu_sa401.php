<?php
  $sql_insert_sa401 = "EXECUTE PROCEDURE SA401_IU('".$_REQUEST['A4_filial']."',"
  ."'".$_REQUEST['A4_id']."',"
      .$_REQUEST['A4_per'].","
      .$_REQUEST['A4_curso'].",0,"
      ."'".$_REQUEST['A4_turno']."','N',"
      .$_REQUEST['A4_curso'].",0,"
  ."'".stracep($_REQUEST['A4_seguro'])."',"
  ."'".stracep($_REQUEST['A4_convenio'])."')";
      
// echo $sql_insert_sa601;
 try {
   if ($sql_insert_sa401 != '') {
      $result = @ibase_query($conn,$sql_insert_sa401);
      $msg = "Registro cadastrado com sucesso!!";
      $_REQUEST['form'] = 'msg';
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};  
    
  //$sql_insert_sa401 = ibase_query($conn,$sql_insert_sa401) or die ("Não foi possível realizar a ação no banco de dados");

//  $msg = "Turma cadastrada com sucesso !!!";
?>


