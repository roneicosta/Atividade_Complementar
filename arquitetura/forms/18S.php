<?php
echo '<div class="container">';
echo "<div id='titcad'>Informe ID ou Período para pesquisar!</div>";
echo '<form title="Pesquisa" name="18S" action="index.php" method="post"  onSubmit="return checkEditvFields(this)">';
echo '<div class="simpleTabs">';
echo '<table border=0 bgcolor="#E6E6E6" width="100%">';
echo '<tr><td width="85"><label for="mat_pesq">Código/ID </label></td>';
echo '<td><input label="codigo"name="id_pesq"type="text"value=""size="20"  > </td></tr>';
echo "<tr><td width='110'><label for='A4_per'>Período</label></td>";
echo "<td><select  label='id_per' name='id_per' ><option value=''></option><option value='[blk_select_sal01.AL_ID;block=option]'>[blk_select_sal01.AL_DESCR]</option></select></td></tr>";
echo '</table>';
echo '<input name="idsecao"type="hidden"value="18S"size="2">';
echo '<input name="form"type="hidden"value="vpsa401"size="6" >';
echo '</table>';
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>
