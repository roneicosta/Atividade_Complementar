<?php
session_start();
// Início config
$raiz=$_SERVER['SCRIPT_FILENAME']."/";

IF (STRCHR($_SERVER['HTTP_USER_AGENT'],'MSIE 6')!='') {
$dir_css_cad="template_3/icadastro.css";
}elseif (STRCHR($_SERVER['HTTP_USER_AGENT'],'Firefox')) {
$dir_css_cad="template_3/fcadastro.css";
}else{
$dir_css_cad="template_3/fcadastro.css";
}

$dir_img="template_3/images/";
$dir_css="template_3/";
$dir_js="template_3/js/";
// Fim config
// Início includes
$tam_col_esq=520;

include_once('tbs/tbs_class.php');
include_once('tbs/plugins/tbs_plugin_bypage.php');
include_once('tbs/plugins/tbs_plugin_navbar.php');
include_once('tbs/conexao.php');
include_once ('login/seguranca.php');
include_once ('func/funcoes.fcn');
$TBS = new clsTinyButStrong;
$SES= new SessionManager;
if (isset($_REQUEST['sair'])) {
$SES -> destroiSession();
$logado="Off";
header("Location: index.php");
};
//$conn = ibase_connect('10.1.1.2:D:\Sistemas\BD\GESTAOESCOLAR.FDB','SYSDBA','masterkey');
include_once('tbs/plugins/tbsdb_firebird.php');
$mostravar=1;
$logado='Off';
$idsecao=0;
$msg="";
$link_logoff="index.php";
if (isset($_REQUEST['idsecao'])) {
  $idsecao=$_REQUEST['idsecao'];
};
$idmenu=1;

if (isset($_REQUEST['idmenu'])) {
  $idmenu=$_REQUEST['idmenu'];
  $_SESSION['idmenu'] = $_REQUEST['idmenu'];
};
//echo $_SESSION['idmenu'];
if($idsecao==1) { include_once('sql/i_disciplina.php');}
else if ($idsecao==2) {include_once('sql/i_turma.php');}
else if ($idsecao==3) {
     if   (isset($_REQUEST['id_aluno'])) {include_once('sql/u_aluno.php');} 
     else {include_once('sql/i_aluno.php');};}
else if ($idsecao==8) {include_once('sql/pesq_aluno_nome.php');}
else if (isset($_REQUEST['acao'])){
     if ($_REQUEST['acao']=="Alt") {include_once('sql/pesq_aluno_id.php');};
     if ($_REQUEST['acao']=="Del") {include_once('sql/del_aluno_id.php');};};

if ($form = 9) 
{
include_once('sql/lista_aluno.php');
}

$logado=$SES -> isValidSession($event);
if (isset($_REQUEST['login'])) {
$login=$_REQUEST['login'];
$senha=$_REQUEST['senha'];
include_once('login/login.php');
};
$login="";
$senha="";

if (isset($_REQUEST['form'])){$form=($_REQUEST['form']);}else {$form=0;};
if (isset($_SESSION['id'])){$userid=base64_decode($_SESSION['id']);}else {$userid="";};
if (isset($_SESSION['userLogin'])){$usuario=$_SESSION['userLogin'];}else {$usuario="";};
if (isset($_SESSION['userNome'])){$nome=$_SESSION['userNome'];}else {$nome="";};
//echo "xxxx ".$_SESSION['idSetorArea'];
$logado=$SES -> isValidSession($event);

if ($logado == 'On'){
 if($_SESSION['idmenu'] == ''){
  $_SESSION['idmenu'] = 3;}
include_once('sql/pesq_menu.php');
include_once('sql/pesq_submenu.php');
};

$mostra_alu = false;

if ((isset($_REQUEST['mat_pesq']) ) or ($_SESSION['mat_pesq'] == '') ) {
  if ( $_REQUEST['mat_pesq'] != '') {
    $_SESSION['mat_pesq'] = $_REQUEST['mat_pesq'];
	$_SESSION['nome_alu'] = abreviar_nome ($_REQUEST['nome_alu']);
    $mostra_alu = true; }; };
//echo $_SESSION['mat_pesq'];
//[_SESSION.mat_pesq]   mostrar sessão no Template html
$mostra = false;
if (isset($_REQUEST['form'])) {
  if (( $_REQUEST['form'] == '7S') or ( $_REQUEST['form'] == '100')) {
    $mostra = true;} };

$TBS->LoadTemplate('template_3/index.htm');
$reccont = $TBS->MergeBlock('blk_menu',$conn,$sql_menu);
$reccont2 = $TBS->MergeBlock('blk_submenu',$conn,$sql_submenu);

if ($mostra == 1) {
    include_once('sql/pesq_tabs.php');
    $TBS->MergeBlock('blk_tabs',$conn,$sql_tabs);};

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

$est = array ("AC" => "Acre", "AL" => "Alagoas", "AM" => "Amazonas",
                       "AP" => "Amapa", "BA" => "Bahia", "CE" => "Ceará",
					   "ES" => "Espirito Santo", "MA" => "Maranhão", "GO" => "Goiás",
					   "MG" => "Minas Gerais", "PA" => "Pará", "PI" => "Piauí",
					   "DF" => "Distrito Federal", "RR" => "Roraima", "SP" => "São Paulo",
					   "RJ" => "Rio de Janeiro", "MT" => "Mato Grosso", "PR" => "Paraná",
					   "MS" => "Mato Grosso do Sul", "RS" => "Rio Grande do Sul",
					   "RN" => "Rio Grande do Norte", "SC" => "Santa Catarina",
					   "SE" => "Sergipe", "TO" => "Tocantins", "RO" => "Rondônia",
					   "PB" => "Paraíba", "PE" => "Pernambuco");
//$TBS->MergeBlock('blk_lista_aluno',$conn,$pesquisa_aluno);
$TBS->MergeBlock('blk_ar','array',$est);
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_aluno',$conn,$sql_pesq_aluno_nome);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);
$TBS->MergeBlock('blk_pesq_aluno_id',$conn,$sql_pesq_aluno_id);

ibase_close($conn);
//include_once 'tools/debug.php';
$TBS->Show();
// Fim TBS
function f_funcao($Name,&$CurrRec,$RecNum) {
global $x,$total;
$x=$x+1;
$total=$total+ $CurrRec['T3_ID'];
//echo $x;
$CurrRec['var_x'] =0;
$CurrRec['x'] =$x;
$CurrRec['t3id'] =$total;
};
?>


