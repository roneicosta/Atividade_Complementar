<?php
echo '<div class="container">';
echo "<div id='titcad'>Cadastro Curso</div>";
echo "<form name='SA201' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td><input name='A2_ID'type='hidden'value='0'size='10'></td></tr>";
echo "<tr><td><input name='A2_filial'type='hidden'value='00'size='10'></td></tr>";
echo "<tr><td width='110'><label for='A2_mosid'>C�digo/ID</label></td>";
echo "<td><input name='A2_mosid'type='text'value='0'size='5' disabled></td>";
echo "<tr><td width='110'><label for='A2_nome'>Nome</label></td>";
echo "<td><input label='Nome'name='A2_nome'type='text'value=''size='50'Req='true' Camp='Nome'> </td></tr>";
echo "<tr><td width='110'><label for='A2_espec'>Forma</label></td>";
echo "<td><select  label='A2_forma' name='A2_forma' >" .formacurso()."</select></td></tr>";
echo "<tr><td width='110'><label for='A2_habil'>Habilita��o</label></td>";
echo "<td><input label='Nome'name='A2_habil'type='text'value=''size='50'> </td></tr>";
echo "<tr><td width='110'><label for='A2_nprov'>N� Provis�rio</label></td>";
echo "<td><input label='A2_freq'name='A2_nprov'type='text'value=''size='20' maxlength='20'> </td></tr>";
echo "<tr><td width='110'><label for='A2_dataprov'>Data Provis�rio</label></td>";
echo '<td><input label="A1_dataexp" name="A2_dataprov"type="text" value="" size="10" onkeypress="mascara(this,data)" maxlength="10"> </td></tr>';
echo "<tr><td width='110'><label for='A2_valor'>N� Autoriza��o</label></td>";
echo "<td><input label='A2_nauto'name='A2_nauto'type='text'value=''size='20' maxlength='20'> </td></tr>";
echo "<tr><td width='110'><label for='A2_dataauto'>Data Autoriza��o</label></td>";
echo '<td><input label="A1_dataauto" name="A2_dataauto"type="text" value="" size="10" onkeypress="mascara(this,data)" maxlength="10"> </td></tr>';
echo "<tr><td width='110'><label for='A2_sigla'>Sigla</label></td>";
echo "<td><input label='A2_sigla'name='A2_sigla'type='text'value=''size='20' maxlength='20'> </td></tr>";
echo "<tr><td width='110'><label for='A2_ord'>Ordem</label></td>";
echo "<td><input label='AO_valor'name='A2_ord'type='text'value='0'size='13' maxlength='13' onkeypress='mascara(this,soNumeros)' Req='true' Camp='Ordem'> </td></tr>";
echo "<tr><td><input name='idsecao'type='hidden'value='SA201IU'size='7'></td></tr>";
echo "<tr><td><input name='formant'type='hidden'value='29S'size='2'></td></tr>";
echo "<tr><td><input name='formpesq'type='hidden'value='30S'size='2'></td></tr>";
echo "</table>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>


