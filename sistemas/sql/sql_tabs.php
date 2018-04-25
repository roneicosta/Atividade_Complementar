<?php
	$sql_tabs = "SELECT TA.*,UN.TMA_NIVEL 
	            FROM TM301 TA, TMA01 UN
				WHERE TA.TM3_ID = UN.TMA_IDMENU
				AND TA.TM3_IDSUBMENU = ".$_REQUEST['idsub']."
				AND UN.TMA_NIVEL = '3'
				AND UN.TMA_ACESSO = 'S'
				AND UN.TMA_IDUSUARIO = ".base64_decode($_SESSION['id'])."
				ORDER BY TA.TM3_ORDEM";


//  $sql_tabs = "SELECT * FROM TM301 WHERE TM3_IDSUBMENU =".$_REQUEST['idsub'];
?>

