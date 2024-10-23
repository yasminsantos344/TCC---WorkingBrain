<?php

session_start();
if((!isset ($_SESSION['Email_ADM']) == true) and (!isset ($_SESSION['Senha_ADM']) == true))
{
  header('location:http://localhost/TCC---WorkingBrain-main/');

  }

$logado = $_SESSION['Email_ADM'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../Perfil/css/style.css">
    <title>Perfil</title>
</head> 
<body class="body">
    <main class="main container-fluid h-100">
        <header class="header d-flex justify-content-between align-items-center">
            <div class="titulo">
                <h2>Perfil</h2>
            </div>

            <div class="perfil">
                <img src="../Perfil/assets/perfil-icon.svg" alt="" srcset="" style="width: 11rem;">
            </div>

            <div class="header__toggle">
                <i class="bx bx-menu show-menu" id="header-toggle"></i>
            </div>

        </header>
        <br>

          <section class="section d-flex align-items-left">
            <div class="container">
                <div class="row">
                  <div class="col">
                    <h2>Dados Pessoais</h2>
                    <div class="mb-3">
                    <img src="../Perfil/assets/perfil-icon.svg" alt=""><br><br>
                    <label for="formGroupExampleInput" class="form-label">Nome:</label>
                    <input class="form-control" id="formGroupExampleInput" style=" width: 90%;">
                    <br>
                    <label for="formGroupExampleInput" class="form-label">Usuário:</label>
                    <input class="form-control" id="formGroupExampleInput" style=" width: 90%;">
                    <br>
                    <label for="formGroupExampleInput" class="form-label">Email:</label>
                    <input class="form-control" id="formGroupExampleInput" style=" width: 90%;">
                    <br>
                    <label for="formGroupExampleInput" class="form-label">Contato:</label>
                    <input class="form-control" id="formGroupExampleInput" style=" width: 90%;">
                    </div>
                    <br>
                    <h5><font color="red">***</font>Observação: Sempre mantenha os dados para contato atualizados.</h5>
                    <br><br>
                    <div class="col d-flex justify-content-around align-items-center" style="align-items: center;">
                    <button type="button" class="edit">Editar</button>
                    <button type="button" class="save">Salvar</button>
                    </div>
                </div>
                  <div class="vl"></div>
                  <div class="col" style="text-align: left;">
                    <h2>Pendências</h2>
                  </div>
                </div>
              </div>
        </section>
    </main>

    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="#" class="nav__link nav__logo" style="width: 2rem;">
                    <img src="../Perfil/assets/logo (2).svg" alt="" srcset="">
                </a>

                <div class="nav__list">
                    <div class="nav__items">

    <!-- Mudar p/ gest de usu -->  <a href="../Solicitacoes.html" class="nav__link">
                            <i class="bx bx-user nav__icon"></i>
                            <span class="nav__name">Gestão de Usuários</span>
                        </a>

                        <a href="../Gestão de Conteúdos/conteudos.html" class="nav__link">
                            <i class="bx bx-receipt nav__icon"></i>
                            <span class="nav__name">Gestão de Conteúdos</span>
                        </a>

                        <a href="../Políticas e Diretrizes/politicas.html" class="nav__link">
                            <i class="bx bx-cog nav__icon"></i>
                            <span class="nav__name">Configurações do<br>Sistema</span>
                        </a>

                        <a href="../Suporte Técnico/suporte.html" class="nav__link">
                            <i class="bx bx-message-rounded nav__icon"></i>
                            <span class="nav__name">Suporte Técnico</span>
                        </a>

                        <a href="../Gráficos/graficos.html" class="nav__link">
                            <i class="bx bx-line-chart nav__icon"></i>
                            <span class="nav__name">Monitoramento de<br>Atividades</span>
                        </a>

                        <a href="../Perfil/perfil.html" class="nav__link">
                            <i class="bx bx-id-card nav__icon"></i>
                            <span class="nav__name">Meu Perfil</span>
                        </a>
                    </div>
                </div>
            </div>

            <a href="../Login/LoginADM.html" class="nav__link nav__logout">
                <i class="bx bx-log-out nav__icon"></i>
                <span class="nav__name">Sair</span>
            </a>
        </nav>
    </div>
    <script src="../Perfil/js/sidebar.js"></script>
</body>
</html>