/*
var numero=171.171;
var numeroTextoComDoisDecimais = numero.toFixed(2);
console.log(numeroTextoComDoisDecimais);
console.log('uai');
var numeroTextoComVirgula = numeroTextoComDoisDecimais.replace('.',',');
console.log(numeroTextoComVirgula);
var real = "R$ " + numeroTextoComVirgula;
console.log(real);

var numeroReal = "R$ 171,71";
var numeroCapado = numeroReal.replace("R$ ","").replace(",",".");
var num = parseFloat(numeroCapado)
console.log(num);
*/

function numberParaReal (numero) { return "R$ " + numero.toFixed(2).replace(".",","); }

function realParaNumber (texto) { return parseFloat( texto.replace("R$ ", "").replace(",",".") ); }

 