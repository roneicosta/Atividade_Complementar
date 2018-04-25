<?php
echo '<div class="container">';
echo "<div id='titcad'>Dados Cadastrais</div>";
echo "<form name='CEPI' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td><input name='EP_filial'type='hidden'value='00'size='10'></td></tr>";
echo "<tr><td width='110'><label for='EP_idest'>Estágio</label></td>";
echo "<td><select style='width:90%;' label='EP_idest' name='EP_idest' Req='true' Camp='Estágio'><option value=''></option><option value='[blk_select_se301.E3_ID;block=option]'>[blk_select_se301.E3_ID] | [blk_select_se301.E3_IDDISC]-[blk_select_se301.A3_DESCR;ope=max:30] | [blk_select_se301.E1_FANTASIA;ope=max:30] | [blk_select_se301.E2_DESCRICAO;ope=max:30]</option></select><script>document.CEPI.EP_idest.value = '[var._SESSION.ide_set]';</script></td></tr>";
echo "<tr><td width='110'><label for='EP_dia'>Dia Semana</label></td>";
echo "<td><select  label='A8_dia' name='EP_dia' Req='true' Camp='Dia Semana'><option value=''></option>".lista_diasemana()."</select></td></tr>";
echo "<tr><td width='110'><label for='EP_idprof'>Professor</label></td>";
echo "<td><select style='width:90%;' label='EP_idprof' name='EP_idprof' Req='true' Camp='Professor'><option value=''></option><option value='[blk_select_saf01.AF_ID;block=option]'>[blk_select_saf01.AF_DESCR;ope=max:40] - [blk_select_saf01.AF_ID]</option></select></td></tr>";
echo "<tr><td width='110'><label for='EP_dia'>Turno</label></td>";
echo "<td><select  label='A8_turno' name='EP_turno' Req='true' Camp='Turno'><option value=''></option>".lista_turno()."</select></td></tr>";
echo "<tr><td><input name='idsecao'type='hidden'value='SE401IU'size='7'></td></tr>";
echo "<tr><td><input name='form'type='hidden'value='30T'size='2'></td></tr>";
echo "<tr><td><input name='idsub'type='hidden'value='59'size='2'></td></tr>";
echo "</table>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>


