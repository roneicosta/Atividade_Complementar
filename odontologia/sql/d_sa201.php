<?PHP
  
  $d_sa201 = "EXECUTE PROCEDURE SA201_D("."'".$_REQUEST['idf_p_cur']."',". $_REQUEST['id_p_cur'].")";
  //echo $d_sa201;
 try {
   if ($d_sa201 != '') {
      $result = @ibase_query($conn,$d_sa201);
      $msg = "Registro deletado com sucesso!!";
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
    $_REQUEST['formant'] = '29S';
    $_REQUEST['formpesq'] = '30S';
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msg';
    ibase_rollback_ret();};

//  $d_sa201 = ibase_query($conn,$d_sa201) or die ("Não foi possível realizar a ação no banco de dados");
//  $msg = "Registro deletado com sucesso!!";
  //echo $d_a101;
?>
