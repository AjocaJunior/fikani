const question = document.getElementById('question');
const choices = Array.from(document.getElementsByClassName('choice-text'));
const progressText = document.getElementById('progressText');

const progressBarFull = document.getElementById('progressBarFull');
const loader = document.getElementById('loader');
const game = document.getElementById('game');
const areaText = document.getElementById('area');
const areaSession = document.getElementById('areaSec');

const scoreTextSince = document.getElementById('scoreSince');
const scoreTextTim = document.getElementById('scoreTim');
const scoreTextActiv = document.getElementById('scoreActiv');
const scoreTextIntrov = document.getElementById('scoreIntrov');
const scoreTextNeuro = document.getElementById('scoreNeuro');
const scoreTextEsqui = document.getElementById('scoreEsqui');
const scoreTextDepre = document.getElementById('scoreDepre');
const scoreTextEpile = document.getElementById('scoreEpile');
const scoreTextPsico = document.getElementById('scorePsico');



// let areas = [area1, area2]; //adicionado
var a;
let currentQuestion = {};
let acceptingAnswers = false;
let scoreSince = 0;
let scoreTim = 0;
let scoreActiv = 0;
let scoreIntro = 0;
let scoreNeuro = 0;
let scoreEsqui = 0;
let scoreDepre = 0;
let scoreEpile = 0;
let scorePsico = 0;
let questionCounter = 0;
let availableQuesions = [];
let questions = [];





var setsession;
var groupMaxIndex;




fetch('testedepersonaperguntas.json')
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
const CORRECT_BONUS = 2;
const MAX_QUESTIONS = 90;

startGame = () => {
    questionCounter = 0;

    availableQuesions = [...questions];
    getNewQuestion();
    scoreSince = 0;
    scoreTim = 0;
    scoreActiv = 0;
    scoreIntro = 0;
    scoreNeuro = 0;
    scoreEsqui = 0;
    scoreDepre = 0;
    scoreEpile = 0;
    scorePsico = 0;

};

getNewQuestion = () => {
    if (availableQuesions.length === 0 || questionCounter >= MAX_QUESTIONS) {
        localStorage.setItem('ScoreSince', scoreSince);
        localStorage.setItem('ScoreTimidez', scoreTim);
        localStorage.setItem('ScoreActiv', scoreActiv);
        localStorage.setItem('ScoreIntro', scoreIntro);
        localStorage.setItem('ScoreNeuro', scoreNeuro);
        localStorage.setItem('ScoreEsqui', scoreEsqui);
        localStorage.setItem('ScoreDepre', scoreDepre);
        localStorage.setItem('ScoreEpile', scoreEpile);
        localStorage.setItem('ScorePsico', scorePsico);
        // localStorage.setItem('campodeactuacao', area);
        //go to the end page
        return window.location.assign('end.php');
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

        console.log(selectedAnswer, currentQuestion.answer, currentQuestion.grupo, scoreSince, scoreTim);
        if (classToApply === 'correct') {

            if (currentQuestion.grupo == 1) {
                incrementScore(CORRECT_BONUS);
            } else if (currentQuestion.grupo == 2) {
                incrementScoreTimidez(CORRECT_BONUS);
            } else if (currentQuestion.grupo == 3) {
                incrementScoreActiv(CORRECT_BONUS);
            } else if (currentQuestion.grupo == 4) {
                incrementScoreIntro(CORRECT_BONUS);
            } else if (currentQuestion.grupo == 5) {
                incrementScoreNeuro(CORRECT_BONUS);
            } else if (currentQuestion.grupo == 6) {
                incrementScoreEsqui(CORRECT_BONUS);
            } else if (currentQuestion.grupo == 7) {
                incrementScoreDepre(CORRECT_BONUS);
            } else if (currentQuestion.grupo == 8) {
                incrementScoreEpile(CORRECT_BONUS);
            } else if (currentQuestion.grupo == 9) {
                incrementScorePsico(CORRECT_BONUS);
            }

        }


        selectedChoice.parentElement.classList.add(classToApply);

        setTimeout(() => {
            selectedChoice.parentElement.classList.remove(classToApply);
            getNewQuestion();
        }, 1000);
    });
});



incrementScore = (num) => {
    scoreSince += num;
    // scoreTextSince.innerText = scoreSince;
};
incrementScoreTimidez = (num) => {
    scoreTim += num;
    // scoreTextTim.innerText = scoreTim;
};
incrementScoreActiv = (num) => {
    scoreActiv += num;
    // scoreTextActiv.innerText = scoreActiv;
};
incrementScoreIntro = (num) => {
    scoreIntro += num;
    // scoreTextIntro.innerText = scoreIntro;
};
incrementScoreNeuro = (num) => {
    scoreNeuro += num;
    // scoreTextNeuro.innerText = scoreNeuro;
};
incrementScoreEsqui = (num) => {
    scoreEsqui += num;
    // scoreTextEsqui.innerText = scoreEsqui;
};
incrementScoreDepre = (num) => {
    scoreDepre += num;
    // scoreTextDepre.innerText = scoreDepre;
};
incrementScoreEpile = (num) => {
    scoreEpile += num;
    // scoreTextEpile.innerText = scoreEpile;
};
incrementScorePsico = (num) => {
    scorePsico += num;
    // scoreTextPsico.innerText = scorePsico;
};



//PERSISTÊNCIA DE DADOS


// function salvar() {

//     var pergunta = selectedAnswer;
//     var resposta = '';
//     var resultado = '';

//     create( pergunta, resposta, resultado);

// }


// function create( pergunta, resposta, resultado) {
//     var data = {
//         pergunta: pergunta,
//         resposta: resposta,
//         resultado:resultado

//     };

//     firebase.database().ref().child('resultstestvoc').push(data, function (error) {
//         if (error) {
//             alert("Data could not be saved." + error);
//             location.href = "index.html";
//         } else {
//             location.href = "game.html";
//         }
//     });

// }