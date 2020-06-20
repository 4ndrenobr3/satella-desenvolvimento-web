<?php
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
        <div class="container">
            <form method="post" id="formContact">
                <div class="grid-50 mobile-grid-100">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="grid-50 mobile-grid-100">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="grid-50 mobile-grid-100">
                    <label for="phone">Telefone</label>
                    <input type="tel" name="phone" id="phone" placeholder="(xx)xxxxx-xxxx">
                </div>
                <div class="grid-50 mobile-grid-100">
                    <label for="subject">Assunto</label>
                    <select name="subject" id="subject">
                        <option value="1">Comercial</option>
                        <option value="2">Dúvidas</option>
                        <option value="3">Parceria</option>
                        <option value="4">Outros</option>
                    </select>
                </div>
                <div class="grid-100 mobile-grid-100">
                    <label for="message">Menssagem</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="grid-30 mobile-grid-100">
                    <button type="submit">Enviar</button>
                </div>
                <div class="grid-70 mobile-grid-100" id="errorMessage">
                    <ul>
                        <li>
                            <div class="alert">Preencha corretamente todos os campos.</div>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </section>
    <script src="assets/js/script.js"></script>
</body>
</html>
