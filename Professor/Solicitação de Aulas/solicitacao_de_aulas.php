<?php

session_start();
if((!isset ($_SESSION['Email_Professor']) == true) and (!isset ($_SESSION['Senha_Professor']) == true))
{
  header('location:http://localhost/TCC---WorkingBrain-main/');

  }

$logado = $_SESSION['Email_Professor'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkingBrain</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/solicitacao_de_aulas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
<body>
    <nav class="navbar bg-body-light" style="font-family: League Spartan; width: auto;">
        <div class="container">
          <a href="#" class="navbar-brand d-flex-start">
            <img src="assets/logo.svg" alt="" style="width:10rem;">
          </a>
          <form action="" class="d-flexallign-items-center" style="width: 30rem;">
            <div class="input-group form-control me-2 rounded-pill">
                <input type="search" name="" id="" class="form-control" placeholder="Buscar...">
                <button type="submit" class="btn btn rounded-circle"><div class="container"><b><i class="bi bi-search" style="color: #f2f2f2; font-size: larger; box-shadow: inset;"></i></b></div></button>
            </div>
        </form>
          <a href="#" class="navbar-brand d-flexallign-items-center">
            <span class="navbar-text" style=" font-family: League Spartan;">Bem-Vindo(a),<br><b>USERNAME</b></span>
          </a>
          <img src="assets/Ellipse.svg" alt="" style="width:3rem; align-items: center;">
          <div class="btn-group">
            <button class="btn bi-chevron-down" type="button" data-bs-toggle="dropdown" data-bs-display="static"
              data-bs-boundary="viewport" data-bs-popper-config='{"placement":"bottom-start"}' aria-expanded="false"></button>
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

      <section class="card-tittle">
        <div class="boneco">
        <img src="assets/boneco (1).svg" class="brayan">
        </div>

        <div class="card">
          <img src="assets/card.svg" alt="" srcset="">
        </div>
      </section>

      <form action="" method="get" id="FormLink">
      <section class="cards">
        <h1><b>Escolha a Matéria:</b></h1><br><br><br>
        <!--Linha 1 - Cards-->
        <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                    <img src="assets/icons-materias/portugues.svg">
                    <h5 class="card-title">Português</h5>
                      <li><input type="radio" id="rad1" value="1" name="materia"/>
                        <label for="rad1">
                          <span class="outer">
                            <span class="inner"></span>
                          </span>
                      </label>
                        </li>       
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                    <img src="assets/icons-materias/literatura.svg" alt="">
                    <h5 class="card-title">Literatura</h5>
                    <li><input type="radio" id="rad2" value="8" name="materia"/>
                      <label for="rad2">
                        <span class="outer">
                          <span class="inner"></span>
                        </span>
                    </label>
                      </li>       
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <div class="card-body">
                    <img src="assets/icons-materias/redacao.svg">
                    <h5 class="card-title">Redação</h5>
                    <li><input type="radio" id="rad3" value="9" name="materia"/>
                      <label for="rad3">
                        <span class="outer">
                          <span class="inner"></span>
                        </span>
                    </label>
                      </li>       
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <img src="assets/icons-materias/ingles.svg">
                    <h5 class="card-title">Inglês</h5>
                    <li><input type="radio" id="rad4" value="10" name="materia"/>
                      <label for="rad4">
                        <span class="outer">
                          <span class="inner"></span>
                        </span>
                    </label>
                      </li>       
                  </div>
                </div>
              </div>
          </div>
          <br>
          <!--Linha 2 - Cards-->
          <div class="row">
            <div class="col">
                <div class="card">
                  <div class="card-body">
                      <img src="assets/icons-materias/espanhol.svg">
                    <h5 class="card-title">Espanhol</h5>
                    <li><input type="radio" id="rad5" value="11" name="materia"/>
                      <label for="rad5">
                        <span class="outer">
                          <span class="inner"></span>
                        </span>
                    </label>
                      </li>       
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                      <img src="assets/icons-materias/matematica.svg">
                    <h5 class="card-title">Matemática</h5>
                    <li><input type="radio" id="rad6" value="2" name="materia"/>
                      <label for="rad6">
                        <span class="outer">
                          <span class="inner"></span>
                        </span>
                    </label>
                      </li>       
                  </div>
                </div>
              </div>
              <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <img src="assets/icons-materias/geometria.svg">
                      <h5 class="card-title">Geometria</h5>
                      <li><input type="radio" id="rad7" name="materia"/>
                        <label for="rad7">
                          <span class="outer">
                            <span class="inner"></span>
                          </span>
                      </label>
                        </li>       
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <img src="assets/icons-materias/artes.svg">
                      <h5 class="card-title">Artes</h5>
                      <li><input type="radio" id="rad8" value="24" name="materia"/>
                        <label for="rad8">
                          <span class="outer">
                            <span class="inner"></span>
                          </span>
                      </label>
                        </li>       
                    </div>
                  </div>
                </div>
            </div>
            <br>
            <!--Linha 3 - Cards-->
          <div class="row">
            <div class="col">
                <div class="card">
                  <div class="card-body">
                      <img src="assets/icons-materias/fisica.svg">
                    <h5 class="card-title">Física</h5>
                    <li><input type="radio" id="rad9" value="19" name="materia"/>
                      <label for="rad9">
                        <span class="outer">
                          <span class="inner"></span>
                        </span>
                    </label>
                      </li>       
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                      <img src="assets/icons-materias/quimica.svg">
                    <h5 class="card-title">Química</h5>
                    <li><input type="radio" id="rad10" value="18" name="materia"/>
                      <label for="rad10">
                        <span class="outer">
                          <span class="inner"></span>
                        </span>
                    </label>
                      </li>       
                  </div>
                </div>
              </div>
              <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <img src="assets/icons-materias/biologia.svg">
                      <h5 class="card-title">Biologia</h5>
                      <li><input type="radio" id="rad11" value="17" name="materia"/>
                        <label for="rad11">
                          <span class="outer">
                            <span class="inner"></span>
                          </span>
                      </label>
                        </li>       
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <img src="assets/icons-materias/educacao.svg" alt="">
                      <h5 class="card-title">Educação-Física</h5>
                      <li><input type="radio" id="rad12" value="25" name="materia"/>
                        <label for="rad12">
                          <span class="outer">
                            <span class="inner"></span>
                          </span>
                      </label>
                        </li>       
                    </div>
                  </div>
                </div>
            </div>
            <br>
            <!--Linha 4 - Cards-->
          <div class="row">
            <div class="col">
                <div class="card">
                  <div class="card-body">
                      <img src="assets/icons-materias/historia.svg">
                    <h5 class="card-title">História</h5>
                    <li><input type="radio" id="rad13" value="3" name="materia"/>
                      <label for="rad13">
                        <span class="outer">
                          <span class="inner"></span>
                        </span>
                    </label>
                      </li>       
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <div class="card-body">
                      <img src="assets/icons-materias/geografia.svg" alt="">
                    <h5 class="card-title">Geografia</h5>
                    <li><input type="radio" id="rad14" value="4" name="materia"/>
                      <label for="rad14">
                        <span class="outer">
                          <span class="inner"></span>
                        </span>
                    </label>
                      </li>       
                  </div>
                </div>
              </div>
              <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <img src="assets/icons-materias/sociologia.svg">
                      <h5 class="card-title">Sociologia</h5>
                      <li><input type="radio" id="rad15" value="5" name="materia"/>
                        <label for="rad15">
                          <span class="outer">
                            <span class="inner"></span>
                          </span>
                      </label>
                        </li>       
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <img src="assets/icons-materias/filosofia.svg" alt="">
                      <h5 class="card-title">Filosofia</h5>
                      <li><input type="radio" id="rad16" value="6" name="materia"/>
                        <label for="rad16">
                          <span class="outer">
                            <span class="inner"></span>
                          </span>
                      </label>
                        </li>       
                    </div>
                  </div>
                </div>
            </div>
    </section>
    <svg box-shadow: "#a8a8a8 0.5rem 0.5rem 1rem" width="100%" height="100%" id="svg" viewBox="0 0 1440 490" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,500 L 0,500 C 202.5,358 405,216 645,216 C 885,216 1162.5,358 1440,500 L 1440,500 L 0,500 Z" stroke="none" stroke-width="0" fill="#F6E1E1" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 250)"></path></svg>
      
    <section class="forms">
      <div class="inputs">
        
          <div class="mb-3">
            <label for="exampleInput" class="form-label">Link da Aula:</label>
            <input type="text" name="Link_Aula" id="Link_Aula" class="form-control">
          </div>
          <div class="mb-3">
            <label for="exampleInput" class="form-label">Assunto da Aula:</label>
            <input type="text" name="Assunto_Aula" id="Assunto_Aula" class="form-control">
          </div>
          <div class="botao">
            <input type="button" class="btn btn-primary"  value="Solicitar" onclick="SolicitaAula()">
        </div>
        </form>
      </div>
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
      <!--Bootstrap scripts-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
  integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
  crossorigin="anonymous"></script>

  <script src="../js/Aula.js"></script>
</body>
</html>