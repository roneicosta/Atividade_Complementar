<?php
  if ($_REQUEST['A1_mat'] =='') {$_REQUEST['A1_mat'] ='null';} else {$_REQUEST['A1_mat'] = "'".$_REQUEST['A1_mat']."'";};
  if ($_REQUEST['A1_dataexp'] =='') {$_REQUEST['A1_dataexp'] ='null';} else {$_REQUEST['A1_dataexp'] = "'".formata_data($_REQUEST['A1_dataexp'])."'";};
  if ($_REQUEST['A1_dataenem'] =='') {$_REQUEST['A1_dataenem'] ='null';} else {$_REQUEST['A1_dataenem'] = "'".formata_data($_REQUEST['A1_dataenem'])."'";};
  if ($_REQUEST['A1_dataconcl'] =='') {$_REQUEST['A1_dataconcl'] ='null';} else {$_REQUEST['A1_dataconcl'] = "'".formata_data($_REQUEST['A1_dataconcl'])."'";};
  if ($_REQUEST['A1_datacola'] =='') {$_REQUEST['A1_datacola'] ='null';} else {$_REQUEST['A1_datacola'] = "'".formata_data($_REQUEST['A1_datacola'])."'";};
  if ($_REQUEST['A1_dataexped'] =='') {$_REQUEST['A1_dataexped'] ='null';} else {$_REQUEST['A1_dataexped'] = "'".formata_data($_REQUEST['A1_dataexped'])."'";};
if ($_REQUEST['A1_chcump'] =='') {$_REQUEST['A1_chcump'] ='null';} else {$_REQUEST['A1_chcump'] = $_REQUEST['A1_chcump'];};
  if ($_REQUEST['A1_datanasc'] =='') {$_REQUEST['A1_datanasc'] ='null';} else {$_REQUEST['A1_datanasc'] = "'".formata_data($_REQUEST['A1_datanasc'])."'";};

  $sql_insert_sa101 = "EXECUTE PROCEDURE SA101_IU('". $_REQUEST['A1_filial']."',"
  .$_REQUEST['A1_ID'].","
  .$_REQUEST['A1_mat'].","
  ."'".stracep($_REQUEST['A1_nome'])."',"
  ."'".stracep($_REQUEST['A1_end'])."',"
  ."'".stracep($_REQUEST['A1_bair'])."',"
  ."'".stracep($_REQUEST['A1_minic'])."',"
  ."'".$_REQUEST['A1_est']."',"
  ."'".$_REQUEST['A1_cep']."',"
  ."'".$_REQUEST['A1_fone']."',"
  ."'".$_REQUEST['A1_fone2']."',"
  ."'".$_REQUEST['A1_cela']."',"
  ."'".stracep($_REQUEST['t3_mail'])."',"
  ."'".stracep($_REQUEST['A1_nomepai'])."',"
  ."'".stracep($_REQUEST['A1_nomemae'])."',"
  ."'".stracep($_REQUEST['A1_nomeresp'])."',"
  ."'".stracep($_REQUEST['A1_endresp'])."',"
  ."'".stracep($_REQUEST['A1_bairresp'])."',"
  ."'".stracep($_REQUEST['A1_minicresp'])."',"
  ."'".$_REQUEST['A1_estresp']."',"
  ."'".$_REQUEST['A1_cepresp']."',"
  ."'".$_REQUEST['A1_sex']."',"
  ."'".$_REQUEST['A1_estcivil']."',"
  ."'".stracep($_REQUEST['A1_nacional'])."',"
  ."'".stracep($_REQUEST['A1_natural'])."',"
  ."'".$_REQUEST['A1_estnatu']."',"
  ."'".stracep($_REQUEST['A1_rg'])."',"
  ."'".stracep($_REQUEST['A1_orgexp'])."',"
      .$_REQUEST['A1_dataexp'].","
  ."'".$_REQUEST['A1_cpf']."',"
  ."'".stracep($_REQUEST['A1_titulo'])."',"
  ."'".stracep($_REQUEST['A1_minictitulo'])."',"
  ."'".stracep($_REQUEST['A1_zonatit'])."',"
  ."'".stracep($_REQUEST['A1_sectit'])."',"
  ."'".stracep($_REQUEST['A1_reserva'])."',"
  ."'".stracep($_REQUEST['A1_certmil'])."',"
  ."'".stracep($_REQUEST['A1_certserie'])."',"
  ."'".stracep($_REQUEST['A1_certcateg'])."',"
  ."'".$_REQUEST['A1_forming']."',"
  ."'".$_REQUEST['A1_anoing']."',"
  ."'".$_REQUEST['A1_seming']."',"
  ."'".stracep($_REQUEST['A1_discvest1'])."',"
  ."'".stracep($_REQUEST['A1_discvest2'])."',"
  ."'".stracep($_REQUEST['A1_ensinomed'])."',"
  ."'".stracep($_REQUEST['A1_minicmed'])."',"
  ."'".$_REQUEST['A1_estme']."',"
  ."'".$_REQUEST['A1_anomed']."',"
      .$_REQUEST['A1_dataenem'].","
      .$_REQUEST['A1_dataconcl'].","
      .$_REQUEST['A1_datacola'].","
      .$_REQUEST['A1_dataexped'].","
      .$_REQUEST['A1_chcump'].",'','',"
  ."'".$_REQUEST['A1_defic']."',"
  ."'".stracep($_REQUEST['A1_enad'])."',"
      .$_REQUEST['A1_datanasc'].","
  ."'".stracep($_REQUEST['A1_seguro'])."',"
  ."'".stracep($_REQUEST['A1_convenio'])."')";
 //echo $sql_insert_sa101;
 try {
   if ($sql_insert_sa101 != '') {
      $result = @ibase_query($conn,$sql_insert_sa101);
       if ($_REQUEST['A1_ID'] == 0 ) {
         $msg = "Aluno(a) cadastrado(a) com sucesso !!!";
		 $_REQUEST['form'] = 'msg';}
       else {$msg = "Cadastro alterado com sucesso !!!";
	     $_REQUEST['form'] = 'msg';};
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};

//  $sql_insert_sa101 = ibase_query($conn,$sql_insert_sa101) or die ("Não foi possível realizar a ação no banco de dados");

?>


