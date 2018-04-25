<?PHP
  global $reg;
  $sql_p_sa401_sel = "SELECT SA401.A4_ID, SA401.A4_FILIAL,  SA401.A4_IDCURSO
                      FROM SA401
                      WHERE SA401.A4_IDCURSO = ".$_SESSION['cursopric'].
					  " ORDER BY SA401.A4_IDPERIODO";
 // echo $sql_p_sa401_sel;
  $result = ibase_query($conn, $sql_p_sa401_sel) or die("<center>Problema na pesquisa!</center>");
  $reg = ibase_fetch_row($result);
 // echo $reg[1];
?>
