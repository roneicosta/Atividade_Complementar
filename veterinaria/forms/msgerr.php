<?php
echo '<div class="container">';
echo "<div id='titcad'>Mensagem!!!</div>";
 echo "<form name='msg' action='index.php' method='post'>";
  echo '<div class="simpleTabs">';
 echo "<table border=0 id='tabcolomsgerr'  width='100%'>";
 echo "<tr><td colspan='2' id='tabcololnmsgerr'>[var.msg]</td></tr>";
 echo "<tr><td width='200' align='RIGHT'><img src='[var.dir_img]/icons/Undo_16.png' ALT='Voltar a tela anterior' TITLE='Voltar a tela anterior' >
       <td width='200'><a id='AncoraGridmsgerr' href='#' onClick='javascript:history.back();' TITLE='Voltar a tela anterior'>Voltar</a></td></tr>";
 echo "</table>";
 echo "</form></div></div>";
?>

