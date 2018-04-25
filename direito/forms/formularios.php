<?php
 switch ($_REQUEST['form']) {
    case "1S":
        $unidade = True;
        $curso = True;
        break;
    case "1SA":
        $unidade = True;
        $curso = True;
        //include_once('sql/sql_tabs.php');
        //$mostra_tab = true;
        break;
    case "3S":
        $unidade = True;
        $curso = True;
        if ($_SESSION['id_set'] != '') {
          //include_once('sql/sql_tabs.php');
          //$mostra_tab = true;
          include_once('sql/sql_p_a101_id.php');
          $_REQUEST['form'] = '1SA';}
        else {$_REQUEST['formant'] = '1S';
              $_REQUEST['formpesq'] = '2S';
		      $msg = '"ATENÇÃO!!!"  Pesquise um aluno para continuar o processo!';
		      $_REQUEST['form'] = 'msg';};
        break;
    case "4S":
        if ($_SESSION['mat_set'] == '' ) {
		    $_REQUEST['formant'] = '1S';
		    $_REQUEST['formpesq'] = '2S';
	        $msg = '"ATENÇÃO!!!"  Pesquise um aluno para continuar o processo!';
		    $_REQUEST['form'] = 'msg';}
		else {include_once('sql/sql_p_saa01_id.php');}
        break;
    case "4SI":
        include_once('sql/sql_p_sa401_sel.php');
        if ($reg[1] != '') {
            $_REQUEST['form'] = '4SI';}
       else{$_REQUEST['formant'] = '1S';
            $_REQUEST['formpesq'] = '2S';
    		$msg = '"ATENÇÃO!!!"  Não existe turma liberada para este(a) aluno(a) neste ano/semestre! Pesquise  outro aluno(a) ou                       mude o ano/semestre de trabalho !';
    		$_REQUEST['form'] = 'msg';};
        break;
    case "4SA":
        include_once('sql/sql_p_sa401_sel.php');
        //include_once('sql/sql_tabs.php');
        //$mostra_tab = true;
        break;
    case "7S":
        include_once('sql/sql_sm001.php');
        $unidade = True;
        break;
    case "7SA":
        include_once('sql/sql_sm001.php');
        $unidade = True;
        break;
    case "8S":
        $unidade = True;
        break;
    case "10S":
        $unidade = True;
        break;
    case "11S":
        $unidade = True;
        break;
   /* case "12S":
        $unidade = True;
        break;*/
    case "13S":
        $psubmenu = True;
        break;
    case "15SA":
        //include_once('sql/sql_tabs.php');
        //$mostra_tab = true;
        break;
    case "16S":
        if ($_SESSION['id_pro_set'] != '') {
          //include_once('sql/sql_tabs.php');
          //$mostra_tab = true;
          include_once('sql/sql_p_saf01.php');
          $_REQUEST['form'] = '15SA';}
        else {$_REQUEST['formant'] = '14S';
              $_REQUEST['formpesq'] = '15S';
		      $msg = '"ATENÇÃO!!!"  Pesquise um professor para continuar o processo!';
		      $_REQUEST['form'] = 'msg';};
        break;
    case "17S":
        include_once('sql/sql_p_sa201.php');
        include_once('sql/sql_sal01.php');
        //include_once('sql/sql_p_sa601.php');
        $unidade = True;
        $curso = True;
        break;
    case "17SA":
        include_once('sql/sql_p_sa201.php');
        include_once('sql/sql_sal01.php');
        //include_once('sql/sql_p_sa601.php');
        include_once('sql/sql_tabs.php');
        $mostra_tab = false;
        $unidade = True;
        $curso = True;
        break;
    case "18S":
        include_once('sql/sql_sal01.php');
        break;
    case "19S":
        $unidade = True;
        $curso = True;
        if ($_SESSION['id_tur_set'] != '') {
          include_once('sql/sql_p_sa201.php');
          include_once('sql/sql_sal01.php');
          //include_once('sql/sql_p_sa601.php');
          include_once('sql/sql_tabs.php');
          $unidade = True;
          $curso = True;
          $mostra_tab = false;
          include_once('sql/sql_p_sa401.php');
          $_REQUEST['form'] = '17SA';}
        else {$_REQUEST['formant'] = '17S';
              $_REQUEST['formpesq'] = '18S';
		      $msg = '"ATENÇÃO!!!"  Pesquise uma turma para continuar o processo!';
		      $_REQUEST['form'] = 'msg';};
        break;
    case "20S":
        if ($_SESSION['id_tur_set'] != '') {
          include_once('sql/sql_p_sa801_nf.php');
		  include_once('sql/sql_p_sao01_sel.php');}
        else {$_REQUEST['formant'] = '17S';
              $_REQUEST['formpesq'] = '18S';
		      $msg = '"ATENÇÃO!!!"  Pesquise uma turma para continuar o processo!';
		      $_REQUEST['form'] = 'msg';};
        break;        
    case "20SA":
        include_once('sql/sql_p_sad01_id.php');
        break;
    case "29S":
        $unidade = True;
        break;
    case "29SA":
        $unidade = True;
        break;
    case "31S":
        $unidade = True;
        if ($_SESSION['id_cur_set'] != '') {
          $_REQUEST['id_p_sa201'] = $_SESSION['id_cur_set'];
          include_once('sql/sql_p_sa201.php');
          $_REQUEST['form'] = '29SA';}
        else {$_REQUEST['formant'] = '29S';
              $_REQUEST['formpesq'] = '30S';
		      $msg = '"ATENÇÃO!!!"  Pesquise um curso para continuar o processo!';
		      $_REQUEST['form'] = 'msg';};
        break;
    case "vpbas":
	 $_SESSION['cad_p_bas'] = $_REQUEST['cad_p_bas'];
	 $_SESSION['id_p_bas'] = $_REQUEST['id_p_bas'];
	 $_SESSION['nome_p_bas'] = $_REQUEST['nome_p_bas'];
     break;
    case "57S":
	    $_REQUEST['mostra_ed'] = true;
    break;    
	/*Aqui começa os processos do estágio !*/	
    case "68S":
        if ($_SESSION['mat_set'] == '' ) {
		    $_REQUEST['formant'] = '1S';
		    $_REQUEST['formpesq'] = '2S';
	        $msg = '"ATENÇÃO!!!"  Pesquise um aluno para continuar o processo!';
		    $_REQUEST['form'] = 'msg';}
		else {include_once('sql/sql_p_sc501.php');}
        break;    
    case "68SI":
		include_once('sql/sql_p_sc101_sel.php');
		include_once('sql/sql_p_sc201_sel.php');
		include_once('sql/sql_p_sc401_sel.php');
    break;
    case "68SA":
		include_once('sql/sql_p_sc101_sel.php');
		include_once('sql/sql_p_sc201_sel.php');
		include_once('sql/sql_p_sc401_sel.php');
    break;								
    case "30T":
		include_once('sql/sql_p_se401.php');
		include_once('sql/sql_tabs.php');
        $mostra_tab = true;
    break;	
    case "30TI":
        include_once('sql/sql_p_saf01_sel.php');
        include_once('sql/sql_p_se301_sel.php');
		include_once('sql/sql_tabs.php');
        $mostra_tab = true;        
    break;
    case "30TA":
        include_once('sql/sql_p_saf01_sel.php');
        include_once('sql/sql_p_se301_sel.php');
        include_once('sql/sql_p_se401_id.php');
		include_once('sql/sql_tabs.php');
        $mostra_tab = true;        
    break;
    case "61S":
        include_once('sql/sql_p_sa201.php');
		include_once('sql/sql_p_sa401_sel.php');
		$curso = True;
    break;
    case "65S":
        if(isset($_REQUEST['matalu'])){
		      include_once('sql/sql_p_a101_mat.php');
		      $E5_grupo = $_REQUEST['E5_grupo'];       $idtur = $_REQUEST['idtur']; 
			  $matalu = $_REQUEST['matalu'];
			  $idsec = 'IESE501'; $formu = '65S';}
		else {$E5_grupo = '';       $idtur = ''; 
			  $matalu = ''; $ret = ''; $idret = 0;
			  $idsec = 'IESE501'; $formu = '65S';};    
        include_once('sql/sql_p_sa401_sel.php');
    break;  
    case "67S":
        include_once('sql/sql_p_sa201.php');
		include_once('sql/sql_p_sa401_sel.php');
		$curso = True;
    break;	  
    case "RPRE":
        include_once('sql/sql_p_sa401_sel.php');
    break;
    case "RTCE":
        include_once('sql/sql_p_sa401_sel.php');
    break;
    case "RLAT":
        include_once('sql/sql_p_sa401_sel.php');
    break;								    
};

?>
