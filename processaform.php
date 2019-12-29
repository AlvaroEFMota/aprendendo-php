<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Processa form</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = limpar_entrada($_POST["nome"]);
    $idade = limpar_entrada($_POST["idade"]);
    echo "Seu nome é ",$nome," e você tem ",$idade," anos";
    }

    function limpar_entrada($entrada){
        $entrada = trim($entrada);
        $entrada = stripslashes($entrada);
        $entrada = htmlspecialchars($entrada);
        return $entrada;
    }

    ?>
</body>

</html>