<?PHP
  //PEsquisa aluno por id
  $d_sal01 = "EXECUTE PROCEDURE SAL01_D('00',". $_REQUEST['id_p_basc'].")";
//  echo $d_sm101;
 try {
   if ($d_sal01 != '') {
      $result = @ibase_query($conn,$d_sal01);
      $msg = "Registro deletado com sucesso!!";
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};
//  $d_sal01 = ibase_query($conn,$d_sal01) or die ("Não foi possível realizar a ação no banco de dados");
//  $msg = "Registro deletado com sucesso!!";
?>
