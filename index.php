<?php

function getInfo($atributo) {
    $dados = ['titulo'=>"SiteModelo", 'descricao'=>"Programando com PHP"];

    return $dados[$atributo];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo getInfo('titulo')?></title>
</head>
<body>
    <h2><?php echo getInfo("titulo")?></h2>
    <p><?php echo getInfo("descricao")?></p>
    
</body>
</html>