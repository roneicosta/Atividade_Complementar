<?php
if ($_REQUEST['C2_ch'] =='') {$_REQUEST['C2_ch'] ='0';} else {$_REQUEST['C2_ch'] = $_REQUEST['C2_ch'];};

  $sql_insert_sc201 = "EXECUTE PROCEDURE SC201_IU('".$_REQUEST['C2_filial']."',"
      .$_REQUEST['C2_ID'].","
  ."'".stracep($_REQUEST['C2_nome'])."',"
      .$_REQUEST['C2_ch'].")";
 //echo $sql_insert_se601;
  try {
   if ($sql_insert_sc201 != '') {
      $result = @ibase_query($conn,$sql_insert_sc201);
      $msg = "Registro cadastrado com sucesso!!";
      $_REQUEST['form'] = 'msg';
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};
 
?>


