var imagem = document.querySelector(".destaque img");
var banners = ["img/destaque-home.png","img/destaque-home-2.png","http://lorempixel.com/700/480/"];

var i = 0;
var timer = setInterval(trocaBanner, 3000);	

function trocaBanner() {
	i = (i+1)%3;
	imagem.src = banners[i];
	//console.log(i);
}


function paraBanner() {
	clearInterval(timer);
}

imagem.onmouseover = paraBanner;

$(".painel").addClass("painel-compacto");

$(".painel button").click(function(){
	$(this).closest(".painel").removeClass("painel-compacto");
});

