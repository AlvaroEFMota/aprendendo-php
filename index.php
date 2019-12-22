<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<?php
	$ano = "1996asdasdasdad";
	$ano = (string)(int)$ano;
	$ano .= "#";
	$ano = $ano."@";	
	$nome = "Alvaro Ernani Fonseca Mota";
	$idade = 23;
	echo $nome. " tem ". $idade. " anos e nasceu no ano de ". $ano."<br>";
	print "testando o print <br>";
	echo gettype($idade);
	$num1 = 10;
	$num2 = 5.55;
	echo "<br> soma de 10 + 5.55 = ", ($num1 + $num2);
	echo "<br>tipo de 10 ", gettype($num1);
	echo "<br>tipo de 5.55 ", gettype($num2);
	echo "<br>tipo de 10 + 5.55 ", gettype($num1+$num2);
	echo "<hr>	 $nome tem  $idade anos e nasceu no ano de $ano <br>";
	echo "<hr> var_dump de 10 ", var_dump($num1);
	?>
</body>

</html>