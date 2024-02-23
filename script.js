const question = [
    {
        question : "In what amount of Hydrogen does Chevron produces annually?",
        answer : [
            {text:"100,000 tonnes",correct: true},
            {text:"100,000,000 tonnes",correct: false},
            {text:"100,000,000,000 tonnes",correct: false},
            {text:"10,000 tonnes",correct: false},
        ]
    }
]

const questionElement = document.getElementById("question");
const answerbutton = document.getElementById("answer-buttons");
const nextbutton = document.getElementById("next-btn");

let currentQuestionIndex = 0;
let score = 0;

function starQuiz(){
    currentQuestionIndex = 0;
    score = 0;
    nextbutton.innerHTML = "Next";
    showQuestion();
}

function showQuestion() {
    resetState();
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + "." + currentQuestion;
    question;

    currentQuestion.answer.forEach(answer => {
        const button = document.createElement("button");
        button.innerHTML = answer.text;
        button.classList.add("btn");
        answerbutton.appendChild(button);
        if(answer.correct){
            button.dataset.correct =answer.correct;
        }
        button.addEventListener("click",selectAnswer);
    });
}

function resetState() {
    nextbutton.style.display = "none";
    while (answerbutton.firstChild){
        answerbutton.removeChild(answerbutton.firstChild);
    }
}

function selectAnswer(e){
    const selectBtn = e.target;
    const isCorrect = selectBtn.dataset.correct === "true";
    if(isCorrect) {
        selectBtn.classList.add("Correct");
        score++;
    } else{
        selectBtn.classList.add("Incorrect");
    }
    Array.from(answerbutton.children).forEach(button => {
        if(button.dataset.correct === "true"){
            button.classList.add("Correct");
        }
        button.disable = true;
    });
    nextbutton.style.display = "block";
}

function showScore(){
    resetState();
    questionElement.innerHTML = 'Your score ${score} out of ${questions.length}!';
    nextbutton.innerHTML = "Play again";
    nextbutton.style.display = "block";
}

function handleNextButton() {
    currentQuestionIndex++;
    if(currentQuestionIndex < questions.length){
        showQuestion();
    }else{
        showScore();
    }
}

nextbutton.addEventListener("click", () =>{
    if(currentQuestionIndex < questions.length){
        handleNextButton();
    }else {
        starQuiz();
    }
})