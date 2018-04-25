<?php
  $sql_insert_sac01 = "EXECUTE PROCEDURE SAC01_IU('".$_REQUEST['AC_filial']."',"
      .$_REQUEST['AC_ID'].","
  ."'".stracep($_REQUEST['AC_nome'])."')";
 //echo $sql_insert_sac01;
 try {
   if ($sql_insert_sac01 != '') {
      $result = @ibase_query($conn,$sql_insert_sac01);
      $msg = "Registro cadastrado com sucesso!!";
      $_REQUEST['form'] = 'msg';
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};
//  $sql_insert_sac01 = ibase_query($conn,$sql_insert_sac01) or die ("Não foi possível realizar a ação no banco de dados");

//  $msg = "Horário cadastrado com sucesso !!!";
?>


