<?PHP

  $d_sc401 = "EXECUTE PROCEDURE SC401_D('00',". $_REQUEST['id_p_basc'].")";
  //echo $d_se101;
 try {
   if ($d_sc401 != '') {
      $result = @ibase_query($conn,$d_sc401);
      $msg = "Registro deletado com sucesso!!";
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};

?>
