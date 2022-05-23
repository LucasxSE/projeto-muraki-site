<?php
    include('../db/protect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Painel do Usuário</title>
</head>
<body>
    <header style="margin-bottom: 100px;">
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
    </header>    

    <div align="center">
        <h1>Bem vindo ao Painel, <?php echo $_SESSION['nome'];?></h1>
        <h2>
            <a href="../db/logout.php">Sair</a>
        </h2>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>