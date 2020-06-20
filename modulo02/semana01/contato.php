<?php

function getInput(){
    return (object)[
        'nome' => filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING),
        'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
        'phone' => filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS)
    ];
}

$data = getInput();

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive.css">
    <title>Contato</title>
</head>
<body>
    <section>
        <div class="grid-100">
            <h1>Contato</h1>
            <p>Olá <?= $data->nome ?>, recebemos sua mensagem , em breve, um de nossos atendentes irá responde-lo</p>
        </div>
    </section>
</body>
</html>
