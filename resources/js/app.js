import "./bootstrap";

const mark1 = document.getElementById("mark1");
const mark2 = document.getElementById("mark2");
const mark3 = document.getElementById("mark3");

let scores = [mark1, mark2, mark3];

function calculateAverage(scores) {
    let sum = 0;
    for (let index = 0; index < scores.length; index++) {
        sum += scores[index].value;
    }
    return sum / scores.length;
}

let average = calculateAverage(scores);
document.getElementById("average").value = average;
