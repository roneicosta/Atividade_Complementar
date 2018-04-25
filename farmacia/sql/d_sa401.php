<?PHP
  //PEsquisa aluno por id
  $d_sa401 = "EXECUTE PROCEDURE SA401_D("."'".$_REQUEST['idf_p_sa401']."','". $_REQUEST['idd_p_sa401']."')";
  //echo $d_sa401;
 try {
   if ($d_sa401 != '') {
      $result = @ibase_query($conn,$d_sa401);
      $msg = "Registro deletado com sucesso!!";
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};

//  $d_sa401 = ibase_query($conn,$d_sa401) or die ("Não foi possível realizar a ação no banco de dados");
//  $msg = "Registro deletado com sucesso!!";
  ibase_commit($conn);
?>
