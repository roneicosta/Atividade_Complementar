<?php
	$sql_menu = "SELECT ME.*,UN.TMA_NIVEL 
	             FROM TM101 ME, tma01 UN
 	  			 WHERE ME.tm1_id = UN.tma_idmenu
				 AND UN.tma_nivel = '1'
				 AND UN.tma_acesso = 'S'
				 AND UN.tma_idusuario =". base64_decode($_SESSION['id']).
				 "ORDER BY ME.TM1_ORDEM";

//$sql_menu = "SELECT * FROM TM101 ORDER BY TM1_ORDEM";
?>

