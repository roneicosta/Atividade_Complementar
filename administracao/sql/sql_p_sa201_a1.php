<?PHP
  
  $sql_p_sa201_a1 = "SELECT FIRST 1 SA401.A4_IDCURSO
					 FROM SAA01
					 INNER JOIN SA401 ON (SAA01.AA_IDTURMA = SA401.A4_ID)
					 WHERE SAA01.AA_IDALUNO = ".$_SESSION['id_set'].
					 " ORDER BY  SAA01.AA_ANO, SAA01.AA_SEMESTRE DESC";
  //echo $sql_pesq_sae01;
?>
