<?PHP
  if ($_REQUEST['nome_pesq'] != ''){
    $sql_pesq_a101 = "SELECT * FROM SA101 WHERE UPPER(A1_NOME) LIKE '%". strtoupper($_REQUEST['nome_pesq'])."%'";
  }
  else {
    $sql_pesq_a101 = "SELECT * FROM SA101 WHERE UPPER(A1_MATRICULA) LIKE '%".strtoupper($_REQUEST['mat_pesq'])."%'";
  };
 
?>
