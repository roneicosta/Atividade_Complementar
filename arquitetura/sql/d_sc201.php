<?PHP
  //PEsquisa aluno por id
  $d_sc201 = "EXECUTE PROCEDURE SC201_D('00',". $_REQUEST['id_p_basc'].")";
//  echo $d_sm101;
 try {
   if ($d_sc201 != '') {
      $result = @ibase_query($conn,$d_sc201);
      $msg = "Registro deletado com sucesso!!";
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msgerr';
    ibase_rollback_ret();};

?>
