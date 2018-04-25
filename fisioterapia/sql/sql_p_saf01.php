<?PHP
  if ($_REQUEST['id_p_saf01'] != ''){
      $parte = "AF_ID =".$_REQUEST['id_p_saf01']."";}
  elseif ($_REQUEST['nome_p_saf01'] != ''){
      $parte = "UPPER(AF_DESCR) LIKE '%". strtoupper($_REQUEST['nome_p_saf01'])."%'";}
  elseif ($_REQUEST['form'] == '16S'){$parte = "AF_ID =".$_SESSION['id_pro_set']."";}
  else {$parte = "AF_DESCR LIKE'%%'";};
  $_SESSION['parte'] = $parte;
  $sql_pesq_saf01 = "SELECT * FROM SAF01 WHERE ".$parte."";
// echo $sql_pesq_saf01;
?>
