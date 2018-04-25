<?PHP
  if ($_REQUEST['form'] == '6SA'){
    $sql_p_bas_alt = "SELECT * FROM SM001 WHERE M0_ID = '".$_REQUEST['id_p_basc']."'";
    }
  elseif   ($_REQUEST['form'] == '7SA'){
    $sql_p_bas_alt = "SELECT * FROM SM101 WHERE M1_ID = '".$_REQUEST['id_p_basc']."'";
    }
  elseif   ($_REQUEST['form'] == '8SA'){
    $sql_p_bas_alt = "SELECT * FROM SAC01 WHERE AC_ID =".$_REQUEST['id_p_basc']."";
    }
  elseif   ($_REQUEST['form'] == '9SA'){
    $sql_p_bas_alt = "SELECT * FROM SAO01 WHERE AO_ID =".$_REQUEST['id_p_basc']."";
    }
  elseif ($_REQUEST['form'] == '10SA'){
    $sql_p_bas_alt = "SELECT * FROM SA301 WHERE A3_ID = ".$_REQUEST['id_p_basc']."";
    }
 elseif ($_REQUEST['form'] == '11SA'){
    $sql_p_bas_alt = "SELECT * FROM SAL01 WHERE AL_ID = ".$_REQUEST['id_p_basc']."";
      }
 elseif ($_REQUEST['form'] == '12SA'){
    $sql_p_bas_alt = "SELECT * FROM SAK01 WHERE AK_ID = ".$_REQUEST['id_p_basc']."";
      }
  elseif ($_REQUEST['form'] == '55SA'){
    $sql_p_bas_alt = "SELECT * FROM SF301 WHERE F3_ID = ".$_REQUEST['id_p_basc']."";
    }
  elseif ($_REQUEST['form'] == '56SA'){
    $sql_p_bas_alt = "SELECT * FROM SF801 WHERE F8_ID = ".$_REQUEST['id_p_basc']."";
    }
    /*Aqui começa os processos do estágio !*/
  elseif ($_REQUEST['form'] == '62SA'){
    $sql_p_bas_alt = "SELECT * FROM SC401 WHERE C4_ID = ".$_REQUEST['id_p_basc']."";
    }
  elseif ($_REQUEST['form'] == '63SA'){
    $sql_p_bas_alt = "SELECT * FROM SC101 WHERE C1_ID = ".$_REQUEST['id_p_basc']."";
    }
  elseif ($_REQUEST['form'] == '64SA'){
    $sql_p_bas_alt = "SELECT * FROM SC201 WHERE C2_ID = ".$_REQUEST['id_p_basc']."";
    };
  
 //echo $sql_p_bas_alt;
?>
