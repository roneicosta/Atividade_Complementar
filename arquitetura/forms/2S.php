<?php
echo '<div class="container">';
echo "<div id='titcad'>Informe Matrícula ou Nome para pesquisar</div>";
echo '<form title="Pesquisa" name="2S" action="index.php" method="post"  onSubmit="return checkEditvFields(this)">';
echo '<div class="simpleTabs">';
echo '<table border=0 bgcolor="#E6E6E6" width="100%">';
echo '<tr><td width="85"><label for="mat_pesq">Matricula </label></td>';
echo '<td><input label="Matricula"name="mat_pesq"type="text"value=""size="20"  > </td></tr>';
echo '<tr><td width="85"><label for="nome_pesq">Nome </label></td>';
echo '<td><input label="Nome"name="nome_pesq"type="text"value=""size="50"  > </td></tr>';
echo '</table>';
echo '<input name="idsecao"type="hidden"value="2S"size="2">';
echo '<input name="form"type="hidden"value="vpa101"size="6" >';
echo '</table>';
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></fieldset></form></div></div>';

?>
