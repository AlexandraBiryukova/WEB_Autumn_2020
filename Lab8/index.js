
function calculator() {
    var input =  document.getElementById("exp");
    var text = document.getElementById("result");
    var expression = input.value; 
    if (expression.match(/[0-9]+[+-/%*][0-9]+/) != expression) {
        input.style.borderColor = "red"
        text.style.color = "red";
        text.innerHTML = "Wrong input";
        return;
    }
    input.style.borderColor = "green"
    text.style.color = "green";
    var replaceString = expression.replace(/[+//%-*]/g, "*");
    var splitString = replaceString.split("*");
    console.log(splitString);
    var first = parseInt(splitString[0]);
    var second = parseInt(splitString[1]);
    var result = "ERROR";
    if (expression.includes("+") && (32767 > first + second)) {
        result = first + second;
    } else if (expression.includes("-") && (32767 < first - second)) {
        result = first - second;
    } else if (expression.includes("*") && (32767 > first * second)) {
        result = first * second;
    } else if (expression.includes("/") && second != 0) {
        result = first / second;
    } else if (expression.includes("%") && second != 0) {
        result = first % second;
    }
    text.innerHTML = "RESULT: " + result;
}

function palindrome() {
    var answer = document.getElementById("answer");
    var answerText =  document.getElementById("answerText");
    var fail = "https://image.flaticon.com/icons/png/512/84/84462.png"
    var success = "https://icons-for-free.com/iconfiles/png/512/checked+ok+yes+icon-1320196391133448530.png";
    var input = document.getElementById("palindrome");
    var text = input.value;
    var right = text.length - 1;
    var left = 0;
    while(left < right) {
        if (text[right] != text[left]) {
            answer.src = fail;
            answerText.innerHTML = "NO";
            input.style.borderColor = "red";
            input.style.color = "red";
            return
        } 
        left++;
        right--;
    }
    input.style.borderColor = "green";
    input.style.color = "green";
    answerText.innerHTML = "YES";
    answer.src = success;
}

function changeText1() {
    var input = document.getElementById("exp");
    var result = document.getElementById("result");
    input.style.borderColor = "rgb(71, 187, 241)";
    result.style.color = "black";
    result.innerHTML = "";
    document.getElementById("answer").src = "https://studia3d.com/wp-content/uploads/270-2706983_question-mark-svg-png-icon-free-download-question-mark-transparent.png";
}

function changeText2() {
    var input = document.getElementById("palindrome");
    input.style.borderColor = "rgb(71, 187, 241)";
    input.style.color = "black";
    document.getElementById("answerText").innerHTML = "";
    document.getElementById("answer").src = "https://studia3d.com/wp-content/uploads/270-2706983_question-mark-svg-png-icon-free-download-question-mark-transparent.png";
}

function histogram() {
    var input = document.getElementById("hist");
    var result = document.getElementById("histResult");
    var text = input.value.trim();
    var textSplit = text.split(" ");
    if (textSplit.length == 9) {
        textSplit.forEach(element => {
            if (!/^\d+$/.test(element)) {
                alert("use valid input format (9 numbers splitted by \" \")");
                return;
            }
        });
    } else {
        alert("use valid input format (9 numbers splitted by \" \")");
        return;
    }
    var numbers = textSplit.map(function(el) {
        return `${parseInt(el)}${"*".repeat(parseInt(el))}`;
      });
    result.innerHTML = numbers.join("<br>");
    var colors = ["red", "green", "orange", "purple"];
    result.style.color = colors[Math.floor(Math.random() * colors.length)];
}

function changeText3() {
    var input = document.getElementById("histResult");
    input.innerHTML = "";
}