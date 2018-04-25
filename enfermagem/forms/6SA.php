<?php
echo '<div class="container">';
echo "<div id='titcad'>Cadastro Empresa</div>";
echo "<form name='SM001' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td><input name='M0_ID'type='hidden'value='[blk_bas_alt.M0_ID]'size='10'></td></tr>";
echo "<tr><td width='110'><label for='M0_mosid'>Código</label></td>";
echo "<td><input label='M0_mosid'name='M0_mosid'type='text'value='[blk_bas_alt.M0_ID]'size='5' required=true field='Codigo' maxlength='2' onkeypress='mascara(this,soNumeros)'> </td></tr>";
echo "<tr><td width='110'><label for='M0_nome'>Nome Empresa</label></td>";
echo "<td><input label='Nome'name='M0_nome'type='text'value='[blk_bas_alt.M0_DESCR]'size='50'required=true field='M0_nome'> </td></tr>";
echo "<tr><td width='110'><label for='M0_end'>Endereço </label></td>";
echo "<td><input label='Endereço'name='M0_end'type='text'value='[blk_bas_alt.M0_ENDERECO]'size='50'> </td></tr>";
echo "<tr><td width='110'><label for='M0_bair'>Bairro </label></td>";
echo "<td><input label='Bairro'name='M0_bair'type='text'value='[blk_bas_alt.M0_BAIRRO]'size='30'> </td></tr>";
echo "<tr><td width='110'><label for='M0_minic'>Municipío </label></td>";
echo "<td><input label='Municipío'name='M0_minic'type='text'value='[blk_bas_alt.M0_MUNICIPIO]'size='30'> </td></tr>";
echo "<tr><td width='110'><label for='M0_est'>UF </label></td>";
echo "<td><select  label='UF' name='M0_est' >" . lista_nest()."</select><script>document.SM001.M0_est.value = '[blk_bas_alt.M0_UF]';</script></td></tr>";
echo "<tr><td width='110'><label for='M0_cep'>Cep </label></td>";
echo "<td><input label='Cep'name='M0_cep'type='text'value='[blk_bas_alt.M0_CEP]'size='10' onkeypress='mascara(this,cep)' maxlength='9'> </td></tr>";
echo "<tr><td width='110'><label for='M0_fone'>Fone </label></td>";
echo "<td><input label='Fone'name='M0_fone'type='text'value='[blk_bas_alt.M0_FONE]'size='14' onkeypress='mascara(this,telefone)' maxlength='14'> </td></tr>";
echo "<tr><td width='110'><label for='M0_cnpj'>CNPJ</label></td>";
echo "<td><input label='M0_CNPJ'name='M0_CNPJ'type='text'value='[blk_bas_alt.M0_CNPJ]'size='16' onkeydown='mascara(this,cnpj)' maxlength='18'> </td></tr>";
echo "<tr><td><input name='idsecao'type='hidden'value='SM001IU'size='7'></td></tr>";
echo "<tr><td><input name='formant'type='hidden'value='6S'size='2'></td></tr>";
echo "<tr><td><input name='formpesq'type='hidden'value='13S'size='2'></td></tr>";
echo "</table>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>


