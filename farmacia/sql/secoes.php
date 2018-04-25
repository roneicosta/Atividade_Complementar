<?php
 switch ($_REQUEST['idsecao']) {
    case "SM001IU":
      include_once('sql/iu_sm001.php');
    break;
    case "SM101IU":
      include_once('sql/iu_sm101.php');
    break;
    case "SAC01IU":
      include_once('sql/iu_sac01.php');
    break;
    case "SA301IU":
      include_once('sql/iu_sa301.php');
    break;
    case "SA401IU":
      include_once('sql/iu_sa401.php');
    break;
    case "SAL01IU":
      include_once('sql/iu_sal01.php');
    break;
    case "SAK01IU":
      include_once('sql/iu_sak01.php');
    break;
    case "SAO01IU":
      include_once('sql/iu_sao01.php');
    break;
    case "SA601IU":
      include_once('sql/iu_sa601.php');
    break;
    case "A1IU":
        include_once('sql/iu_a101.php');
    break;
    case "SAF01IU":
      include_once('sql/iu_saf01.php');
    break;
    case "SAP01IU":
        include_once('sql/iu_sap01.php');
    break;
    case "SAH01IU":
        include_once('sql/iu_sah01.php');
    break;
    case '2S':
        if (isset($_REQUEST['nome_pesq'])) {
          $_SESSION['parte'] = "nome_pesq=". $_REQUEST['nome_pesq']; }
        else if (isset($_REQUEST['mat_pesq'])){
          $_SESSION['parte'] = "mat_pesq=". $_REQUEST['mat_pesq']; }; 	
		  
        if (isset($_REQUEST['acao'])){
          if ($_REQUEST['acao']=="Del") {include_once('sql/d_a101.php');};	
		  if ($_REQUEST['acao']=="Set") {
		    if ((isset($_REQUEST['mat_pesq']) ) or ($_SESSION['mat_pesq'] != '') ) {
            if ( $_REQUEST['mat_pesq'] != '') {
              $_SESSION['mat_set'] = $_REQUEST['mat_pesq'];
              $_SESSION['id_set'] = $_REQUEST['ida_p_a101'];
	          $_SESSION['nome_set'] = abreviar_nome ($_REQUEST['nome_alu']);
	          $_SESSION['nome_comp'] = $_REQUEST['nome_alu'];
     	      $_SESSION['idacur_set'] = $_REQUEST['idacur_p_a101'];
              unset($_SESSION['id_cur_set']);
              unset($_SESSION['id_tur_set']);
              unset($_SESSION['id_pro_set']);
			  unset($_SESSION['ide_set']);};};};};
        include_once('sql/sql_p_a101.php');
    break;
    case '1SA':
        if ((isset($_REQUEST['mat_pesq']) ) or ($_SESSION['mat_pesq'] != '') ) {
          if ( $_REQUEST['mat_pesq'] != '') {
            $_SESSION['mat_set'] = $_REQUEST['mat_pesq'];
            $_SESSION['id_set'] = $_REQUEST['ida_p_a101'];
	        $_SESSION['nome_set'] = abreviar_nome ($_REQUEST['nome_alu']);
            $_SESSION['nome_comp'] = $_REQUEST['nome_alu'];
	        $_SESSION['idacur_set'] = $_REQUEST['idacur_p_a101'];
            $mostra_alu = true;};
          unset($_SESSION['id_cur_set']);
          unset($_SESSION['id_tur_set']);
          unset($_SESSION['id_pro_set']);};
          unset($_SESSION['ide_set']);
	      include_once('sql/sql_p_a101_id.php');
    break;
    case "SA201IU":
        include_once('sql/iu_sa201.php');
    break;
    case "SAA01IU":
        include_once('sql/iu_saa01.php');
        include_once('sql/sql_p_saa01_id.php');
    break;
    case "SAA01RE":
        include_once('sql/iu_saa01_re.php');
    break;    
    case "4SA":
        if (isset($_REQUEST['acao'])){
          if ($_REQUEST['acao']=="Del") {include_once('sql/d_saa01.php');};
          if ($_REQUEST['acao']=="Alt") {include_once('sql/sql_p_saa01_alt.php');
              $_SESSION['id_p_saa01'] = $_REQUEST['id_p_saa01'];
              $_SESSION['ano_p_saa01'] = $_REQUEST['ano_p_saa01'];
              $_SESSION['sem_p_saa01'] = $_REQUEST['sem_p_saa01'];
              $_SESSION['tur_p_saa01'] = $_REQUEST['tur_p_saa01'];};};
         include_once('sql/sql_p_saa01_id.php');
    break;
    case "15S":
        if (isset($_REQUEST['acao'])){
          if ($_REQUEST['acao']=="Del") {include_once('sql/d_saf01.php');};
          if ($_REQUEST['acao']=="Alt") {include_once('sql/sql_p_saf01.php');};
          if (($_REQUEST['acao']=="Set") or ($_REQUEST['acao']=="Alt")) {
          if ( $_REQUEST['id_p_saf01'] != '' ) {
            $_SESSION['id_pro_set'] = $_REQUEST['id_p_saf01'];
	        $_SESSION['nome_pro_set'] = abreviar_nome ($_REQUEST['nome_pro']);
            $_SESSION['nome_pro_comp'] = $_REQUEST['nome_pro'];
            unset($_SESSION['id_cur_set']);
            unset($_SESSION['id_grade_set']);
            unset($_SESSION['mat_set']);
            unset($_SESSION['id_set']);
            unset($_SESSION['id_tur_set']);
            unset($_SESSION['ide_set']);
            $mostra_pro = True;};};};
         include_once('sql/sql_p_saf01.php');
    break;
    case "30S":
        if (isset($_REQUEST['acao'])){
          if ($_REQUEST['acao']=="Del") {include_once('sql/d_sa201.php');};
          if ($_REQUEST['acao']=="Alt") {include_once('sql/sql_p_sa201.php');};
          if (($_REQUEST['acao']=="Set") or ($_REQUEST['acao']=="Alt")) {
		    if ((isset($_REQUEST['id_p_sa201']) ) or ($_SESSION['id_set'] != '') ) {
            if ( $_REQUEST['id_p_sa201'] != '') {
              $_SESSION['id_cur_set'] = $_REQUEST['id_p_sa201'];
	          $_SESSION['nome_set'] = abreviar_nome($_REQUEST['nome_p_sa201']);
	          unset($_SESSION['id_grade_set']);
              unset($_SESSION['mat_set']);
              unset($_SESSION['id_set']);
              unset($_SESSION['id_tur_set']);
              unset($_SESSION['id_pro_set']);
              unset($_SESSION['ide_set']);
              $mostra_cur = True;};};};};
        include_once('sql/sql_p_sa201.php');
    break;
    case "13S":
        if (($_REQUEST['idsecao'] == '13S') and ($_REQUEST['cad_p_bas'] == '13S'))
            {$_REQUEST['formant'] = '13S';
              $_REQUEST['formpesq'] = '13S';
		      $msg = '"ATENÇÃO!!!"  Cadastro inválido para pesquisa, escolha outro cadastro para continuar o processo!';
		      $_REQUEST['form'] = 'msg';}
		else {include_once('sql/sql_p_basico.php');};
    break;
    case "17SA":
        if (isset($_REQUEST['acao'])){
          if ($_REQUEST['acao']=="Del") {include_once('sql/d_sa401.php');};
          if ($_REQUEST['acao']=="Alt") {include_once('sql/sql_p_sa401.php');};
          if (($_REQUEST['acao']=="Set") or ($_REQUEST['acao']=="Alt")) {
		    if ((isset($_REQUEST['id_p_sa401']) ) or ($_SESSION['id_set_sa401'] != '') ) {
            if ( $_REQUEST['id_p_sa401'] != '') {
              $_SESSION['id_tur_set'] = $_REQUEST['id_p_sa401'];
              $_SESSION['idf_tur_set'] = $_REQUEST['idf_p_sa401'];
              $_SESSION['idg_tur_set'] = $_REQUEST['idg_p_sa401'];
              unset($_SESSION['id_cur_set']);
	          unset($_SESSION['id_grade_set']);
              unset($_SESSION['mat_set']);
              unset($_SESSION['id_set']);
              unset($_SESSION['id_pro_set']);
              unset($_SESSION['ide_set']);
              $mostra_tur = True;};};};};
        include_once('sql/sql_p_sa401.php');
    break;
	case "18S":
        include_once('sql/sql_p_sa401.php');
    break;
    case "CBAS":
          if (isset($_REQUEST['acao'])){
            if ($_REQUEST['acao']=="Alt") {include_once('sql/sql_p_bas_alt.php');};};
        if ($_REQUEST['formd'] == '6SA'){
          if (isset($_REQUEST['acao'])){
            if ($_REQUEST['acao']=="Del") {include_once('sql/d_sm001.php');};};};
        if ($_REQUEST['formd'] == '7SA'){
          if (isset($_REQUEST['acao'])){
            if ($_REQUEST['acao']=="Del") {include_once('sql/d_sm101.php');};};};
        if ($_REQUEST['formd'] == '8SA'){
          if (isset($_REQUEST['acao'])){
            if ($_REQUEST['acao']=="Del") {include_once('sql/d_sac01.php');};};};
        if ($_REQUEST['formd'] == '9SA'){
          if (isset($_REQUEST['acao'])){
            if ($_REQUEST['acao']=="Del") {include_once('sql/d_sao01.php');};};};
        if ($_REQUEST['formd'] == '10SA'){
          if (isset($_REQUEST['acao'])){
            if ($_REQUEST['acao']=="Del") {include_once('sql/d_sa301.php');};};};
        if ($_REQUEST['formd'] == '11SA'){
          if (isset($_REQUEST['acao'])){
            if ($_REQUEST['acao']=="Del") {include_once('sql/d_sal01.php');};};};
        if ($_REQUEST['formd'] == '12SA'){
          if (isset($_REQUEST['acao'])){
            if ($_REQUEST['acao']=="Del") {include_once('sql/d_sak01.php');};};};
        if ($_REQUEST['formd'] == '55SA'){
          if (isset($_REQUEST['acao'])){
            if ($_REQUEST['acao']=="Del") {include_once('sql/d_sf301.php');};};};
        if ($_REQUEST['formd'] == '56SA'){
          if (isset($_REQUEST['acao'])){
            if ($_REQUEST['acao']=="Del") {include_once('sql/d_sf801.php');};};};
        /*Aqui começa os processos do estágio !*/    
		if ($_REQUEST['formd'] == '62SA'){
          if (isset($_REQUEST['acao'])){
            if ($_REQUEST['acao']=="Del") {include_once('sql/d_sc401.php');};};};        
		if ($_REQUEST['formd'] == '63SA'){
          if (isset($_REQUEST['acao'])){
            if ($_REQUEST['acao']=="Del") {include_once('sql/d_sc101.php');};};};	
		if ($_REQUEST['formd'] == '64SA'){
          if (isset($_REQUEST['acao'])){
            if ($_REQUEST['acao']=="Del") {include_once('sql/d_sc201.php');};};};			            
		include_once('sql/sql_p_basico.php');
      break;
	case "57S":
        include_once('sql/e_mail.php');
    break;
    /*Aqui começa os processos do estágio !*/
    case "SC401IU":
      include_once('sql/iu_sc401.php');
    break;
    case "SC101IU":
      include_once('sql/iu_sc101.php');
    break;
    case "SC201IU":
      include_once('sql/iu_sc201.php');
    break;	 
    case "SC501IU":
      include_once('sql/iu_sc501.php');
    break;	
    case "59SA":
        if (isset($_REQUEST['acao'])){
          if ($_REQUEST['acao']=="Del") {include_once('sql/d_se301.php');};};
        
        if (isset($_GET['ide_p'])){
            $_SESSION['ide_set'] = $_GET['ide_p'];
			unset($_SESSION['id_grade_set']);
            unset($_SESSION['mat_set']);
            unset($_SESSION['id_set']);
            unset($_SESSION['id_tur_set']);
            unset($_SESSION['id_pro_set']);
			unset($_SESSION['id_cur_set']);};
        include_once('sql/sql_p_se301_id.php');
        include_once('sql/sql_p_sa201.php');
	 	include_once('sql/sql_p_sa401_sel.php');
		include_once('sql/sql_sa301.php');
		include_once('sql/sql_p_se101_sel.php');
		include_once('sql/sql_p_se201_sel.php');
		$curso = True;
    break; 
    case "SE401IU":
      include_once('sql/iu_se401.php');
    break;
    case "30TA":
        if (isset($_REQUEST['acao'])){
          if ($_REQUEST['acao']=="Del") {include_once('sql/d_se401.php');};};
    break;
    case "SE501IU":
      include_once('sql/iu_se501.php');
    break;
    case "IESE501":
        if (isset($_REQUEST['acao'])){
          if ($_REQUEST['acao']=="Del") {include_once('sql/iu_se501_alt.php');};
          if ($_REQUEST['acao']=="Alt") {include_once('sql/iu_se501_alt.php');};};
    break;
    case "68SA":
        if (isset($_REQUEST['acao'])){
          if ($_REQUEST['acao']=="Del") {include_once('sql/d_sc501.php');};
          if ($_REQUEST['acao']=="Alt") {include_once('sql/sql_p_sc501_id.php');};};
    break;							  
};

?>

