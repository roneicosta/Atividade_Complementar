<?PHP
  $sql_p_saa01_alt = "SELECT AU.A1_FILIAL, AU.A1_ID, AU.A1_MATRICULA, MA.*
                     FROM SA101 AU, SAA01 MA
                     WHERE AU.A1_ID = MA.AA_IDALUNO
                       AND  AU.A1_ID = ".$_REQUEST['id_p_saa01'].
                     " AND  AA_ANO = '".$_REQUEST['ano_p_saa01']."'".
                     " AND  AA_SEMESTRE = '".$_REQUEST['sem_p_saa01']."'".
                     " AND  AA_MODAL = '".$_REQUEST['mod_p_saa01']."'".
                     " AND  AA_IDTURMA = '".$_REQUEST['tur_p_saa01']."'";
 //echo $sql_p_saa01_alt;
?>
