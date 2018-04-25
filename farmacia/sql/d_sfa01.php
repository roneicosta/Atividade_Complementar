<?PHP
  //PEsquisa aluno por id
  $d_sfa01 = "EXECUTE PROCEDURE SFA01_D('".$_REQUEST['idf_p_sfa01']."',". $_REQUEST['ida_p_sfa01'].",'".$_REQUEST['ano_p_sfa01']."','".$_REQUEST['sem_p_sfa01']."')";
//echo $d_sfa01;
 try {
   if ($d_sfa01 != '') {
      $result = @ibase_query($conn,$d_sfa01);
      $msg = "Registro deletado com sucesso!!";
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};
?>
