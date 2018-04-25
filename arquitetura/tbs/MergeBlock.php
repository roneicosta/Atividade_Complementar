<?php

$reccont = $TBS->MergeBlock('blk_menu',$conn,$sql_menu);
$reccont2 = $TBS->MergeBlock('blk_submenu',$conn,$sql_submenu);
$TBS->MergeBlock('blk_sql_p_id',$conn,$sql_p_a101_id);
if ($mostra_tab == 1) {
    $TBS->MergeBlock('blk_tabs',$conn,$sql_tabs);};

if ($idsecao == 'CBAS'){
    $TBS->MergeBlock('blk_bas_alt',$conn,$sql_p_bas_alt);};
if (($_REQUEST['form'] == '4SI') or ($_REQUEST['form'] == '4SA') or ($_REQUEST['form'] == '5SI') or ($_REQUEST['form'] == '5SA')){
    $TBS->MergeBlock('blk_select_sa401',$conn,$sql_p_sa401_sel);
    $TBS->MergeBlock('blk_saa01_alt',$conn,$sql_p_saa01_alt);
    $TBS->MergeBlock('blk_sba01_alt',$conn,$sql_p_sba01_alt);};
if (($_REQUEST['form'] == '4TI') or ($_REQUEST['form'] == '4TA') or ($idsecao == 'REL') or 
    ($idsecao == '22TI') or ($_REQUEST['form'] == '59SI') or ($_REQUEST['form'] == '59SA') or
	($_REQUEST['form'] == '61S') or ($_REQUEST['form'] == '65S') or ($_REQUEST['form'] == '67S')){/*Estágio 59SI*/
    $TBS->MergeBlock('blk_select_sa401',$conn,$sql_p_sa401_sel);
    $TBS->MergeBlock('blk_select_sa401_re',$conn,$sql_p_sa401_sel);
    $TBS->MergeBlock('blk_select_sa401_tot',$conn,$sql_p_sa401_sel_tot);};
if ($_REQUEST['form'] == '3T'){
    $TBS->MergeBlock('blk_lista_sf101',$conn,$sql_p_sf101_id_lista);
	$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);};
if ($_REQUEST['form'] == '4TA'){
    $TBS->MergeBlock('blk_lista_sab01',$conn,$sql_p_sab01_id);};    
if (($idsecao == 'REL') or ($_REQUEST['form'] == '51S')){
    $TBS->MergeBlock('blk_select_sa401',$conn,$sql_p_sa401_sel);};
if (($_REQUEST['form'] == '6TI') or ($_REQUEST['form'] == '6TA')){
    $TBS->MergeBlock('blk_select_sak01',$conn,$sql_p_sak01_sel);};
if (($_REQUEST['form'] == '7S') or ($_REQUEST['form'] == '7SA')){
    $TBS->MergeBlock('blk_sm001',$conn,$sql_sm001);};
if ($_REQUEST['form'] == '9TA'){
	$TBS->MergeBlock('blk_select_sa901',$conn,$sql_p_sa901_alt);};
if ($_REQUEST['form'] == '9TOI'){
	$TBS->MergeBlock('blk_sql_sa201_a1',$conn,$sql_p_sa201_a1);};
if ($unidade == 1){
    $TBS->MergeBlock('blk_fil_cad',$conn,$sql_filial);};
if ($curso == 1){
    $TBS->MergeBlock('blk_cur_cad',$conn,$sql_curso);};
if ($psubmenu == 1){
    $TBS->MergeBlock('blk_cad_p_bas',$conn,$sql_submenu);};
if (($_REQUEST['form'] == '17DI') or ($_REQUEST['form'] == '17DA') or ($_REQUEST['form'] == '9TI') or ($_REQUEST['form'] == '9TA') or ($_REQUEST['form'] == '59SI') or ($_REQUEST['form'] == '59SA')){/*Estágio 59SI*/
    $TBS->MergeBlock('blk_select_sa301',$conn,$sql_sa301);
    $TBS->MergeBlock('blk_select_sal01',$conn,$sql_sal01);
    if ($_REQUEST['form'] == '17DA'){
        $TBS->MergeBlock('blk_alt_discgrade',$conn,$sql_p_sa701_alt);};};
if (($_REQUEST['form'] == '17S')or ($_REQUEST['form'] == '17SA')){
    $TBS->MergeBlock('blk_select_sal01',$conn,$sql_sal01);
    $TBS->MergeBlock('blk_select_sa601',$conn,$sql_p_sa601);};
if (($_REQUEST['form'] == '18S') or ($idsecao == '17SA')) {
    $TBS->MergeBlock('blk_select_sal01',$conn,$sql_sal01);};
if (($_REQUEST['form'] == '18PI') or ($_REQUEST['form'] == '18PA')){
    $TBS->MergeBlock('blk_select_sa301',$conn,$sql_sa301);
	$TBS->MergeBlock('blk_select_sa301_pre',$conn,$sql_sa301);}	
if (($_REQUEST['form'] == '13TI') or ($idsecao == '13TA')) {
    $TBS->MergeBlock('blk_select_sa701',$conn,$sql_p_sa701_sel);
    $TBS->MergeBlock('blk_select_sac01',$conn,$sql_p_sac01_sel);
	$TBS->MergeBlock('blk_select_saf01',$conn,$sql_p_saf01_sel);};
if ($idsecao == '13TA') {
    $TBS->MergeBlock('blk_cad_sa801',$conn,$sql_p_sa801_alt);};

if ($_REQUEST['form'] == '20S'){
    $TBS->MergeBlock('blk_lista_sao01_sel',$conn,$sql_p_sao01_sel);
    $TBS->MergeBlock('blk_lista_sa801_nf',$conn,$sql_p_sa801_nf);};

if ($_REQUEST['form'] == '20SA'){
    $TBS->MergeBlock('blk_lista_sd101,blk_lista_sd101_2',$conn,$sql_p_sad01_id);}

if (($_REQUEST['form'] == '23T') or ($_REQUEST['form'] == '53S')){
    $TBS->MergeBlock('blk_select_sf701_sel',$conn,$sql_p_sf701_sel);
	$TBS->MergeBlock('blk_select_sa501_vl',$conn,$sql_p_sa501_vl);}
if ($_REQUEST['form'] == '23TI'){
    $TBS->MergeBlock('blk_ger_sf101',$conn,$iu_ger_sf101);}
if (($_REQUEST['form'] == '41SI') or ($_REQUEST['form'] == '41SA')){
    $TBS->MergeBlock('blk_select_sf801',$conn,$sql_p_sf801_sel);
	$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);
	$TBS->MergeBlock('blk_lista_sf501',$conn,$sql_p_sf501_alt);};
if (($_REQUEST['form'] == '42SI') or ($_REQUEST['form'] == '42SA')){
    $TBS->MergeBlock('blk_select_sf301',$conn,$sql_p_sf301_sel);
	$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);
	$TBS->MergeBlock('blk_lista_sf601',$conn,$sql_p_sf601_alt);}; 
if ($_REQUEST['form'] == '45S'){
	$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);
	$TBS->MergeBlock('blk_lista_sf101_rec',$conn,$sql_p_sf101_id_rec);};
if (($_REQUEST['form'] == '44SI') or ($_REQUEST['form'] == '44SA')){
	$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);
	$TBS->MergeBlock('blk_lista_sfb01',$conn,$sql_p_sfb01_alt);};	 
if ($_REQUEST['form'] == '45SA'){
	$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);
	$TBS->MergeBlock('blk_select_sf801',$conn,$sql_p_sf801_sel);
	$TBS->MergeBlock('blk_campos_sf101_rec','array','all_array[camp]');};
if ($_REQUEST['form'] == '45SC'){
	$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);
	$TBS->MergeBlock('blk_campos_sfd01_ch','array','all_array[camp]');};
if ($_REQUEST['subform'] == '45SNG'){
  $TBS->MergeBlock('blkneg',$record);};
if (($_REQUEST['form'] == '46S') or ($_REQUEST['form'] == '46SN')){
	$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);
	$TBS->MergeBlock('blk_lista_sf101_est',$conn,$sql_p_sf101_est_p);
	$TBS->MergeBlock('blk_lista_sf101_est_n',$conn,$sql_p_sf101_est_n);};  
if (($_REQUEST['form'] == '48SI') or ($_REQUEST['form'] == '48SA')){
	$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);
	$TBS->MergeBlock('blk_lista_sfa01',$conn,$sql_p_sfa01_alt);};
if (($_REQUEST['form'] == '51S') or ($_REQUEST['form'] == '45SN')){
    $TBS->MergeBlock('blk_select_sf701_sel',$conn,$sql_p_sf701_sel);
	$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);};						    
if ($_REQUEST['form'] == '51SA'){
    $TBS->MergeBlock('blk_lista_sf101',$conn,$iu_ger_sf101_saa);};
if ($_REQUEST['form'] == '53SA'){
    $TBS->MergeBlock('blk_lista_sff01',$conn,$sql_p_sff1_lista);}; 
if (($_REQUEST['form'] == '68SI') or ($_REQUEST['form'] == '68SA')){/*Estágio 59SI*/
    $TBS->MergeBlock('blk_select_sc101',$conn,$sql_p_sc101_sel);
	$TBS->MergeBlock('blk_select_sc201',$conn,$sql_p_sc201_sel);
	$TBS->MergeBlock('blk_lista_sc401',$conn,$sql_p_sc401_sel);
	$TBS->MergeBlock('blk_lista_sc501',$conn,$sql_p_sc501);};

if ($_REQUEST['form'] == '68S'){/*Estagio 59SI*/
$RecCnt = $TBS->MergeBlock('blk_lista_sc501',$conn,$sql_p_sc501);};
	
if (($_REQUEST['form'] == '30TI') or ($_REQUEST['form'] == '30TA')) {
    $TBS->MergeBlock('blk_select_se301',$conn,$sql_p_se301_sel);
	$TBS->MergeBlock('blk_select_saf01',$conn,$sql_p_saf01_sel);
	$TBS->MergeBlock('blk_lista_se401',$conn,$sql_p_se401_id);};
if ($_REQUEST['form'] == '61SI') {
	$TBS->MergeBlock('blk_lista_se501',$conn,$sql_p_se501);};		

$TBS->MergeBlock('blk_sql_filial',$conn,$sql_filial);
$TBS->MergeBlock('blk_sql_curso',$conn,$sql_curso);
$TBS->MergeBlock('blklink',$link);

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

if ($_REQUEST['form'] == '4S'){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_saa01',$conn,$sql_p_saa01_id);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if ($_REQUEST['form'] == '5S'){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sba01',$conn,$sql_p_sba01_id);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if ($mostra_dic_tur == 1){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sa801',$conn,$sql_p_sa801_lista);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if ($mostra_dic_turp == 1){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sbb01',$conn,$sql_p_sbb01_lista);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if ($_REQUEST['form'] == '4T'){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sab01',$conn,$sql_p_sab01_id);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if (($_REQUEST['form'] == '5T') or ($_REQUEST['form'] == '5TA')){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sap01',$conn,$sql_p_sap01);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if (($_REQUEST['form'] == '6T') or ($_REQUEST['form'] == '6TA')){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sah01',$conn,$sql_p_sah01);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if ($_REQUEST['form'] == '9T'){
$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);	
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sa901',$conn,$sql_p_sa901_id);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if ($_REQUEST['form'] == 'vpbas'){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_basico',$conn,$sql_pesq_basico);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if ($_REQUEST['form'] == 'vpa101'){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_a101',$conn,$sql_pesq_a101);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if (($_REQUEST['form'] == 'vpsaf01') or ($_REQUEST['form'] == '15SA')){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_saf01',$conn,$sql_pesq_saf01);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if ($_REQUEST['form'] == '21T'){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sa801_pro',$conn,$sql_p_sa801_pro);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if (($_REQUEST['form'] == 'vpsa201') or ($_REQUEST['form'] == '29SA')){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sa201',$conn,$sql_pesq_sa201);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if (($_REQUEST['form'] == 'vpsa401') or ($_REQUEST['form'] == '17SA')) {
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sa401',$conn,$sql_p_sa401);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if (($_REQUEST['form'] == 'vpsa601') or ($_REQUEST['form'] == '29GA')){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sa601',$conn,$sql_p_sa601_id);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if ($_REQUEST['form'] == '17T'){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sa701',$conn,$sql_p_sa701_id);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if (($_REQUEST['form'] == '18T') or ($_REQUEST['form'] == '18PA')){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sb101',$conn,$sql_p_sb101_id);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if (($_REQUEST['form'] == '12T') or ($_REQUEST['form'] == '12TA')){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sa501',$conn,$sql_p_sa501_id);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if (($_REQUEST['form'] == '13T') or ($_REQUEST['form'] == '13TA')){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sa801',$conn,$sql_p_sa801_id);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if (($_REQUEST['form'] == '22T') or ($_REQUEST['form'] == '22TA')){
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sbb01',$conn,$sql_p_sbb01_id);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if (($_REQUEST['form'] == '41S') or ($_REQUEST['form'] == '41SA')){
$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_f501',$conn,$sql_p_sf501_id);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if (($_REQUEST['form'] == '42S') or ($_REQUEST['form'] == '42SA')){
$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);	
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_f601',$conn,$sql_p_sf601_id);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if ($_REQUEST['form'] == '44S'){
$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sfb01',$conn,$sql_p_sfb01_id);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if ($_REQUEST['form'] == '48S'){
$TBS->MergeBlock('blk_tem_saa01',$conn,$sql_p_tem_saa01);	
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_sfa01',$conn,$sql_p_sfa01_id);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

if ($_REQUEST['form'] == '30T'){/*Estagio 59SI*/
$TBS->PlugIn(TBS_BYPAGE,$PageSize,$PageNum,$RecCnt);
$RecCnt = $TBS->MergeBlock('blk_lista_se401',$conn,$sql_p_se401);
$TBS->PlugIn(TBS_NAVBAR,'nv','',$PageNum,$RecCnt,$PageSize);};

?>