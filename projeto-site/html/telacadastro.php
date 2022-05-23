<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="icon" href="../img/logo.jpg">
    <title>Lucaxx - Design e Sublimação</title>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
  
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="box">
        <div id="titulo">
            <h1>Cadastro</h1>
        </div>

        <form method="post" action="../db/cadastro.php">
            <div class="grupo">
                <div class="infos">
                    <div class="linha-nome">
                        <label for="nome">Nome Completo:</label>
                        <input class="input-box" type="text" maxlength="50" name="nome" id="nome" required>
                    </div>

                    <div id="linha-nascimento">
                        <label for="nascimento">Dt. Nascimento:</label>
                        <input class="input-box" type="date" name="nascimento" id="nascimento" required>
                    </div>
                    
                    <div class="linha-email">
                        <label for="email">E-mail:</label>
                        <input class="input-box" type="email" maxlength="100" name="email" id="email" required>
                    </div>
                    
                    <div class="linha-telefone">
                        <label for="telefone">Telefone:</label>
                        <input class="input-box" type="text" name="telefone" maxlength="20" id="telefone" placeholder="Somente números" required>
                    </div>

                    <div class="linha-senha">
                        <label for="senha">Senha:</label>
                        <input class="input-box" type="password" maxlength="50" name="senha" id="senha" required>
                    </div>

                    <div class="linha-senha">
                        <label for="senha">Repetir Senha:</label>
                        <input class="input-box" type="password" maxlength="50" name="senha" id="senha" required>
                    </div>
                </div>

                <div class="botoes">
                    <input class="botao botao-cadastrar" type="submit" value="Cadastrar">
                    <button class="botao botao-voltar"><a href="../html/telalogin.php" style="text-decoration: none; color: black;">Voltar</a></button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>