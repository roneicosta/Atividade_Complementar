<?php

 
  $sql_insert_sa301 = "EXECUTE PROCEDURE SA301_IU('".$_REQUEST['A3_filial']."',"
      .$_REQUEST['A3_ID'].","
  ."'".stracep($_REQUEST['A3_nome'])."',0,0,'',0,'N',0)";
// echo $sql_insert_sa301;
 try {
   if ($sql_insert_sa301 != '') {
      $result = @ibase_query($conn,$sql_insert_sa301);
      $msg = "Registro cadastrado com sucesso!!";
      $_REQUEST['form'] = 'msg';
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};
//  $sql_insert_sa301 = ibase_query($conn,$sql_insert_sa301) or die ("Não foi possível realizar a ação no banco de dados");
 // $msg = "Disciplina cadastrada com sucesso !!!";
?>


