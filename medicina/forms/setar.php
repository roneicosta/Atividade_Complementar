<?php
echo "<form name='setar' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo "<fieldset id='fieldsetar' >";
echo "<legend>Informe os dados de trabalho:</legend>";
echo "<table border='0' bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td width='4%'align='RIGHT'><label for='filial'>Filial</label></td>";
echo "<td><select style='width:100%;' label='filial' name='filialpric'><option value='[blk_sql_filial.M1_ID;block=option;ondata=f_selectedfilial]'[blk_sql_filial.seleciona]>[blk_sql_filial.M1_DESCR]</option></select></td>";
echo "<td width='4%' align='RIGHT'><label for='curso'>Curso</label></td>";
echo "<td><select  style='width:100%;' label='cursopric' name='cursopric' ><option value='[blk_sql_curso.A2_ID;block=option;;ondata=f_selectedcurso]'[blk_sql_curso.seleciona]>[blk_sql_curso.A2_DESCR]</option></select></td>";
echo "<td width='4%' align='RIGHT'><label for='anopric'>Ano</label></td>";
echo "<td><select style='width:100%;' label='anopric' name='anopric' >" .lista_ano($_SESSION['anopric'])."</select></td>";
echo "<td width='6%'><label for='sempric'>Semestre</label></td>";
echo "<td><select style='width:100%;' label='sempric' name='sempric' >" .lista_sem($_SESSION['sempric'])."</select></td>";
echo "<td><input name='setado'type='hidden'value='1'size='10'></td>";
echo "<td width='6%'><form  onSubmit='return checkEditvFields(this)'><input name='enviar' type='submit' value='Enviar' id='button'></td></tr>";
echo "</table>";
echo "</fieldset></form>";
?>


