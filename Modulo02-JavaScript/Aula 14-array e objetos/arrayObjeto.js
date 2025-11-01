let listaProdutos = [
    {nome: "Computador", fabricante: "Dell", valor: 5000},
    {nome: "Notebook", fabricante: "Acer", valor: 3000},
    {nome: "Monitor", fabricante: "LG", valor: 900},
    {nome: "Teclado", fabricante: "Red Dragon", valor: 200},
    {nome: "Mouse", fabricante: "Logitech", valor: 600}
] 

listaProdutos.forEach((produto) => {
    console.log(`O ${produto.computador} da ${produto.fabricante} é R$ ${produto.valor}`);
})

let listaProdutosCaros = listaProdutos.filter((produto => produto.valor > 1000))
console.log(listaProdutosCaros); 



/*
console.log(listaProdutos[0]);
console.log(listaProdutos[1]);
console.log(listaProdutos[2]);
console.log(listaProdutos[3]);
console.log(listaProdutos[4]);
*/