<?php
echo "<form name='F57S' action='index.php' method='post'  onSubmit='return checkEditvFields(this)'>";
echo "<table border='0' width='550'>";
echo "<tr><td><label for='origem'>Seu E-mail:</label></td>";
echo "<td><input name='origem'type='text'value=''size='76' Req='true' Camp='E-mail'></td></tr>";
echo "<tr><td><label for='nome'>Seu Nome:</label></td>";
echo "<td><input name='nome'type='text'value=''size='76' Req='true' Camp='Nome'></td></tr>";
echo "<tr><td><label for='assunto'>Assunto:</label></td>";
echo "<td><input name='assunto'type='text'value=''size='76' Req='true' Camp='Assunto'></td></tr>";
echo "<tr><td colspan='2'><textarea id=legenda style='width:210px' rows='5' style='font-size:8pt' name='legenda'></textarea></td></tr>";
echo "<tr><td><input name='idsecao'type='hidden'value='57S'size='7'></td></tr>";
echo "<tr><td><input name='form'type='hidden'value='57S'size='2'></td></tr>";
echo "<tr><td><input name='idsub'type='hidden'value='57'size='2'></td></tr>";
echo"</table>";
echo '<table><tr><td><input name="voltar" type="button" id="button" onClick="javascript:history.back();" value="Voltar"></td><td><input name="enviar" id="button" type="submit" value="Enviar" ></td></tr></table></form>';
?>


