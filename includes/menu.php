<?php
include './functions/db.php';
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
<?php
$sql = "select * from slides";
$query = mysqli_query($conn, $sql);
while ($rs = mysqli_fetch_array($query)){
    $img1 = $rs['imagem1'];
    $texto1 = $rs['texto1'];
    $texto2 = nl2br($rs['texto2']);
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
    <title>Nogueira & Sarsur | Escritório de Advocacia em Belo Horizonte</title>
    <link rel="icon" href="/libraries/img/logo.jpg" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="/libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="/libraries/css/font-awesome.min.css">
    <link rel="stylesheet" href="/libraries/css/animate.css">
    <link rel="stylesheet" href="/libraries/css/aos.css">
    <script src="/libraries/js/jquery.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
    <link rel="stylesheet" href="/libraries/css/estilo_1.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

</head>

<body>

<div id="fb-root"></div>
<div id="preloader">
    <div id="status"></div>
</div>

<header id="teste">
       <div class="container-fluid" id="header"
            style="background-image: url('../libraries/img/<?php echo $img1; ?>'); background-size: cover; height: 700px; background-attachment: fixed">
           <div class="row">
               <div class="col-md-12 col-12" id="address">
                    <div class="text-center">
                          <p class="py-3 font-weight-bold">
                              <?php echo nl2br($endereco);?>
                          </p>
                    </div>
               </div>

               <div class="col-lg- col-12">
                   <div class="row">
                       <div class="col-md-5 col-12">
                           <div class="" id="logo">
                               <img src="/libraries/img/logo.jpg"
                                    title="Nogueira e Sarsur Advogados Logo"
                                    alt="logo" class="img-fluid p-1">
                           </div>
                       </div>
                   <div class="col-md-4 col-12 row celphone">
                       <p class="lead p-3 font-weight-bold my-auto"><?php echo $telefone ?></p>
                   </div>

                   <div class="col-md-4 col-12 row box_contact">
                       <a href="contato.php" class="my-auto ml-auto text-secondary"><p class="lead contact font-weight-light text-white  p-4">Entre em contato</p></a>
                   </div>
                   </div>
               </div>
           </div>


           <div class="row justify-content-end">
               <nav class="navbar navbar-expand-md navbar-light">
                   <button class="navbar-toggler mx-auto" id="buttonnav" type="button" data-toggle="collapse" data-target="#nav">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="nav">
                       <ul class="navbar-nav mx-auto text-center">
                           <li class="nav-item active mx-1">
                               <a title="Página Inicial" href="../index.php" class="nav-link">Página Inicial</a>
                           </li>
                           <li class="nav-item mx-1">
                               <a title="Escritório" href="escritorio.php" class="nav-link">Escritório</a>
                           </li>
                           <li class="nav-item mx-1">
                               <a title="Áreas de atuação" href="services.php" class="nav-link">Áreas de atuação</a>
                           </li>
                           <li class="nav-item mx-1">
                               <a title="Advogados" href="./advogados/" class="nav-link">Advogados</a>
                           </li>
                           <li class="nav-item mx-1">
                               <a title="Trabalhe Conosco" href="works.php" class="nav-link">Trabalhe Conosco</a>
                           </li>
<!--                           <li class="nav-item mx-1">-->
<!--                               <a title="Contato" href="contato.php" class="nav-link">Contato</a>-->
<!--                           </li>-->
                           <li class="border-left"></li>
                           <li class="nav-item mx-1">
                               <a title="Webmail" href="https://nogueirasarsur.com.br:2096" target="_blank" class="nav-link">Webmail</a>
                           </li>
                       </ul>
                   </div>
               </nav>
           </div>
           <div class="row terceira-row">
               <div class="col-lg-12 d-flex">
                   <div class="my-auto mr-auto text-left">
                       <h1 data-aos="fade-right" data-aos-duration="3000" style="color: #1b7943" class="font-weight-bold py-3"><?php echo $texto1; ?></h1>
                       <hr>
                    <h2 data-aos-duration="3000" data-aos="fade-up" class="display-4 font-weight-light"><?php echo $texto2; ?></h2>
                   </div>
               </div>
           </div>
       </div>
</header>
