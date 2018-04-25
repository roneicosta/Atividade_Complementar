<?PHP
  //PEsquisa aluno por id
  $d_sac01 = "EXECUTE PROCEDURE SAC01_D('00',". $_REQUEST['id_p_basc'].")";
//  echo $d_sm101;
 try {
   if ($d_sac01 != '') {
      $result = @ibase_query($conn,$d_sac01);
      $msg = "Registro deletado com sucesso!!";
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};
//  $d_sac01 = ibase_query($conn,$d_sac01) or die ("Não foi possível realizar a ação no banco de dados");
//  $msg = "Registro deletado com sucesso!!";
?>
