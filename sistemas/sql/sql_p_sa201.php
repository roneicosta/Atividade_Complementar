<?PHP
  if ($_REQUEST['id_p_sa201'] != ''){
      $parte = "A2_ID =".$_REQUEST['id_p_sa201']."";
	  $_SESSION['parte'] = $parte;}
  elseif ($_REQUEST['nome_p_sa201'] != ''){
      $parte = "UPPER(A2_DESCR) LIKE '%". strtoupper($_REQUEST['nome_p_sa201'])."%'";
	  $_SESSION['parte'] = $parte;}
  else {$parte = "A2_DESCR LIKE'%%'";
        $_SESSION['parte'] = $parte;};
  $sql_pesq_sa201 = "SELECT * FROM SA201 WHERE ".$parte."";
// echo $sql_pesq_sa201;
?>
