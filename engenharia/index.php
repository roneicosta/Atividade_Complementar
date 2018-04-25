<?php
session_start();
// Início config
$raiz=$_SERVER['SCRIPT_FILENAME']."/";
date_default_timezone_set( "America/Sao_Paulo" );
if (STRCHR($_SERVER['HTTP_USER_AGENT'],'MSIE 6')!='') {
   $dir_css_cad="template_3/icadastro.css";}
elseif (STRCHR($_SERVER['HTTP_USER_AGENT'],'Firefox')) {
   $dir_css_cad="template_3/fcadastro.css";}
else{
   $dir_css_cad="template_3/fcadastro.css";};
   
$url = $_SERVER ['REQUEST_URI'];   

$dir_img="template_3/images";
$dir_css="template_3/";
$dir_js="template_3/js/";
$dir_editor="editor/";

$pag_pri = 'First.png';
$pag_ant = 'Back.png';
$pag_pro = 'Forward.png';
$pag_ult = 'Last.png';

$tam_col_esq=520;

include_once('tbs/tbs_class.php');
include_once('tbs/plugins/tbs_plugin_bypage.php');
include_once('tbs/plugins/tbs_plugin_navbar.php');
include_once('tbs/conexao.php');
include_once('login/seguranca.php');
include_once('func/funcoes.fcn');

$SES= new SessionManager;
$TBS = new clsTinyButStrong;

if (isset($_REQUEST['sair'])) {
   $SES -> destroiSession();
   ibase_close($conn);
   $logado="Off";
   print('<script>document.location="index.php";</script>');};

include_once('tbs/plugins/tbsdb_firebird.php');
$mostravar=1;
$logado='Off';
global $idsecao;
$idsecao=0;
$msg="";
$link_logoff="index.php";
$cssform = 'forms2';

if (isset($_REQUEST['idsecao'])) {
   $idsecao=$_REQUEST['idsecao'];
   include_once('sql/secoes.php');};
//$idmenu=1;

$logado=$SES -> isValidSession($event);
if (isset($_REQUEST['login'])) {
   $login=$_REQUEST['login'];
   $senha=$_REQUEST['senha'];
   include_once('login/login.php');
};
$login="";
$senha="";

if (isset($_SESSION['id'])){$userid=base64_decode($_SESSION['id']);}else {$userid="";};
if (isset($_SESSION['userLogin'])){$usuario=$_SESSION['userLogin'];}else {$usuario="";};
if (isset($_SESSION['userNome'])){$nome=$_SESSION['userNome'];}else {$nome="";};
if (isset($_SESSION['Acesso'])){$acesso=$_SESSION['Acesso'];}else {$acesso="";};

$logado=$SES -> isValidSession($event);

if ($logado == 'On'){
 if ($_SESSION['idmenu'] == ''){
   $_SESSION['idmenu'] = 9;}
 else if (isset($_REQUEST['idmenu'])) {
   $idmenu=$_REQUEST['idmenu'];
   $_SESSION['idmenu'] = $_REQUEST['idmenu'];}; 
   include_once('sql/sql_menu.php');
   include_once('sql/sql_submenu.php');
   include_once('sql/sql_filial.php');
   include_once('sql/sql_curso.php');
   $idsub  = $_REQUEST['idsub'];
   $idtab  = $_REQUEST['idtab'];
};

/*if (isset($_REQUEST['idmenu'])) {
	echo 'passou';
  $idmenu=$_REQUEST['idmenu'];
  $_SESSION['idmenu'] = $_REQUEST['idmenu'];};*/

global $mostra_tab;
$mostra_tab = false;
if (isset($_REQUEST['form'])){
   include_once('forms/formularios.php');
   $form= $_REQUEST['form'];}
else {$form= 'pri';};

if (isset($_REQUEST['cssform'])) {
   $cssform =$_REQUEST['cssform'];};

global $mostra_ed;
if (isset($_REQUEST['mostra_ed'])){
   $mostra_ed = true;}
else {$mostra_ed = 'ssss';};

if (isset($_REQUEST['subform'])){
   $subform = $_REQUEST['subform'];}
else {$subform = '';};

$form2 = 'setar';
if (isset($_REQUEST['setado'])){
   $_SESSION['filialpric'] = $_REQUEST['filialpric'];
   $_SESSION['cursopric']  = $_REQUEST['cursopric'];
   $_SESSION['anopric']    = $_REQUEST['anopric'];
   $_SESSION['sempric']    = $_REQUEST['sempric'];
   $_SESSION['id_cur_set'] = '';
   $_SESSION['id_tur_set'] = '';
   $_SESSION['mat_set'] = '';
   $_SESSION['id_pro_set'] = '';};

$iniciado = false;
if($_SESSION['filialpric'] != ''){
$iniciado = True;};

$mostra_alu = false;
if (($_SESSION['mat_set'] != '')) {
  $mostra_alu = True;};
  
$mostra_pro = false;
if (($_SESSION['id_pro_set'] != '')) {
  $mostra_pro = True;};
  
$mostra_cur = false;
if (($_SESSION['id_cur_set'] != '')) {
  $mostra_cur = True;};

$mostra_tur = false;
if (($_SESSION['id_tur_set'] != '')) {
  $mostra_tur = True;};
  
$mostra_est = false;
if (($_SESSION['ide_set'] != '')) {
  $mostra_est = True;};  

$turmasel = '';
$turmasel_tot = '';
$mostra_dic_tur = false;
if (($_REQUEST['idtur_alu'] != '') or ($_REQUEST['idtur_tot'] != '')) {
  if($_REQUEST['idtur_alu'] != ''){
    $turmasel = $_REQUEST['idtur_alu'];}
  else {$turmasel_tot = $_REQUEST['idtur_tot'];};
  $mostra_dic_tur = True;};
  
$mostra_dic_turp = false;
if (($_REQUEST['idtur_alup'] != '') or ($_REQUEST['idtur_totp'] != '')) {
  if($_REQUEST['idtur_alup'] != ''){
    $turmasel = $_REQUEST['idtur_alup'];}
  else {$turmasel_tot = $_REQUEST['idtur_totp'];};
  $mostra_dic_turp = True;};  

if ($_SESSION['l_ini'] == ''){
 $_SESSION['l_menu'] = 'Fora';
 unset($_SESSION['l_menu_n']);
 $_SESSION['l_sub'] = 'Fora';
 unset($_SESSION['l_sub_n']);
 $_SESSION['l_tab'] = 'Fora';
 unset($_SESSION['l_tab_n']);	
};

if (($_GET['n'] == '1') and ($_GET['idmenu'] == 9)){
 $_SESSION['l_ini'] = 'idmenu=9&n=1&no=In%EDcio';	
 $_SESSION['l_menu'] = 'Fora';
 unset($_SESSION['l_menu_n']);
 $_SESSION['l_sub'] = 'Fora';
 unset($_SESSION['l_sub_n']);
 $_SESSION['l_tab'] = 'Fora';
 unset($_SESSION['l_tab_n']);  	
};

if (($_GET['n'] == '1') and ($_GET['idmenu'] != 9)){
 $_SESSION['l_ini'] = 'idmenu=9&n=1&no=In%EDcio';	
 $_SESSION['l_menu'] = $QUERY_STRING;
 $_SESSION['l_menu_n'] = $_GET['no'];
 $_SESSION['l_sub'] = 'Fora';
 unset($_SESSION['l_sub_n']);
 $_SESSION['l_tab'] = 'Fora';
 unset($_SESSION['l_tab_n']);  	
};

if ($_GET['n'] == '2'){
 $_SESSION['l_sub'] = $QUERY_STRING;
 $_SESSION['l_sub_n'] = $_GET['no'];
 $_SESSION['l_tab'] = 'Fora';
 unset($_SESSION['l_tab_n']); 	
};

if ($_GET['n'] == '3'){
 $_SESSION['l_tab'] = $QUERY_STRING;
 $_SESSION['l_tab_n'] = $_GET['no'];};
 
$link[] = array('ini'=>$_SESSION['l_ini'], 
              'ML'=>$_SESSION['l_menu'], 'MN'=> $_SESSION['l_menu_n'],
              'SL'=>$_SESSION['l_sub'], 'SN'=>$_SESSION['l_sub_n'], 
			  'TL'=>$_SESSION['l_tab'], 'TN'=>$_SESSION['l_tab_n']);
              
//print_r($link);              

//echo $_SESSION['mat_pesq'];
//[_SESSION.mat_pesq]   mostrar sessão no Template html
//$TBS->NoErr = true;
$TBS->LoadTemplate('template_3/index.htm');
include_once('tbs/MergeBlock.php');
ibase_close($conn);
//include_once 'tools/debug.php';
$TBS->Show();

?>


