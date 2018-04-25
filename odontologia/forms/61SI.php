<?php
echo '<div class="container">'; 
echo "<div id='titcad'>Grupos</div>"; 
echo "<form name='vpa101' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div id="scrollContainer"><table border="0" id="box-table-b">
      <tr><label id="nome">Turma: [var.turgrup]</label></tr>
<thead>      
  <tr >
    <th align="left" width="19%">DISCIPLINA</th>
    <th align="center" width="3%">CH</th>
    <th align="center" width="6%">TURNO</th>
    <th align="center" width="18%">PERÍODO</th>
    <th align="left" width="19%">PROFESSOR</th>
    <th align="center" width="7%">Nº MESES</th>
    <th align="left" width="10%">LOCAL</th>
    <th align="left" width="10%">DEPARTAMENTO</th>
  </tr>
</thead>  
  <tbody><tr>
    <th colspan="8"><label>Grupo: [blk_lista_se501.E5_GRUPO;block=tr;headergrp=E5_GRUPO]</label></th>
  </tr>
  <tr>
    <th colspan="8"><label>[blk_lista_se501.A1_MATRICULA;block=tr;headergrp=E5_IDALUNO] - [blk_lista_se501.A1_NOME]</label></th>
  </tr>  
   <tr>
    <td  align="left">[blk_lista_se501.E3_IDDISC;block=tr]-[blk_lista_se501.A3_DESCR;ope=max:15]</td>
	<td  align="center">[blk_lista_se501.E3_CH]</td>
	<td  align="center">[blk_lista_se501.E5_TURNO]</td>
    <td  align="center">[blk_lista_se501.E5_DTINICIO;frm=\'dd/mm/yyyy\'] a [blk_lista_se501.E5_DTFIM;frm=\'dd/mm/yyyy\']</td>
    <td  align="left">[blk_lista_se501.E5_IDPROF]-[blk_lista_se501.AF_DESCR;ope=max:15]</td>
    <td  align="center">[blk_lista_se501.E3_NMESES]</td>
    <td  align="left">[blk_lista_se501.E1_FANTASIA;ope=max:10]</td>
    <td  align="left">[blk_lista_se501.E2_DESCRICAO;ope=max:11]</td>
  </tr
  <tr></tbody>
    <th colspan="8">[onshow..now;frm=\'dd/mm/yyyy\']</th>
  </tr>
</table></div>';

echo '<table width="440">
<tr><td><form  onSubmit="return checkEditvFields(this)"><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td>
    <td width="16"><img src="[var.dir_img]/icons/Printer_16.png" TITLE="Emitir termo de compromisso" align="LEFT"></td><td width="200"><a href=# onClick=\'javascript:void(centerpopup("Report/Reports.php?mod=RTCE&idt_p=[var.turgrup]&tp=pdf&ano_p=[var._SESSION.anopric]&sem_p=[var._SESSION.sempric]","POPUP",500,1600))\' TITLE="Emitir termo de compromisso">Termo compromisso</a></td>
    <td width="16"><img src="[var.dir_img]/icons/Printer_16.png" TITLE="Emitir Programação Estágio" align="LEFT"></td><td width="300"><a href=# onClick=\'javascript:void(centerpopup("Report/Reports.php?mod=RPRE&idt_p=[var.turgrup]&tp=pdf&idc_p=[var._SESSION.cursopric]&ano_p=[var._SESSION.anopric]&sem_p=[var._SESSION.sempric]","POPUP",500,1600))\' TITLE="Emitir Programação Estágio">Programação Estágio</a></td>
</tr></table></form></div>';
