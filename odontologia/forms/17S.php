<?php
echo '<div class="container">';
echo "<div id='titcad'>Cadastro Turma</div>";
echo "<form name='SA401' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td><input name='A4_filial'type='hidden'value='[var._SESSION.filialpric]'size='10'></td></tr>";
echo "<tr><td><input name='A4_curso'type='hidden'value='[var._SESSION.cursopric]'size='10'></td></tr>";
echo "<tr><td width='110'><label for='A4_id'>C�digo/ID</label></td>";
echo "<td><input name='A4_id'type='text'value=''size='10'></td>";
echo "<tr><td width='110'><label for='A4_mosfilial'>Filial</label></td>";
echo "<td><select style='width:50%;' label='A4_mosfilial' name='A4_mosfilial' disabled><option value='[blk_fil_cad.M1_ID;block=option;ondata=f_selectedfilial]'[blk_fil_cad.seleciona]>[blk_fil_cad.M1_DESCR]</option></select></td>";
echo "<tr><td width='110'><label for='A4_moscurso'>Curso</label></td>";
echo "<td><select style='width:50%;' label='A1_moscurso' name='A4_moscurso' disabled><option value='[blk_cur_cad.A2_ID;block=option;ondata=f_selectedcurso]'[blk_cur_cad.seleciona]>[blk_cur_cad.A2_DESCR;ope=max:35]</option></select></td></tr>";
echo "<tr><td width='110'><label for='A4_per'>Per�odo</label></td>";
echo "<td><select style='width:30%;' label='A4_per' name='A4_per' ><option value='[blk_select_sal01.AL_ID;block=option]'>[blk_select_sal01.AL_DESCR]</option></select></td></tr>";
echo "<tr><td width='110'><label for='A4_turno'>Turno</label></td>";
echo "<td><select  label='A4_turno' name='A4_turno' >".lista_turno()."</select></td></tr>";
echo "<tr><td width='110'><label for='A4_seguro'>Seguro </label></td>";
echo "<td><input label='Seguro'name='A4_seguro'type='text'value=''size='50' > </td></tr>";
echo "<tr><td width='110'><label for='A4_convenio'>Conv�nio </label></td>";
echo "<td><input label='Convenio'name='A4_convenio'type='text'value=''size='50'> </td></tr>";
echo "<tr><td><input name='idsecao'type='hidden'value='SA401IU'size='7'></td></tr>";
echo "<tr><td><input name='formant'type='hidden'value='17S'size='2'></td></tr>";
echo "<tr><td><input name='formpesq'type='hidden'value='18S'size='2'></td></tr>";
echo "</table>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>


