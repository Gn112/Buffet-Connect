<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Login</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="mainCad.css">
</head>

<body>
    <main>
        <div>
            <form method="post" id="formulario">

                <div class="page_counter"></div>

                <h1 class="cadastro_title">Cadastro</h1>

                <div class="row">
                    <label class="label">*Email:</label>
                    <input type="email" name="email" id="email" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*Senha:</label>
                    <input type="password" name="senha" id="senha" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*Confirmação de Senha:</label>
                    <input type="password" name="confirmaSenha" id="confirmaSenha" class="input_box" required>
                </div>

                <div class="row">
                    <button type="submit" name="submit" class="button_submit">PRÓXIMO</button>
                </div>

                <div class="row" id="return_button">
                    <a href="#">VOLTAR</a>
                </div>

            </form>
        </div>
    </main>
</body>

</html>