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
</head>
<body>
    <nav class="navbar bg-body-light" style="font-family: League Spartan; width: auto;">
        <div class="container">
            <a href="#" class="navbar-brand d-flex-start">
                <img src="assets/logo.svg" alt="" style="width:10rem;">
            </a>
            <form action="" class="d-flexallign-items-center" style="width: 30rem;">
                <div class="input-group form-control me-2 rounded-pill" style="background-color: #CAE8F3;">
                    <input type="search" name="" id="" class="form-control" placeholder="Buscar..." style="background-color: #CAE8F3;">
                    <button type="submit" class="btn btn rounded-circle"><div class="container"><b><i class="bi bi-search" style="color: #f2f2f2; font-size: larger; box-shadow: inset;"></i></b></div></button>
                </div>
            </form>
            <a href="#" class="navbar-brand d-flexallign-items-center">
                <span class="navbar-text" style="color: #6893EF; font-family: League Spartan;">Bem-Vindo(a),<br><b>USERNAME</b></span>
                </a><img src="assets/Ellipse.svg" alt="" style="width:3rem;  align-items: center;">
            <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle-bi bi-chevron-down" type="button" data-bs-toggle="dropdown" data-bs-display="static" data-bs-boundary="viewport" data-bs-popper-config='{"placement":"bottom-start"}' aria-expanded="false" style="border-radius: 50% 50% 50% 50%; background-color: #f2f2f2; color: #6893EF; border-color: #f2f2f2;"></button>
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
    <section class="cards">
        <h1>PARA VOCÊ...</h1><br>
        <!--Linha 1 - Cards-->
        <div class="row">
            <div class="col">
            <a href="../Conteudos - Portugues/portugues.php">
              <div class="card">
                <div class="card-body">
                    <img src="assets/icons-materias/icon matéria-portugues.svg" style="padding-top: 2rem;">
                  <h5 class="card-title"><br><br>Português</h5>
                </div>
              </div>
            </a>
            </div>
            <div class="col">
                <a href="../Conteudos - Literatura/literatura.php"> 
              <div class="card">
                <div class="card-body">
                    <img src="assets/icons-materias/icon matéria-literatura.svg" alt="">
                  <h5 class="card-title"><br>Literatura</h5>
                </div>
              </div>
            </a> 
            </div>
            <div class="col">
                <a href="../Conteudos - Redação/redacao.php">
                <div class="card">
                  <div class="card-body">
                    <img src="assets/icons-materias/icon matéria-redação.svg" style="padding-top: 2rem;">
                    <h5 class="card-title"><br><br>Redação</h5>
                  </div>
                </div>
                </a>
              </div>
              <div class="col">
                <a href="../Conteudos - Inglês/ingles.php">
                <div class="card">
                  <div class="card-body">
                    <img src="assets/icons-materias/icon matéria-ingles.svg" alt="">
                    <h5 class="card-title" style="padding-top: 1rem;">Inglês</h5>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <br>
          <!--Linha 2 - Cards-->
          <div class="row">
            <div class="col">
                <a href="../Conteudos - Espanhol/espanhol.php">
                <div class="card">
                  <div class="card-body">
                      <img src="assets/icons-materias/icon matéria-espanhol.svg">
                    <h5 class="card-title"><br>Espanhol</h5>
                  </div>
                </div>
            </a>
              </div>
              <div class="col">
                <a href="../Conteudos - Matemática/matematica.php">
                <div class="card">
                  <div class="card-body">
                      <img src="assets/icons-materias/icon matéria-matematica.svg" style="padding-top: 0.5rem;">
                    <h5 class="card-title"><br>Matemática</h5>
                  </div>
                </div>
            </a>
              </div>
              <div class="col">
                <a href="../Conteudos - Geometria/geometria.php">
                  <div class="card">
                    <div class="card-body">
                      <img src="assets/icons-materias/icon matéria-geometria.svg">
                      <h5 class="card-title"><br>Geometria</h5>
                    </div>
                  </div>
                </a>
                </div>
                <div class="col">
                    <a href="../Conteudos - Artes/artes.php">
                  <div class="card">
                    <div class="card-body">
                      <img src="assets/icons-materias/icon matéria-artes.svg" style="padding-top: 2rem;">
                      <h5 class="card-title" style="padding-top: 2.5rem;">Artes</h5>
                    </div>
                  </div>
                </div>
            </a>
            </div>
            <br>
            <!--Linha 3 - Cards-->
          <div class="row">
            <div class="col">
                <a href="../Conteudos - Física/fisica.php">
                <div class="card">
                  <div class="card-body">
                      <img src="assets/icons-materias/icon matéria-fisica.svg">
                    <h5 class="card-title"><br>Física</h5>
                  </div>
                </div>
            </a>
              </div>
              <div class="col">
                <a href="../Conteudos - Química/quimica.php">
                <div class="card">
                  <div class="card-body">
                      <img src="assets/icons-materias/icon matéria-quimica.svg" style="padding-top: 1rem;">
                    <h5 class="card-title" style="padding-top: 2.3rem;">Química</h5>
                  </div>
                </div>
            </a>
              </div>
              <div class="col">
                <a href="../Conteudos - Biologia/biologia.php">
                  <div class="card">
                    <div class="card-body">
                      <img src="assets/icons-materias/icon matéria-biologia.svg" style="padding-top: 0.5rem;">
                      <h5 class="card-title"><br>Biologia</h5>
                    </div>
                  </div>
                </a>
                </div>
                <div class="col">
                    <a href="../Conteudos - Educação Física/educacao_fisica.php">
                  <div class="card">
                    <div class="card-body">
                      <img src="assets/icons-materias/icon matéria-educação-fisica.svg" alt="">
                      <h5 class="card-title" ><br>Educação-Física</h5>
                    </div>
                  </div>
                </div>
            </a>
            </div>
            <br>
            <!--Linha 4 - Cards-->
          <div class="row">
            <div class="col">
                <a href="../Conteudos - História/historia.php">
                <div class="card">
                  <div class="card-body">
                      <img src="assets/icons-materias/icon matéria-historia.svg" style="padding-top: 2rem;">
                    <h5 class="card-title"><br><br>História</h5>
                  </div>
                </div>
            </a>
              </div>
              <div class="col">
                <a href="../Conteudos - Geografia/geografia.php">
                <div class="card">
                  <div class="card-body">
                      <img src="assets/icons-materias/icon matéria-geografia.svg" alt="">
                    <h5 class="card-title"><br>Geografia</h5>
                  </div>
                </div>
            </a>
              </div>
              <div class="col">
                <a href="../Conteudos - Sociologia/sociologia.php">
                  <div class="card">
                    <div class="card-body">
                      <img src="assets/icons-materias/icon matéria-sociologia.svg" style="padding-top: 2rem;">
                      <h5 class="card-title"><br><br>Sociologia</h5>
                    </div>
                  </div>
                </a>
                </div>
                <div class="col">
                    <a href="../Conteudos - Filosofia/filosofia.php">
                  <div class="card">
                    <div class="card-body">
                      <img src="assets/icons-materias/icon matéria-filosofia.svg" alt="">
                      <h5 class="card-title"><br>Filosofia</h5>
                    </div>
                  </div>
                </div>
            </a>
            </div>
    </section>
    <section class="dicas">
        <h1>DICAS DE ESTUDO!!!</h1><br><br>
        <div class="container text-center">
            <div class="row">
              <div class="col">
                <img src="assets/clocks/clock-1.svg" style="padding-top: 2.2rem;">
                <h5 style="padding-top: 2.2rem;"><b><br>1</b></h5>
                <h6><br>Assista as videoaulas primeiro, depois faça um rascunho de tudo que você lembre e reassista as aulas para anotar o que não lembrou <br><br><br>  Faça isso por <b>45 minutos!</b></h6>
              </div><br>
              <div class="col">
                <img src="assets/clocks/clock-2.svg" alt="">
                <h5 style="padding-top: 0.4rem;"><b><br>2</b></h5>
                <h6><br>Tire um tempo para descansar. <br>Descanso também é importante assim quanto estudar <br><br><br><br> Faça isso por <b>5 minutos!</b></h6>
              </div><br>
              <div class="col">
                <img src="assets/clocks/clock-3.svg" alt="">
                <h5 style="padding-top: 0.2rem;"><b><br>3</b></h5>
                <h6><br>Volte para os estudos e priorize os simulados sobre o assunto estudado nos primeiros 45 minutos <br><br><br><br>Faça isso por <b>45 minutos!</b></h6>
              </div>
              <div class="col">
                <img src="assets/clocks/clock-4.svg" alt="">
                <h5 style="padding-top: 1.2rem;"><b><br>4</b></h5>
                <h6><br>Pegue um tempo para descansar novamente.<br>E, desta forma, continue seguindo esse ritmo que vai tornar o seu aprendizado mais eficaz! <br><br>Faça isso por <b>10 minutos!</b></h6>
              </div>
            </div>
        </div>


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

    <!--Bootstrap scripts-->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>