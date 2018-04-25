<?PHP
  if ($_REQUEST['cad_p_bas'] == '6S'){
        if ($_REQUEST['nome_p_bas'] != ''){
            $parte = "UPPER(M0_DESCR) LIKE'%".strtoupper($_REQUEST['nome_p_bas'])."%'";}
    elseif ($_REQUEST['id_p_bas'] != '') {
            $parte = "M0_ID LIKE'%".$_REQUEST['id_p_bas']."%'";}
    else   {$parte = "M0_DESCR LIKE'%%'";};
    $_SESSION['parte'] = $parte;
    $sql_pesq_basico = "SELECT M0_ID AS ID, M0_DESCR AS DESCR FROM SM001 WHERE ".$parte;
    }
  elseif   ($_REQUEST['cad_p_bas'] == '7S'){
        if ($_REQUEST['nome_p_bas'] != ''){
            $parte = "UPPER(M0_DESCR) LIKE'%".strtoupper($_REQUEST['nome_p_bas'])."%'";}
    elseif ($_REQUEST['id_p_bas'] != '') {
            $parte = "UPPER(M1_ID) LIKE'%".strtoupper($_REQUEST['id_p_bas'])."%'";}
    else   {$parte = "M1_DESCR LIKE'%%'";};
    $_SESSION['parte'] = $parte;
    $sql_pesq_basico = "SELECT M1_ID AS ID, M1_DESCR AS DESCR FROM SM101 WHERE ".$parte;
    }
  elseif   ($_REQUEST['cad_p_bas'] == '8S'){
        if ($_REQUEST['nome_p_bas'] != ''){
            $parte = "UPPER(AC_DESCR) LIKE'%".strtoupper($_REQUEST['nome_p_bas'])."%'";}
    elseif ($_REQUEST['id_p_bas'] != '') {
            $parte = "AC_ID = ".$_REQUEST['id_p_bas']."";}
    else   {$parte = "AC_DESCR LIKE'%%'";};
    $_SESSION['parte'] = $parte;
    $sql_pesq_basico = "SELECT AC_ID AS ID, AC_DESCR AS DESCR FROM SAC01 WHERE ".$parte;
    }
  elseif   ($_REQUEST['cad_p_bas'] == '9S'){
        if ($_REQUEST['nome_p_bas'] != ''){
            $parte = "UPPER(AO_DESCR) LIKE'%".strtoupper($_REQUEST['nome_p_bas'])."%'";}
    elseif ($_REQUEST['id_p_bas'] != '') {
            $parte = "AO_ID =".$_REQUEST['id_p_bas']."";}
    else   {$parte = "AO_DESCR LIKE'%%'";};
    $_SESSION['parte'] = $parte;
    $sql_pesq_basico = "SELECT AO_ID AS ID, AO_ANO||'/'||AO_SEMESTRE||'-'||AO_DESCR AS DESCR FROM SAO01 WHERE ".$parte." ORDER BY AO_DESCR";
    }
  elseif ($_REQUEST['cad_p_bas'] == '10S'){
        if ($_REQUEST['nome_p_bas'] != ''){
            $parte = "UPPER(A3_DESCR) LIKE'%".strtoupper($_REQUEST['nome_p_bas'])."%'";}
    elseif ($_REQUEST['id_p_bas'] != '') {
            $parte = "A3_ID =".$_REQUEST['id_p_bas']."";}
    else   {$parte = "A3_DESCR LIKE'%%'";};
    $_SESSION['parte'] = $parte;
    $sql_pesq_basico = "SELECT A3_ID AS ID, A3_DESCR AS DESCR FROM SA301 WHERE ".$parte." ORDER BY A3_DESCR";
    }
  elseif ($_REQUEST['cad_p_bas'] == '11S'){
        if ($_REQUEST['nome_p_bas'] != ''){
            $parte = "UPPER(AL_DESCR) LIKE'%".strtoupper($_REQUEST['nome_p_bas'])."%'";}
    elseif ($_REQUEST['id_p_bas'] != '') {
            $parte = "AL_ID =".$_REQUEST['id_p_bas']."";}
    else   {$parte = "AL_DESCR LIKE'%%'";};
    $_SESSION['parte'] = $parte;
    $sql_pesq_basico = "SELECT AL_ID AS ID, AL_DESCR AS DESCR FROM SAL01 WHERE ".$parte;
      }
  elseif ($_REQUEST['cad_p_bas'] == '12S'){
        if ($_REQUEST['nome_p_bas'] != ''){
            $parte = "UPPER(AK_DESCR) LIKE'%".strtoupper($_REQUEST['nome_p_bas'])."%'";}
    elseif ($_REQUEST['id_p_bas'] != '') {
            $parte = "AK_ID =".$_REQUEST['id_p_bas']."";}
    else   {$parte = "AK_DESCR LIKE'%%'";};
    $_SESSION['parte'] = $parte;
    $sql_pesq_basico = "SELECT AK_ID AS ID, AK_DESCR AS DESCR FROM SAK01 WHERE ".$parte;
	}
 elseif ($_REQUEST['cad_p_bas'] == '55S'){
        if ($_REQUEST['nome_p_bas'] != ''){
            $parte = "UPPER(F3_DESCR) LIKE'%".strtoupper($_REQUEST['nome_p_bas'])."%'";}
    elseif ($_REQUEST['id_p_bas'] != '') {
            $parte = "F3_ID =".$_REQUEST['id_p_bas']."";}
    else   {$parte = "F3_DESCR LIKE'%%'";};
    $_SESSION['parte'] = $parte;
    $sql_pesq_basico = "SELECT F3_ID AS ID, F3_DESCR AS DESCR FROM SF301 WHERE ".$parte;
      }
 elseif ($_REQUEST['cad_p_bas'] == '56S'){
        if ($_REQUEST['nome_p_bas'] != ''){
            $parte = "UPPER(F8_NOME) LIKE'%".strtoupper($_REQUEST['nome_p_bas'])."%'";}
    elseif ($_REQUEST['id_p_bas'] != '') {
            $parte = "F8_ID =".$_REQUEST['id_p_bas']."";}
    else   {$parte = "F8_NOME LIKE'%%'";};
    $_SESSION['parte'] = $parte;
    $sql_pesq_basico = "SELECT F8_ID AS ID, F8_NOME AS DESCR FROM SF801 WHERE ".$parte;
      }
      /*Aqui começa os processos do estágio !*/
 elseif ($_REQUEST['cad_p_bas'] == '62S'){
        if ($_REQUEST['nome_p_bas'] != ''){
            $parte = "UPPER(C4_DESCR) LIKE'%".strtoupper($_REQUEST['nome_p_bas'])."%'";}
    elseif ($_REQUEST['id_p_bas'] != '') {
            $parte = "C4_ID =".$_REQUEST['id_p_bas']."";}
    else   {$parte = "C4_DESCR LIKE'%%'";};
    $_SESSION['parte'] = $parte;
    $sql_pesq_basico = "SELECT C4_ID AS ID, C4_DESCR AS DESCR FROM SC401 WHERE ".$parte;
      }
 elseif ($_REQUEST['cad_p_bas'] == '63S'){
        if ($_REQUEST['nome_p_bas'] != ''){
            $parte = "UPPER(C1_DESCR) LIKE'%".strtoupper($_REQUEST['nome_p_bas'])."%'";}
    elseif ($_REQUEST['id_p_bas'] != '') {
            $parte = "C1_ID =".$_REQUEST['id_p_bas']."";}
    else   {$parte = "C1_DESCR LIKE'%%'";};
    $_SESSION['parte'] = $parte;
    $sql_pesq_basico = "SELECT C1_ID AS ID, C1_DESCR AS DESCR FROM SC101 WHERE ".$parte;
      }
 elseif ($_REQUEST['cad_p_bas'] == '64S'){
        if ($_REQUEST['nome_p_bas'] != ''){
            $parte = "UPPER(E6_DESCRICAO) LIKE'%".strtoupper($_REQUEST['nome_p_bas'])."%'";}
    elseif ($_REQUEST['id_p_bas'] != '') {
            $parte = "C2_ID =".$_REQUEST['id_p_bas']."";}
    else   {$parte = "C2_DESCR LIKE'%%'";};
    $_SESSION['parte'] = $parte;
    $sql_pesq_basico = "SELECT C2_ID AS ID, C2_DESCR AS DESCR FROM SC201 WHERE ".$parte;
      };
  
//  echo $sql_pesq_basico;
?>
