<?php
  if ($_REQUEST['AA_data'] =='') {$_REQUEST['AA_data'] ='null';} else {$_REQUEST['AA_data'] = "'".formata_data($_REQUEST['AA_data'])."'";};
  if ($_REQUEST['AA_dtsit'] =='') {$_REQUEST['AA_dtsit'] ='null';} else {$_REQUEST['AA_dtsit'] = "'".formata_data($_REQUEST['AA_dtsit'])."'";};
  if ($_REQUEST['AA_dtinireg'] =='') {$_REQUEST['AA_dtinireg'] ='null';} else {$_REQUEST['AA_dtinireg'] = "'".formata_data($_REQUEST['AA_dtinireg'])."'";};
  if ($_REQUEST['AA_dtfimreg'] =='') {$_REQUEST['AA_dtfimreg'] ='null';} else {$_REQUEST['AA_dtfimreg'] = "'".formata_data($_REQUEST['AA_dtfimreg'])."'";};
 
  
  $sql_insert_saa01 = "EXECUTE PROCEDURE SAA01_IU('".$_REQUEST['AA_filial']."',"
      .$_REQUEST['AA_idalu'].","
  ."'".$_REQUEST['AA_anotur']."',"
  ."'".$_REQUEST['AA_semtur']."',"
  ."'".$_REQUEST['AA_mod']."',"
  ."'".$_REQUEST['AA_idtur']."',"
      .$_REQUEST['AA_data'].",'',null,0,'','',null,null,'N',"
  ."'".$_SESSION['userNome']."',"
	  ."'".get_ip()."')";
  
 //echo $sql_insert_saa01;
 
 try {
   if ($sql_insert_saa01 != '') {
      $result = @ibase_query($conn,$sql_insert_saa01);
      $_REQUEST['form'] = '4S';
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};

?>


