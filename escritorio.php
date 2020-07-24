<?php require_once "functions/db.php" ?>
<?php
$sql = "select * from slides";
$query = mysqli_query($conn, $sql);
while ($rs = mysqli_fetch_array($query)){
    $img1 = $rs['imagem1'];
    $texto1 = $rs['texto1'];
    $texto2 = nl2br($rs['texto2']);
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
<?php
$sql = "select * from page_escritorio";
$query = mysqli_query($conn,$sql);
while ($rs = mysqli_fetch_array($query)){
    $header_img = $rs['header_img'];
    $header_texto = $rs['header_texto'];
    $titulo = $rs['titulo'];
    $txt1 = $rs['texto1'];
    $img1 = $rs['img1'];
    $titulo2 = $rs['titulo2'];
    $texto2 = $rs['texto2'];
    $img2 = $rs['img2'];
    $titulo3 = $rs['titulo3'];
    $texto3 = $rs['texto3'];
    $descricao3 = $rs['descricao3'];
    $img3 = $rs['img3'];
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
    <link rel="stylesheet" href="../libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="../libraries/css/font-awesome.min.css">
    <link rel="stylesheet" href="../libraries/css/animate.css">
    <link rel="stylesheet" href="../libraries/css/aos.css">
    <script src="../libraries/js/jquery.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
    <link rel="stylesheet" href="../libraries/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

</head>

<body>

<div id="fb-root"></div>
<div id="preloader">
    <div id="status"></div>
</div>


<header id="escritorio-header" style="background-image: url('./libraries/img/<?php echo $header_img; ?>');
        background-size: cover; height: 550px; background-repeat: no-repeat;
        background-attachment: fixed; filter: contrast(130%)">
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
             <a class="navbar-brand" href="../index.php">
                 <img id="img_logo_menu" alt="logo" src="../libraries/img/logo.jpg"
                 class="img-fluid col-12">
             </a>
                   <button class="navbar-toggler mx-auto" id="buttonnav" type="button" data-toggle="collapse" data-target="#nav">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="nav">
                       <ul class="navbar-nav mx-auto text-center">
                           <li class="nav-item">
                               <a title="Página Inicial" href="../index.php" class="nav-link">Home</a>
                           </li>
                           <li class="nav-item active">
                               <a title="Escritório" href="escritorio.php" class="nav-link">Institucional</a>
                           </li>
                           <li class="nav-item">
                               <a title="Áreas de atuação" href="../services.php" class="nav-link">Áreas de Atuação</a>
                           </li>
                           <li class="nav-item">
                               <a title="Advogados" href="../advogados" class="nav-link">Advogados</a>
                           </li>
                         
                           <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contato
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../contato.php">Envie um email <i class="fa fa-mail-forward"></i></a>
                                <a class="dropdown-item" href="../works.php">Trabalhe Conosco <i class="fa fa-suitcase"></i></a>
                                </div>

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
                    -webkit-text-fill-color: #679267; font-size: 4rem;"
                    class="font-weight-lighter mt-5 py-4"><?php echo $header_texto;?></h1>
                <a href="../index.php" class="text-light">página inicial</a><i class="fa fa-chevron-right mx-2" style="color: white;"></i>
                <span class="text-light"> Nosso escritório</span>
            </div>
        </div>
    </div>
</header>


<div class="container py-5">
    <div class="row pt-5 justify-content-center">
        <div class="col-lg-12" >
            <h1 data-aos="zoom-in" data-aos-duration="2000"  class="text-left">
                <?php echo $titulo; ?></h1>
            <h5 data-aos="zoom-right" data-aos-duration="2500"
                class="font-weight-lighter pb-4 pt-3 text-justify" style="line-height: 200%">
                <?php echo $txt1;?></h5>
        </div>
    </div>
</div>

<div style="background-image: url('./libraries/img/<?php echo $img1;?>'); height: 400px; background-size: cover; width: 100%"></div>

    <div class="container py-5">
        <div class="row pt-5 justify-content-center">
            <div class="col-lg-12" >
                <h1 data-aos="zoom-in" data-aos-duration="2000"  class="text-left">
                    <?php echo $titulo2; ?></h1>
                <h5 style="line-height: 200%" data-aos="zoom-right"
                    data-aos-duration="2500" class="font-weight-lighter pb-4 pt-3 text-justify">
                    <?php echo $texto2;?></h5>
            </div>

        </div>
    </div>

    <div style="background-image: url('./libraries/img/<?php echo $img2;?>'); height: 300px; background-size: cover; background-attachment: fixed; filter:grayscale(200%)"></div>

    <div class="container py-5">
        <div class="row pt-5 justify-content-center">
            <div class="col-lg-12" >
                <h1 data-aos="zoom-in" data-aos-duration="2000"  class="text-left">
                    <?php echo $titulo3; ?></h1>
                <h5 style="line-height: 180%" data-aos="zoom-right" data-aos-duration="2500" class="font-weight-lighter pb-4 pt-3 text-justify">
                    <?php echo $texto3;?></h5>
                <h6 style="line-height: 180%">
                    <?php echo  $descricao3?>
                </h6>
            </div>
        </div>
    </div>

    <div  class="my-5" style="background-image: url('./libraries/img/<?php echo $img3;?>'); height: 400px; background-size: cover; background-attachment: fixed"></div>

<?php include('./includes/footer.php');?>
