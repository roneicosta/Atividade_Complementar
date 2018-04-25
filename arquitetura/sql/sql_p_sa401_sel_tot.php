<?PHP
  $sql_p_sa401_sel_tot = "SELECT SA401.A4_ID, SA401.A4_FILIAL, SA501.A5_FILIAL,
                             SA401.A4_IDCURSO, SA501.A5_IDTURMA
                      FROM SA501
                      INNER JOIN SA401 ON (SA501.A5_IDTURMA = SA401.A4_ID)
                      AND       (SA501.A5_FILIAL = SA401.A4_FILIAL)".
					        "AND SA501.A5_ANO = '".$_SESSION['anopric']."'".
							"AND SA501.A5_SEMESTRE = '".$_SESSION['sempric']. "' ORDER BY SA401.A4_ID,SA401.A4_IDPERIODO";
 //echo $sql_p_sa701_sel;
?>
