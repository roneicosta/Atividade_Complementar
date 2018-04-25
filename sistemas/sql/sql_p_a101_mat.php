<?PHP
  global $idret,$ret;
  $sql_p_a101_mat = "SELECT first 1 A1_ID, A1_NOME FROM SA101 WHERE A1_MATRICULA = '".$_REQUEST['matalu']."'";
   // echo $sql_p_a101_mat;
  $result = ibase_query($conn, $sql_p_a101_mat);
  $row = ibase_fetch_assoc($result);
  if ($row['A1_NOME'] == ''){$ret = 'Aluno(a) não localizado(a) !'; $idret = '';}
  else {$ret = $row['A1_NOME']; $idret = $row['A1_ID'];}; 
  //echo $ret; 
?>
