

const username = document.getElementById('username');
const saveScoreBtn = document.getElementById('saveScoreBtn');
const finalScore = document.getElementById('finalScore');
const mostRecentScore = localStorage.getItem('mostRecentScore');
//const area = document.getElementById('area');
// const areaSec = sessionStorage.getItem('sessaoTeste');
// const areaSession = document.getElementById('areaSec');


var area0 = "Você se enquadra melhor no campo Cientifico - Experimental que tem como principal actividade: \n\n - Investigar e realizar experiencias em diversas areas da ciencia" +
    "\n\n Possibilidade de trabalhar nas áreas de Geologia, Fisica, Quimica, Astronomia, Psicologia, Matematica, Botanica, Analista informático";
var area1 = "Você se enquadra melhor no campo Cientifico -  Sanitario que tem como principais actividades: \n\n - Atender feridos e doentes para curar ou prevenir as suas doencas" +
    "\n\n - Fazer diagnosticos, prescrever e administrar tratamento medico e cururgico para curar e prevenir feridas, lesoes e outras doencas de seres humanos e animais. Receitar medicamentos, etc." +
    "\n\n Possibilidade de trabalhar nas áreas de Medicina, Veterinaria, Farmacia, Fisioterapia, Medicina Dentaria, Nutricao.";
var area2 = "Você se enquadra melhor no campo Teorico - Humanista que tem como principais actividades: \n\n - Realizar estudos e investigacoes sobre as origens, a evolucao, a historia e o comportamento do homem como individuo e como membro da sociedade. \n\n - Divulgar doutrinas e realizar cerimonias de culto" +
    "\n\n Possibilidade de trabalhar nas áreas de Antropologia, Arqueologia, Historia, Filosofia, Sacerdote, Conservacao de Museus";
var area3 = "Você se enquadra melhor no campo Literario, que tem como principais actividades: \n\n - Escrever obras de diferentes  generos literarios para representacao ou publicacao. \n\n - Escrever criticas de obras literarias, artisticas ou musicais, escrever, preparar e selecionar informacoes para publicacao em jornais e revistas ou para difusao via radio, televisao, etc. \n\n" +
    "\n Possibilidade de trabalhar como Escritor, Locutor, Apresentador e Jornalista.";
var area4 = "Você se enquadra melhor no campo Psicopedagógico, que tem como principais actividades: \n\n - Dar aulas a alunos diversos niveis de ensino. \n - Ensinar pessoas fisicas ou mentalmente diminuidas. \n\n - Investigar e aconselhar sobre metodos pedagogicos. \n - Organizar e dirigir actividades educativas em centros escolares. \n - Estudar o comportamento do ser humano e os problemas psicologicos no campo da educação." +
    "\n\n Possibilidade de trabalhar nas áreas de Pedagogia, educacao de infancia, psicologia escolar, reabilitacao de deliquentes ou toxicodependentes, direccao de escolas e professor.";
var area5 = "Você se enquadra melhor no campo Politico - social, que tem como principais actividades: \n\n - Dirigir a politica nacional ou participar nela (intervir na elaboracao de leis, descretos, etc. \n - Na sua transmissao e aprovacao).\n - Interpretar as leis para sua integracao na politica nacional. \n - Dirigir empresas publicas.\n - Ajudar membros da comunidade, tendo em conta factores economicos e sociais. \n - Administrar a justica, intervir face aos tribunais representando o Estado ou entidades privadas. \n - Autorizar e registar documentos juridicos" +
    "\n\n Possibilidade de trabalhar nas áreas de advogacia, sociologia, assistencia social, diplomacia, politica, magistratura, assessoria juridica";
var area6 = "Você se enquadra melhor no campo Economico - empresarial, que tem como principais actividades: \n\n - Planear, organizar, dirigir e controlar actividades de empresas publicas ou privadas e/ou dos seus departamentos nos sectores industriais ou de servicos. \n - Realizar estudos, ou previsoes sobre problemas relacionados com a economia do pais ou da empresa." +
    "\n\n Possibilidade de trabalhar nas áreas de economia, empresariado, gestao, assessoria economica, assessoria fiscal.";
var area7 = "Você se enquadra melhor no campo Persuasivo-Comercial, que tem como principais actividades: \n\n - Organizar, coordenar e dirigir, por conta dos proprietarios, as actividades de empresas ou estabelecimentos dedicados ao comercio, compra e venda de maercadorias, servicos, seguros, etc." +
    " \n\n Possibilidade de trabalhar nas áreas de Direcção de vendas, agente de seguros, encarregado de relacoes publicas, director de empresas turisticas, agente de espetaculos, tecnico de publicidade.";
var area8 = "Você se enquadra melhor no campo Administrativo, que tem como principais actividades: \n\n - Organizar ou realizar o trabalho administrativo normal de um escritorio: \n - registo de operacoes comerciais ou financeiras, reproducao de textos transmitidos oralmente ou por escrito, utilizacao de maquinas de escritorios  (maquinas de escrever, computadores, telefaxes, calculadora, fotocopiadora, etc). \n - e de instalacoes telefonicas, realizacao de pagamentos e cobrancas, etc \n" +
    "Possibilidade de trabalhar nas áreas de Operador de computador, escriturario, telefonista, administrativo e secretaria";
var area9 = "Você se enquadra melhor no campo Desportivo, que tem como principais actividades: \n\n - Participar em competicoes desportivas, treinar ou preparar desportistas para melhorar o seu rendimento, o conhecimento e a tecnica desportiva.\n - Zelar para que se cumpra o regulamento desportivo" +
    "\n\n Possibilidade de trabalhar como árbitro, atleta, treinador, preparador fisico";
var area10 = "Você se enquadra melhor no campo Agro-Pecuario, que tem como principais actividades: \n\n - Dirigir exploracoes agricolas ou de pesca.\n - Cultivar o campo.\n - Criar animais.\n - Cuidar e explorar as florestas.\n - Dedicar-se a pesca em rios ou no mar \n\n" +
    "Possibilidade de trabalhar nas áreas de agricultura, criar de animais, agronomia, pastor de animais, pescador, jardinagem.";
var area11 = "Você se enquadra melhor no campo Artistico-musical, que tem como principais actividades: \n\n - Compor, dirigir ou interpretar obras musicais no teatro, cimena, radio, televisao, etc. \n - Cantar , criar coregrafias, dançar \n\n" +
    "Possibilidade de trabalhar como compositor, autor e interprete de de cancoes, cantor, instrumentista, coreografo";
var area12 = "Você se enquadra melhor no campo Artistico-plastico, que tem como principais actividades: \n\n - Criar e ralizar obras artisticas de escultura, pintura, desenho ou gravacao. \n - Restaurar obras de arte. \n - Desenhar objectos para decorar casa, teatros, edificios publicos, etc. \n - Ilustrar livros, revistas ou folhetos.\n - Fotografar pessoas, animais, paisagens ou objectos para publicacao ou publicidade \n\n" +
    "Possibilidade de trabalhar como pintor, desenhador, escultor, restaurar obras de arte, decoracao, ilustrador de livros, cenografo, fotografo, operador de camaras";
var area13 = "Você se enquadra melhor no campo Militar - Segurança, que tem como principais actividades: \n\n - Pertencer aos corpos militares terrestres, navais ou aereos. \n - Prestar servicos em estabelecimentos militares.\n - Realizar funcoes de proteccao, seguranca e vigilancia.\n - Proteger pessoas e evitar violacoes da lei \n\n" +
    "Possibilidade de trabalhar como militar, policia, seguranca";
var area14 = "Você se enquadra melhor no campo de Aventura - Risco, que tem como principais actividades: \n\n - Fazer viagens ou explorações arriscadas: voos espaciais, descidas a grutas, exploracoes submarinas, etc.\n - Domar animais selvagens (tigres, leoes, etc.).\n - Participar  em corridas de carros ou motos \n\n" +
    "Possibilidade de trabalhar como astronauta, espeleologo, explorador. Piloto de corridas. Domador, toureiro, detective";
var area15 = "Você se enquadra melhor no campo Mecanico-Manual, que tem como principais actividades: \n\n - Construir ou reparar utensilios ou objectos usando ferramentas manuais ou maquinas.\n - Montar, manter ou reparar instalacoes ou aparelhos eletricos.\n - Construir ou reparar edificios.\n - Colocar azulejos, instalar tubos para gas e agua.\n - Confeccionar tecidos ou roupa a mao ou a maquina \n\n" +
    "Possibilidade de trabalhar como construtor de instrumentos musicais, modista, relojoeiro, sapateiro, seramista, joalheiro, pedreiro, eletricista";
var area16 = "Você se enquadra melhor no campo Cientifico - Técnico, que tem como principais actividades: \n\n - Utilizar os conhecimentos cientificos na industria.\n - Projectar e dirigir a construcao de edificios, zonas urbanas ou comerciais, bairros, parques, zonas de recreio, carris ferroviarios, pontes, etc.\n - Desenvolver novos produtos: motores, Investigar e realizar experiencias em diversas areas da cienciaaquinas, avioes, etc \n\n" +
    "Possibilidade de trabalhar nas áreas de Arquitectura, Engenharia, Controlador Aereo, piloto";

let areas = [area0, area1, area2, area3, area4, area5, area6, area7, area8, area9, area10, area11, area12, area13, area14, area15, area16]; //adicionado
var a;

var url_string = window.location.href; 
var url = new URL(url_string);
var paramValue = url.searchParams.get("resulText");


var areaHtml = areas[paramValue-1];
var setSessao = sessionStorage.setItem('resultArea',areaHtml);
const resultArea = sessionStorage.getItem('resultArea');
areaSes.innerText = resultArea;
// finalScore.innerText = mostRecentScore;

const uidSessao = sessionStorage.getItem('uidSessao');



window.onload= function salvar(){
    console.log(uidSessao, resultArea);
    var resultado = resultArea;
    var uid = uidSessao;
   addResult(resultado,uid);
}

function addResult(resultArea,uidSessao) {

    var data = {
       resultado: resultArea,
       uid: uidSessao
    };

    firebase.database().ref().child('testevoc').child(uidSessao).child('Resultado').set(data, function (error) {
        if (error) {
            console.log("Data could not be saved." + error);
           
        } else {
            console.log("Dados gravados com sucesso. ");
        }
    });

}





