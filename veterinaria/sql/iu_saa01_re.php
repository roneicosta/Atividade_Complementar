<?php

	  $sql_renova_saa01 = "EXECUTE PROCEDURE SP_RE_SAA('".$_POST['RE_idtur']."','"
	      .$_SESSION['anopric']."','"
	      .$_SESSION['sempric']."','"
	      .$_POST['RE_idturno']."','"
	      .$_POST['RE_anoturno']."','"
	      .$_POST['RE_semturno']."','"
		  .$_SESSION['userNome']."',"
		  ."'".get_ip()."')";
	 //echo $sql_renova_saa01;

 try {
   if ($sql_renova_saa01 != '') {
      $result = @ibase_query($conn,$sql_renova_saa01);
      $_REQUEST['form'] = '67S';
      $msg = 'Renovação realizada com sucesso !';
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};

 
?>


