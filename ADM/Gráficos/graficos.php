<?php
session_start();
if((!isset ($_SESSION['Email_ADM']) == true) and (!isset ($_SESSION['Senha_ADM']) == true))
{
  header('location:index.html');
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="../Políticas e Diretrizes/css/style.css">
    <title>Gráficos Administrativos</title>
</head> 
<body class="body">
    <main class="main container-fluid h-100">
        <header class="header d-flex justify-content-between align-items-center">
            <div class="titulo">
                <h2>Gráficos Administrativos</h2>
            </div>

            <div class="perfil">
                <img src="../Gráficos/assets/perfil-icon.png" alt="" srcset="" style="width: 11rem;">
            </div>

            <div class="header__toggle">
                <i class="bx bx-menu show-menu" id="header-toggle"></i>
            </div>

        </header>
        <br>
          <section class="section d-flex align-items-left">
            <div class="container">
    
            <div id="curve_chart" style="width: 100%; height: 80vh; background-color: transparent;"></div>
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

                        <a href="../Gestão de Usuários/gestão_usuarios.php" class="nav__link">
                            <i class="bx bx-user nav__icon"></i>
                            <span class="nav__name">Gestão de Usuários</span>
                        </a>

                        <a href="../Gestão de Conteúdos/conteudos.php" class="nav__link">
                            <i class="bx bx-receipt nav__icon"></i>
                            <span class="nav__name">Gestão de Conteúdos</span>
                        </a>

                        <a href="../Políticas e Diretrizes/politicas.php" class="nav__link">
                            <i class="bx bx-cog nav__icon"></i>
                            <span class="nav__name">Configurações do<br>Sistema</span>
                        </a>

                        <a href="../Gráficos/graficos.php" class="nav__link">
                            <i class="bx bx-line-chart nav__icon"></i>
                            <span class="nav__name">Monitoramento de<br>Atividades</span>
                        </a>

                        <a href="../Perfil/perfil.php" class="nav__link">
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
    <script src="../Políticas e Diretrizes/js/sidebar.js"></script>
    <script src="../Gráficos/js/Graficos.js"></script>
</body>
</html>