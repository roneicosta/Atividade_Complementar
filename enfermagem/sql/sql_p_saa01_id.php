<?PHP
  $sql_p_saa01_id = "SELECT AU.A1_FILIAL, AU.A1_ID, AU.A1_MATRICULA, MA.*
                     FROM SA101 AU, SAA01 MA
                     WHERE AU.A1_ID = MA.AA_IDALUNO
                     AND   AU.A1_ID = ".$_SESSION['id_set']." ORDER BY MA.AA_ANO DESC, MA.AA_SEMESTRE DESC";
//  echo $sql_p_saa01;
?>
