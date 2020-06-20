<?php

function getInput(){
    return (object)[
        'nome' => filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING),
        'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
        'phone' => filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS),
        'subject' => filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_NUMBER_INT),
        'message' => filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS)
    ];
}

$data = getInput();
$arrayName = explode(' ', trim($data->nome));
$firstName = ucfirst(strtolower($arrayName[0]));
$fullName = ucwords(strtolower(implode(' ',$arrayName)));

switch ($data->subject) {
    case 1:
        $data->subject = 'Comercial';
        break;
    case 2:
        $data->subject = 'Duvidas';
        break;
    case 3:
        $data->subject = 'Parceria';
        break;
    case 4:
        $data->subject = 'Outros';
        break;
}

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
        <div class="grid-100 container">
            <h1>Contato</h1>
            <p>Olá <?= $firstName ?>, recebemos sua mensagem , em breve, um de nossos atendentes irá responde-lo</p>
        </div>
        <div class="grid-100 container">
            <div class="card">
                <p><strong>Nome: </strong> <?= $fullName ?></p>
                <p><strong>E-mail: </strong> <?= $data->email ?> </p>
                <p><strong>Telefone: </strong> <?= $data->phone ?> </p>
                <p><strong>Assunto: </strong> <?= $data->subject ?></p>
                <p><strong>Menssagem: </strong></p>
                <p><?= $data->message ?></p>
            </div>
        </div>
    </section>
</body>
</html>
