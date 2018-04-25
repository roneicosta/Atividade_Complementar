<?php
echo '<div class="container">';
echo "<div id='titcad'>Incluir/Excluir Aluno Estágio</div>";

echo "<form name='F65SA' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo '<table id="tabdif" border="0" width="100%">';
echo "<tr><td><input id='IDalu' name='IDalu'type='hidden'value='[var.idret]'size='10'></td>
          <td><input name='E5_filial'type='hidden'value='00'size='10'></td>
          <td><input name='E5_idcurso'type='hidden'value='[var._SESSION.cursopric]'size='10'></td>
		  <td><input name='E5_anomat'type='hidden'value='[var._SESSION.anopric]'size='10'></td>
		  <td><input name='E5_semmat'type='hidden'value='[var._SESSION.sempric]'size='10'></td></tr>";
echo "<tr><td colspan='6' id='tabcololnmsgerr'><label>DADOS PARA ALTERAÇÃO</label></td></tr>";
echo "<tr><td width='19%'><label for='E5_grupo'>Grupo</label></td>
          <td width='2%'></td>
          <td width='19%'><label for='E5_anomat'>Ano matrícula</label></td>
		  <td width='19%'><label for='E5_semmat'>Sem. matrícula</label></td>
		  <td width='19%'><label for='E5_turma'>Turma</label></td>  
</tr>";
echo "<tr><td><input class='centerinpboldtext' id='E5_grupo' name='E5_grupo'type='text'value='[var.E5_grupo]'size='13' maxlength='2' Req='true' Camp='Grupo'></td>
      <td></td>
      <td><input class='centerinpboldtext' name='E5_mosanomat'type='text'value='[var._SESSION.anopric]'size='13' maxlength='4' disabled></td>
	  <td><input class='centerinpboldtext' name='E5_mossemmat'type='text'value='[var._SESSION.sempric]'size='13' maxlength='1' disabled></td></td>
      <td><select style='width:97px;' label='idtur_alu' id='idtur' name='idtur' Req='true' Camp='Turma'><option value=''></option><option value='[blk_select_sa401.A4_ID;block=option]'>[blk_select_sa401.A4_ID]</option></select><script>document.F65SA.idtur.value = '[var.idtur]';</script></td></tr>";

echo "<tr><td><label for='E5_dtdes'>Matrícula Aluno</label></td>
          <td></td>
          <td colspan='2'><label for='E5_gerinad'>Nome aluno</label></td></tr>";
          
echo "<tr><td><input class='alininpbold' id='matalu' name='matalu' type='text' value='[var.matalu]'size='13' maxlength='13' onBlur='javascript:palu(document.F65SA.matalu.value,\"?form=65S&idmenu=10&idsub=65\")' Req='true' Camp='Matrícula'></td>
		  <td><a href='javascript:void(0)' onClick='javascript:void(centerpopup(\"search/index_p.php?\",\"POPUP\",380,590))'><img src='[var.dir_img]/icons/search_16.png' ALT='Pesquisar cadastro' TITLE='Pesquisar cadastro' align='right'></a></td>
         <td colspan='2'><input  label='nomealu' id='nomealu' name='nomealu' type='text' value='[var.ret]'size='50' disabled></td></tr>";          

echo "<tr>
          <td colspan='2'><label for='E5_gerinad'>Incluir</label></td>
		  <td><label for='E5_gerinad'>Excluir</label></td></tr>";
echo "<tr>
          <td class='tabcenter' colspan='2'><input type='radio' id='gerinad' name='acao' value='Alt' checked ></td>
		  <td class='tabcenter'><input type='radio' id='descbolsa' name='acao' value='Del' ></td></tr>";
echo "";		  		  		 
echo "</table>";
echo "<table><tr><td colspan='4'>[var.msg]</td></tr>
          <tr><td><input id='idsecao' name='idsecao' type='hidden'value='[var.idsec]'size='7'></td>
          <td><input id='form' name='form' type='hidden'value='65S'size='2'></td>
          <td><input id='idmenu' name='idmenu'type='hidden'value='10'size='2'></td>
          <td><input id='idsub' name='idsub'type='hidden'value='65'size='2'></td></tr>";
echo "</table>";
echo '<table><tr><td><input name="enviar" id="button" type="submit" value="Gravar" ></td></tr></table></form></div></div>';
?>


