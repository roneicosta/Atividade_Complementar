<?php
echo '<div class="container">';
echo "<div id='titcad'>Renovar Matrícula Estágio</div>";
echo "<div id='titcad2'><label id='nome'></label></div>";
echo "<form name='GEGR' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border='0' bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td><input name='form'type='hidden'value='67SI'size='2'></td>
          <td><input name='idsecao'type='hidden'value='SAA01RE'size='7'></td></tr>";
echo "<tr><td colspan='3'><label for='RE_moscurso'>Curso</label></td></tr>";
echo "<tr><td colspan='3'><select  style='width:81%;' label='A1_moscurso' name='RE_moscurso' disabled><option value='[blk_cur_cad.A2_ID;block=option;ondata=f_selectedcurso]'[blk_cur_cad.seleciona]>[blk_cur_cad.A2_DESCR;ope=max:35]</option></select></td></tr>";
echo "<tr><td width='30%'><label for='RE_mosanotur'>Ano</label></td>
          <td width='30%'><label for='RE_mossemtur'>Semestre</label></td>
		  <td width='30%'><label for='RE_mosid'>ID Turma</label></td></tr>";
echo "<tr><td><input id='RE_mosanotur' name='RE_mosanotur'type='text'value='[var._SESSION.anopric]'size='4' maxlength='4' disabled> </td>
          <td><input id='RE_mossemtur' name='RE_mossemtur'type='text'value='[var._SESSION.sempric]'size='2' maxlength='2' disabled> </td>
		  <td><select style='width:43%;' label='RE_idtur' name='RE_idtur' Req='true' Camp='Turma'><option value=''></option><option value='[blk_select_sa401.A4_ID;block=option]'>[blk_select_sa401.A4_ID]</option></select></td></tr>";
echo "<tr><td width='30%'><label for='RE_anoturno'>Ano</label></td>
          <td width='30%'><label for='RE_semturno'>Semestre</label></td>
		  <td width='30%'><label for='RE_idtuno'>ID Turma</label></td></tr>";
echo "<tr><td><input id='RE_anoturno' name='RE_anoturno'type='text'value='[var._SESSION.anopric]'size='4' maxlength='4' Req='true' Camp='Ano'> </td>
          <td><input id='RE_semturno' name='RE_semturno'type='text'value='[var._SESSION.sempric]'size='2' maxlength='2' Req='true' Camp='Semestre'> </td>
		  <td><select style='width:43%;' label='RE_idturno' name='RE_idturno' Req='true' Camp='Turma'><option value=''></option><option value='[blk_select_sa401_re.A4_ID;block=option]'>[blk_select_sa401_re.A4_ID]</option></select></td></tr>";		  
echo "</table>";
echo "<table>";
echo "<tr><td><input name='enviar' type='submit' value='Gerar' id='button' onClick=\"if(checkanosem()) {if(checkEditvFields(this)){document.forms['GEGR'].submit();}} else {return false;}\"></td></tr>";
echo "</table>";
echo "<form  onSubmit='return checkEditvFields(this)' 
      location.href = aURL;'></fieldset></form></div>";

echo "<div><label>[var.msg]</label></div>"; 
echo "<span>[onload;block=span; when [var.subform]!= '']
                   <div id=\"[var.cssform]\">[onload;script=forms/[var.subform].php;subtpl;protect=no]</div>
                  </span>";
                
echo "</div>";                  
?>


