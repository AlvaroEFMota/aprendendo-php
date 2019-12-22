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
	print "testando o print";
	?>
</body>

</html>