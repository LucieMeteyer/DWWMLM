const quizzData = [
    {
        question: " Quelle est la nourriture préférée d'Anya ? ",
        a: " Le chocolat ",
        b: " Les cacahuètes ",
        c: " Les bonbons ",
        correct: "b",
    },
    {
        question: " Comment s'appelle le chien d'Anya ? ",
        a: " Bond ",
        b: " Suki ",
        c: " Bobby ",
        correct: "a",
    },
];

const quizz = document.querySelector("#quizz");
const answerEls = document.querySelectorAll(".answer");
const questionEl = document.querySelector("#question");
const a_text = document.querySelector("#a_text");
const b_text = document.querySelector("#b_text");
const c_text = document.querySelector("#c_text");
const submitBtn = document.querySelector("#submit");

let currentQuizz = 0;
let score = 0;

loadQuizz();

function loadQuizz() {
    deselectAnswers();

    const currentQuizzData = quizzData[currentQuizz];

    questionEl.innerText = currentQuizzData.question;
    a_text.innerText = currentQuizzData.a;
    b_text.innerText = currentQuizzData.b;
    c_text.innerText = currentQuizzData.c;
}

function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false);
}

function getSelected() {
    let answer;
    answerEls.forEach(answerEl => {
        if (answerEl.checked) {
            answer = answerEl.id;
        }
    })
    return answer;
}

submitBtn.addEventListener('click', function () {
    const answer = getSelected();
    if (answer) {
        if (answer === quizzData[currentQuizz].correct) {
            score++;
        }

        currentQuizz++;

        if (currentQuizz < quizzData.length) {
            loadQuizz();
        } else {
            quizz.innerHTML =
                `<h2>Tu as ${score}/${quizzData.length} réponses trouvées.</h2>
            <button onclick="location.reload()">Recommencer</button>`
        }
    }
})
