<?PHP
  
  $sql_p_se401_id = "SELECT * FROM SE401 WHERE E4_FILIAL = ".$_GET['idf_p']."
                 AND  E4_IDESTAGIO = ".$_GET['ide_p']."
				 AND E4_IDPROF = ".$_GET['idp_p']."";
  echo $sql_p_se401;
?>
