<?php
  if ($_POST['C5_dataeve'] =='') {$_POST['C5_dataeve'] ='null';} else {$_POST['C5_dataeve'] = "'".formata_data($_POST['C5_dataeve'])."'";};

  //?acao=Del&idf_p=00&ide_p=13&form=59S&idsecao=59SA&idsub=59
 
	  $sql_insert_sc501 = "EXECUTE PROCEDURE SC501_IU('".$_POST['C5_filial']."',"
	      .$_POST['C5_seq'].","
	      .$_SESSION['id_set'].","
	  ."'".$_SESSION['anopric']."'," 
	  ."'".$_SESSION['sempric']."',"
	      .$_POST['C5_ideve'].","	           
	      .$_POST['C5_idativ'].","
	      .$_POST['C5_ch'].","
		  .$_POST['C5_dataeve'].",'S',"	      
	      .$_POST['C5_idinst'].")";
	 //echo $sql_insert_sc501;
	 try {
	   if ($sql_insert_sc501 != '') {
	      $result = @ibase_query($conn,$sql_insert_sc501);
          $msg = "Registro cadastrado com sucesso!!";
		  if (!$result){
		    throw new Exception(ibase_errmsg());}}}
	 catch(Exception $e){
		$msg = $e->getMessage();
		$_REQUEST['form'] = 'msgerr';
	    ibase_rollback_ret();};  

?>


