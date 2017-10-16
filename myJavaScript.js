var position = 0;
var test, test_question_num;
var question;
var questions = [
    ["What is 2+2?", "2", "3", "4", "5", "C"],
    ["What is 2-2?", "0", "1", "2", "4", "A"],
    ["What is 2*2?", "2", "4", "8", "6", "B"],
    ["What is 2/2?", "0", "2", "4", "1", "D"]
];
var choice, choices;
var choice_1, choice_2, choice_3, choice_4;
var correctAnswer = 0;


function func1(x) {
    return document.getElementById(x);
}


function showQuestion() {
    test = func1("test");
    if (position >= questions.length) {
        test.innerHTML = "<h2> Number of correct answers: " + correctAnswer;
        func1("test_question_num").innerHTML = "Test Completed";
       /* position = 0;
        correctAnswer = 0;*/
        return false;
    }
    func1("test_question_num").innerHTML = "Question " + (position + 1) + " of " + questions.length;
    question = questions[position][0];
    choice_1 = questions[position][1];
    choice_2 = questions[position][2];
    choice_3 = questions[position][3];
    choice_4 = questions[position][4];
    test.innerHTML = "<h3>" + question + "</h3>";

    test.innerHTML += "<input type='radio' name = 'answers' value = 'A'>" + choice_1 + "<br>";
    test.innerHTML += "<input type='radio' name = 'answers' value = 'B'>" + choice_2 + "<br>";
    test.innerHTML += "<input type='radio' name = 'answers' value = 'C'>" + choice_3 + "<br>";
    test.innerHTML += "<input type='radio' name = 'answers' value = 'D'>" + choice_4 + "<br><br>";
    test.innerHTML += "<button onclick = 'checkAnwer()'> Submit Answer </button";
}

function checkAnwer() {
    choices = document.getElementsByName("answers");
    for (var i = 0; i < choices.length; i++) {
        if (choices[i].checked) {
            choice = choices[i].value;
        }
    }
    if (choice == questions[position][5]) {
        correctAnswer++;
    }
    position++;
    showQuestion();
}

window.addEventListener("load", showQuestion, false);