//Declaramos las constantes y almacenamos los elementos cuyo input queremos validar.
const mark1 = document.getElementById("mark1");
const mark2 = document.getElementById("mark2");
const mark3 = document.getElementById("mark3");

//Recogemos los eventos, en nuestro caso usamos el evento input
mark1.addEventListener("input", isValidMark);
mark2.addEventListener("input", isValidMark);
mark3.addEventListener("input", isValidMark);

function isValidMark() {
    return /^[1-10]+$/.test("mark1");
}

function isValidMark() {
    return /^[1-10]+$/.test("mark2");
}

function isValidMark() {
    return /^[1-10]+$/.test("mark3");
}
