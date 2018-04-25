<?PHP
  //PEsquisa aluno por id
  $sql_p_se301 = "SELECT SE301.E3_FILIAL, SE301.E3_ID, SE301.E3_IDCURSO,
		          SE301.E3_IDPERIODO, SE301.E3_ANO, SE301.E3_SEMESTRE,
		          SE301.E3_IDDISC, SE301.E3_IDDEPTO, SE301.E3_DTINICIO,
	              SE301.E3_DTFIM, SE301.E3_NMESES, SE301.E3_CH,
		          SE301.E3_DIAS, SA201.A2_DESCR, SA301.A3_DESCR,
		          SE101.E1_FANTASIA, SE201.E2_DESCRICAO,
		          SE301.E3_IDINSTITUTO, SE301.E3_IDTURMA, SA401.A4_IDPERIODO
				  FROM SA401
					   INNER JOIN SE301 ON (SA401.A4_ID = SE301.E3_IDTURMA)
					   INNER JOIN SA201 ON (SE301.E3_IDCURSO = SA201.A2_ID)
					   INNER JOIN SA301 ON (SE301.E3_IDDISC = SA301.A3_ID)
					   INNER JOIN SE201 ON (SE301.E3_IDDEPTO = SE201.E2_ID)
					   INNER JOIN SE101 ON (SE301.E3_IDINSTITUTO = SE101.E1_ID)
			WHERE  SE301.E3_IDCURSO = ".$_SESSION['cursopric']."
			AND SE301.E3_ANO = '".$_SESSION['anopric']."'
			AND SE301.E3_SEMESTRE = '".$_SESSION['sempric']."' ORDER BY SE301.E3_IDTURMA";
  //echo $sql_p_a101_id;
?>
