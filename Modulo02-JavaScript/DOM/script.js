//a estilização é feita pelo css. mas ainda sim dá pra fazer algumas aqui pelo js.


document.body.style.backgroundColor = "grey"
document.body.style.color = "white"

//window.alert("Site com vírus, deseja continuar? ")

//window.confirm("SEJA BEM-VINDO! Deseja fazer um cadastro para receber novas atualizações sobre esse tema?")

//window.prompt("Cadastro")
//window.prompt("Senha")

//window.alert("Site com vírus, deseja continuar? ")

//tag --> document.getElementsByTagName("input")[qual dos p´s vc quer]
let paragrafo1 = document.getElementsByTagName("p")[0]
paragrafo1.innerHTML = "USANDO OTAG NAME"
//innerHTML = muda o texto da caixa especificada acima com o let. [0]= INDICA QUAL P USAR.
paragrafo1.style.backgroundColor = "black"

//id --> documentgetElementById("name"), usa o id para identificar exatamente qual o "p", seria como id do HTML.
let paragrafo2 = document.getElementById("paragrafo2")
paragrafo2.innerHTML = "USANDO O ID"
paragrafo2.style.backgroundColor = "green"

//class 
let paragrafo3 = document.getElementsByClassName ("paragrafo3") [0]
paragrafo3.innerHTML = "USANDO A CLASSE"
paragrafo3.style.backgroundColor = "blue"

//name --> document.get.ElementByName("name")[0]  = selecionar por tag, id,class


//query --> document.querySelector("input"tag-Nome da tag - input)
                                //("input" ID-Nome do ID - #nome) 
                                //("input" Class-nome da classe - ,nome-classe)

let paragrafo4 = document.querySelector("#paragrafo4")
paragrafo4.innerHTML = "USANDO O QUERY SELECTOR"
paragrafo4.style.backgroundColor= "red"

//pq quando mexemos no tagname quebra o código do ID?
//como usar o for no let?, para usar todas as tags de uma de vez.



