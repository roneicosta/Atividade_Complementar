<?php
echo '<div class="container">';
echo "<div id='titcad'>Cadastro Horário</div>";
echo "<form name='SAC01A' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td><input name='AC_ID'type='hidden'value='[blk_bas_alt.AC_ID]'size='10'></td></tr>";
echo "<tr><td><input name='AC_filial'type='hidden'value='[blk_bas_alt.AC_FILIAL]'size='10'></td></tr>";
echo "<tr><td width='110'><label for='AC_mosid'>Código/ID</label></td>";
echo "<td><input name='AC_mosid'type='text'value='[blk_bas_alt.AC_ID]'size='5' disabled></td>";
echo "<tr><td width='110'><label for='AC_nome'>Nome</label></td>";
echo "<td><input label='Nome'name='AC_nome'type='text'value='[blk_bas_alt.AC_DESCR]'size='50'Req='true' Camp='Nome'> </td></tr>";
echo "<tr><td><input name='idsecao'type='hidden'value='SAC01IU'size='7'></td></tr>";
echo "<tr><td><input name='formant'type='hidden'value='8S'size='2'></td></tr>";
echo "<tr><td><input name='formpesq'type='hidden'value='13S'size='2'></td></tr>";
echo "</table>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>


