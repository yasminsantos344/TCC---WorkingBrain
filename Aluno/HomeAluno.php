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
    <link rel="stylesheet" href="../Aluno/css/HomeAluno.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
</head>
<body>
</head>
<body class="d-md-flex d-lg-block">
    <nav class="navbar d-lg-flex d-md-none">
        <div class="container">
            <a href="../Aluno/Conteudos/conteudos.php" class="navbar d-flex"><img src="../Aluno/assets/brainbox.png" alt="Logo" srcset="" id="logo"></a>
                <div class="search-box">
                    <form class="input-group d-flex">
                        <input type ="text" name ="search" id ="srch" placeholder="">
                        <button type ="submit" id="btn1">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>
                    <p id="bemvindo">Bem vindo(a),<br><strong>USERNAME</strong></p>
                        <a class="navbar d-flex"><img src="assets/Ellipse.png" alt="foto de perfil" srcset="" id="perfil"></a>
                
            <div class="btn-group">
                <button type="button" class="btn btn-success" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdown">
                    <i class="bi bi-chevron-down"></i>
                </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">Conteúdos</button>
                            <div class="dropdown-divider" id="divider1"></div>
                        <button class="dropdown-item" type="button">Avaliações</button>
                            <div class="dropdown-divider" id="divider2"></div>
                    <button class="dropdown-item" type="button">Converse com um professor</button>
                </div>
            </div>
    </nav>
        <aside class="aside d-lg-none d--flex">
        </aside>
            <section class="secao1">
                <h4><br><strong>PARA VOCÊ...</strong></h4><br>

                    <div class="carousel slide d-flex" id="mycarousel1" data-ride="carousel">
                        <ol class="carousel-indicators" id="carousel1">
                            <li data-target="#mycarousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#mycarousel1" data-slide-to="1" class=""></li>
                            <li data-target="#mycarousel1" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="width: 40rem; height: 14rem;">
                                <div class="container">
                                    <h3><br>NOVAS ATUALIZAÇÕES!</h3>
                                    <p id="atualizacoes">
                                        ● Chegou novas avaliações referente aos conteúdos de Biologia e História;<br>
                                        ● A área do “Meu Perfil” está de cara nova;<br>
                                        ● As videoaulas foram atualizadas de acordo com suas frequências nos vestibulares;<br>
                                        ● Nova opção de ativar Modo Noturno em sua conta;
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item" style="width: 40rem; height: 14rem;">
                                <div class="container">
                                    <h3><br>NOVAS ATUALIZAÇÕES!</h3>
                                    <p id="atualizacoes">
                                        ● Chegou novas avaliações referente aos conteúdos de Biologia e História;<br>
                                        ● A área do “Meu Perfil” está de cara nova;
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item" style="width: 40rem; height: 14rem;">
                                <div class="container">
                                    <h3><br>NOVAS ATUALIZAÇÕES!</h3>
                                    <p id="atualizacoes">
                                        ● As videoaulas foram atualizadas de acordo com suas frequências nos vestibulares;<br>
                                        ● Nova opção de ativar Modo Noturno em sua conta;
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="d-flex">
                    <img src="../Aluno/assets/stars.png" alt="stars" srcset="" id="stars">
                </div>
                    <div class="d-flex">
                    <img src="../Aluno/assets/boneco 2.png" alt="boneco" srcset="" id="boneco">
                </div>
            </section>
        <section class="secao2">
            <h2><br><strong>MATÉRIAS</strong></h2><br>
            <p id="conteudo">Selecione um conteúdo e comece seus estudos já!</p>

            <div class="carousel slide d-flex" id="mycarousel2" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" id="carousel2">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <div class="img-area"><img src="../Aluno/assets/icon matéria.png" alt=""></div>
                                        <div class="img-text" id="cards1">
                                            <h5>Espanhol</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                    <div class="single-box">
                                        <div class="img-area"><img src="../Aluno/assets/icon matéria (1).png" alt=""></div>
                                        <div class="img-text" id="cards1">
                                            <h5>Matemática</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                    <div class="single-box">
                                        <div class="img-area"><img src="../Aluno/assets/icon matéria (2).png" alt=""></div>
                                        <div class="img-text" id="cards1">
                                            <h5>Espanhol</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <div class="img-area"><img src="../Aluno/assets/icon matéria (3).png" alt=""></div>
                                        <div class="img-text" id="cards1">
                                            <h5>Espanhol</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <div class="img-area"><img src="../Aluno/assets/icon matéria (4).png" alt=""></div>
                                        <div class="img-text" id="cards1">
                                            <h5>Espanhol</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#mycarousel2" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                    <span class="carousel-control-prev-icon" arial-hidden="true"></span>
                </a>
            </div>
        </section>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>