<?php
echo '<div class="container">';
echo "<div id='titcad'>Visualizando/Editando Turma</div>";
echo "<form name='SA401A' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td><input name='A4_filial'type='hidden'value='[blk_lista_sa401.A4_FILIAL]'size='10'></td></tr>";
echo "<tr><td><input name='A4_curso'type='hidden'value='[blk_lista_sa401.A4_IDCURSO]'size='10'></td></tr>";
echo "<tr><td><input name='A4_id'type='hidden'value='[blk_lista_sa401.A4_ID]'size='10'></td></tr>";
echo "<tr><td><input name='A4_grade'type='hidden'value='[blk_lista_sa401.A4_IDGRADE]'size='10'></td></tr>";
echo "<tr><td><input name='A4_per'type='hidden'value='[blk_lista_sa401.A4_IDPERIODO]'size='10'></td></tr>";
echo "<tr><td width='110'><label for='A4_mosid'>Código/ID</label></td>";
echo "<td><input name='A4_mosid'type='text'value='[blk_lista_sa401.A4_ID]'size='10' disabled></td>";
echo "<tr><td width='110'><label for='A4_mosfilial'>Filial</label></td>";
echo "<td><select style='width:50%;' label='A4_mosfilial' name='A4_mosfilial' disabled><option value='[blk_fil_cad.M1_ID;block=option;]'>[blk_fil_cad.M1_DESCR]</option></select><script>document.SA401A.A4_mosfilial.value = '[blk_lista_sa401.A4_FILIAL]';</script></td>";
echo "<tr><td width='110'><label for='A4_moscurso'>Curso</label></td>";
echo "<td><select style='width:50%;' label='A1_moscurso' name='A4_moscurso' disabled><option value='[blk_cur_cad.A2_ID;block=option;]'>[blk_cur_cad.A2_DESCR]</option></select><script>document.SA401A.A4_moscurso.value = '[blk_lista_sa401.A4_IDCURSO]';</script></td></tr>";
echo "<tr><td width='110'><label for='A4_mosper'>Período</label></td>";
echo "<td><select style='width:30%;' label='A4_mosper' name='A4_mosper' disabled><option value='[blk_select_sal01.AL_ID;block=option]'>[blk_select_sal01.AL_DESCR]</option></select><script>document.SA401A.A4_mosper.value = '[blk_lista_sa401.A4_IDPERIODO]';</script></td></tr>";
echo "<tr><td width='110'><label for='A4_turno'>Turno</label></td>";
echo "<td><select  label='A4_turno' name='A4_turno' >".lista_turno()."</select><script>document.SA401A.A4_turno.value = '[blk_lista_sa401.A4_TURNO]';</script></td></tr>";
echo "<tr><td width='110'><label for='A4_seguro'>Seguro </label></td>";
echo "<td><input label='Seguro'name='A4_seguro'type='text'value='[blk_lista_sa401.A4_SEGURO]'size='50' > </td></tr>";
echo "<tr><td width='110'><label for='A4_convenio'>Convénio </label></td>";
echo "<td><input label='Convenio'name='A4_convenio'type='text'value='[blk_lista_sa401.A4_CONVENIO]'size='50'> </td></tr>";
echo "<tr><td><input name='idsecao'type='hidden'value='SA401IU'size='7'></td></tr>";
echo "<tr><td><input name='formant'type='hidden'value='17S'size='2'></td></tr>";
echo "<tr><td><input name='formpesq'type='hidden'value='18S'size='2'></td></tr>";
echo "</table>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>


