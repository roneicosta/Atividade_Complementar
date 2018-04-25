<?php
  $sql_submenu = "SELECT SB.*,UN.TMA_NIVEL
                  FROM TM201 SB, TMA01 UN
				  WHERE SB.TM2_ID = UN.TMA_IDMENU
				  AND   SB.TM2_IDMENU = ". $_SESSION['idmenu']."
				  AND UN.TMA_NIVEL = '2'
				  AND UN.TMA_ACESSO = 'S'
				  AND UN.TMA_IDUSUARIO = ".base64_decode($_SESSION['id'])."
				  ORDER BY SB.TM2_ORDEM";

//$sql_submenu = "SELECT * FROM TM201 WHERE TM2_IDMENU =". $_SESSION['idmenu'];
//echo  $sql_submenu;
?>
