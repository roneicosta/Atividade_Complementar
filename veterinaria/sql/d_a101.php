<?PHP
  //PEsquisa aluno por id
  $d_a101 = "EXECUTE PROCEDURE SA101_D("."'".$_REQUEST['idf_p_a101']."',". $_REQUEST['ida_p_a101'].")";
  //echo $d_a101;
  
 try {
   if ($d_a101 != '') {
      $result = @ibase_query($conn,$d_a101);
      $msg = "Registro deletado com sucesso!!";
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
    $_REQUEST['formant'] = '1S';
    $_REQUEST['formpesq'] = '2S';
	$msg = $e->getMessage();
	$_REQUEST['form'] = 'msg';
    ibase_rollback_ret();};
	  
//  $d_a101 = ibase_query($conn,$d_a101) or die ("Não foi possível realizar a ação no banco de dados");
//  $msg = "Registro deletado com sucesso!!";
  //echo $d_a101;
?>
