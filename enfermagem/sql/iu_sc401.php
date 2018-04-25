<?php

  $sql_insert_sc401 = "EXECUTE PROCEDURE SC401_IU('00',".$_REQUEST['CI_ID'].","
  ."'".stracep($_REQUEST['CI_nome'])."')";
 //echo $sql_insert_sm001;
  try {
   if ($sql_insert_sc401 != '') {
      $result = @ibase_query($conn,$sql_insert_sc401);
      $msg = "Registro cadastrado com sucesso!!";
      $_REQUEST['form'] = 'msg';
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};

?>


