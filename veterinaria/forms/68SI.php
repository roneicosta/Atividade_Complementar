<?php
echo '<div class="container">';
echo "<div id='titcad'>Cadastro Atividade</div>";
echo "<form name='CADATI' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><label id='nome'>[var._SESSION.mat_set] - [var._SESSION.nome_set]</label></tr>";
echo "<tr><td><input name='C5_filial'type='hidden'value='00'size='10'></td></tr>";
echo "<tr><td><input name='C5_seq'type='hidden'value='0'size='10'></td></tr>";
echo "<tr><td width='110'><label for='C5_mosseq'>ID/Codígo</label></td>";
echo "<td><input label='C5_mosidest'name='C5_seq'type='text'value='0'size='4' maxlength='4' disabled> </td></tr>";
echo "<tr><td width='110'><label for='C5_mosanotur'>Ano</label></td>";
echo "<td><input label='A6_mosanotur'name='C5_mosanotur'type='text'value='[var._SESSION.anopric]'size='4' maxlength='4' disabled> </td></tr>";
echo "<tr><td width='110'><label for='C5_mossemtur'>Semestre</label></td>";
echo "<td><input label='C5_mossemtur'name='C5_mossemtur'type='text'value='[var._SESSION.sempric]'size='2' maxlength='2' disabled> </td></tr>";
echo "<tr><td width='110'><label for='C5_idativ'>Atividade</label></td>";
echo "<td><select  style='width:70%;' label='C5_idativ' name='C5_idativ' Req='true' Camp='Atividade'><option value=''></option><option value='[blk_select_sc101.C1_ID;block=option]'>[blk_select_sc101.C1_DESCR;ope=max:60]-[blk_select_sc101.C1_ID]</option></select></td>";
echo "<tr><td width='110'><label for='C5_idativ'>Evento</label></td>";
echo "<td><select style='width:70%;' label='C5_ideve' name='C5_ideve' Req='true' Camp='Evento' ><option value=''></option><option value='[blk_select_sc201.C2_ID;block=option]'>[blk_select_sc201.C2_DESCR;ope=max:60]-[blk_select_sc201.C2_ID]</option></select></td></tr>";
echo "<tr><td width='110'><label for='C5_idinst'>Instituição</label></td>";
echo "<td><select style='width:70%;' label='C5_idinst' name='C5_idinst' Req='true' Camp='Instituição'><option value=''></option><option value='[blk_lista_sc401.C4_ID;block=option]'>[blk_lista_sc401.C4_DESCR;ope=max:60]-[blk_lista_sc401.C4_ID]</option></select></td></tr>";
echo "<tr><td width='110'><label for='CF_data'>Data Evento</label></td>";
echo '<td><input label="C5_dataeve" name="C5_dataeve"type="text" value="" size="10" onkeypress="mascara(this,data)" maxlength="10" onBlur="verifica_Data(this)" Req="data"> </td></tr>';
echo "<tr><td width='110'><label for='C5_ch'>Carga Horária</label></td>";
echo "<td><input label='C5_ch'name='C5_ch'type='text'value='0'size='10' maxlength='10'onkeypress='mascara(this,soNumeros)' Req='true' Camp='Carga Horária'> </td></tr>";
echo "<tr><td><input name='idsecao'type='hidden'value='SC501IU'size='7'></td></tr>";
echo "<tr><td><input name='form'type='hidden'value='68S'size='2'></td></tr>";
echo "</table>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>


