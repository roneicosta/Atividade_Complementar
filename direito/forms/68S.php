<?php
echo '<div class="container">'; 
echo "<div id='titcad'>Lançamento de Atividade</div>"; 
echo "<form name='vpsc501' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div id="scrollContainer"><table border="0" id="box-table-b">
      <tr><label id="nome">[var._SESSION.nome_comp]</label></tr>
<thead>      
  <tr >
    <th align="center" width="10%">ANO-SEM</th>
    <th align="left" width="31%">ID-EVENTO</th>
    <th  align="left" width="31%">ID-INSTITUIÇÃO</th>
    <th  align="center" width="10%">C.H.</th>
    <th  align="center" width="10%">DATA</th>
    <th  align="center" width="6%">AÇÃO</th>
  </tr>
</thead>  
  <tbody><tr>
    <th colspan="6"><label>ATIVIDADE:&nbsp;[blk_lista_sc501.C5_IDATIVIDADE;block=tr;headergrp=C5_IDATIVIDADE]-[blk_lista_sc501.ATIVIDADE]</label></th>
  </tr>
   <tr>
    <td  align="center">[blk_lista_sc501.C5_ANO;block=tr]-[blk_lista_sc501.C5_SEMESTRE]</td>
	<td  align="left">[blk_lista_sc501.C5_IDEVENTO]-[blk_lista_sc501.EVENTO;ope=max:30]</td>
    <td  align="left">[blk_lista_sc501.C5_IDINSTITUICAO]-[blk_lista_sc501.INSTIT;ope=max:30]</td>
    <td  align="center">[blk_lista_sc501.C5_CH]</td>
    <td  align="center">[blk_lista_sc501.C5_DATA;frm=\'dd/mm/yyyy\']</td>
    <td width="40" > <a href="?acao=Alt&idsecao=68SA&form=68SA&id_p_501=[blk_lista_sc501.C5_SEQUENCIA]&idf_p_501=[blk_lista_sc501.C5_FILIAL]&idsub=3"><img src="[var.dir_img]/icons/alterar_registro.gif" ALT="Alterar" TITLE="Alterar" align="LEFT"></a>
<a href=\'javascript:confirmaExclusao("?acao=Del&id_p_501=[blk_lista_sc501.C5_SEQUENCIA]&idsecao=68SA&idf_p_501=[blk_lista_sc501.C5_FILIAL]&form=[var.form]")\'><img src="[var.dir_img]/icons/Excluir.gif" ALT="Deletar" TITLE="Deletar" align="LEFT"></a></td>    
  </tr
  <tr></tbody>
    <th colspan="6">[onshow..now;frm=\'dd/mm/yyyy\']</th>
  </tr>
</table></div>';

echo '<table width="340" border="0">
<tr><td><form  onSubmit="return checkEditvFields(this)"><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td>
<td width="16"><img src="[var.dir_img]/icons/Add_16.png" title="Novo cadastro" align="LEFT"></td><td width="150"><a href="?form=68SI">Novo cadastro</a></td>
    <td width="16"><img src="[var.dir_img]/icons/Printer_16.png" TITLE="Emitir ficha" align="LEFT"></td><td width="150"><a href=# onClick=\'javascript:void(centerpopup("Report/Reports.php?mod=RCFA&ida_p_rel=[var._SESSION.id_set]&ano_p_rel=[var._SESSION.anopric]&sem_p_rel=[var._SESSION.sempric]&tp=pdf","POPUP",500,1600))\' TITLE="Emitir Ficha">Ficha de Atividades</a></td>
</tr></table></form></div>';
