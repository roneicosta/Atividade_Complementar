<?php
echo '<div class="container">';
echo "<div id='titcad'>Dados Matrícula </div>";
echo "<form name='SAA01' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<caption><label id='nome'>[var._SESSION.mat_set] - [var._SESSION.nome_set]</label></caption>";
echo "<tr><td><input name='AA_filial'type='hidden'value='00'size='10'></td></tr>";
echo "<tr><td><input name='AA_idalu'type='hidden'value='[var._SESSION.id_set]'size='10'></td></tr>";
echo "<tr><td><input name='AA_anotur'type='hidden'value='[var._SESSION.anopric]'size='4'></td></tr>";
echo "<tr><td><input name='AA_semtur'type='hidden'value='[var._SESSION.sempric]'size='2'></td></tr>";
echo "<tr><td width='110'><label for='AA_mosid'>Código/ID</label></td>";
echo "<td><select  label='AA_idtur' name='AA_idtur' ><option value='[blk_select_sa401.A4_ID;block=option]'>[blk_select_sa401.A4_ID]</option></select></td></tr>";
echo "<tr><td width='110'><label for='AA_mosanotur'>Ano</label></td>";
echo "<td><input label='A6_mosanotur'name='AA_mosanotur'type='text'value='[var._SESSION.anopric]'size='4' maxlength='4' disabled> </td></tr>";
echo "<tr><td width='110'><label for='A8_mossemtur'>Semestre</label></td>";
echo "<td><input label='AA_mossemtur'name='AA_mossemtur'type='text'value='[var._SESSION.sempric]'size='2' maxlength='2' disabled> </td></tr>";
echo "<tr><td width='110'><label for='AA_mod'>Modalidade</label></td>";
echo "<td><select  label='AA_mod' name='AA_mod' >".lista_modalidade()."</select></td></tr>";
echo "<tr><td width='110'><label for='AA_data'>Data</label></td>";
echo "<td><input label='AA_data'name='AA_data'type='text'value='".data()."'size='10' onkeypress='mascara(this,data)' maxlength='10'> </td></tr>";
echo "<td><input name='idsecao'type='hidden'value='SAA01IU'size='7'></td></tr>";
echo "<tr><td><input name='AA_premat'type='hidden'value='N'size='10'></td>";
echo "<td><input name='form'type='hidden'value='4S'size='2'></td>";
echo "<td><input name='idsub'type='hidden'value='4'size='2'></td></tr>";
echo "</table>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>


