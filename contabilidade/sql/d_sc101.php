<?PHP
  //PEsquisa aluno por id
  $d_sc101 = "EXECUTE PROCEDURE SC101_D('00',". $_REQUEST['id_p_basc'].")";
//  echo $d_sm101;
 try {
   if ($d_sc101 != '') {
      $result = @ibase_query($conn,$d_sc101);
      $msg = "Registro deletado com sucesso!!";
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};

?>
