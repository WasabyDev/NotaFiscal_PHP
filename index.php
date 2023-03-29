<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="centro">

<form method="post" action="">

<input class="input" type="text" name="nome" placeholder="Digite seu nome">
<br>
<br>
<input class="input" type="text" name="produto1" placeholder="Digite o primeiro produto">
<br>
<br>
<input class="input" type="number" name="valor1" placeholder="Digite o valor do produto">
<br>
<br>
<input class="input" type="text" name="produto2" placeholder="Digite o segundo produto">
<br>
<br>
<input class="input" type="number" name="valor2" placeholder="Digite o valor">
<br>
<br>
<input class="input" type="number" name="valor_pago" placeholder="Valor pago">
<br>
<br>
<br> 
<input class="botao" type="submit" name="submit" value="Calcular">
</div>

<div class="centroresposta">
<h2>Resposta </h2>

</div>

</form>
</body>
</html>

<?php

if(isset($_POST['submit'])){

$nome = $_POST['nome'];
$produto1 = $_POST['produto1'];
$valor1 = $_POST['valor1'];
$produto2 = $_POST['produto2'];
$valor2 = $_POST['valor2'];
$valor_pago = $_POST['valor_pago'];
$valor_total = $valor1 + $valor2;


echo "Nome do cliente: $nome<br>";
echo "Nome do primeiro produto: $produto1 <br>";
echo "Nome do segundo produto: $produto2 <br>";
echo "Valor total: $valor_total <br>";


if($valor_total <= $valor_pago){

$troco = $valor_pago - $valor_total;
echo "Valor pago: $valor_pago <br>";
echo "Troco: $troco <br>";

}

else {
$falta = $valor_total - $valor_pago;
echo "Valor pago: $valor_pago <br>";
echo "Falta: $falta <br>";

}

}

 ?>
