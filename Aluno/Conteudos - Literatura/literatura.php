<?php

session_start();
if((!isset ($_SESSION['Email_Aluno']) == true) and (!isset ($_SESSION['Senha_Aluno']) == true))
{
  header('location:http://localhost/TCC---WorkingBrain-main/');

  }

$logado = $_SESSION['Email_Aluno'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkingBrain</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <nav class="navbar bg-body-light" style="font-family: League Spartan; width: auto;">
        <div class="container">
            <a href="#" class="navbar-brand d-flex-start">
                <img src="assets/logo.svg" alt="" style="width:10rem;">
            </a>
            <form action="" class="d-flexallign-items-center" style="width: 30rem;">
                <div class="input-group form-control me-2 rounded-pill" style="background-color: #f2f2f2;">
                    <input type="search" name="" id="" class="form-control" placeholder="Buscar..." style="background-color: #f2f2f2;">
                    <button type="submit" class="btn btn rounded-circle"><div class="container"><b><i class="bi bi-search" style="color: #CAE8F3; font-size: larger; box-shadow: inset;"></i></b></div></button>
                </div>
            </form>
            <a href="#" class="navbar-brand d-flexallign-items-center">
                <span class="navbar-text" style="color: #6893EF; font-family: League Spartan;">Bem-Vindo(a),<br><b>USERNAME</b></span>
                </a><img src="assets/Ellipse.svg" alt="" style="width:3rem;  align-items: center;">
            <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle-bi bi-chevron-down" type="button" data-bs-toggle="dropdown" data-bs-display="static" data-bs-boundary="viewport" data-bs-popper-config='{"placement":"bottom-start"}' aria-expanded="false" style="border-radius: 50% 50% 50% 50%; background-color: #CAE8F3; color: #6893EF; border-color: #CAE8F3;"></button>
                <ul class="dropdown-menu dropdown-menu-end" style="margin-top: 50%;">
                  <li><a class="dropdown-item" href="#"><b>Conteúdos</b></a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#"><b>Avaliações</b></a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#"><b>Fale com<br>um Professor</b></a></li>
                </ul>
              </div>
        </div>
    </nav>
    <section class="trilha">
        <h1><b>SIGA A TRILHA<br>DE SUCESSO DE LITERATURA</b></h1>
        <div class="container text-center">
          <div class="row">
            <div class="col order-first">
              <div class="col__1">
                <a href="../Aula01-Português/aula01_portugues.html"><img src="../Conteudos - Literatura/assets/etapas/Etapa 1.svg" class="coluna__1_1"></a>
                <a href="#"><img src="../Conteudos - Literatura/assets/etapas/Etapa 3.svg" class="coluna__1_2"></a>
                <a href="#"><img src="../Conteudos - Literatura/assets/etapas/Etapa 5.svg" class="coluna__1_2"></a>
                <a href="#"><img src="../Conteudos - Literatura/assets/etapas/Etapa 7.svg" class="coluna__1_2"></a>
              </div>
            </div>
            <div class="col">
              <div class="line">
                <ul>
                  <li id="cor1">
                    <span class="circle" style="margin-top: 10.5%;" id="trocaCor"><i class="bi bi-star-fill"></i></span>
                  </li>

                  <li id="cor2">
                    <span class="circle" style="margin-top: 32%;"><i class="bi bi-star-fill"></i></span>
                  </li>

                  <li id="cor3">
                    <span class="circle" style="margin-top: 52.5%;"><i class="bi bi-star-fill"></i></span>
                  </li>

                  <li id="cor4">
                    <span class="circle" style="margin-top: 73.7%;"><i class="bi bi-star-fill"></i></span>
                  </li>

                  <li id="cor5">
                    <span class="circle" style="margin-top: 93.5%;"><i class="bi bi-star-fill"></i></span>
                  </li>

                  <li id="cor6">
                    <span class="circle" style="margin-top: 112.3%;"><i class="bi bi-star-fill"></i></span>
                  </li>

                  <li id="cor7">
                    <span class="circle" style="margin-top: 132.5%;"><i class="bi bi-star-fill"></i></span>
                  </li>

                  <li id="cor8">
                    <span class="circle" style="margin-top: 152%;"><i class="bi bi-star-fill"></i></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col order-last">
              <div class="col__2">
                <a href="#"><img src="../Conteudos - Literatura/assets/etapas/Etapa 2.svg" class="coluna__2_1"></a>
                <a href="#"><img src="../Conteudos - Literatura/assets/etapas/Etapa 4.svg" class="coluna__2_2"></a>
                <a href="#"><img src="../Conteudos - Literatura/assets/etapas/Etapa 6.svg" class="coluna__2_2"></a>
                <a href="#"><img src="../Conteudos - Literatura/assets/etapas/Etapa 8.svg" class="coluna__2_2"></a>
            </div>
          </div>
        </div>
    </section>
    <section class="progresso">
      <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 490" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,500 L 0,500 C 202.5,358 405,216 645,216 C 885,216 1162.5,358 1440,500 L 1440,500 L 0,500 Z" stroke="none" stroke-width="0" fill="#9071C7" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 250)"></path></svg>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <img src="assets/clocks/logo-footer.svg" style="width: 14rem;">
          <div class="col">
            <h2><B>WorkingBrain</B></h2>
            <h6>Conteúdos<br>Avaliações<br>Fale com um Professor<br>Meu Perfil</h6>
          </div>
          <div class="col">
            <h2><b>Social Media</b></h2>
            <h6>@workingbrain_oficial<br>WorkingBrain App</h6>
          </div>
          <div class="col">
            <h2><b>Contact</b></h2>
            <h6>+55 (11) 1234-5678<br>brainbox@brainbox.com<br>Brazil </h6>
          </div>
        </div>
      </div>
    </footer>

    <script src="../Aula01-Português/js/conclusao_aula.js"></script>

    <!--Bootstrap scripts-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>