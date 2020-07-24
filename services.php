<?php
require_once "functions/db.php"
?>
<?php
    $sql = "select * from page_services";
    $query = mysqli_query($conn, $sql);
    while($rs = mysqli_fetch_array($query)){
        $header_img = $rs['header_img'];
        $header_texto = $rs['header_texto'];
        $img1 = $rs['img1'];
        $title1 = $rs['title1'];
        $description1 = $rs['description1'];

        $img2 = $rs['img2'];
        $title2 = $rs['title2'];
        $description2 = $rs['description2'];

    }
?>
<?php

$sql = "select * from top";
$query = mysqli_query($conn,$sql);
while($rs = mysqli_fetch_array($query)){
    $logo = $rs['logo'];
    $telefone = $rs['telefone'];
    $endereco = $rs['endereco'];
}
?>
<!doctype html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="escritório de advocacia em belo horizonte, escritórios de advocacia em belo horizonte, advogados belo horizonte, advogado belo horizonte, advogado trabalhista bh whatsapp, advogados em belo horizonte,
        Escritorios, advogado bh, advogados online, advocacia, direito trabalhista, direito civil, civil direito, online, ">
    <title>Nossos Serviços | Nogueira & Sarsur </title>
    <link rel="icon" href="/libraries/img/logo.jpg" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="libraries/css/font-awesome.min.css">
    <link rel="stylesheet" href="libraries/css/animate.css">
    <link rel="stylesheet" href="libraries/css/aos.css">
    <script src="libraries/js/jquery.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
    <link rel="stylesheet" href="libraries/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

</head>

<body>

<div id="fb-root"></div>
<div id="preloader">
    <div id="status"></div>
</div>
<header id="escritorio-header" style="background-image: url('./libraries/img/<?php echo $header_img; ?>'); background-size: cover;
        height: 550px; background-repeat: no-repeat; background-attachment: fixed; filter: contrast(130%)">
    <div class="container-fluid" id="header-escritorio">
    <div class="row" id="adress">   
            <div class="col-lg-12 col-md-12 col-12 bg-light p-2">  
                <div class="text-center">
                <p><i class="fa fa-globe mx-2"></i> <?php echo $endereco ?>
                <span class="border-left mx-2"></span> 
                <span class="mx-4">  <i class="fa fa-phone mx-1"></i>
                 <?php echo $telefone; ?>
                 </span> 
                 </p>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
             <a class="navbar-brand" href="services.php">
                 <img id="img_logo_menu" alt="logo" src="./libraries/img/logo.jpg" 
                 class="img-fluid col-12">
             </a>
                   <button class="navbar-toggler mx-auto" id="buttonnav" type="button" data-toggle="collapse" data-target="#nav">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="nav">
                       <ul class="navbar-nav mx-auto text-center">
                           <li class="nav-item">
                               <a title="Página Inicial" href="services.php" class="nav-link">Home</a>
                           </li>
                           <li class="nav-item">
                               <a title="Escritório" href="institucional/escritorio.php" class="nav-link">Institucional</a>
                           </li>
                           <li class="nav-item active">
                               <a title="Áreas de atuação" href="services.php" class="nav-link">Áreas de Atuação</a>
                           </li>
                           <li class="nav-item">
                               <a title="Advogados" href="./advogados/" class="nav-link">Advogados</a>
                           </li>
                         
                           <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contato
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="contato.php">Entre em contato <i class="fa fa-mail-forward"></i></a>
                                <a class="dropdown-item" href="works.php">Trabalhe conosco <i class="fa fa-suitcase"></i></a>
                                </div>
                         </li>
                           <li class="border-left"></li>
                           <li class="nav-item mx-1">
                               <a title="Webmail" href="https://nogueirasarsur.com.br:2096" target="_blank" class="nav-link">Webmail <i class="fa fa-envelope"></i></a>
                           </li>
                       </ul>
                   </div>
               </nav>
            </div>
        <div class="row justify-content-center">
            <div class="text-center pb-5">
                <h1 style="background: -webkit-linear-gradient(#A9BA9D, #679267);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: #679267; font-size: 4rem;" class="font-weight-lighter mt-5 py-4"><?php echo $header_texto;?></h1>
                <a href="services.php" class="text-light">página inicial</a><i class="fa fa-chevron-right mx-2" style="color: white;"></i>
                <span class="text-light">área de atuação</span>
            </div>
        </div>
    </div>
</header>

<section class="py-5" id="descricao_servicos">
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-4 servicos1" data-aos="slide-right" data-aos-duration="1000">
                <img src="libraries/img/<?php echo $img1; ?>" alt="servicos" class="img-fluid">
            </div>
            <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                <h1 class="font-weight-lighter"><?php echo $title1; ?></h1>
                    <h5 class="font-weight-light text-justify pt-4" style="line-height: 200%"><?php echo $description1; ?></h5>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-lg-4 servicos1" data-aos="slide-right" data-aos-duration="1000">
                <img src="libraries/img/<?php echo $img2; ?>" alt="servicos" class="img-fluid">
            </div>
            <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
                <h1 class="font-weight-lighter"><?php echo $title2; ?></h1>
                <h5 class="font-weight-light text-justify pt-4" style="line-height: 200%"><?php echo $description2; ?></h5>
            </div>
        </div>
    </div>
</section>

<?php include('./includes/footer.php');?>