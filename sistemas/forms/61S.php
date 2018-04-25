<?php
echo '<div class="container">';
echo "<div id='titcad'>Gerar Grupo</div>";
echo "<div id='titcad2'><label id='nome'></label></div>";
echo "<form name='GEGR' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border='0' bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td><input name='form'type='hidden'value='61SI'size='2'></td>
          <td><input name='idsecao'type='hidden'value='SE501IU'size='7'></td></tr>";
echo "<tr><td colspan='3'><label for='GG_moscurso'>Curso</label></td></tr>";
echo "<tr><td colspan='3'><select  style='width:81%;' label='A1_moscurso' name='GG_moscurso' disabled><option value='[blk_cur_cad.A2_ID;block=option;ondata=f_selectedcurso]'[blk_cur_cad.seleciona]>[blk_cur_cad.A2_DESCR;ope=max:35]</option></select></td></tr>";
echo "<tr><td width='30%'><label for='GG_mosanotur'>Ano</label></td>
          <td width='30%'><label for='GG_mossemtur'>Semestre</label></td>
		  <td width='30%'><label for='GG_mosid'>ID Turma</label></td></tr>";
echo "<tr><td><input label='A6_mosanotur'name='GG_mosanotur'type='text'value='[var._SESSION.anopric]'size='4' maxlength='4' disabled> </td>
          <td><input label='GG_mossemtur'name='GG_mossemtur'type='text'value='[var._SESSION.sempric]'size='2' maxlength='2' disabled> </td>
		  <td><select style='width:43%;' label='GG_idtur' name='GG_idtur' Req='true' Camp='Turma'><option value=''></option><option value='[blk_select_sa401.A4_ID;block=option]'>[blk_select_sa401.A4_ID]</option></select></td></tr>";
echo "</table>";
echo "<table>";
echo "<tr><td><input name='enviar' type='submit' value='Gerar' id='button' onClick=\"if(confirm('ATENÇÃO !!! Caso já tenha gerado os GRUPOS eles serão excluídos e gerados novamente, tem certeza?')) {if(checkEditvFields(this)){document.forms['GEGR'].submit();}} else {return false;}\"></td></tr>";
echo "</table>";
echo "<form  onSubmit='return checkEditvFields(this)' 
      location.href = aURL;'></fieldset></form></div>";


echo "<span>[onload;block=span; when [var.subform]!= '']
                   <div id=\"[var.cssform]\">[onload;script=forms/[var.subform].php;subtpl;protect=no]</div>
                  </span>";
echo "</div>";                  
?>


