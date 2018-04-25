function mudar_cor_focus(celula){
   celula.style.backgroundColor="#DDEEEE"
}
function mudar_cor_blur(celula){
   celula.style.backgroundColor="#ffffff"
} 

function gEs(tag) {
	return document.getElementsByTagName(tag);
}

function gE(ID) {
	return document.getElementById(ID);
}

function float2moeda(num) {
   x = 0;

   if(num<0) {
      num = Math.abs(num);
      x = 1;  }
if(isNaN(num)) num = "0";
      cents = Math.floor((num*100+0.5)%100);

   num = Math.floor((num*100+0.5)/100).toString();

   if(cents < 10) cents = "0" + cents;
      for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
         num = num.substring(0,num.length-(4*i+3))+''
               +num.substring(num.length-(4*i+3));
 ret = num + '.' + cents;
  if (x == 1) ret = ' - ' + ret;return ret;

}

function data_atual(){
hoje = new Date()
dia = hoje.getDate()
mes = hoje.getMonth()
ano = hoje.getFullYear()
if (dia < 10){
dia = "0" + dia};
if (ano < 2000){
ano = "19" + ano};

 return dia+"/"+(mes+1)+"/"+ano;
}

function DataHora(){
            var data = new Date();
            tempo.innerHTML = data;
            setTimeout("DataHora()",1000)
            }

function Retorna_Codigo(cod_cliente)
{
parent.opener.document.all.id_cliente.value = cod_cliente;
self.close();
};

function verifica_Data(Campo) {
//alert(Campo.value);
  dia = (Campo.value.substring(0,2));
  mes = (Campo.value.substring(3,5));
  ano = (Campo.value.substring(6,10));

  situacao = "";
  // verifica o dia valido para cada mes
  if ((dia < 01)||(dia < 01 || dia > 30) && (  mes == 04 || mes == 06 || mes == 09 || mes == 11 ) || dia > 31) {
    situacao = "falsa";
  }

  // verifica se o mes e valido
  if (mes < 01 || mes > 12 ) {
      situacao = "falsa";};

  // verifica se e ano bissexto
  if (mes == 2 && ( dia < 01 || dia > 29 || ( dia > 28 && (parseInt(ano / 4) != ano / 4)))) {
      situacao = "falsa";}

  if (Campo.value == "") {
      situacao = "falsa";}

  if (situacao == "falsa") {
      alert("Data inválida!");
      Campo.focus();
	  }
return situacao;	  
};

function checkado(frm){
  for( i = 0; i < frm.elements.length; i++ ){
	if( frm.elements[i].getAttribute('Req') == "chec" ){
		frm.elements [ i ].style.background = "#F98888";
		frm.elements [ i ].focus();	}
  }
alert('Defina um dos parametros em destaque!');  
}

function checkEditvFields(frm){
	var valor = 0;
	var tem = '';
	for( i = 0; i < frm.elements.length; i++ ){
		if( frm.elements [ i ].type == "text" || frm.elements [ i ].type == "select-one"  || frm.elements [ i ].type == "textarea"  ){
			if( frm.elements [ i ].getAttribute('Req') == "true" ){
				if( frm.elements [ i ].value == "" || frm.elements [ i ].value == 0){
					alert( "O campo '" + frm.elements [ i ].getAttribute('Camp')+ "' não pode ser vazio !!!" )
					frm.elements [ i ].style.background = "#F98888";
					frm.elements [ i ].focus()
					return false;};
			}
			
			if( frm.elements[i].getAttribute('Req') == "chec" ){
				tem = 'chec';
				if( frm.elements[i].value == "" || frm.elements[i].value == 0){
					valor = valor + 0;
				}
				else {valor = valor + 1; };
			};
			
			if( frm.elements [i].getAttribute('Req') == "data" ){
				if( verifica_Data(frm.elements[i]) == 'falsa'){
					frm.elements [i].focus()
					return false;};
			};
		};
	};
	if (valor == 0 && tem == 'chec'){
	  checkado(frm);
	  return false;
	};	
	  return true;	
}

function checkEdittext(frm,total){
	var valor = 0;
	
	for( i = 0; i < frm.elements.length; i++ ){
		if( frm.elements [ i ].type == "text"){
			if( frm.elements[i].getAttribute('Req') == "chec" ){
			valor = float2moeda(valor*1 + frm.elements[i].value*1);
			  if( frm.elements[i].value == "" || frm.elements[i].value == 0){
			  	alert('O valor não pode ser (0)Zero!')	
				frm.elements [i].focus()
			  	return false;
			  };
			};
		};
	};	
	if (valor != total){
	  //alert(float2moeda((total - valor)*1));	
	  alert('A soma dos valores = '+ valor+' informados, é diferente do negociado!');
	  return false;};
   	
	  return true;	
}
 
function retornacheck(frm,total){
 retorno1 = checkEdittext(frm,total);
 retorno2 = checkEditvFields(frm);
 
 if (retorno1 == true && retorno2 == true ){
	return true;}
 else {return false;}		
} 
 
function confirmaExclusao(aURL) {
    if(confirm('Você tem certeza que deseja excluir?')) {
      location.href = aURL;
    }
  }
  
function adjs(url){
oldsc=document.getElementById("old_sc");
if(oldsc)
document.getElementsByTagName('body')[0].removeChild(oldsc);
sc=document.createElement('script');
sc.id="old_sc";
sc.src=url+'&'+Math.random();
document.getElementsByTagName('body')[0].appendChild(sc);
}
 function limpaexecutor() {
   document.all.t12_idpessoaexecutor.value="";
   document.all.executor.value="";
   }
function comprovarSenha(){
    clave1 = document.all.clave1.value;
    clave2 = document.all.clave2.value;

    if (clave1 == clave2)  {
       alert("Sua senha está sendo alterada");
       return true;
       document.all.submit();

    }else  {
       alert("As duas senhas são diferentes...\nDigite as duas senhas iguais");
}
}

function deletar(cod){
     var cod;
      if(window.confirm("Deseja excluir ?")){
          window.location ="pagina.asp?acao=deletar&tipo=noticia&nid="+cod;
                   return false; // correção
        }
    }

function validamax(campo,vlmin,vlmax){
	if (vlmin > vlmax){
		alert("Atenção !!! Valor maximo é: "+vlmax +", mude o valor da nota!");
		document.getElementById(campo).focus();
		return false;
	}
	
}

			      

function calcvalor(campo,vlA,vlB, vlC){
	    var tot;
	    vlatuj = float2moeda(document.getElementById('F1_vlatu').value)*1;
        if(vlatuj > 0 ){vlB = vlatuj;};
		tot = (vlB*1) + (vlA*1) - (vlC*1);	
		document.getElementById(campo).value = float2moeda(tot);//};
		//alert(vlB +' - Acre'+ vlA + ' - Desc'+ vlC + ' - Tot'+ tot + ' - So '+ (vlB*1) + 'VLA='+(vlA*1));
}

function calcvalorinv(campovlBX,campovlAC,campovlDE,vlA,vlB,vlC){
	//Calcula valor desconto e acrescimo alterando o Valor total baixa
        vlatuj = float2moeda(document.getElementById('F1_vlatu').value)*1;	
	    vlatu = float2moeda(document.getElementById(campovlBX).value)*1;
	    if(vlatuj > 0 ){vlB= vlatuj;};
	    //alert(vlatuj);
       	vlB = float2moeda(vlB *1);
		if(vlatu != vlB){
			if (vlatu < vlB){	
			   document.getElementById(campovlDE).value = float2moeda((vlB*1)-(vlatu*1));
			   document.getElementById(campovlAC).value = '0.00';};
			if (vlatu > vlB){
				document.getElementById(campovlAC).value = float2moeda((vlatu*1)-(vlB*1));
				document.getElementById(campovlDE).value = '0.00';};
		}; 
}

function diasentredata(data_1,data_2){
	dt1a = data_1.split("/")[2].toString(); 
	dt1m = data_1.split("/")[1].toString(); 
	dt1d = data_1.split("/")[0].toString();
	dt2a = data_2.split("/")[2].toString(); 
	dt2m = data_2.split("/")[1].toString(); 
	dt2d = data_2.split("/")[0].toString();
	
    var dif = Date.UTC(dt1a,dt1m,dt1d,0,0,0) - Date.UTC(dt2a,dt2m,dt2d,0,0,0);
    return (dif / 1000 / 60 / 60 / 24);
}
 
function confaltdata(data1,data2) {
	dias = diasentredata(data1,data2)*1;
	vlm    = document.getElementById('F1_mosvlm').value *1;
	vlj    = document.getElementById('F1_mosvlj').value *1;
	vlcor  = document.getElementById('F1_vlcor').value *1;
	da     = document.getElementById('F1_dab').value *1;
	vld    = document.getElementById('F1_mosvld').value *1;
	vlb    = document.getElementById('F1_mosvlb').value *1;
	vln    = document.getElementById('F1_vln').value *1;
	pj     = document.getElementById('F1_mospju').value *1;
	pm     = document.getElementById('F1_mospmu').value *1;
	dtdesc = document.getElementById('F1_dtdesc').value;
	vldesc = document.getElementById('F1_vldesc').value;
	dtdes = dtdesc.split(";");
	vldes = vldesc.split(";");
	dd1 = 0;
	dd2 = 0;
	dd3 = 0;
	dd4 = 0;
	dd5 = 0;
    
	 if ((vldes[0]*1 > 0) && (dtdes[0] != '')) {
	   dd1 = diasentredata(data1,dtdes[0]);};
	 if((vldes[1]*1 > 0) && (dtdes[1] != '')){
	   dd2 = diasentredata(data1,dtdes[1]);};  
	 if((vldes[2]*1 > 0) && (dtdes[2] != '')){
	   dd3 = diasentredata(data1,dtdes[2]);};
	 if((vldes[3]*1 > 0) && (dtdes[3] != '')){
	   dd4 = diasentredata(data1,dtdes[3]);};
	 if( vldes[0] == '' && vldes[1] =='' && vldes[2] == '' && vldes[3] == ''){
	 	 dtd = '';
		 vld = 0;
		 dd5 = 1;};
  
	 if (dd5 == 0){
		 if (dd1 <= 0){
		 	dtd = dtdes[0];
			vld = vldes[0]*1;
			document.getElementById('F1_mosdtd').value = dtd;
			document.getElementById('F1_ddescconc').value = dtd;
			document.getElementById('F1_mosvld').value = float2moeda(vld);
			document.getElementById('F1_vdescconc').value = float2moeda(vld);}
		 else if((dd1 > 0) && (dd2 <= 0) ){
			dtd = dtdes[1];
			vld = vldes[1]*1;
			document.getElementById('F1_mosdtd').value = dtd;
			document.getElementById('F1_ddescconc').value = dtd;
			document.getElementById('F1_mosvld').value = float2moeda(vld);
			document.getElementById('F1_vdescconc').value = float2moeda(vld);}
		 else if((dd2 > 0) && (dd3 <= 0) ){
			dtd = dtdes[2];
			vld = vldes[2]*1;
			document.getElementById('F1_mosdtd').value = dtd;
			document.getElementById('F1_ddescconc').value = dtd;
			document.getElementById('F1_mosvld').value = float2moeda(vld);
			document.getElementById('F1_vdescconc').value = float2moeda(vld);}     
		 else if((dd3 > 0) && (dd4 <= 0) ){
			dtd = dtdes[3];
			vld = vldes[3]*1;
			document.getElementById('F1_mosdtd').value = dtd;
			document.getElementById('F1_ddescconc').value = dtd;
			document.getElementById('F1_mosvld').value = float2moeda(vld);
			document.getElementById('F1_vdescconc').value = float2moeda(vld);}
		 else{
			document.getElementById('F1_mosdtd').value = '';
			document.getElementById('F1_ddescconc').value = '';
			document.getElementById('F1_mosvld').value = float2moeda(0);
			document.getElementById('F1_vdescconc').value = float2moeda(0);};};		   
	  	
	vlcal = vln - vld;
	//alert('Vlcor '+vlcor); 
    if (dias <= 0){
	if(confirm('Esta alteração irá zerar o Juro e Multa da parcela, tem certeza?')) {
	  if (dias <= 0){	
        document.getElementById('F1_mosda').value = dias;}
      else {document.getElementById('F1_mosda').value = '';};
	  document.getElementById('F1_mosvlm').value = '0.00';
	  document.getElementById('F1_mosvlj').value = '0.00';
	  document.getElementById('F1_vltotbaixa').value = float2moeda(vlcal);
	  document.getElementById('F1_vlatu').value = float2moeda(vlcal);}
	else {document.getElementById('F1_dtbx').value = data_atual();};  
	};
	if(dias > 0){
		//alert('Calculado');
		if(da > 0){
		  vlm = vln * pm / 100; 
		  vlj = ((((pj/30) * dias))* vln) / 100;} 
		else{vlm = '0.00';
		     vlj = '0.00';}         
		
		if(da > 0){
		  var vlbx = vln + vlm + vlj - vlb;};

		document.getElementById('F1_mosda').value = dias;  
		document.getElementById('F1_mosvlm').value = float2moeda(vlm);
	    document.getElementById('F1_mosvlj').value = float2moeda(vlj);
		document.getElementById('F1_vlmb').value = float2moeda(vlm);
	    document.getElementById('F1_vljb').value = float2moeda(vlj);	    
		document.getElementById('F1_vltotbaixa').value = float2moeda(vlbx);  
		document.getElementById('F1_vlatu').value = float2moeda(vlbx)
		document.getElementById('F1_vldescbx').value = '0.00';
		document.getElementById('F1_acresbx').value = '0.00';  		
	}
	//alert('vlm='+vlm+'vlj='+vlj+'vlbx='+vlbx);
}   

function F12TIcalcvalor(campo,vlP,Per){
	    var vlcal;
	    vlcal = (vlP*1) * (Per*1) /100;	
		document.getElementById(campo).value = float2moeda(vlcal);
		//alert(campo+'Vlp='+vlP+'Per='+Per);
}

function F12TIcalcpercent(campo,vlP,vlD){
	    var percal;
		percal = ((vlD*1) / (vlP*1)) * 100;	
		document.getElementById(campo).value = float2moeda(percal);
		//alert(campo+'Vlp='+vlP+'Vld='+vlD+'Per'+percal);
}

function calcneg(){
	vlaber  = gE('F1_mosvlcal').value*1;
	vlacres = gE('F1_vlacres').value*1;
	vlmu     = (vlaber*1) * (gE('F1_pmu').value*1) /100;
	vlju     = (vlaber*1) * (gE('F1_pju').value*1) /100;
	vldesp    = (gE('F1_mosvlnegoc').value) * (gE('F1_pdes').value*1) /100;
	vldes   = gE('F1_vldes').value*1;
	vlnegoc = gE('F1_vlnegoc').value;
			
    gE('F1_vlnegoc').value = float2moeda((vlaber + vlmu + vlju + vlacres)-(((vlaber + vlmu + vlju + vlacres)*(gE('F1_pdes').value*1)) /100) - vldes);
	gE('F1_mosvlnegoc').value = float2moeda(gE('F1_vlnegoc').value);
	gE('F1_vldescneg').value = float2moeda((((vlaber + vlmu + vlju) * (gE('F1_pdes').value*1)) /100) + vldes);
	gE('F1_vlm').value = float2moeda(vlmu);
	gE('F1_vlj').value = float2moeda(vlju);
	  
}
  
function selecionar_tudo(form){
   for (i=0;i<form.elements.length;i++)
      if(form.elements[i].type == "checkbox"){
         form.elements[i].checked= true
         form.elements[i].value = form.elements[i].value.split(",")[0].toString()+','+
		                          form.elements[i].value.split(",")[1].toString()+','+
								  form.elements[i].value.split(",")[2].toString()+','+
								  form.elements[i].value.split(",")[3].toString()+',true';}
}   

function deselecionar_tudo(form){
   for (i=0;i<form.elements.length;i++)
      if(form.elements[i].type == "checkbox"){
         form.elements[i].checked=0
         form.elements[i].value = form.elements[i].value.split(",")[0].toString()+','+
		                          form.elements[i].value.split(",")[1].toString()+','+
								  form.elements[i].value.split(",")[2].toString()+','+
								  form.elements[i].value.split(",")[3].toString()+',false';}
}

function pegaradio(form,campo){
    for(i = 0; i < form.elements.length; i++){
    	
    	if(form.elements[i].type == "radio"){
          if (form.elements[i].checked == true) {
          	gE(campo).value = form.elements[i].value;
            break;
           }
    }
  }
}

function checksel(form,msg){
    for(i = 0; i < form.elements.length; i++){
    	if(form.elements[i].type == "checkbox"){
          if (form.elements[i].checked == 1) {
          	return true;
            break;};
        
		};   
    }
   alert('Atenção !!!' +msg);
}

function checkselmax(form){
	cont = 0;
    for(i = 0; i < form.elements.length; i++){
    	if(form.elements[i].type == "checkbox"){
          if (form.elements[i].checked == 1) {
          	cont++;
          	//alert(cont);
          	};
		};   
    };
  	return cont;
}
   
function checkselval(form){
	valor = 0;
    for(i = 0; i < form.elements.length; i++){
    	if(form.elements[i].type == "checkbox"){
          if (form.elements[i].checked == 1) {
          	if (valor == 0){
				valor = form.elements[i].value
			}
			else{valor = valor+'-'+form.elements[i].value;};
          	//alert(valor);
          	};  	
		};   
    };
  	return valor;
}

function checksfa(qi,vi,ua,df,lf,aURL) {
	if (lf == 'S'){
	  location.href = '?form='+aURL;	
	}
	else if (qi > 0 && ua == 'S' ){
	  if(confirm('Aluno(a) com '+qi+' boletos em aberto no valor de '+float2moeda(vi)+' deseja liberar para continuar o processo?')) {
       location.href = "?form=48S&idmenu=1&idsub=48&n=2&no=Liberação Débito"; }	
	}
	else if (qi <= 0 && ua == 'S' && df == 'S' ){
	  if(confirm('Aluno(a) com débito financeiro, deseja liberar para continuar o processo?')) {
       location.href = "?form=48S&idmenu=1&idsub=48&n=2&no=Liberação Débito"; }	
	}	
	else if (qi <= 0 && df == 'S' && ua == 'N' ){
	  alert('Aluno(a) com débito financeiro, entre em contato com Departamento Financeiro!')	
	}
	else if (qi > 0 && df == 'N' && ua == 'N' ){
	  alert('Aluno(a) com '+qi+' boletos em aberto no valor de '+float2moeda(vi)+', entre em contato com Departamento Financeiro!')	
	}
	else if (qi > 0 && df == 'S' && ua == 'N' ){
	  alert('Aluno(a) com '+qi+' boletos em aberto no valor de '+float2moeda(vi)+', entre em contato com Departamento Financeiro!')	
	}		
    else{location.href = '?form='+aURL;}
}   
   
function jogarfocus(){
var inputs = document.getElementsByTagName("input");
for (i=0; i < inputs.length; i++) {
  inputs[i].onfocus=function() {this.className='focus'};
  inputs[i].onblur=function() {this.className=''};
       }
}

function  centerpopup(url,nome,altura,largura){
    /*    Função que abre uma janela tipo popup no centro absoluto da janela.
        A função recebe a url, o nome, a altura e a largura.
        Para facilitar ainda mais, pode-se definir um tamanho fixo como
        mínimo baseado na resolução do monitor de quem está acessando     */
  var minimo = screen.width/4; // esta será a largura e a altura mínima    evitando uma
  // janela muito pequena
  var maximo = screen.height - 1; // esta será a largura e a altura máxima
  // evitando uma janela muito grande
  var w = ( ( ( (largura>minimo)? largura:minimo )<maximo )?largura:maximo);
  var h = ( ( ( ( altura>minimo )? altura:minimo )<maximo )?altura:maximo);
  var l = (screen.width/2) - w/2;    // valor para a posição na horizontal
  var t = (screen.height/2) - h/2;    // valor para a posição na vertical
  var argumentos = 'copyhistory=yes,width='+w+',height='+h+',left='+l+',top='+t+',screenX='+l+',screenY='+t+',scrollbars=YES,menubar=NO,resizable=YES';
  var novajan = window.open(url,nome, argumentos);
}

function pegaValor(campo1,campo2,campo3,valor1,valor2,valor3){
//alert(campo1+'--'+campo2 + '---'+valor1+'---'+valor2+'---'+campo3+'---'+valor3);
window.opener.document.getElementById(campo1).value = valor1;
window.opener.document.getElementById(campo2).value = valor2;
window.opener.document.getElementById(campo3).value = valor3;
self.close();

}

function pegaValorBas(campo1,campo2,valor1,valor2){
//alert(campo1+'--'+campo2 + '---'+valor1+'---'+valor2);
window.opener.document.getElementById(campo1).value = valor1;
window.opener.document.getElementById(campo2).value = valor2;
self.close();

}
/*function palu(mat,url){
	//alert (url);
  if (mat != ''){	
  window.location = url+'&mat='+mat+'&F1_anobol='+gE('F1_anobol').value+
                     '&F1_sembol='+ gE('F1_sembol').value+'&idtur='+gE('idtur').value+
					 '&F1_bolini='+ gE('F1_bolini').value+'&F1_bolfim='+gE('F1_bolfim').value+
					 '&F1_venc='+gE('F1_venc').value+'&F1_dtdesc='+gE('F1_dtdesc').value+
					 '&F1_gertotcur='+ gE('F1_gertotcur').checked+
					 '&F1_perdesc='+gE('F1_perdesc').value+
					 '&F1_vldesc='+gE('F1_vldesc').value+'&F1_perj='+gE('F1_perj').value+ 
					 '&F1_perm='+gE('F1_perm').value+'&F1_vlbol='+gE('F1_vlbol').value+
					 '&idbanco='+gE('idbanco').value+'&gerinad='+gE('gerinad').checked+
					 '&descbolsa='+gE('descbolsa').checked+'&premat='+gE('premat').checked;}	
}*/

function palu(formatu,mat,url){
	//alert (formatu);
  if (mat != ''){
  gE('idsecao').value = '';
  gE('form').value = gE('idsub').value+'S';
  document.forms[formatu].action="index.php"+url;
  document.forms[formatu].submit();
  }	
}

function ValidaID(ID){
    if(ID.value == '00' || ID.value == ''){
        alert('ID Invalido!'+ ID.value);
        ID.focus();
		}
}

function checkanosem(){
 ano = parseInt(gE('RE_mosanotur').value);
 sem = parseInt(gE('RE_mossemtur').value);
 anono = parseInt(gE('RE_anoturno').value);
 semno = parseInt(gE('RE_semturno').value); 
 
 if ((anono == ano) && (semno > sem)){
	return true;}
 else if ((anono > ano) && (semno < sem)){
	return true;}
 else {alert('Ano e semestre incorreto para o processo !!!');
       return false;}		
}

function srcImage(formatu,path)
{   document.forms[formatu].submit();
	gE('botao').innerHTML = "<img src=\'"+path+"\'>";
}

function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}

function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}

function leech(v){
    v=v.replace(/o/gi,"0")
    v=v.replace(/i/gi,"1")
    v=v.replace(/z/gi,"2")
    v=v.replace(/e/gi,"3")
    v=v.replace(/a/gi,"4")
    v=v.replace(/s/gi,"5")
    v=v.replace(/t/gi,"7")
    return v
}

function soNumeros(v){
    return v.replace(/\D/g,"")
}

function telefone(v){
    v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
    v=v.replace(/^(\d\d)(\d)/g,"($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")    //Coloca hífen entre o quarto e o quinto dígitos
    return v
}

function cpf(v){
    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
                                             //de novo (para o segundo bloco de números)
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
    return v
}

function cep(v){
    v=v.replace(/\D/g,"")                //Remove tudo o que não é dígito
    v=v.replace(/^(\d{5})(\d)/,"$1-$2") //Esse é tão fácil que não merece explicações
    return v
}

function v_cep(v){
v=v.replace(/\D/g,"") //Remove tudo o que não é dígito
v=v.replace(/^(\d{5})(\d)/,"$1-$2") //Esse é tão fácil que não merece explicações
return v
}

function cnpj(v){
    v=v.replace(/\D/g,"")                           //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/,"$1.$2")             //Coloca ponto entre o segundo e o terceiro dígitos
    v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3") //Coloca ponto entre o quinto e o sexto dígitos
    v=v.replace(/\.(\d{3})(\d)/,".$1/$2")           //Coloca uma barra entre o oitavo e o nono dígitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")              //Coloca um hífen depois do bloco de quatro dígitos
    return v
}

function romanos(v){
    v=v.toUpperCase()             //Maiúsculas
    v=v.replace(/[^IVXLCDM]/g,"") //Remove tudo o que não for I, V, X, L, C, D ou M
    //Essa é complicada! Copiei daqui: http://www.diveintopython.org/refactoring/refactoring.html
    while(v.replace(/^M{0,4}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/,"")!="")
        v=v.replace(/.$/,"")
    return v
}

function site(v){
    //Esse sem comentarios para que você entenda sozinho ;-)
    v=v.replace(/^http:\/\/?/,"")
    dominio=v
    caminho=""
    if(v.indexOf("/")>-1)
        dominio=v.split("/")[0]
        caminho=v.replace(/[^\/]*/,"")
    dominio=dominio.replace(/[^\w\.\+-:@]/g,"")
    caminho=caminho.replace(/[^\w\d\+-@:\?&=%\(\)\.]/g,"")
    caminho=caminho.replace(/([\?&])=/,"$1")
    if(caminho!="")dominio=dominio.replace(/\.+$/,"")
    v="http://"+dominio+caminho
    return v
}

function data(v){
v=v.replace(/\D/g,"") //Remove tudo o que não é dígito
v=v.replace(/(\d{2})(\d)/,"$1/$2") //Coloca barra entre o segundo e o terceiro digito
v=v.replace(/(\d{2})(\d)/,"$1/$2") //Coloca barra entre o quinto e o sexto digito
return v
};

function valor(v){
v=v.replace(/\D/g,"") //Remove tudo o que não é dígito
v=v.replace(/(\d)(\d{2})$/,"$1.$2") //Coloca ponto antes dos 2 últimos digitos
return v
};

/*function valor(v){
v=v.replace(/\D/g,"") //Remove tudo o que não é dígito
v=v.replace(/(\d)(\d{2})$/,"$1.$2") //Coloca ponto antes dos 2 últimos digitos
return v
};*/





    
