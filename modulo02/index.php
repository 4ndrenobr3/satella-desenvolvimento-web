<?php
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/js/script.js">
    <link rel="stylesheet" href="./assets/css/unsemantic-grid-responsive.css">
    <title>Contato</title>
</head>
<body>
    <section>
        <div class="container">
            <form action="" method="post">
                <div>
                    <label for="name">Nome</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="phone">Telefone</label>
                    <input type="number" name="phone">
                </div>
                <div>
                    <label for="subject">Assunto</label>
                    <select name="subject" id="subject">
                        <option value="1">Comercial</option>
                        <option value="2">Dúvidas</option>
                        <option value="3">Parceria</option>
                        <option value="4">Outros</option>
                    </select>
                </div>
                <div>
                    <label for="message">Menssagem</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
