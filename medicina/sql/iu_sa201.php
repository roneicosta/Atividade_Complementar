<?php
  if ($_REQUEST['A2_dataprov'] =='') {$_REQUEST['A2_dataprov'] ='null';} else {$_REQUEST['A2_dataprov'] = "'".formata_data($_REQUEST['A2_dataprov'])."'";};
  if ($_REQUEST['A2_dataauto'] =='') {$_REQUEST['A2_dataauto'] ='null';} else {$_REQUEST['A2_dataauto'] = "'".formata_data($_REQUEST['A2_dataauto'])."'";};
  
 if ($_REQUEST['A2_ord'] =='') {$_REQUEST['A2_ord'] ='null';} else {$_REQUEST['A2_ord'] = $_REQUEST['A2_ord'];};  
  
  $sql_insert_sa201 = "EXECUTE PROCEDURE SA201_IU('".$_REQUEST['A2_filial']."',"
      .$_REQUEST['A2_ID'].","
  ."'".stracep($_REQUEST['A2_nome'])."',"
  ."'".$_REQUEST['A2_forma']."',"
  ."'".stracep($_REQUEST['A2_habil'])."',"
  ."'".$_REQUEST['A2_nprov']."',"
      .$_REQUEST['A2_dataprov'].","
  ."'".$_REQUEST['A2_nauto']."',"
      .$_REQUEST['A2_dataauto'].","
  ."'".stracep($_REQUEST['A2_sigla'])."',"
      .$_REQUEST['A2_ord'].")";
 //echo $sql_insert_sa201;
  try {
   if ($sql_insert_sa201 != '') {
      $result = @ibase_query($conn,$sql_insert_sa201);
      $msg = "Registro cadastrado com sucesso!!";
      $_REQUEST['form'] = 'msg';
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};
//  $sql_insert_sa201 = ibase_query($conn,$sql_insert_sa201) or die ("Não foi possível realizar a ação no banco de dados");

//  $msg = "Curso cadastrado com sucesso !!!";
?>


