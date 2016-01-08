
function fib(n, undefined){
    if(fib.cache[n] === undefined){
        fib.cache[n] = fib(n-1) + fib(n-2);
    }

    return fib.cache[n];
}
fib.cache = [0, 1, 1];

function trocaCor() {
	var f1 =Math.round(Math.random()*100,2);
	var f2 =Math.round(Math.random()*100,2);
	var f3 =Math.round(Math.random()*100,2);
	var i1 = parseInt(f1);
	var i2 = parseInt(f2);
	var i3 = parseInt(f3);

	//alert("Vou mudar ");
	var cor = "rgb("+i1+","+i2+","+i3+")"  
	this.style.backgroundColor = cor ;
	this.style.color = "white";
	this.textContent = cor + "   Fibonacci(" + i1 + ") = " + fib(i1);
}

var h2 = document.querySelector("#historia");


h2.onclick=trocaCor; 


