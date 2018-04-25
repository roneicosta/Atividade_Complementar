<?php
$p1=md5(TRIM($_REQUEST['senha']));
$sql="SELECT "
." USU_ID"
.",USU_CPF"
.",USU_NOME"
.",USU_ACESSO"
." FROM USU01"
." WHERE USU_NOME='".$_REQUEST['login']."'"
." AND USU_SENHA='".$p1."'";
//echo $_REQUEST['senha'];
//echo "<br>".$sql;
$rs = ibase_query($conn, $sql) or die("<center>Base login de dados não existe</center>");
$nr_li=ibase_num_fields($rs);
if ($nr_li>0) {
$rs_ar=ibase_fetch_assoc($rs);
$SES ->registerSession($rs_ar['USU_ID'], $rs_ar['USU_CPF'], $rs_ar['USU_NOME'],$rs_ar['USU_ACESSO']);
//$login_usuario=$_SESSION['userNome'];
//$login_id= base64_decode($_SESSION['userId']);
};
?>
