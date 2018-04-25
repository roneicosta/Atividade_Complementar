<?php
  if ($_REQUEST['AF_dataexp'] =='') {$_REQUEST['AF_dataexp'] ='null';} else {$_REQUEST['AF_dataexp'] = "'".formata_data($_REQUEST['AF_dataexp'])."'";};
  if ($_REQUEST['AF_datanasc'] =='') {$_REQUEST['AF_datanasc'] ='null';} else {$_REQUEST['AF_datanasc'] = "'".formata_data($_REQUEST['AF_datanasc'])."'";};

  $sql_insert_saf01 = "EXECUTE PROCEDURE SAF01_IU('". $_REQUEST['AF_filial']."',"
  .$_REQUEST['AF_ID'].","
  ."'".stracep($_REQUEST['AF_nome'])."',"
  ."'".stracep($_REQUEST['AF_apelido'])."',"
  ."'".stracep($_REQUEST['AF_end'])."',"
  ."'".stracep($_REQUEST['AF_bair'])."',"
  ."'".stracep($_REQUEST['AF_minic'])."',"
  ."'".$_REQUEST['AF_est']."',"
  ."'".$_REQUEST['AF_cep']."',"
  ."'".$_REQUEST['AF_fone']."',"
  ."'".$_REQUEST['AF_fone2']."',"
  ."'".$_REQUEST['AF_cel']."',"
  ."'".stracep($_REQUEST['t3_mail'])."',"
      .$_REQUEST['AF_datanasc'].","
  ."'".$_REQUEST['AF_sex']."',"
/*  ."'".$_REQUEST['AF_estcivil']."',"*/
  ."'".stracep($_REQUEST['AF_nacional'])."',"
  ."'".stracep($_REQUEST['AF_natural'])."',"
  ."'".stracep($_REQUEST['AF_titula'])."',"
  ."'".$_REQUEST['AF_cpf']."')";
/*  ."'".$_REQUEST['AF_estnatu']."',"
  ."'".$_REQUEST['AF_rg']."',"
  ."'".$_REQUEST['AF_orgexp']."',"
      .$_REQUEST['AF_dataexp'].","
  ."'".$_REQUEST['AF_cpf']."',"*/
 //echo $sql_insert_saf01;
 try {
   if ($sql_insert_saf01 != '') {
      $result = @ibase_query($conn,$sql_insert_saf01);
  	  if ($_REQUEST['AF_ID'] == 0 ) {
	        $msg = "Professor(a) cadastrado(a) com sucesso !!!";
			$_REQUEST['form'] = 'msg';}
	  else {$msg = "Cadastro alterado com sucesso !!!";
	        $_REQUEST['form'] = 'msg';} ;
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};
//  $sql_insert_saf01 = ibase_query($conn,$sql_insert_saf01) or die ("Não foi possível realizar a ação no banco de dados");

?>


