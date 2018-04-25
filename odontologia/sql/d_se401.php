<?PHP
  //PEsquisa aluno por id
  $d_se401 = "EXECUTE PROCEDURE SE401_D("."'".$_GET['idf_p']."',". $_GET['ide_p'].",".$_GET['idd_p'].",'".$_GET['idt_p']."')";
  echo $d_sa401;
 try {
   if ($d_se401 != '') {
      $result = @ibase_query($conn,$d_se401);
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
