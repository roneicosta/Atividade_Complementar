<?PHP
  $sql_p_sa401_sel = "SELECT SA401.A4_ID, SA401.A4_FILIAL, SA501.A5_FILIAL,
                             SA401.A4_IDCURSO, SA501.A5_IDTURMA, SA201.A2_DESCR
                      FROM SA501
                      INNER JOIN SA401 ON (SA501.A5_IDTURMA = SA401.A4_ID)
                      INNER JOIN SA201 ON (SA401.A4_IDCURSO = SA201.A2_ID)
                      AND       (SA501.A5_FILIAL = SA401.A4_FILIAL)
                      WHERE SA401.A4_IDCURSO = ".$_SESSION['cursopric'].
					        "AND SA501.A5_ANO = '".$_SESSION['anopric']."'".
							"AND SA501.A5_SEMESTRE = '".$_SESSION['sempric']."' ORDER BY SA401.A4_IDPERIODO";
//echo $sql_p_sa401_sel;
?>
