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
    v=v.replace(/\D/g,"")                 //Remove tudo o que n�o � d�gito
    v=v.replace(/^(\d\d)(\d)/g,"($1) $2") //Coloca par�nteses em volta dos dois primeiros d�gitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")    //Coloca h�fen entre o quarto e o quinto d�gitos
    return v
}

function cpf(v){
    v=v.replace(/\D/g,"")                    //Remove tudo o que n�o � d�gito
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto d�gitos
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto d�gitos
                                             //de novo (para o segundo bloco de n�meros)
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um h�fen entre o terceiro e o quarto d�gitos
    return v
}

function cep(v){
    v=v.replace(/D/g,"")                //Remove tudo o que n�o � d�gito
    v=v.replace(/^(\d{5})(\d)/,"$1-$2") //Esse � t�o f�cil que n�o merece explica��es
    return v
}

function cnpj(v){
    v=v.replace(/\D/g,"")                           //Remove tudo o que n�o � d�gito
    v=v.replace(/^(\d{2})(\d)/,"$1.$2")             //Coloca ponto entre o segundo e o terceiro d�gitos
    v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3") //Coloca ponto entre o quinto e o sexto d�gitos
    v=v.replace(/\.(\d{3})(\d)/,".$1/$2")           //Coloca uma barra entre o oitavo e o nono d�gitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")              //Coloca um h�fen depois do bloco de quatro d�gitos
    return v
}

function romanos(v){
    v=v.toUpperCase()             //Mai�sculas
    v=v.replace(/[^IVXLCDM]/g,"") //Remove tudo o que n�o for I, V, X, L, C, D ou M
    //Essa � complicada! Copiei daqui: http://www.diveintopython.org/refactoring/refactoring.html
    while(v.replace(/^M{0,4}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/,"")!="")
        v=v.replace(/.$/,"")
    return v
}

function site(v){
    //Esse sem comentarios para que voc� entenda sozinho ;-)
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

function dataNascimento(v) {
v=v.replace(/\D/g,�");
v=v.replace(/^(\d{2})(\d{2})(\d)/,�$1/$2/$3?);
return v;
}

function data(v){
v=v.replace(/\D/g,"") //Remove tudo o que n�o � d�gito
v=v.replace(/(\d{2})(\d)/,"$1/$2") //Coloca barra entre o segundo e o terceiro digito
v=v.replace(/(\d{2})(\d)/,"$1/$2") //Coloca barra entre o quinto e o sexto digito
return v
}
function valor(v){
v=v.replace(/\D/g,"") //Remove tudo o que n�o � d�gito
v=v.replace(/(\d)(\d{2})$/,"$1.$2") //Coloca ponto antes dos 2 �ltimos digitos
return v
}

function valor(v){
v=v.replace(/\D/g,"") //Remove tudo o que n�o � d�gito
v=v.replace(/(\d)(\d{2})$/,"$1.$2") //Coloca ponto antes dos 2 �ltimos digitos
return v
};

function Valo2(v){
v=v.replace(/\D/g,�") //Remove tudo o que n�o � d�gito
v=v.replace(/(\d+)(\d{2})/,�$1,$2?) //Insere a v�rgula
v=v.replace(/(\d+)(\d{3},\d{2})$/g,�$1.$2?); //Coloca o primeiro ponto
var qtdLoop = (v.length-3)/3;
var count = 0;
while (qtdLoop > count)
{
count++;
v=v.replace(/(\d+)(\d{3}.*)/,�$1.$2?); //Coloca o resto dos pontos
}
v=v.replace(/^(0+)(\d)/g,�$2?); //remove �0? � esquerda
return v
}