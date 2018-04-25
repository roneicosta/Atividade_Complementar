<?php
echo '<div class="container">';
echo "<div id='titcad'>Cadastro Instituição</div>";
echo "<form name='SM001' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td><input name='CI_ID'type='hidden'value='[blk_bas_alt.C4_ID]'size='10'></td></tr>";
echo "<tr><td width='110'><label for='CI_mosid'>Código</label></td>";
echo "<td><input label='CI_mosid'name='CI_mosid'type='text'value='[blk_bas_alt.C4_ID]'size='5' required=true field='Codigo' maxlength='2' onkeypress='mascara(this,soNumeros)'> </td></tr>";
echo "<tr><td width='110'><label for='CI_nome'>Nome Instituição</label></td>";
echo "<td><input label='Nome'name='CI_nome'type='text'value='[blk_bas_alt.C4_DESCR]'size='70'required=true field='CI_nome'> </td></tr>";
echo "<tr><td><input name='idsecao'type='hidden'value='SC401IU'size='7'></td></tr>";
echo "<tr><td><input name='formant'type='hidden'value='62S'size='2'></td></tr>";
echo "<tr><td><input name='formpesq'type='hidden'value='13S'size='2'></td></tr>";
echo "</table>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>


