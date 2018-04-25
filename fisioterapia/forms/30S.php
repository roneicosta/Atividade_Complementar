<?php
echo '<div class="container">';
echo "<div id='titcad'>Informe ID ou Nome para pesquisar</div>";
echo '<form title="Pesquisa" name="30S" action="index.php" method="get"  onSubmit="return checkEditvFields(this)">';
echo '<div class="simpleTabs">';
echo '<table border=0 bgcolor="#E6E6E6" width="100%">';
echo '<tr><td width="110"><label for="id_pesq">Código/ID </label></td>';
echo '<td><input label="Codigo"name="id_p_sa201"type="text"value=""size="10"  onkeypress="mascara(this,soNumeros)"> </td></tr>';
echo '<tr><td width="110"><label for="nome_p_sa201">Nome </label></td>';
echo '<td><input label="Nome"name="nome_p_sa201"type="text"value=""size="50"  > </td></tr>';
echo '</table>';
echo '<input name="idsecao"type="hidden"value="30S"size="2">';
echo '<input name="form"type="hidden"value="vpsa201"size="6" >';
echo '</table>';
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>
