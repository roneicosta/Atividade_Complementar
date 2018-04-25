<?PHP
  if ($_REQUEST['id_pesq'] != ''){
    $parte = "UPPER(A4_ID) LIKE'%". strtoupper($_REQUEST['id_pesq'])."%'";
    $_SESSION['parte']= $parte;
  }
  elseif ($_REQUEST['id_per'] != ''){
    $parte = "A4_IDPERIODO =".$_REQUEST['id_per']."";
    $_SESSION['parte']= $parte;
  }
  elseif ($_REQUEST['id_p_sa401'] != ''){
    $parte = "UPPER(A4_ID) LIKE'%".strtoupper($_REQUEST['id_p_sa401'])."%'";
    $_SESSION['parte']= $parte;
  }
  elseif (($_SESSION['id_tur_set'] != '') and ($_REQUEST['idtab'] == 11) or ($_REQUEST['form'] == '19S')){
    $parte = "UPPER(A4_ID) LIKE'%".strtoupper($_SESSION['id_tur_set'])."%'";
    $_SESSION['parte']= $parte;
  }
  else {$parte = "A4_ID LIKE'%%'";
        $_SESSION['parte']= $parte;
  };
  $sql_p_sa401 = "SELECT A4.*, AL.AL_DESCR
                    FROM SA401 A4, SAL01 AL
                    WHERE A4.A4_IDPERIODO = AL.AL_ID
                    AND   A4.A4_IDCURSO = ".$_SESSION['cursopric']."
					AND   ".$parte."";
  //echo $sql_p_sa401;
?>
