<?php

  $sql_insert_sm001 = "EXECUTE PROCEDURE SM001_IU('".$_REQUEST['M0_ID']."',"
  ."'".stracep($_REQUEST['M0_nome'])."',"
  ."'".stracep($_REQUEST['M0_end'])."',"
  ."'".stracep($_REQUEST['M0_bair'])."',"
  ."'".stracep($_REQUEST['M0_minic'])."',"
  ."'".$_REQUEST['M0_est']."',"
  ."'".$_REQUEST['M0_cep']."',"
  ."'".$_REQUEST['M0_fone']."',"
  ."'".$_REQUEST['M0_CNPJ']."')";
 //echo $sql_insert_sm001;
  try {
   if ($sql_insert_sm001 != '') {
      $result = @ibase_query($conn,$sql_insert_sm001);
      $msg = "Registro cadastrado com sucesso!!";
      $_REQUEST['form'] = 'msg';
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};
//  $sql_insert_sm001 = ibase_query($conn,$sql_insert_sm001) or die ("Não foi possível realizar a ação no banco de dados");

//  $msg = "Empresa cadastrada com sucesso !!!";
?>


