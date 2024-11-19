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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
  <nav class="navbar bg-body-light" style="font-family: League Spartan; width: auto;">
    <div class="container">
      <a href="#" class="navbar-brand d-flex-start">
        <img src="assets/logo.svg" alt="" style="width:10rem;">
      </a>
      <a href="#" class="navbar-brand d-flexallign-items-center">
        <span class="navbar-text"
          style="color: #6893EF; font-family: League Spartan;">Bem-Vindo(a),<br><b>USERNAME</b></span>
      </a>
      <img src="assets/Ellipse.svg" alt="" style="width:3rem; align-items: center;">
      <div class="btn-group">
        <button class="btn bi-chevron-down" type="button" data-bs-toggle="dropdown" data-bs-display="static"
          data-bs-boundary="viewport" data-bs-popper-config='{"placement":"bottom-start"}' aria-expanded="false"
          style="border-radius: 50% 50% 50% 50%; background-color: #CAE8F3; color: #6893EF; border-color: #CAE8F3;"></button>
        <ul class="dropdown-menu dropdown-menu-end" style="margin-top: 50%;">
          <li><a class="dropdown-item" href="#"><b>Conteúdos</b></a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#"><b>Avaliações</b></a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#"><b>Fale com um Professor</b></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="video__aula">
    <a href="../Conteudos - Portugues/portugues.html"><button class="btn__return"><i
          class="bx bx-undo"></i></button></a><br><br><br>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-7 col-md-12">
          <iframe src="https://www.youtube.com/embed/GmSTVjl1iFU?si=UldEpwXqvTEiSRUO" title="YouTube video player"
            frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-lg-3 col-md-12 mt-4 mt-lg-0">
          <div class="module-list">
            <h4><b>Módulo 1</b></h4>
            <hr>
            <h4>Módulo 2</h4>
            <hr>
            <h4>Módulo 3</h4>
            <hr>
            <h4>Módulo 4</h4>
            <hr>
            <h4>Módulo 5</h4>
            <hr>
            <h4>Módulo 6</h4>
            <hr>
            <h4>Módulo 7</h4>
            <hr>
            <h4>Módulo 8</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="material__de__estudos">
    <!--Espaço para fazer o conteúdo ser apresentado ao aluno e comentários-->
    <div class="container">
      <h2>Avalie essa Aula:</h2>
      <div class="star-rating">
        <i class="bi bi-star" data-value="1"></i>
        <i class="bi bi-star" data-value="2"></i>
        <i class="bi bi-star" data-value="3"></i>
        <i class="bi bi-star" data-value="4"></i>
        <i class="bi bi-star" data-value="5"></i>
      </div>
      <p id="rating-value"></p>
      <br>
    </div>
  </section>
  <section class="conclusao">
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 490" xmlns="http://www.w3.org/2000/svg"
      class="transition duration-300 ease-in-out delay-150">
      <path d="M 0,500 L 0,500 C 202.5,358 405,216 645,216 C 885,216 1162.5,358 1440,500 L 1440,500 L 0,500 Z"
        stroke="none" stroke-width="0" fill="#aec6cf" fill-opacity="1"
        class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 250)"></path>
    </svg>

    <button class="btn__conclusao" id="btn">Marcar como Concluído</button>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <img class="logo-footer" src="assets/logo-footer.svg" style="width: 14rem;">
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
  <script src="js/color_star.js"></script>
  <!--Bootstrap scripts-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>

</html>