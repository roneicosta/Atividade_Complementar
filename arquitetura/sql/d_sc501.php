<?PHP
  //PEsquisa aluno por id
  $d_sc501 = "EXECUTE PROCEDURE SC501_D("."'".$_GET['idf_p_501']."',". $_GET['id_p_501'].")";
  //echo $d_sc501;
 try {
   if ($d_sc501 != '') {
      $result = @ibase_query($conn,$d_sc501);
      $msg = "Registro deletado com sucesso!!";
      ibase_commit($conn);
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};

?>
