<?php

$nome = "João";
$sobrenome = "Pedro";
$idade = 21;
$peso = 76.2;
$email = "joaopedro@email.com";

$nomeCompleto = $nome." ".$sobrenome;

$msg = "Nome: $nomeCompleto - Idade: $idade - Peso: $peso - Email: $email";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Título</title>
</head>
<body>
    <h1>PHP com HTML</h1>
    <h4><?php echo $msg ?></h4>
</body>
</html>