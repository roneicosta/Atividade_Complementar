<?PHP
  //PEsquisa aluno por id
  $d_sm001 = "EXECUTE PROCEDURE SM001_D('". $_REQUEST['id_p_basc']."')";
  //echo $d_sm001;
 try {
   if ($d_sm001 != '') {
      $result = @ibase_query($conn,$d_sm001);
      $msg = "Registro deletado com sucesso!!";
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};  
//  $d_sm001 = ibase_query($conn,$d_sm001) or die ("Não foi possível realizar a ação no banco de dados");
//  $msg = "Registro deletado com sucesso!!";
  //echo $d_a101;
?>
