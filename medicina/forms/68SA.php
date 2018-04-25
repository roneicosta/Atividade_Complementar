<?php
echo '<div class="container">';
echo "<div id='titcad'>Cadastro Atividade</div>";
echo "<form name='CADATI' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><label id='nome'>[var._SESSION.mat_set] - [var._SESSION.nome_set]</label></tr>";
echo "<tr><td><input name='C5_filial'type='hidden'value='[blk_lista_sc501.C5_FILIAL]'size='10'></td></tr>";
echo "<tr><td><input name='C5_seq'type='hidden'value='[blk_lista_sc501.C5_SEQUENCIA]'size='10'></td></tr>";
echo "<tr><td width='110'><label for='C5_mosseq'>ID/Codígo</label></td>";
echo "<td><input label='C5_mosidest'name='C5_seq'type='text'value='[blk_lista_sc501.C5_SEQUENCIA]'size='4' maxlength='4' disabled> </td></tr>";
echo "<tr><td width='110'><label for='C5_mosanotur'>Ano</label></td>";
echo "<td><input label='A6_mosanotur'name='C5_mosanotur'type='text'value='[var._SESSION.anopric]'size='4' maxlength='4' disabled> </td></tr>";
echo "<tr><td width='110'><label for='C5_mossemtur'>Semestre</label></td>";
echo "<td><input label='C5_mossemtur'name='C5_mossemtur'type='text'value='[var._SESSION.sempric]'size='2' maxlength='2' disabled> </td></tr>";
echo "<tr><td width='110'><label for='C5_idativ'>Atividade</label></td>";
echo "<td><a href='javascript:void(0)' onClick='javascript:void(centerpopup(\"search/index_p.php?form=C1P\",\"POPUP\",400,590))'><img src='[var.dir_img]/icons/search_16.png' TITLE='Pesquisar cadastro' align='left'></a>";
echo "&nbsp;<input  type='text' label='C5_idativ' id='C5_mosativ' name='C5_mosativ' Req='true' Camp='Atividade' size='70' disabled value='[blk_lista_sc501.ATIVIDADE]'></td></tr>";
echo "<tr><td width='110'><label for='C5_ideve'>Evento</label></td>";
echo "<td><a href='javascript:void(0)' onClick='javascript:void(centerpopup(\"search/index_p.php?form=C2P\",\"POPUP\",400,590))'><img src='[var.dir_img]/icons/search_16.png' TITLE='Pesquisar cadastro' align='left'></a>";
echo "&nbsp;<input  type='text' label='C5_moseve' id='C5_moseve' name='C5_moseve' Req='true' Camp='Evento' size='70' disabled value='[blk_lista_sc501.EVENTO]'></td></tr>";
echo "<tr><td width='110'><label for='C5_idinst'>Instituição</label></td>";
echo "<td><a href='javascript:void(0)' onClick='javascript:void(centerpopup(\"search/index_p.php?form=C3P\",\"POPUP\",400,590))'><img src='[var.dir_img]/icons/search_16.png' TITLE='Pesquisar cadastro' align='left'></a>";
echo "&nbsp;<input  type='text' label='C5_mosinst' id='C5_mosinst' name='C5_mosinst' Req='true' Camp='Evento' size='70' disabled value='[blk_lista_sc501.INSTIT]'></td></tr>";
echo "<tr><td width='110'><label for='CF_data'>Data Evento</label></td>";
echo '<td><input label="C5_dataeve" name="C5_dataeve"type="text" value="[blk_lista_sc501.C5_DATA;frm=\'dd/mm/yyyy\']" size="10" onkeypress="mascara(this,data)" maxlength="10" onBlur="verifica_Data(this)" Req="data"> </td></tr>';
echo "<tr><td width='110'><label for='C5_ch'>Carga Horária</label></td>";
echo "<td><input label='C5_ch'name='C5_ch'type='text'value='[blk_lista_sc501.C5_CH]'size='10' maxlength='10'onkeypress='mascara(this,soNumeros)' Req='true' Camp='Carga Horária'> </td></tr>";
echo "<tr><td><input id='C5_idativ' name='C5_idativ'type='hidden'value='[blk_lista_sc501.C5_IDATIVIDADE]'size='7'></td>
          <td><input id='C5_ideve' name='C5_ideve' type='hidden'value='[blk_lista_sc501.C5_IDEVENTO]'size='7'></td>
		  <td><input id='C5_idinst' name='C5_idinst' type='hidden'value='[blk_lista_sc501.C5_IDINSTITUICAO]'size='7'></td></tr>";
echo "<tr><td><input name='idsecao'type='hidden'value='SC501IU'size='7'></td></tr>";
echo "<tr><td><input name='form'type='hidden'value='68S'size='2'></td></tr>";
echo "</table>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>


