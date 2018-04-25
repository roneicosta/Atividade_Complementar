<?php
echo '<div class="container">';
echo "<div id='titcad'>Dados Cadastrais</div>";
echo "<form name='SA101' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">
    <ul class="simpleTabsNavigation">

      <li><a href="javascript:void(0)">Dados Professor</a></li>
      <li><a href="javascript:void(0)">Documetos Professor</a></li>
      <li><a href="javascript:void(0)">Titulação Professor</a></li>

    </ul>
 <div class="simpleTabsContent">';
echo "<table border=0 bgcolor='#E6E6E6' width='500'>";
echo "<tr><td><input name='AF_filial'type='hidden'value='00'size='10'></td></tr>";
echo "<tr><td><input name='AF_ID'type='hidden'value='0'size='10'></td></tr>";
echo "<tr><td width='110'><label for='AF_mosid'>Código/ID</label></td>";
echo "<td><input label='AF_mosid'name='AF_mosid'type='text'value='0'size='10'disabled> </td></tr>";
echo "<tr><td width='110'><label for='AF_nome'>Nome </label></td>";
echo "<td><input label='Nome'name='AF_nome'type='text'value=''size='50' Req='true' Camp='Nome'> </td></tr>";
echo "<tr><td width='110'><label for='AF_apelido'>Apelido</label></td>";
echo "<td><input label='Nome'name='AF_apelido'type='text'value=''size='20'> </td></tr>";
echo "<tr><td width='110'><label for='AF_end'>Endereço </label></td>";
echo "<td><input label='Endereço'name='AF_end'type='text'value=''size='50'> </td></tr>";
echo "<tr><td width='110'><label for='AF_bair'>Bairro </label></td>";
echo "<td><input label='Bairro'name='AF_bair'type='text'value=''size='30'> </td></tr>";
echo "<tr><td width='110'><label for='AF_minic'>Municipío </label></td>";
echo "<td><input label='Municipío'name='AF_minic'type='text'value=''size='30'> </td></tr>";
echo "<tr><td width='110'><label for='AF_est'>UF </label></td>";
echo "<td><select  label='UF' name='AF_est' >" . lista_nest()."</select></td></tr>";
echo "<tr><td width='110'><label for='AF_cep'>Cep </label></td>";
echo '<td><input label="AF_cep" name="AF_cep" type="text" value="" size="9" onkeypress="mascara(this,cep)" maxlength="9"> </td></tr>';
echo "<tr><td width='110'><label for='AF_fone'>Fone </label></td>";
echo "<td><input label='Fone'name='AF_fone'type='text'value=''size='14' onkeypress='mascara(this,telefone)' maxlength='14'> </td></tr>";
echo "<tr><td width='110'><label for='AF_fone2'>Fone2 </label></td>";
echo "<td><input label='Fone2'name='AF_fone2'type='text'value=''size='14' onkeypress='mascara(this,telefone)' maxlength='14'> </td></tr>";
echo "<tr><td width='110'><label for='AF_cel'>Celular </label></td>";
echo "<td><input label='Celular'name='AF_cel'type='text'value=''size='14' onkeypress='mascara(this,telefone)' maxlength='14'> </td></tr>";
echo "<tr><td width='110'><label for='AF_mail'>E-m@il </label></td>";
echo "<td><input label='E-m@il'name='AF_mail'type='text'value=''size='30'> </td></tr>";
echo "<tr><td width='110'><label for='AF_dataenem'>Data nascimento</label></td>";
echo '<td><input label="AF_dataenem" name="AF_datanasc"type="text" value="" size="10" onkeypress="mascara(this,data)" maxlength="10" > </td></tr>';
echo "<tr><td width='110'><label for='AF_sex'>Sexo </label></td>";
echo "<td><select  label='Sexo' name='AF_sex' >".lista_sexo()."</select></td></tr>";
echo "<tr><td width='110'><label for='AF_estcivil'>Estado Civil</label></td>";
echo "<td><select  label='AF_estcivil' name='AF_estcivil' >".lista_estcivil()."</select></td></tr>";
echo "<tr><td width='110'><label for='AF_nacional'>Nacionalidade </label></td>";
echo "<td><input label='Nacionalidade'name='AF_nacional'type='text'value=''size='30'> </td></tr>";
echo "<tr><td width='110'><label for='AF_natural'>Naturalidade </label></td>";
echo "<td><input label='Naturalidade'name='AF_natural'type='text'value=''size='30'  > </td></tr>";
echo "<tr><td width='110'><label for='AF_estnatu'>UF Natural </label></td>";
echo "<td><select  label='AF_estnatu' name='AF_estnatu' >" . lista_nest()."</select></td></tr>";
echo "</table>";
echo "</div>";
echo '<div class="simpleTabsContent">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td width='110'><label for='AF_rg'>Identidade nº</label></td>";
echo "<td><input label='A1_rg'name='AF_rg'type='text'value=''size='30'> </td></tr>";
echo "<tr><td width='110'><label for='AF_orgexp'>Orgão Exp</label></td>";
echo "<td><input label='A1_orgexp'name='AF_orgexp'type='text'value=''size='30' maxlength='20'> </td></tr>";
echo "<tr><td width='110'><label for='AF_dataexp'>Data Exped</label></td>";
echo '<td><input label="AF_dataexp" name="AF_dataexp"type="text" value="" size="10" onkeypress="mascara(this,data)" maxlength="10"  onBlur="ValidaData(SA101.AF_dataexp);"> </td></tr>';
echo "<tr><td width='110'><label for='AF_cpf'>CPF</label></td>";
echo "<td><input label='AF_cpf'name='AF_cpf'type='text'value=''size='14' onkeydown='mascara(this,cpf)' maxlength='14'> </td></tr>";
echo "</table>";
echo "</div>";
echo '<div class="simpleTabsContent">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td width='110'><label for='AF_titula'>Titulação </label></td>";
echo "<td><select  label='AF_titula' name='AF_titula' >" . lista_titulacao()."</select></td></tr>";
echo "<tr><td><input name='idsecao'type='hidden'value='SAF01IU'size='2'></td></tr>";
echo "<tr><td><input name='formant'type='hidden'value='14S'size='2'></td></tr>";
echo "<tr><td><input name='formpesq'type='hidden'value='15S'size='2'></td></tr>";
echo "</table></div>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>


