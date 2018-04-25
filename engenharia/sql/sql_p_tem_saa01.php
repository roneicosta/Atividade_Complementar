<?PHP
  $sql_p_tem_saa01 = "SELECT AU.A1_FILIAL, AU.A1_ID, AU.A1_MATRICULA, A5.A5_VLRPARCELA,MA.*
                     FROM SA101 AU, SAA01 MA, SA501 A5
                     WHERE AU.A1_ID = MA.AA_IDALUNO
                       AND MA.AA_IDTURMA = A5.A5_IDTURMA
					   AND  A5_ANO = '".$_SESSION['anopric']."'".
                     " AND  A5_SEMESTRE = '".$_SESSION['sempric']."'".
                     " AND  AU.A1_ID = ".$_SESSION['id_set'].
                     " AND  AA_ANO = '".$_SESSION['anopric']."'".
                     " AND  AA_SEMESTRE = '".$_SESSION['sempric']."'".
                     " AND  AA_MODAL = 'N'";
// echo $sql_p_saa01_alt;
?>
