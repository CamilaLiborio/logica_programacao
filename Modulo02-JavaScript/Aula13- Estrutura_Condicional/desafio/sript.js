function calcular() {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let operacao = document.querySelector("#operacao").value
    let resultado = document.querySelector("#resultado")
    
    if (operacao == '+') {
        let soma = (num1 + num2)
        resultado.innerHTML = "A soma desses valores é " + soma    
        resultado.style.color = 'green'  
    }
    
    else if (operacao == '-') {
        let subtracao = (num1 - num2)
        resultado.innerHTML = "A subtração desses valores é " + subtracao
        resultado.style.color = 'green' 
    }

    else if (isNaN(num1) || isNaN(num2)){
        resultado.innerHTML = "Preencha todos os campos!"
        resultado.style.color = "red"
    }
    
    else if (operacao == '*') {
        let multi = (num1 * num2)
        resultado.innerHTML = "A multiplicação desses valores é " + multi
        resultado.style.color = 'green' 
    }

    else if (operacao == '/') {
        let div = (num1 / num2)
        resultado.innerHTML = "A divisão desses valores é " + div
        resultado.style.color = 'green' 
    }

    
}
