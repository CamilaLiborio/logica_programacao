let produto = {
    nome: "Computador",
    fabricante: "Positivo",
    preco: 2000,
    processador: "I3-2100"
}

//acessando um item no objeto. '.' mais comum para buscar item.
console.log(produto.nome);
//quando tem algum caractere diferente ou espaços
console.log(produto["nome"]);

//Adicionar um item no objeto
produto.armazenamento = "256 gb"
produto["Memoria-RAM"] = "8 gb"
console.log(produto);

//Remover um elementro
delete produto.armazenamento
delete produto["memoria RAM"]
console.log(produto);