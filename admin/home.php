<?php
session_start();
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))){

    echo "<script>alert('Voce precisa logar para acessar')</script>";
   header("Location: index.php");

}else {
    require_once "db.php"
?>
<!doctype html>
<html lang="pt" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="Dashboard">
    <meta name="author" content="wayster h de melo">
    <title>Painel de Administração</title>

    <link rel="stylesheet" href="../libraries/css/bootstrap.min.css">
    <script src="js/font-awesome.js"></script>
    <link rel="stylesheet" href="css/style4.css">
    <link rel="icon" href="../libraries/img/logo.jpg" type="image/png" sizes="16x16">

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({
      selector:'.aqui',
      branding: false
 });</script>
    <script src="../libraries/js/jquery.min.js"></script>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar" style="background-color: white;">
            <ul class="nav flex-column" style="font-size: 12px;">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="index.php">
                        <img src="../libraries/img/logo.jpg" class="img-fluid" style="width: 100%;">
                    </a>
                </li>

                <li class="nav-item text-center">
                    <p class="text-uppercase text-dark text-center">bem vindo(a)</p>
                    <span class="text-dark">Bem Vindo Administrador</span>
                    <hr class="bg-dark">
                </li>

                <li class="nav-item">
                    <a class="text-uppercase nav-link text-dark font-weight-bold" data-toggle="collapse" data-target="#menu" href="#">
                        <i class="fas fa-archway mx-2"></i>cabeçalho
                    </a>
                    <ul id="menu" class="collapse">
                        <li>
                            <a class="dropdown-item-text font-weight-bold text-uppercase" style="color: #305f59" href="?menu">Informações</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item mb-2">
                    <a class="nav-link text-dark text-uppercase font-weight-bold"  href="#" data-toggle="collapse" data-target="#produtos">
                        <i class="fa fa-table mx-2"></i> página inicial
                    </a>
                    <ul id="produtos" class="collapse">
                        <li>
                            <a class="dropdown-item-text font-weight-bold" style="color: #305f59" href="?sliders">Imagem Inicial</a>
                        </li>
                        <li>
                            <a class="dropdown-item-text font-weight-bold" style="color: #305f59" href="?diferencial">Diferencial</a>
                        </li>
                        <li>
                            <a class="dropdown-item-text font-weight-bold" style="color: #305f59" href="?sobre">Sobre Nos</a>
                        </li>
                        <li>
                            <a class="dropdown-item-text font-weight-bold" style="color: #305f59" href="?atuacao">Areas atuação</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item mb-2">
                    <a class="nav-link text-dark text-uppercase font-weight-bold"  href="#" data-toggle="collapse" data-target="#office">
                        <i class="far fa-building mx-2"></i></i>escritório
                    </a>
                    <ul id="office" class="collapse">
                        <li>
                            <a class="dropdown-item font-weight-bold text-uppercase" style="color: #305f59" href="?office_imagens">imagens</a>
                        </li>
                        <li>
                            <a class="dropdown-item font-weight-bold text-uppercase" style="color: #305f59" href="?office_textos">textos</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item mb-2">
                    <a class="nav-link text-dark text-uppercase font-weight-bold"  href="#" data-toggle="collapse" data-target="#services">
                        <i class="fas fa-briefcase mx-2"></i>áreas atuação
                    </a>
                    <ul id="services" class="collapse">
                        <li>
                            <a class="dropdown-item font-weight-bold text-uppercase" style="color: #305f59" href="?services_img">imagens</a>
                        </li>
                        <li>
                            <a class="dropdown-item font-weight-bold text-uppercase" style="color: #305f59" href="?services_txt">textos</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark text-uppercase" href="?contato"><i class="fab fa-wpforms mx-2"></i></i>página Contato</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark text-uppercase" href="?pagina_adv">
                        <i class="fab fa-wpforms mx-2"></i></i>página advogados</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark text-uppercase" href="?advogados">
                        <i class="fab fa-wpforms mx-2"></i></i>advogados</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-dark text-uppercase" href="?works">
                        <i class="fab fa-wpforms mx-2"></i></i>Trabalhe conosco</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark text-uppercase" href="logout.php"><i class="fas fa-sign-out-alt mx-2"></i>Sair</a>
                </li>

            </ul>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-5" id="coluna_central">
               <div class="d-flex justify-content-center border-bottom">
                   <h1 class="h1 text-white py-5 text-uppercase"><i class="far fa-edit mx-2"></i>Nogueira & Sarsur Advogados</h1>
               </div>
            <div>
                <?php
                if (isset($_GET['menu'])){
                    include 'menu.php';}

                if(isset($_GET['sliders'])){
                    include 'sliders.php';
                }
                if (isset($_GET['diferencial'])){
                    include "diferencial.php";}

                if (isset($_GET['sobre'])){
                    include 'sobre.php';}

                if (isset($_GET['atuacao'])){
                        include 'atuacao.php';}

                if (isset($_GET['texto_comum'])){
                    include 'textocomun.php';
                }

                if(isset($_GET['office_imagens'])){
                    include 'office_imagens.php';}

                if (isset($_GET['office_textos'])){
                    include "ofice_textos.php";}

                if (isset($_GET['services_img'])){
                    include "pagina_servicos_img.php";}

                if (isset($_GET['services_txt'])){
                        include 'services_txt.php';}

                if (isset($_GET['contato'])){
                    include 'contato.php';}

                if (isset($_GET['pagina_adv'])){
                    include 'pagina_adv.php';}

                if (isset($_GET['advogados'])){
                    include "advogados.php";}

                if (isset($_GET['works'])){
                    include "works.php";
                }
                ?>
            </div>
        </main>
    </div>
</div>



<script src="../libraries/js/bootstrap.min.js"></script>
 </body>
</html>
<?php } ?>