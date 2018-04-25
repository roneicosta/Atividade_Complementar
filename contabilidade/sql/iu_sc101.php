<?php
  $sql_insert_sc101 = "EXECUTE PROCEDURE SC101_IU('".$_REQUEST['CD_filial']."',"
      .$_REQUEST['CD_ID'].","
  ."'".stracep($_REQUEST['CD_nome'])."',".$_REQUEST['CD_ch'].")";
 //echo $sql_insert_sc101;
  try {
   if ($sql_insert_sc101 != '') {
      $result = @ibase_query($conn,$sql_insert_sc101);
      $msg = "Registro cadastrado com sucesso!!";
      $_REQUEST['form'] = 'msg';
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};

?>


