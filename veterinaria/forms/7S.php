<?php
echo '<div class="container">';
echo "<div id='titcad'>Cadastro Filial</div>";
echo "<form name='SM101' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td width='50'align='RIGHT'><label for='filial'>Empresa</label></td>";
echo "<td><select  label='M1_IDEMP' name='M1_IDEMP'><option value='[blk_sm001.M0_ID;block=option;ondata=f_selectedemp]'[blk_sm001.seleciona]>[blk_sm001.M0_DESCR]</option></select></td>";
echo "<tr><td width='110'><label for='M1_ID'>Código</label></td>";
echo "<td><input label='M1_ID' id='M1_ID' name='M1_ID'type='text'value=''size='10' Req='true' Camp='ID'  maxlength='2' onkeypress='mascara(this,soNumeros)'> </td></tr>";
echo "<tr><td width='110'><label for='M1_nome'>Nome Filial</label></td>";
echo "<td><input label='Nome'name='M1_nome'type='text'value=''size='50'Req='true' Camp='Nome' onFocus='ValidaID(document.SM101.M1_ID);'> </td></tr>";
echo "<tr><td width='110'><label for='M1_end'>Endereço </label></td>";
echo "<td><input label='Endereço'name='M1_end'type='text'value=''size='50'> </td></tr>";
echo "<tr><td width='110'><label for='M1_bair'>Bairro </label></td>";
echo "<td><input label='Bairro'name='M0_bair'type='text'value=''size='30'> </td></tr>";
echo "<tr><td width='110'><label for='M1_minic'>Municipío </label></td>";
echo "<td><input label='Municipío'name='M1_minic'type='text'value=''size='30'> </td></tr>";
echo "<tr><td width='110'><label for='M1_est'>UF </label></td>";
echo "<td><select  label='UF' name='M1_est' >" . lista_nest()."</select></td></tr>";
echo "<tr><td width='110'><label for='M1_cep'>Cep </label></td>";
echo "<td><input label='Cep'name='M1_cep'type='text'value=''size='10'size='9' onkeypress='mascara(this,cep)' maxlength='9'> </td></tr>";
echo "<tr><td width='110'><label for='M1_fone'>Fone </label></td>";
echo "<td><input label='Fone'name='M1_fone'type='text'value=''size='14' 'size='14' onkeypress='mascara(this,telefone)' maxlength='14'> </td></tr>";
echo "<tr><td width='110'><label for='M1_cnpj'>CNPJ</label></td>";
echo "<td><input label='M1_CNPJ'name='M1_CNPJ'type='text'value=''size='16' onkeydown='mascara(this,cnpj)' maxlength='18'> </td></tr>";
echo "<tr><td><input name='idsecao'type='hidden'value='SM101IU'size='7'></td></tr>";
echo "<tr><td><input name='formant'type='hidden'value='7S'size='2'></td></tr>";
echo "<tr><td><input name='formpesq'type='hidden'value='13S'size='2'></td></tr>";
echo "</table>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>


