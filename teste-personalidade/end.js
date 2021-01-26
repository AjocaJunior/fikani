const username = document.getElementById('username');
const saveScoreBtn = document.getElementById('saveScoreBtn');

const ScoreSince = localStorage.getItem('ScoreSince');
const ScoreTimidez = localStorage.getItem('ScoreTimidez');
const ScoreActiv = localStorage.getItem('ScoreActiv');
const ScoreIntro = localStorage.getItem('ScoreIntro');
const ScoreNeuro = localStorage.getItem('ScoreNeuro');
const ScoreEsqui = localStorage.getItem('ScoreEsqui');
const ScoreDepre = localStorage.getItem('ScoreDepre');
const ScoreEpile = localStorage.getItem('ScoreEpile');
const ScorePsico = localStorage.getItem('ScorePsico');
//const area = document.getElementById('area');
// const areaSec = sessionStorage.getItem('sessaoTeste');
// const areaSession = document.getElementById('areaSec');


var sinc1 = "Você é Pouco Sincero";
var sinc2 = "Você é Normalmente Sincero";
var sinc3 = "Você é Muito Sincero";
var tim1 = "Muito Confiante";
var tim2 = "Normalmente Tímido";
var tim3 = "Tímido";
var activ1 = "Pouco Activo";
var activ2 ="Normalmente Activo";
var activ3 = "Muito Activo";
var intro1 = "Extrovertido";
var intro2 = "Nem introvertido, nem extrovertido";
var intro3 = "Introvertido";
var neuro1= "Neuroticamente Estável";
var neuro2= "Neuroticamente Normal";
var neuro3= "Neuroticamente Instável";
var esqui1= "Sociável";
var esqui2= "Normalmente Social";
var esqui3= "Isolado e Desconfiado";
var depre1 = "Nivel de Depressão Normal";
var depre2 = "Nível Alto de Depressão";
var epile1 = "Calmo";
var epile2 = "Normalmente Calmo";
var epile3 = "Colérico";
var psico1 = "E sem Sinais de Psicoticidade";
var psico2 = "E com Sinais de Psicoticidade/Suspeita de Perturbação Mental";

let timidez = [tim1,tim2,tim3];
let sinceridades = [sinc1, sinc2, sinc3]; //adicionado
let actividades = [activ1,activ2,activ3];
let introversao = [intro1,intro2,intro3];
let neuroticidade = [neuro1,neuro2,neuro3];
let esquizoidia = [esqui1,esqui2,esqui3];
let depressao = [depre1,depre2];
let epileptoidia = [epile1,epile2,epile3];
let psicose = [psico1,psico2];

var sinceHtml; 
var timidezHTML;
var activHTML;
var introHTML;
var neuroHTML;
var esquiHTML;
var depreHTML;
var epileHTML;
var psicoHTML;

if (ScoreSince > -1 && ScoreSince < 8) {
    sinceHtml = sinceridades[0];
} else if (ScoreSince > 8 && ScoreSince < 14) {
    sinceHtml = sinceridades[1];
} else if (ScoreSince > 13 && ScoreSince < 21) {
    sinceHtml = sinceridades[2];
}

if(ScoreTimidez> -1 && ScoreTimidez <6){
    timidezHTML = timidez[0];
}else if(ScoreTimidez>5 && ScoreTimidez <13){
    timidezHTML= timidez[1];
}else if(ScoreTimidez >12 && ScoreTimidez <21){
    timidezHTML = timidez[2];
}

if(ScoreActiv>-1 && ScoreActiv<8){
activHTML= actividades[0];
}else if(ScoreActiv>7 && ScoreActiv<12){
    activHTML=actividades[1];
}else if(ScoreActiv>11 && ScoreActiv<21){
    activHTML = actividades[2];
}
if(ScoreIntro>-1 && ScoreIntro<6){
    introHTML= introversao[0];
}else if(ScoreIntro>5 && ScoreIntro<10){
    introHTML = introversao[1];
}else if(ScoreIntro>9 && ScoreIntro<21){
    introHTML= introversao[2];
}

if(ScoreNeuro>-1 && ScoreNeuro<5){
    neuroHTML=neuroticidade[0];
}else if(ScoreNeuro>4 && ScoreNeuro<9){
    neuroHTML=neuroticidade[1];
}else if(ScoreNeuro>8 && ScoreNeuro<21){
    neuroHTML=neuroticidade[2];
}
if(ScoreEsqui>-1 && ScoreEsqui<3){
    esquiHTML=esquizoidia[0];
}else if(ScoreEsqui>2 && ScoreEsqui<8){
    esquiHTML= esquizoidia[1];
}else if(ScoreEsqui>7 && ScoreEsqui<21){
    esquiHTML= esquizoidia[2];
}

if(ScoreDepre>-1 && ScoreDepre<6){
    depreHTML = depressao[0];
}else if(ScoreDepre>5 && ScoreDepre<21){
    depreHTML = depressao[1];
}
if(ScoreEpile>-1 && ScoreEpile<4){
    epileHTML= epileptoidia[0];
}else if(ScoreEpile>3 && ScoreEpile<7){
    epileHTML=epileptoidia[1];
}else if(ScoreEpile>6 && ScoreEpile<21){
    epileHTML= epileptoidia[2];
}

if(ScorePsico>-1 && ScorePsico<9){
    psicoHTML = psicose[0];
}else if(ScorePsico>8 && ScorePsico<21){
    psicoHTML = psicose[1];
}

// var url_string = window.location.href; 
// var url = new URL(url_string);
// var paramValue = url.searchParams.get("resulText");


var setSessao = sessionStorage.setItem('sinceSessao',sinceHtml);
var setSessaoTimidez = sessionStorage.setItem('timidezSessao',timidezHTML);
var setSessaoActiv = sessionStorage.setItem('activSessao',activHTML);
var setSessaoIntro = sessionStorage.setItem('introSessao',introHTML);
var setSessaoNeuro = sessionStorage.setItem('neuroSessao',neuroHTML);
var setSessaoEsqui = sessionStorage.setItem('esquiSessao',esquiHTML);
var setSessaoDepre = sessionStorage.setItem('depreSessao',depreHTML);
var setSessaoEpile = sessionStorage.setItem('epileSessao',epileHTML);
var setSessaoPsico = sessionStorage.setItem('psicoSessao',psicoHTML);

const timidezSessao = sessionStorage.getItem('timidezSessao');
const sinceSessao = sessionStorage.getItem('sinceSessao');
const activSessao = sessionStorage.getItem('activSessao');
const introSessao = sessionStorage.getItem('introSessao');
const neuroSessao = sessionStorage.getItem('neuroSessao');
const esquiSessao = sessionStorage.getItem('esquiSessao');
const depreSessao = sessionStorage.getItem('depreSessao');
const epileSessao = sessionStorage.getItem('epileSessao');
const psicoSessao = sessionStorage.getItem('psicoSessao');


timidezSes.innerText = timidezSessao;
sinceSes.innerText = sinceSessao;
activSes.innerText = activSessao;
introSes.innerText = introSessao;
neuroSes.innerText = neuroSessao;
esquiSes.innerText = esquiSessao;
depreSes.innerText = depreSessao;
epileSes.innerText = epileSessao;
psicoSes.innerText = psicoSessao;

const uidSessao = sessionStorage.getItem('uidSessao');

window.onload= function salvar(){
    
    var sinceridade= sinceSessao;
    var timidez= timidezSessao;
    var actividade= activSessao;
    var introversao= introSessao;
    var neuroticidade= neuroSessao;
    var esquizoidia= esquiSessao;
    var depressao= depreSessao;
    var epileptoidia= epileSessao;
    var psicose= psicoSessao;
    var uid = uidSessao;
   addResult(sinceridade,timidez,actividade,introversao,neuroticidade,esquizoidia,depressao,epileptoidia,psicose,uid);
}

function addResult(sinceSessao, timidezSessao,activSessao,introSessao,neuroSessao,esquiSessao,depreSessao,epileSessao,psicoSessao, uidSessao) {

    var data = {
       sinceridade: sinceSessao,
       timidez: timidezSessao,
       actividade: activSessao,
       introversao: introSessao,
       neuroticidade: neuroSessao,
       esquizoidia: esquiSessao,
       depressao: depreSessao,
       epileptoidia: epileSessao,
       psicose: psicoSessao,
       uid: uidSessao
    };

    firebase.database().ref().child('testeper').child(uidSessao).child('Resultado').set(data, function (error) {
        if (error) {
            console.log("Data could not be saved." + error);
           
        } else {
            console.log("Dados gravados com sucesso. ");
        }
    });

}



