<?php
echo '<div class="container">';
echo "<div id='titrel' align='center'>Lista aluno turma</div>";
echo "<div id='titcad2'><label id='nome'></label></div>";
echo "<form name='RLAT' action='index.php' method='get'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border='0' bgcolor='#E6E6E6' width='50%' align='center'>";
echo "<tr><td><input name='form'type='hidden'value='RLAT'size='2'></td>
          <td><input name='idsecao'type='hidden'value='REL'size='2'></td>
		  <td><input id='formato' name='formato' type='hidden'value='pdf'size='10'></td></tr>";
echo '<tr><td  ROWSPAN="6" width="110"><img src="[var.dir_img]/icons/Printer-100x100.png" ALT="Lista aluno turma" align="center"></td></tr>';
echo '<tr><td width="76" colspan="2"><label for="idtur">Turmas curso</label></td>';
echo "<td colspan='3' width='114'><select style='width:80%;' label='idtur' name='idtur' Req='true' Camp='Turma'><option value=''></option><option value='[blk_select_sa401.A4_ID;block=option]'>[blk_select_sa401.A4_ID]</option></select></td>";
echo '<tr><td colspan="2"><label for="idtur_alu">Todo curso</label></td>';
echo "<td colspan='3'><input type='checkbox' name='todcur' value='[var._SESSION.cursopric]'></td></tr>";
echo '<tr><td align="center"><img src="[var.dir_img]/icons/Pdf_38x38.png" TITLE="Visualizar em PDF"></td>
          <td align="center"><img src="[var.dir_img]/icons/Word_38x38.png" TITLE="Visualizar em Word DOCX" ></td>
          <td align="center"><label><img src="[var.dir_img]/icons/Excel_38x38.png" TITLE="Visualizar em Excel XLS"></label></td>
          <td align="center"><img src="[var.dir_img]/icons/Rtf_38x38.png" TITLE="Visualizar em RTF"></label></td>
          <td align="center"><img src="[var.dir_img]/icons/writer_38x38.PNG" TITLE="Visualizar em BrOffice" ></td></tr>';
echo "<tr><td align='center'><input type='radio' name='tp' value='pdf' checked onClick='pegaradio(document.RLAT, document.RLAT.formato.name)'  TITLE='Visualizar em PDF'/></td>
          <td align='center'><input type='radio' name='tp' value='docx' onClick='pegaradio(document.RLAT, document.RLAT.formato.name)' TITLE='Visualizar em Word DOCX'/></td>
          <td align='center'><input type='radio' name='tp' value='xls' onClick='pegaradio(document.RLAT, document.RLAT.formato.name)' TITLE='Visualizar em Excel XLS'/></td>
          <td align='center'><input type='radio' name='tp' value='rtf' onClick='pegaradio(document.RLAT, document.RLAT.formato.name)' TITLE='Visualizar em RTF'/></td>
          <td align='center'><input type='radio' name='tp' value='br' onClick='pegaradio(document.RLAT, document.RLAT.formato.name)' TITLE='Visualizar em BrOffice'/></td></tr>";		            
echo '<tr><td colspan="6" align="center">
<input name="enviar" type="submit" value="Imprimir/Visualizar"
onClick=\'javascript:void(centerpopup("Report/Reports.php?mod=LAT&todcur=[var._SESSION.cursopric]&ano=[var._SESSION.anopric]&sem=[var._SESSION.sempric]&idt="+document.RLAT.idtur.value+"&check="+document.RLAT.todcur.checked+"&tp="+document.RLAT.formato.value,"POPUP",500,1600))\'></td></tr>';
echo "</table>";
echo "<form  onSubmit='return checkEditvFields(this)'></fieldset></form></div></div>";
?>


