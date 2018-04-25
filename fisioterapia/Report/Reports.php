<?php
define("JAVA_SERVLET", false); 
define("JAVA_HOSTS", 9267);
include_once("Java.inc");
 
function convertValue($value, $className)  
{  
   // if we are a string, just use the normal conversion  
   // methods from the java extension...  
   try   
   {  
       if ($className == 'java.lang.String')  
       {  
           $temp = new Java('java.lang.String', $value);  
           return $temp;  
       }  
       else if ($className == 'java.lang.Boolean' ||  
           $className == 'java.lang.Integer' ||  
           $className == 'java.lang.Long' ||  
           $className == 'java.lang.Short' ||  
           $className == 'java.lang.Double' ||  
           $className == 'java.math.BigDecimal')  
       {  
           $temp = new Java($className, $value);  
           return $temp;  
       }  
       else if ($className == 'java.sql.Timestamp' ||  
           $className == 'java.sql.Time')  
       {  
           $temp = new Java($className);  
           $javaObject = $temp->valueOf($value);  
           return $javaObject;  
       }  
       else if ($className == "java.util.Date")  
       {  
           $temp = new Java('java.text.DateFormat');  
           $javaObject = $temp->parse($value);  
           return $javaObject;  
       }  
   }  
   catch (Exception $err)  
   {  
       echo (  'unable to convert value, ' . $value .  
               ' could not be converted to ' . $className);  
       return false;  
   }  
 
   echo (  'unable to convert value, class name '.$className.  
           ' not recognised');  
   return false;  
}
java_require('Relatorio.jar');

//$url = 'jdbc:firebirdsql:localhost/3050:D:\estagio\BD\sige.fdb';
$url = 'jdbc:firebirdsql:172.16.0.2/3050:D:\bd\firebird\controle\CONTROLE_fisio.FDB?encoding=ISO8859_1';
$user = 'SYSDBA';
$passwd = 'masterkey';
$parametros = new java("java.util.HashMap");

if ($_REQUEST['mod'] == 'RCFA') {
	$relatorio = realpath('./Ficha_Aluno.jasper');
	$nomerel = "Ficha_Aluno";
	$parametros->put(convertValue('i_ano', 'java.lang.String'), convertValue($_REQUEST['ano_p_rel'], 'java.lang.String'));
	$parametros->put(convertValue('i_sem', 'java.lang.String'), convertValue($_REQUEST['sem_p_rel'], 'java.lang.String'));
	$parametros->put(convertValue('i_idaluno', 'java.lang.String'), convertValue($_REQUEST['ida_p_rel'], 'java.lang.Integer'));
	$parametros->put(convertValue('i_logo1', 'java.lang.String'), convertValue(realpath('./estrela_menor.jpg') , 'java.lang.String'));
	$parametros->put(convertValue('i_logo2', 'java.lang.String'), convertValue(realpath('./Logo_Faciplac.jpg') , 'java.lang.String'));	
};

if ($_REQUEST['mod'] == 'RCDS') {
	$relatorio = realpath('./Demo_Turma.jasper');
	$nomerel = "Demo_Turma";	  
	$parametros->put(convertValue('i_ano', 'java.lang.String'), convertValue($_REQUEST['ano_p'], 'java.lang.String'));
	$parametros->put(convertValue('i_sem', 'java.lang.String'), convertValue($_REQUEST['sem_p'], 'java.lang.String'));
	$parametros->put(convertValue('i_idturma', 'java.lang.String'), convertValue($_REQUEST['idt_p'], 'java.lang.String'));
	$parametros->put(convertValue('i_logo1', 'java.lang.String'), convertValue(realpath('./estrela_menor.jpg') , 'java.lang.String'));
	$parametros->put(convertValue('i_logo2', 'java.lang.String'), convertValue(realpath('./Logo_Faciplac.jpg') , 'java.lang.String'));	
};

if ($_REQUEST['mod'] == 'LAT') {
	$relatorio = realpath('./Lista_Aluno_Turma.jasper');
	$nomerel = "Lista_Aluno_Turma";
	if ($_REQUEST['check'] == 'true'){
		$turini = '';
		$turfim = 'ZZZZ';
	}
	else {$turini = $_REQUEST['idt'];
		  $turfim = $_REQUEST['idt'];};
		  
	$parametros->put(convertValue('ano', 'java.lang.String'), convertValue($_REQUEST['ano'], 'java.lang.String'));
	$parametros->put(convertValue('semestre', 'java.lang.String'), convertValue($_REQUEST['sem'], 'java.lang.String'));
	$parametros->put(convertValue('curso', 'java.lang.String'), convertValue($_REQUEST['todcur'], 'java.lang.Integer'));
	$parametros->put(convertValue('turmaI', 'java.lang.String'), convertValue($turini, 'java.lang.String'));
	$parametros->put(convertValue('turmaF', 'java.lang.String'), convertValue($turfim, 'java.lang.String'));
	$parametros->put(convertValue('i_logo1', 'java.lang.String'), convertValue(realpath('./estrela_menor.jpg') , 'java.lang.String'));
	$parametros->put(convertValue('i_logo2', 'java.lang.String'), convertValue(realpath('./Logo_Faciplac.jpg') , 'java.lang.String'));		
};


$report = java('relatorio.Relatorio');

if ($_REQUEST['tp'] == 'pdf'){
# PDF	
$arquivo = $report->imprimePdf($url, $user, $passwd, $relatorio, $parametros);
header('Content-type: application/pdf');
# para forçar o download, descomente a linha abaixo e comente a segunda abaixo
header('filename="relatorio.pdf"');
#header('Content-Disposition: attachment; filename="relatorio.pdf"');
}
else if ($_REQUEST['tp'] == 'docx'){
# Doc
  $arquivo = $report->imprimeDoc($url, $user, $passwd, $relatorio, $parametros);
  header('Content-type: application/msword');
  header('Content-Disposition: attachment; filename="'.$nomerel.'.docx"');
  #header('filename="relatorio.docx"');
}
else if ($_REQUEST['tp'] == 'rtf'){
# RTF	
  $arquivo = $report->imprimeRtf($url, $user, $passwd, $relatorio, $parametros);
  header('Content-type: application/rtf');
  header('Content-Disposition: attachment; filename="'.$nomerel.'.rtf"');
  #header('filename="relatorio.rtf"');
}
else if ($_REQUEST['tp'] == 'xls'){
#Excel
  $arquivo = $report->imprimeExcel($url, $user, $passwd, $relatorio, $parametros);
  header('Content-type: application/msexcel');
  header('Content-Disposition: attachment; filename="'.$nomerel.'.xls"');
  #header('filename="relatorio.xls"');
}
else if ($_REQUEST['tp'] == 'br'){
#BrOffice
  $arquivo = $report->imprimeOdt($url, $user, $passwd, $relatorio, $parametros);
  header('Content-type: application/vnd.oasis');
  header('Content-Disposition: attachment; filename="'.$nomerel.'.odt"'); 
  #header('filename="relatorio.odt"');
};

readfile($arquivo);  
unlink($arquivo);  

?> 
