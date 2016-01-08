
var quantidadeElemento =  document.querySelector("#qt");
var totalElemento      =  document.querySelector("#total");
var precoElemento      =  document.querySelector("#preco");

function calculaTotal(){
	var quantidade = parseInt(this.value);
	console.log(quantidade);
	console.log(precoElemento.textContent);
	var preco = realParaNumber(precoElemento.textContent);
	console.log(preco);
	totalElemento.value = numberParaReal( quantidade * preco );
}

quantidadeElemento.oninput = calculaTotal;