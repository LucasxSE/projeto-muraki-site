<?php
  include ('../db/login.php');
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="../img/logo.jpg">
    <title>Login</title>
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
    <!-- <header>
        <nav class="navbar navbar-light fixed-top" style="background-color: #a7b7db;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              <a class="navbar-brand" href="#">Lucaxx - Design e Sublimação</a>
              <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.html">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="html/telalogin.php">Login</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://www.instagram.com/lucaxxdesign/" target="_blank">Instagram</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://wa.me/5592993848833" target="_blank">Whatsapp</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Produtos
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown" style="margin-bottom: 10px;">
                        <li><a class="dropdown-item" href="html/canecas.html">Canecas</a></li>
                        <li><a class="dropdown-item" href="html/garrafinhas.html">Garrafinhas</a></li>
                        <li><a class="dropdown-item" href="html/quadros.html">Quadros e Azulejos</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                  </form>
                </div>
              </div>
            </div>
        </nav> 
    </header> -->
    
    <main class="form-signin text-center">
      <form action="" method="POST">
        <img class="mb-4 logo" src="../img/logo.jpg" alt="Logo" width="130" height="130">
        <h1 class="h3 mb-3 fw-normal">Faça o login</h1>

        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
          <label for="floatingInput">E-mail</label>
        </div>
        <div class="form-floating">
          <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Senha" required>
          <label for="floatingPassword">Senha</label>
        </div>

        <div>
          <a href="#" target="_blank" style="text-decoration:none">Esqueceu a senha?</a>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="lembrar-senha"> Lembrar senha
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
        <a class="w-100 btn btn-md btn-secondary" href="telacadastro.php">Cadastre-se</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
      </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
