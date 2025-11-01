function calcularMedia() {
    let nota1 = parseFloat(document.getElementById("nota1").value); 
    let nota2 = parseFloat(document.getElementById("nota2").value);
    let nota3 = parseFloat(document.getElementById("nota3").value);
    let resultado = document.querySelector("#resultado")
    
    let media = ( nota1 + nota2 + nota3) / 3

    if (nota1 > 10 || nota2 > 10 || nota3 > 10) {
        resultado.innerHTML = "DIGITE UMA NOTA MENORES QUE 10"
        resultado.style.color = "red" 
    } 
    
    else if (nota1 < 0 || nota2 < 2 || nota3 < 0) {
        resultado.innerHTML = "DIGITE NOTAS MAIORES QUE 0"
        resultado.style.color = "red"
    } 
    
    else if (isNaN(nota1) || isNaN(nota2) || isNaN(nota3)){
        resultado.innerHTML = "PREENCHA TODOS OS CAMPOS"
        resultado.style.color = "red"
    }

    else if (media >= 7) {
        resultado.innerHTML = "APROVADO <br> A sua média foi de foi de<br>"+ media
        resultado.style.color = "green"
    }
    
    else if (media >= 5) {
        resultado.innerHTML = "RECUPERAÇÃO <br> A sua média foi de<br>" + media 
        resultado.style.color = "orange"
    }

    else {
        resultado.innerHTML = "REPROVADO <br> A sua média foi de<br>" + media 
        resultado.style.color = 'red'
    }

}
//Com o  quertSelector dá pra "puxar um(a) # = id, . = class,p = tag.
//operador and e or. Or = "||", And = &&.
//isNaN = serve para obrigar ao usuário preencher todos os campos.