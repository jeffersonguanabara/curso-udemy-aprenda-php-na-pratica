<?php

function getInfo($atributo) {
    $dados = ['titulo'=>"SiteModelo", 'descricao'=>"Programando com PHP"];

    return $dados[$atributo];
}

function getUsuario() {
    $dados = [
        ["nome" => "Pedro", "email" => "pedro.dias@email.com"],
        ["nome" => "Paula", "email" => "paula.carvalho@email.com"],
        ["nome" => "Tiago", "email" => "tiago.rodrigues@email.com"]
    ];

    return $dados;
}

function exibeUsuario(){
    $usuarios = getUsuario();
    $html = "";

    foreach($usuarios as $chave => $usuario) {
        $nome = $usuario['nome'];
        $email = $usuario['email'];
        $html .= "<li>Nome: $nome - Email: $email</li>";
    }

    return $html;
}

function exibeUsuario2(){
    $usuarios = getUsuario();
    $html = "";

    for ($index = 0; $index < count($usuarios); $index++) {
        $nome = $usuarios[$index]['nome'];
        $email = $usuarios[$index]['email'];
        $html .= "<li>Nome: $nome - Email: $email</li>";

    }

    return $html;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo getInfo('titulo')?></title>
</head>
<body>
    <h2><?php echo getInfo("titulo")?></h2>
    <p><?php echo getInfo("descricao")?></p>

    <ul>
        <!-- <?php echo exibeUsuario() ?> -->
        <?php echo exibeUsuario2() ?>
    </ul>
    
</body>
</html>