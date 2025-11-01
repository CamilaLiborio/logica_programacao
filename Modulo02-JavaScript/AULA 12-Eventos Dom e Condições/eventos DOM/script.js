// Evento = tem como criar dentro do HTML ou diretamente no JS. É uma tag.
// ; no js é opcional.
// o .value puxa o valor


let caixa = document.getElementById("mouse")


function entradaMouse() {
    caixa.style.backgroundColor = "green"

}

function saidaMouse() {
    caixa.style.backgroundColor = "red"
}

function mudaHtml(){
    let nome = document.querySelector("#nome").value
    caixa.innerHTML = nome 
}