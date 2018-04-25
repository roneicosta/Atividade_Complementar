<?php
session_start();

if (STRCHR($_SERVER['HTTP_USER_AGENT'],'MSIE 6')!='') {
   $dir_css_cad="../template_3/icadastro.css";}
elseif (STRCHR($_SERVER['HTTP_USER_AGENT'],'Firefox')) {
   $dir_css_cad="../template_3/fcadastro.css";}
else{
   $dir_css_cad="../template_3/fcadastro.css";};
   

include_once('../tbs/plugins/tbs_plugin_bypage.php');
include_once('../tbs/plugins/tbs_plugin_navbar.php');
include_once('../tbs/tbs_class.php');
include_once('../tbs/conexao.php');
include_once('../func/funcoes.fcn');

$dir_img="../template_3/images";
$dir_css="../template_3/";
$dir_js="../template_3/js/";

$pag_pri = 'First.png';
$pag_ant = 'Back.png';
$pag_pro = 'Forward.png';
$pag_ult = 'Last.png';

$data = data();
$hora = date("H:i:s");

$TBS = new clsTinyButStrong;
include_once('../tbs/plugins/tbsdb_firebird.php');
global $idsecao;
$idsecao=0;
if (isset($_REQUEST['idsecao'])) {
   $idsecao=$_REQUEST['idsecao'];};
   
if (isset($_REQUEST['form'])){
   $form = $_REQUEST['form'];}
else {$form = '2S';};

if ($_REQUEST['form'] == 'vpa101'){
  if (isset($_REQUEST['nome_pesq'])) {
          $_SESSION['parte'] = "nome_pesq=". $_REQUEST['nome_pesq']; }
        else if (isset($_REQUEST['mat_pesq'])){
          $_SESSION['parte'] = "mat_pesq=". $_REQUEST['mat_pesq']; }; 		
  include_once('../sql/sql_p_a101.php');};
  
if ($_REQUEST['idsecao'] == '13S'){
	 $_SESSION['cad_p_bas'] = $_REQUEST['cad_p_bas'];
	 $_SESSION['id_p_bas'] = $_REQUEST['id_p_bas'];
	 $_SESSION['nome_p_bas'] = $_REQUEST['nome_p_bas'];	
  include_once('../sql/sql_p_basico.php');};
 
$TBS->LoadTemplate('search.htm');

if (!isset($_GET)) $_GET=&$HTTP_GET_VARS ;
if (isset($_GET['PageNum'])) {
  $PageNum = $_GET['PageNum'];
} else {
    $PageNum = 1;
}
// Default value
if (isset($_GET['RecCnt'])) {
  $RecCnt = intval($_GET['RecCnt']);
} else {
    $RecCnt = -1;
}
$PageSize = 10;

if ($_REQUEST['form'] == 'vpa101'){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_a101',$conn,$sql_pesq_a101);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if (($_REQUEST['form'] == 'vpc1p') or ($_REQUEST['form'] == 'vpc2p') or ($_REQUEST['form'] == 'vpc3p')){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_basico',$conn,$sql_pesq_basico);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

ibase_close($conn);
//include_once '../tools/debug.php';
$TBS->Show();
?>
