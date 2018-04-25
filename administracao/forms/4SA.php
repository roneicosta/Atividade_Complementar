<?php
echo '<div class="container">';
echo "<div id='titcad'>Dados Matrícula </div>";
echo "<form name='SAA01' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><label id='nome'>[var._SESSION.mat_set] - [var._SESSION.nome_comp]</label></tr>";
echo "<tr><td><input name='AA_filial'type='hidden'value='[blk_saa01_alt.AA_FILIAL]'size='10'></td></tr>";
echo "<tr><td><input name='AA_idalu'type='hidden'value='[blk_saa01_alt.AA_IDALUNO]'size='10'></td></tr>";
echo "<tr><td><input name='AA_anotur'type='hidden'value='[blk_saa01_alt.AA_ANO]'size='4'></td></tr>";
echo "<tr><td><input name='AA_semtur'type='hidden'value='[blk_saa01_alt.AA_SEMESTRE]'size='2'></td></tr>";
echo "<tr><td><input name='AA_idtur'type='hidden'value='[blk_saa01_alt.AA_IDTURMA]'size='2'></td></tr>";
echo "<tr><td width='110'><label for='AA_mosidtur'>Código/ID</label></td>";
echo "<td><input label='AA_mosidtur'name='AA_mosidtur'type='text'value='[blk_saa01_alt.AA_IDTURMA]'size='10' maxlength='10' disabled> </td></tr>";
echo "<tr><td width='110'><label for='AA_mosanotur'>Ano</label></td>";
echo "<td><input label='A6_mosanotur'name='AA_mosanotur'type='text'value='[blk_saa01_alt.AA_ANO]'size='4' maxlength='4' disabled> </td></tr>";
echo "<tr><td width='110'><label for='A8_mossemtur'>Semestre</label></td>";
echo "<td><input label='AA_mossemtur'name='AA_mossemtur'type='text'value='[blk_saa01_alt.AA_SEMESTRE]'size='2' maxlength='2' disabled> </td></tr>";
echo "<tr><td width='110'><label for='AA_mod'>Modalidade</label></td>";
echo "<td><select  label='AA_mod' name='AA_mosmod' disabled>".lista_modalidade()."</select><script>document.SAA01.AA_mosmod.value = '[blk_saa01_alt.AA_MODAL]';</script></td></tr>";
echo "<tr><td width='110'><label for='AA_mosdata'>Data</label></td>";
echo "<td><input label='AA_data'name='AA_mosdata'type='text'value='[blk_saa01_alt.AA_DATA;frm='dd/mm/yyyy']'size='10' onkeypress='mascara(this,data)' maxlength='10' disabled> </td></tr>";

echo "<tr><td><input name='AA_mod'type='hidden'value='[blk_saa01_alt.AA_MODAL]'size='10'></td>";
echo "<tr><td><input name='idsecao'type='hidden'value='SAA01IU'size='7'></td>";
echo "<td><input name='form'type='hidden'value='4S'size='2'></td>";
echo "<td><input name='idsub'type='hidden'value='4'size='2'></td></tr>";
echo "</table></div>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div>';
?>


