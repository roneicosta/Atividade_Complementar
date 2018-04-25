<?PHP
  //PEsquisa aluno por id
  $d_saa01 = "UPDATE SAA01
			  SET AA_USUARIO = '". $_SESSION['userNome']."',".
			      "AA_IP = '" .get_ip()."',".
			      "AA_ACAO = 'D'
			  WHERE AA_FILIAL = '".$_GET['idf_p_saa01']."'
			  AND   AA_IDALUNO = ".$_GET['id_p_saa01']." 
 			  AND   AA_ANO = '".$_GET['ano_p_saa01']."'
			  AND   AA_SEMESTRE = '".$_GET['sem_p_saa01']."'
			  AND   AA_MODAL = '". $_GET['mod_p_saa01']."'";
  //echo $d_saa01;
 try {
   if ($d_saa01 != '') {
      $result = @ibase_query($conn,$d_saa01);
      $msg = "Registro deletado com sucesso!!";
      ibase_commit($conn);
	  if (!$result){
	    throw new Exception(ibase_errmsg());}}}
 catch(Exception $e){
	if(!$e->getMessage()){$msg = 'Exclusão Negada! Esse(a) aluno(a) pertence a um grupo de Estágio!';}
	else {$msg = $e->getMessage(); };
	$_REQUEST['form'] = 'msgerr';
    //ibase_rollback_ret();
	};

?>
