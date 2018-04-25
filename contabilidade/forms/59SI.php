<?php
echo '<div class="container">';
echo "<div id='titcad'>Cadastro Estágio</div>";
echo "<form name='CADEST' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td><input name='CE_filial'type='hidden'value='00'size='10'></td></tr>";
echo "<tr><td><input name='CE_curso'type='hidden'value='[var._SESSION.cursopric]'size='10'></td></tr>";
echo "<tr><td><input name='CE_idest'type='hidden'value='0'size='10'></td></tr>";
echo "<tr><td width='110'><label for='CE_mosidest'>ID/Codígo</label></td>";
echo "<td><input label='CE_mosidest'name='CE_mosidest'type='text'value='0'size='4' maxlength='4' disabled> </td></tr>";
echo "<tr><td width='110'><label for='CE_mosanotur'>Ano</label></td>";
echo "<td><input label='A6_mosanotur'name='CE_mosanotur'type='text'value='[var._SESSION.anopric]'size='4' maxlength='4' disabled> </td></tr>";
echo "<tr><td width='110'><label for='CE_mossemtur'>Semestre</label></td>";
echo "<td><input label='CE_mossemtur'name='CE_mossemtur'type='text'value='[var._SESSION.sempric]'size='2' maxlength='2' disabled> </td></tr>";
echo "<tr><td width='110'><label for='CE_mosid'>ID Turma</label></td>";
echo "<td><select  label='CE_idtur' name='CE_idtur' Req='true' Camp='Turma'><option value=''></option><option value='[blk_select_sa401.A4_ID;block=option]'>[blk_select_sa401.A4_ID]</option></select></td>";
echo "<tr><td width='110'><label for='CE_moscurso'>Curso</label></td>";
echo "<td><select  style='width:50%;' label='A1_moscurso' name='CE_moscurso' disabled><option value='[blk_cur_cad.A2_ID;block=option;ondata=f_selectedcurso]'[blk_cur_cad.seleciona]>[blk_cur_cad.A2_DESCR;ope=max:35]</option></select></td></tr>";
echo "<tr><td width='110'><label for='CE_iddisc'>Disciplina</label></td>";
echo "<td><select label='CE_iddisc' name='CE_iddisc' Req='true' Camp='Disciplina' ><option value=''></option><option value='[blk_select_sa301.A3_ID;block=option]'>[blk_select_sa301.A3_DESCR;ope=max:60] - [blk_select_sa301.A3_ID]</option></select></td></tr>";
echo "<tr><td width='110'><label for='CE_iddisc'>Instituição</label></td>";
echo "<td><select style='width:60%;' label='CE_idinst' name='CE_idinst' Req='true' Camp='Instituição'><option value=''></option><option value='[blk_select_se101.E1_ID;block=option]'>[blk_select_se101.E1_RAZAO;ope=max:60] - [blk_select_se101.E1_ID]</option></select></td></tr>";
echo "<tr><td width='110'><label for='CE_iddep'>Departamento</label></td>";
echo "<td><select style='width:60%;' label='CE_iddep' name='CE_iddep' Req='true' Camp='Departamento'><option value=''></option><option value='[blk_select_se201.E2_ID;block=option]'>[blk_select_se201.E2_DESCRICAO;ope=max:60] - [blk_select_se201.E2_ID]</option></select></td></tr>";
echo "<tr><td width='110'><label for='CF_data'>Data Início</label></td>";
echo '<td><input label="CE_dataini" name="CE_dataini"type="text" value="" size="10" onkeypress="mascara(this,data)" maxlength="10" onBlur="verifica_Data(this)" Req="data"> </td></tr>';
echo "<tr><td width='110'><label for='CE_datater'>Data Termino</label></td>";
echo '<td><input label="CE_datater" name="CE_datater"type="text" value="" size="10" onkeypress="mascara(this,data)" maxlength="10" onBlur="verifica_Data(this)" Req="data"> </td></tr>';
echo "<tr><td width='110'><label for='CE_nmeses'>Número de meses</label></td>";
echo "<td><input label='ce_nmeses'name='CE_nmeses'type='text'value=''size='10' maxlength='10'onkeypress='mascara(this,soNumeros)' Req='true' Camp='Número de meses'> </td></tr>";
echo "<tr><td width='110'><label for='CE_ch'>Carga Horária</label></td>";
echo "<td><input label='ce_ch'name='CE_ch'type='text'value='0'size='10' maxlength='10'onkeypress='mascara(this,soNumeros)' Req='true' Camp='Carga Horária'> </td></tr>";
echo "<tr><td width='110'><label for='CE_dias'>Dias Estágio</label></td>";
echo "<td><input label='ce_dias'name='CE_dias'type='text'value='0'size='10' maxlength='10'onkeypress='mascara(this,soNumeros)' Req='true' Camp='Dias Estágio'> </td></tr>";
echo "<tr><td><input name='idsecao'type='hidden'value='SE301IU'size='7'></td></tr>";
echo "<tr><td><input name='form'type='hidden'value='59S'size='2'></td></tr>";
echo "</table>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>


