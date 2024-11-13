<?
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
    <link rel="stylesheet" href="../Gestão de Usuários/css/style.css">
    <link rel="stylesheet" href="../Gestão de Usuários/css/Solicitacoes.css">
    <title>Gestão de Usuários</title>
</head> 
<body class="body">
    <main class="main container-fluid h-100">
        <header class="header d-flex justify-content-between align-items-center">
            <div class="titulo">
                <h2>Gestão de Usuários</h2>
            </div>

            <div class="perfil">
                <img src="../Gestão de Usuários/assets/perfil-icon.png" alt="" srcset="" style="width: 11rem;">
            </div>

            <div class="header__toggle">
                <i class="bx bx-menu show-menu" id="header-toggle"></i>
            </div>

        </header>
        <br>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" id="barra_pesquisa" placeholder="Buscar usuários..." aria-label="Search"><br>
            <input type="button" value="Ver Solicitações" class="btn btn solicitar" type="submit" onclick="Exibir()"><br>
          </form>

          <section class="section d-flex align-items-left">
            <div class="container">
                <div class="row">
                  <div class="col">
                    <h6 id="resultado">Nenhuma pesquisa realizada...</h6>
                  </div>
                  <div class="vl"></div>
                  <div class="col" style="text-align: left;">
                    <h2>Solicitações Pendentes</h2>
                  </div>
                  <div class="w-100"></div>
                  <div class="box-solicitacoes" id="box-solicitacoes" value="divdocaraio"></div>
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

                        <a href="../Suporte Técnico/suporte.php" class="nav__link">
                            <i class="bx bx-message-rounded nav__icon"></i>
                            <span class="nav__name">Suporte Técnico</span>
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
    <script src="../Gestão de Usuários/js/Solicitacao.js"></script>
    <script src="../Gestão de Usuários/js/sidebar.js"></script>
    <script src="../Gestão de Usuários/js/Solicitacao.js"></script>
    
</body>
</html>