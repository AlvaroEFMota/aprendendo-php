<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Form</title>

    <style type="text/css">
    .error{
        color: red;
    }
    </style>
</head>

<body>
    
    <?php
    
    function validar_entrada($entrada){
        $entrada = trim($entrada);
        $entrada = stripslashes($entrada);
        $entrada = htmlspecialchars($entrada);
        return $entrada;
    }

    $nomeErr = $idadeErr = $telefoneErr = $emailErr = $sexoErr = "";
    $nome = $idade = $telefone = $email = $sexo = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nome"])) {
            $nomeErr = "Preencha o campo nome";
        } else {
            $nome = validar_entrada($_POST["nome"]);
        }
        if (empty($_POST["idade"])) {
            $idadeErr = "Preencha o campo idade";
        } else {
            $idade = validar_entrada($_POST["idade"]);
        }
        if (empty($_POST["telefone"])) {
            $telefoneErr = "Preencha o campo telefone";
        } else {
            $telefone = validar_entrada($_POST["telefone"]);
        }
        if (empty($_POST["email"])) {
            $emailErr = "Preencha o campo Email";
        } else {
            $email = validar_entrada($_POST["email"]);
        }
        if (empty($_POST["sexo"])) {
            $sexoErr = "Escolha um sexo";
        } else {
            $sexo = $_POST["sexo"];
        }
    }
    date_default_timezone_set("America/Sao_Paulo");
    echo date("d/m/y");
    echo "<br>";
    echo date("l");
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <table>
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome"></td>
                <td><span class="error"><?php   echo $nomeErr; ?></span></td>
            </tr>
            <tr>
                <td>Idade</td>
                <td><input type="text" name="idade" width="10"></td>
                <td><span class="error"><?php echo $idadeErr; ?></span></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><input type="text" name="telefone"><br></td>
                <td><span class="error"><?php echo $telefoneErr; ?></span></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"><br></td>
                <td><span class="error"><?php echo $emailErr; ?></span></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="sexo" value="Masclino">Masclino
                    <input type="radio" name="sexo" value="Feminino">Feminino
                    <input type="radio" name="sexo" value="Outro">Outro
                </td>
                <td><span class="error"><?php echo $sexoErr; ?></span></td>
            </tr>
            <tr>
                <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
            </tr>
            <tr>
                <td><input type="image" src="https://media.geeksforgeeks.org/wp-content/uploads/gfg-40.png" width="70" height="48" /></td>
            </tr>
        </table>
    </form>
</body>

</html>