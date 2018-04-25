<?php
  $sql_insert_sm101 = "EXECUTE PROCEDURE SM101_IU('".$_REQUEST['M1_IDEMP']."',"
  ."'".$_REQUEST['M1_ID']."',"
  ."'".stracep($_REQUEST['M1_nome'])."',"
  ."'".stracep($_REQUEST['M1_end'])."',"
  ."'".stracep($_REQUEST['M1_bair'])."',"
  ."'".stracep($_REQUEST['M1_minic'])."',"
  ."'".$_REQUEST['M1_est']."',"
  ."'".$_REQUEST['M1_cep']."',"
  ."'".$_REQUEST['M1_fone']."',"
  ."'".$_REQUEST['M1_CNPJ']."')";
// echo $sql_insert_sm101;
 try {
   if ($sql_insert_sm101 != '') {
      $result = @ibase_query($conn,$sql_insert_sm101);
      $msg = "Registro cadastrado com sucesso!!";
      $_REQUEST['form'] = 'msg';
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};
//  $sql_insert_sm101 = ibase_query($conn,$sql_insert_sm101) or die ("Não foi possível realizar a ação no banco de dados");

//  $msg = "Filial cadastrada com sucesso !!!";
?>


