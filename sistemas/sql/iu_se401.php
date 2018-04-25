<?php

	  $sql_insert_se401 = "EXECUTE PROCEDURE SE401_IU('".$_POST['EP_filial']."',"
	      .$_POST['EP_idest'].","
	      .$_POST['EP_dia'].",'"
		  .$_POST['EP_turno']."',"
		  .$_POST['EP_idprof'].")";
	 //echo $sql_insert_se401;
	  try {
	   if ($sql_insert_se401 != '') {
	      $result = @ibase_query($conn,$sql_insert_se401);
	        $sql_p_se401 = "SELECT COUNT(E4_IDESTAGIO) AS QTDE
				  FROM SE401
				  WHERE E4_FILIAL = '".$_POST['EP_filial']."'
				  AND E4_IDESTAGIO = ".$_POST['EP_idest']."
				  AND E4_DIASEMANA = ".$_POST['EP_dia']."
				  AND E4_TURNO = '".$_POST['EP_turno']."'";
		  $result = ibase_query($conn, $sql_p_se401);
		  $reg = ibase_fetch_assoc($result);
	                if ($reg['QTDE'] > 1) {$msg = "Os dados informados estão chocando com dados já existentes !!!";}
          else {$msg = "Registro cadastrado com sucesso!!";}

		  if (!$result){
		    throw new Exception(ibase_errmsg());}}}
	 catch(Exception $e){
		$msg = $e->getMessage();
		$_REQUEST['form'] = 'msgerr';
	    ibase_rollback_ret();};

 
?>


