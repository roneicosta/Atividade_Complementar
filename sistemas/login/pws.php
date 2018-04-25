<?php
echo 'senha = ' . $_REQUEST['senha']. '<br>';
$pws=md5($_REQUEST['senha']);
echo $pws;


?>
