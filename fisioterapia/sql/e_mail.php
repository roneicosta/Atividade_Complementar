<?php
//echo 'blz';
include_once('./PHPMailer/class.phpmailer.php');

$sql_p_cfg02_lista = "SELECT * FROM CFG02";
$result = ibase_query($conn, $sql_p_cfg02_lista);

while ($row = ibase_fetch_object($result)) {
  if ($row->CFG_PARAM == 'SMTP_PORT'){
	$porta = $row->CFG_CONTEUDO;};
  if ($row->CFG_PARAM == 'HOST'){
	$host = $row->CFG_CONTEUDO;};
  if ($row->CFG_PARAM == 'USERNAME'){
	$usuario = $row->CFG_CONTEUDO;};
  if ($row->CFG_PARAM == 'PASSWORD'){
	$senha = $row->CFG_CONTEUDO;};
  if ($row->CFG_PARAM == 'REPLYEMAIL'){
	$repmail = $row->CFG_CONTEUDO;};
  if ($row->CFG_PARAM == 'REPLYNOME'){
	$repnome = $row->CFG_CONTEUDO;};
}


$mail = new PHPMailer();
$mail->SetLanguage("br", "libs/"); // ajusto a lingua a ser utilizadda
$mail->SMTP_PORT = $porta; // ajusto a porta de smt a ser utilizada. Neste caso, a 587 que o GMail utiliza
$mail->SMTPSecure = "tls"; // ajusto o tipo de comunica��o a ser utilizada, no caso, a TLS do GMail

$mail->IsSMTP(); // ajusto o email para utilizar protocolo SMTP
$mail->Host = $host; // especifico o endere�o do servidor smtp do GMail
$mail->SMTPAuth = true; // ativo a autentica��o SMTP, no caso do GMail, � necess�rio
$mail->Username = $usuario; // Usu�rio SMTP do GMail
$mail->Password = $senha; // Senha do usu�rio SMTP do GMail

// Aqui algumas informa��es que ser�o enviadas no cabe�alho do email
$mail->From = $_REQUEST['origem']; // Email de quem envia o email
$mail->FromName = $_REQUEST['nome']; // Nome de quem envia o email
$mail->AddAddress($usuario, $repnome); // Endere�o e nome de quem vai receber o email, o nome � opcional
//$mail->AddAddress($_REQUEST['origem']); // Mais um endere�o, somente para mostrar que voc� pode mandar email para varios endere�os no mesmo email. Equilvalente a voc� usar a [v�rgula] nos webmail e clientes de email
$mail->AddReplyTo($_REQUEST['origem'], $_REQUEST['nome']); // Email e nome que ser� utilizado quando a pessoa responder este email

$mail->WordWrap = 50; // quebra linha sempre que uma linha atingir 50 caracteres
# $mail->AddAttachment("/var/tmp/file.tar.gz"); // adc arquivo anexo. *opcional*
# $mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // adc outro arquivo anexo com nome (opcional). *opcional*
$mail->IsHTML(true); // ajusto envio do email no formato HTML

$mail->Subject = $_REQUEST['assunto']; // Aqui colocar o assunto do email
$mail->Body = $_REQUEST['legenda']; // aqui o corpo do email para usuarios que tem a op��o text/html do seu webmail ou cliente de email ativada
$mail->AltBody = $_REQUEST['legenda']; // aqui o corpo do email para usuarios que tem a op��o text/html do seu webmail ou cliente de email desativada

if($mail->Send())
{
print "<SCRIPT> alert('E-mail enviado com sucesso!'); window.history.go(-1); </SCRIPT>\n";
exit;
}
else{
print "<SCRIPT> alert('Erro no envio do e-mail!'); window.history.go(-1); </SCRIPT>\n";
//echo "Erro: " . $mail->ErrorInfo;
exit;	
}

/*echo "Mensagem enviada";
$to      = 'roneijcosta@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: roneijcosta@gmail.com' . "\r\n" .
    'Reply-To: roneijcosta@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
ini_set('smtp_port','587');    

mail($to, $subject, $message, $headers);*/



?>