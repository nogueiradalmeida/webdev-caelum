<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Mirror Fashion</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
    <link rel="stylesheet" href="css/produto.css">
  </head>
  <body>
  	<?php include("cabecalho.php"); ?>
  	<div class="container">
	 	<div class="produto">
	      <h1>Fuzzy Cardigan</h1>
	      <p>por apenas R$ 129,90</p>

	      <form action="checkout.php" method="POST">
	      	  <input type="hidden" name="id" value="2" >
	      	  <input type="hidden" name="preco" value="R$ 129,90" >
	          <fieldset class="cores">
	              <legend>Escolha a cor:</legend>

	              <input type="radio" name="cor" value="verde" id="verde" checked>
	              <label for="verde">
	                <img src="img/produtos/foto2-verde.png" alt="verde">
	              </label>
	              
	              <input type="radio" name="cor" value="rosa" id="rosa">
	              <label for="rosa">
	                <img src="img/produtos/foto2-rosa.png" alt="rosa">
	              </label>
	              
	              <input type="radio" name="cor" value="azul" id="azul">
	              <label for="azul">
	                <img src="img/produtos/foto2-azul.png" alt="azul">
	              </label>
	              
	          </fieldset>

	          <fieldset class="tamanhos">
	          	<legend>Escolha o tamanho:</legend>
	          	<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
		          <output for="tamanho" name="valorTamanho">42</output>
	          </fieldset>

	          <input type="submit" class="comprar" value="Comprar">

	      </form>
	    </div> <!-- fim .produto -->
	    <div class="detalhes">
	    	<h2>Detalhes do produto</h2>
			 
			<p>Haec mihi innatas quinquennium. Institutional fidem perduxit inquietudinem arte moliebantur. LXXIX foederati Constitutionis praeceptis ditescit. Scio quae Vice functionum. Meo iudicio naturali receptacula coniuncta, uti ex illo constitutionalis praescripto. Tamen semper habuit scientiam absolute diffidentia vestro circumstant erga me et PMDB. Narrabo dominae expellit patiebatur servare personalis commendatione conciliaretur ad partem obtineat. Nam ad designandum quod in ultimo conventu nisi 59.9% decernentibus usurum. Sicut enim audeo censu cursus reelection quid mihi favet.</p>

			<table>
				<thead>
					<tr>
						<th>Característica</th>
						<th>Detalhe</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Modelo</td>
						<td>Cardigã 3483</td>
					</tr>	
					<tr>
						<td>Material</td>
						<td>Algodão e poliester</td>
					</tr>
					<tr>
						<td>Cores</td>
						<td>Azul, Rosa e Verde</td>
					</tr>
					<tr>
						<td>Lavagem</td>
						<td>Lavar a mão</td>
					</tr>
				</tbody>
			</table>
	    </div>
	</div>
  	
  	<?php include("rodape.php"); ?>
	
	  	 <script type="text/javascript" src="js/jquery.js"></script>
		 <script type="text/javascript" src="js/produto.js"></script>

  </body>
</html>