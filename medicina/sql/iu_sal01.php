<?php
  $sql_insert_sal01 = "EXECUTE PROCEDURE SAL01_IU('".$_REQUEST['AL_filial']."',"
      .$_REQUEST['AL_ID'].","
  ."'".stracep($_REQUEST['AL_nome'])."')";
 //echo $sql_insert_sac01;
  try {
   if ($sql_insert_sal01 != '') {
      $result = @ibase_query($conn,$sql_insert_sal01);
      $msg = "Registro cadastrado com sucesso!!";
      $_REQUEST['form'] = 'msg';
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};
 
//  $sql_insert_sal01 = ibase_query($conn,$sql_insert_sal01) or die ("Não foi possível realizar a ação no banco de dados");

//  $msg = "Período cadastrado com sucesso !!!";
?>


