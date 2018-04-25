<?php
      global $turgrup;
      $turgrup = $_POST['GG_idtur'];
	  $sql_insert_se501 = "EXECUTE PROCEDURE SP_GRUPO('".$_POST['GG_idtur']."',"
	      .$_SESSION['cursopric'].","
	  ."'".$_SESSION['anopric']."'," 
	  ."'".$_SESSION['sempric']."')";
	 //echo $sql_insert_se301;
	 try {
	   if ($sql_insert_se501 != '') {
	      $result = @ibase_query($conn,$sql_insert_se501);
	      
	      $sql_p_se501 = "SELECT SA101.A1_MATRICULA, SA101.A1_NOME, SE501.E5_IDESTAGIO,
						         SE501.E5_GRUPO, SE501.E5_IDALUNO, SE501.E5_IDPROF, SE501.E5_POSICAO,
						         SE501.E5_TURNO, SE501.E5_DTINICIO, SE501.E5_DTFIM, SE501.E5_DIAS,
						         SE501.E5_DIASEMANA, SE501.E5_IDHORARIO, SE301.E3_ID, 
								 SE301.E3_IDTURMA, SE301.E3_IDCURSO, SE301.E3_IDPERIODO, 
								 SE301.E3_ANO, SE301.E3_SEMESTRE, SE301.E3_IDDISC, 
								 SE301.E3_IDINSTITUTO, SE301.E3_IDDEPTO, SE301.E3_DTINICIO,
						         SE301.E3_DTFIM, SE301.E3_CH, SE301.E3_DIAS,SE301.E3_NMESES,
						         SE101.E1_RAZAO, SE101.E1_FANTASIA, SAC01.AC_DESCR, SAF01.AF_DESCR,
						         SAF01.AF_TITULACAO, SAF01.AF_CPF, SE201.E2_DESCRICAO, SA301.A3_DESCR
						FROM SE301
						   INNER JOIN SE501 ON (SE301.E3_ID = SE501.E5_IDESTAGIO)
						   INNER JOIN SA101 ON (SE501.E5_IDALUNO = SA101.A1_ID)
						   INNER JOIN SAF01 ON (SE501.E5_IDPROF = SAF01.AF_ID)
						   INNER JOIN SE101 ON (SE301.E3_IDINSTITUTO = SE101.E1_ID)
						   INNER JOIN SAC01 ON (SE501.E5_IDHORARIO = SAC01.AC_ID)
						   INNER JOIN SE201 ON (SE301.E3_IDDEPTO = SE201.E2_ID)
						   INNER JOIN SA301 ON (SE301.E3_IDDISC = SA301.A3_ID)
						WHERE SE301.E3_IDTURMA = '".$_POST['GG_idtur']."'
						ORDER BY SE501.E5_GRUPO,SA101.A1_NOME, SE501.E5_DIASEMANA";
	      
		  if (!$result){
		    throw new Exception(ibase_errmsg());}}}
	 catch(Exception $e){
		$msg = $e->getMessage();
		$_REQUEST['form'] = 'msgerr';
	    ibase_rollback_ret();};  

?>


