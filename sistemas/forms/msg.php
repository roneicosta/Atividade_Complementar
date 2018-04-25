<?php
echo '<div class="container">';
echo "<div id='titcad'>Mensagem!!!</div>";
 echo "<form name='msg' action='index.php' method='post'>";
 echo '<div class="simpleTabs">';
 echo "<table border='0' bgcolor='#E6E6E6' width='100%'>";
 echo "<tr><img src='[var.dir_img]/icons/warning_48.png' align='left'><P>[var.msg]</P></tr>";
 echo "<tr><td width='16'><img src='[var.dir_img]/icons/search_16.png' ALT='Pesquisar cadastro' TITLE='Pesquisar cadastro' align='left'></td>";
 echo "<td width='183'><a href='?form=".$_REQUEST['formpesq']."' TITLE='Pesquisar cadastro'>Pesquisar</a></td>";
 echo "<td width='16'><img src='[var.dir_img]/icons/Add_16.png' ALT='Novo cadastro' TITLE='Novo cadastro' align='LEFT'></td>
       <td width='183'><a href='?form=".$_REQUEST['formant']."' TITLE='Novo cadastro'>Novo_Cadastro</a></td>
       <td width='16'><img src='[var.dir_img]/icons/Undo_16.png' ALT='Voltar a tela anterior' TITLE='Voltar a tela anterior' align='LEFT'>
       <td width='183'><a href='#' onClick='javascript:history.back();' TITLE='Voltar a tela anterior'>Voltar</a></td></tr>";
 echo "</table>";
 echo "</form></div></div>";
?>

