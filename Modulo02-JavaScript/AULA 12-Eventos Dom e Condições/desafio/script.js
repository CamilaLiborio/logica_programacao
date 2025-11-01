function calcularMedia() {
    let nota1 = parseFloat(document.getElementById("nota1").value);
    let nota2 = parseFloat(document.getElementById("nota2").value);
    let media = (nota1 + nota2) / 2;
    document.getElementById("resultado").innerText= "a media é:" +media.toFixed(2)
    
}




