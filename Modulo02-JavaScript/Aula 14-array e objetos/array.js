let listaTimes = ["Santos", "São paulo", "Palmeiras", "Corinthians"

]

//acessar um item do array
console.log(listaTimes[0]);
console.log(listaTimes[1]);
console.log(listaTimes[2]);
console.log(listaTimes[3]);

//adicionar itens em um array
listaTimes.push("Ponte Preta")
listaTimes.push("Flamengo")
console.log(listaTimes);

//Verificar o tamanho da lista
console.log(listaTimes.length)

//Adicionar um item na primeira posição
listaTimes.unshift("Fluminense")
listaTimes.unshift("Vasco")

//Reomover o primeiro elemento do array
listaTimes.shift()
console.log(listaTimes);

//Remover o ultimo elemento array
listaTimes.pop()
console.log(listaTimes);

//Encontrar a posição de um elemnto
console.log(listaTimes.indexOf("Santos"));

let listaNomes = ["Marcos", "Diego", "Camila", "Matheus"]

//removendo itens
//splice(x,y)= x escolhe elementos da lista, y oculta elementos.
listaNomes.splice(3,1) //Mateus removido
console.log(listaNomes);

//alterando itens
listaNomes.splice(3,0, "Robson")
console.log(listaNomes)

//adicionando itens (x,y), x apartir de onde vai adicionar, y remove os que vem dps
listaNomes.splice(2,0, "Gabriel", "Diogo")
console.log(listaNomes);




