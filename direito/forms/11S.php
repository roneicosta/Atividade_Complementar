<?php
echo '<div class="container">';
echo "<div id='titcad'>Cadastro Per�odo</div>";
echo "<form name='SAL01' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo '<div class="simpleTabs">';
echo "<table border=0 bgcolor='#E6E6E6' width='100%'>";
echo "<tr><td><input name='AL_ID'type='hidden'value='0'size='10'></td></tr>";
echo "<tr><td><input name='AL_filial'type='hidden'value='00'size='10'></td></tr>";
echo "<tr><td width='110'><label for='AL_mosid'>C�digo/ID</label></td>";
echo "<td><input name='AL_mosid'type='text'value='0'size='5' disabled></td>";
echo "<tr><td width='110'><label for='AL_nome'>Nome</label></td>";
echo "<td><input label='Nome'name='AL_nome'type='text'value=''size='50'Req='true' Camp='Nome'> </td></tr>";
echo "<tr><td><input name='idsecao'type='hidden'value='SAL01IU'size='7'></td></tr>";
echo "<tr><td><input name='formant'type='hidden'value='11S'size='2'></td></tr>";
echo "<tr><td><input name='formpesq'type='hidden'value='13S'size='2'></td></tr>";
echo "</table>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form></div></div>';
?>


