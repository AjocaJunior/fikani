const question = document.getElementById('question');
const choices = Array.from(document.getElementsByClassName('choice-text'));
const progressText = document.getElementById('progressText');
const scoreText = document.getElementById('score');
const progressBarFull = document.getElementById('progressBarFull');
const loader = document.getElementById('loader');
const game = document.getElementById('game');
const areaText = document.getElementById('area');
const areaSession = document.getElementById('areaSec');




let currentQuestion = {};
let acceptingAnswers = false;
let score = 0;
let questionCounter = 0;
let availableQuesions = [];
let questions = [];

var grupo0=0;
var grupo1 = 0;
var grupo2 = 0;
var grupo3 = 0;
var grupo4 = 0;
var grupo5 = 0;
var grupo6 = 0;
var grupo7 = 0;
var grupo8 = 0;
var grupo9 = 0;
var grupo10 = 0;
var grupo11 = 0;
var grupo12 = 0;
var grupo13 = 0;
var grupo14 = 0;
var grupo15 = 0;
var grupo16 = 0;
var grupo17 = 0;
var grupoMaior;

var setsession;
var groupMaxIndex;

fetch('testevocacionalper10.json')
    .then((res) => {
        return res.json();
    })
    .then((loadedQuestions) => {
        questions = loadedQuestions;
        startGame();
    })
    .catch((err) => {
        console.error(err);
    });

//CONSTANTS
const CORRECT_BONUS = 1;
const MAX_QUESTIONS = 10;
//REDUZIDO DE 204 PARA 10 NUMERO MAXIMO DE PERGUNTAS
startGame = () => {
    questionCounter = 0;
    score = 0;
    availableQuesions = [...questions];
    getNewQuestion();

};

getNewQuestion = () => {
    if (availableQuesions.length === 0 || questionCounter >= MAX_QUESTIONS) {
        localStorage.setItem('mostRecentScore', score);

        // localStorage.setItem('campodeactuacao', area);
        //go to the end page
        return window.location.assign('end.php?resulText=' +groupMaxIndex);
    }
    questionCounter++;
    progressText.innerText = `Questão ${questionCounter}/${MAX_QUESTIONS}`;
    //Update the progress bar
    progressBarFull.style.width = `${(questionCounter / MAX_QUESTIONS) * 100}%`;

    const questionIndex = Math.floor(Math.random() * availableQuesions.length);
    currentQuestion = availableQuesions[questionIndex];
    question.innerHTML = currentQuestion.question;

    choices.forEach((choice) => {
        const number = choice.dataset['number'];
        choice.innerHTML = currentQuestion['choice' + number];
    });

    availableQuesions.splice(questionIndex, 1);
    acceptingAnswers = true;
};

choices.forEach((choice) => {
    choice.addEventListener('click', (e) => {
        if (!acceptingAnswers) return;

        acceptingAnswers = false;
        const selectedChoice = e.target;
        const selectedAnswer = selectedChoice.dataset['number'];

        const classToApply =
            selectedAnswer == currentQuestion.answer ? 'correct' : 'incorrect';

        console.log(selectedAnswer, currentQuestion.answer, currentQuestion.grupo);

        if (classToApply === 'correct') {

            if (currentQuestion.grupo == 1) {
                incrementScore(CORRECT_BONUS);

                grupo1++;

            } else if (currentQuestion.grupo == 2) {
                incrementScore(CORRECT_BONUS);
                grupo2++;

            } else if (currentQuestion.grupo == 3) {
                incrementScore(CORRECT_BONUS);
                grupo3++;

            } else if (currentQuestion.grupo == 4) {
                incrementScore(CORRECT_BONUS);
                grupo4++;

            } else if (currentQuestion.grupo == 5) {
                incrementScore(CORRECT_BONUS);
                grupo5++;

            } else if (currentQuestion.grupo == 6) {
                incrementScore(CORRECT_BONUS);

                grupo6++;

            } else if (currentQuestion.grupo == 7) {
                incrementScore(CORRECT_BONUS);

                grupo7++;

            } else if (currentQuestion.grupo == 8) {
                incrementScore(CORRECT_BONUS);

                grupo8++;

            } else if (currentQuestion.grupo == 9) {
                incrementScore(CORRECT_BONUS);

                grupo9++;

            } else if (currentQuestion.grupo == 10) {
                incrementScore(CORRECT_BONUS);

                grupo10++;
            } else if (currentQuestion.grupo == 11) {
                incrementScore(CORRECT_BONUS);

                grupo11++;

            } else if (currentQuestion.grupo == 12) {
                incrementScore(CORRECT_BONUS);

                grupo12++;

            } else if (currentQuestion.grupo == 13) {
                incrementScore(CORRECT_BONUS);

                grupo13++;

            } else if (currentQuestion.grupo == 14) {
                incrementScore(CORRECT_BONUS);

                grupo14++;

            } else if (currentQuestion.grupo == 15) {
                incrementScore(CORRECT_BONUS);

                grupo15++;

            } else if (currentQuestion.grupo == 16) {
                incrementScore(CORRECT_BONUS);

                grupo16++;

            } else if (currentQuestion.grupo == 17) {
                incrementScore(CORRECT_BONUS);
                grupo17++;

            }
            var grupos = [grupo0, grupo1, grupo2, grupo3, grupo4, grupo5, grupo6, grupo7, grupo8, grupo9, grupo10, grupo11, grupo12, grupo13, grupo14, grupo15, grupo16, grupo17];
            //incrementScore(CORRECT_BONUS);
            grupoMaior = Math.max(...grupos);
            groupMaxIndex = grupos.indexOf(grupoMaior);
            console.log(grupoMaior+" "+" "+groupMaxIndex);

            // if (grupoMaior == grupo1) {
            //     resulText(areas[0]);


            // } else if (grupoMaior == grupo2) {
            //     resulText(areas[1]);
            //     setsession  = window.sessionStorage.setItem('sessaoTeste',resulText(areas[1]));
            //     console.log(setsession);
            // } else if (grupoMaior == grupo3) {
            //     setsession  = window.sessionStorage.setItem('sessaoTeste',resulText(areas[2]));
            //     console.log(setsession);
            //     resulText(areas[2]);
            // } else if (grupoMaior == grupo4) {

            //     resulText(areas[3]);
            // } else if (grupoMaior == grupo5) {
            //     resulText(areas[4]);
            // } else if (grupoMaior == grupo6) {
            //     resulText(areas[5])
            // } else if (grupoMaior == grupo7) {
            //     resulText(areas[6])
            // } else if (grupoMaior == grupo8) {
            //     resulText(areas[7])
            // } else if (grupoMaior == grupo9) {
            //     resulText(areas[8])
            // } else if (grupoMaior == grupo10) {
            //     resulText(areas[9])
            // } else if (grupoMaior == grupo11) {
            //     resulText(areas[10])
            // } else if (grupoMaior == grupo12) {
            //     resulText(areas[11])
            // } else if (grupoMaior == grupo13) {
            //     resulText(areas[12])
            // } else if (grupoMaior == grupo14) {
            //     resulText(areas[13])
            // } else if (grupoMaior == grupo15) {
            //     resulText(areas[14])
            // } else if (grupoMaior == grupo16) {
            //     resulText(areas[15])
            // } else if (grupoMaior == grupo17) {
            //     resulText(areas[16])

            // }




        }



        selectedChoice.parentElement.classList.add(classToApply);

        setTimeout(() => {
            selectedChoice.parentElement.classList.remove(classToApply);
            getNewQuestion();
        }, 1000);
    });
});

resulText = (text) => {

    areaSec = text;
    areaSession.innerText = areaSec;

};

incrementScore = (num) => {
    score += num;
    scoreText.innerText = score;
};





function salvar() {

    var pergunta = selectedAnswer;
    var resposta = '';
    var resultado = '';

    create(pergunta, resposta, resultado);

}


function create(pergunta, resposta, resultado) {
    var data = {
        pergunta: pergunta,
        resposta: resposta,
        resultado: resultado

    };

    firebase.database().ref().child('resultstestvoc').push(data, function (error) {
        if (error) {
            alert("Data could not be saved." + error);
            location.href = "index.html";
        } else {
            location.href = "game.html";
        }
    });

}