<?php require_once "functions/db.php"?>
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
    <link rel="stylesheet" href="libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="libraries/css/font-awesome.min.css">
    <link rel="stylesheet" href="libraries/css/animate.css">
    <link rel="stylesheet" href="libraries/css/aos.css">
    <script src="libraries/js/jquery.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
    <link rel="stylesheet" href="libraries/css/estilo_1.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

</head>

<body>

<div id="fb-root"></div>
<div id="preloader">
    <div id="status"></div>
</div>


<header id="escritorio-header">
    <div class="container-fluid" id="header-escritorio" style="background-image: url('./libraries/img/<?php echo $header_img; ?>'); background-size: cover; height: 450px; background-repeat: no-repeat; background-attachment: fixed">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-sm-2" id="logo">
                <img src="/libraries/img/logo.jpg" title="Nogueira e Sarsur Advogados Logo" alt="logo" class="img-fluid">
            </div>
            <div class="col-md-3 col-lg-3 font-weight-light text-center my-auto" style="color: #000;">
<!--                <i class="fa fa-phone fa-2x textobranco"></i>-->
                <span class="textobranco"><?php echo $telefone ?></span>
            </div>
            <div class="col-md-6 col-lg-5 font-weight-light text-center mx-auto my-auto border-left" style="color: #000;">
<!--                <i class="fa fa-home fa-2x textobranco"></i>-->
                <span class="textobranco"><?php echo nl2br($endereco);?></span>
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
                        <li class="nav-item mx-1">
                            <a title="Contato" href="contato.php" class="nav-link">Contato</a>
                        </li>
                        <li class="border-left"></li>
                        <li class="nav-item mx-1">
                            <a title="Webmail" href="https://nogueirasarsur.com.br:2096" target="_blank" class="nav-link">Webmail</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row justify-content-center">
            <div class="text-capitalize text-center pb-5">
                <h1 style="color: #0c5460;" class="font-weight-normal mt-5 py-4 display-4 "><?php echo $header_texto;?></h1>
                <a href="index.php" class="text-dark">pagina inicial</a><i class="fa fa-chevron-right mx-2" style="color: white;"></i>
                <span class="text-success text-capitalize"> nosso escritório</span>
            </div>
        </div>
    </div>
</header>


<div class="container-fluid py-5">
    <div class="row pt-5">
        <div class="col-md-4 mx-auto ml-5 col-12" style="background-color: white;">
            <div id="texto-s" data-aos="zoom-in" data-aos-duration="2000" class="card bg-white  p-5" style="border: 5px solid #305f59;">
                <h1 class="text-center" style="color: #305f59"><?php echo $titulo; ?></h1>
            </div>
        </div>
        <div data-aos="fade-left" data-aos-duration="2000" class="col-lg-8 bg-white" id="texto-s">
            <h2 class="font-weight-normal pb-4 pt-3 text-center"><?php echo $txt1;?></h2>
        </div>

    </div>
</div>

<div style="background-image: url('./libraries/img/<?php echo $img1;?>'); height: 400px; background-size: cover; width: 100%"></div>

    <div class="container-fluid py-5">
        <div class="row pt-5">
            <div class="col-md-4 mx-auto ml-5" style="background-color: white;">
                <div id="texto-s" data-aos-duration="2000" data-aos="zoom-in" class="card bg-white  p-5" style="border: 5px solid #305f59;">
                    <h1 class="text-center" style="color: #305f59"><?php echo $titulo2?></h1>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="2000" class="col-lg-8 bg-white">
              <div class="row">
                  <div id="texto-s" class="col-md-12 col-lg-12">
                      <h2 class="font-weight-normal pb-4 pt-3 text-center"><?php echo $texto2; ?></h2>
                  </div>
              </div>
            </div>
        </div>
    </div>

    <div style="background-image: url('./libraries/img/<?php echo $img2;?>'); height: 300px; background-size: cover; background-attachment: fixed; filter:grayscale(200%)"></div>

    <div class="container-fluid py-5">
        <div class="row pt-5">
            <div class="col-md-4 mx-auto ml-5" style="background-color: white;">
                <div id="texto-s" data-aos="zoom-in" data-aos-duration="2000" class="card bg-white  p-5" style="border: 5px solid #305f59;">
                    <h1 class="text-center" style="color: #305f59"><?php echo $titulo3;?></h1>
                </div>
            </div>
            <div  id="texto-s" data-aos="fade-left" data-aos-duration="2000"  class="col-lg-8 bg-white">
                <h2 class="font-weight-normal pb-4 pt-3 text-center"><?php echo $texto3;?></h2>
                <p class="text-center"><?php echo $descricao3;?></p>
            </div>
        </div>
    </div>

    <div style="background-image: url('./libraries/img/<?php echo $img3;?>'); height: 400px; background-size: cover;"></div>

<section class="pb-2" style="background-color: transparent" id="advogados_novo" >
    <div class="container-fluid">
        <div class="py-5 text-center">
            <h2 class="font-weight-bold text-uppercase">Advogados</h2>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <div style="zoom: 0.8" data-aos="zoom-in" data-aos-duration="1500" class="row text-center justify-content-center mb-4">

               <?php
               $sql = "SELECT * from advogados";
               $query = mysqli_query($conn, $sql);
               while ($rs = mysqli_fetch_array($query)){
                   $id = $rs['id'];
                   $nomeSocia = $rs['nome'];
                   $cargo = $rs['cargo'];
                   $email = $rs['email'];
                   $area = $rs['areas'];
                   $url = $rs['url'];

                   echo "  
                                                      
                     <div class=\"card bg-light mx-2 mb-2\" style=\"width: 15rem\">
                    <img src=\"./libraries/img/socio_adv2.png\" alt=\"advogados\" class=\" mx-auto py-3\" style=\"width: 64px\">
                    <div class=\"card-heading d-flex\">
                        <h6 class=\"my-auto mx-auto font-weight-bold\">$nomeSocia</h6>
                    </div>
                    <div class=\"card-body\">
                        <p>$cargo</p>
                        <p class=\"text-capitalize font-weight-light pb-3\">$area</p>
                        <a style=\"color: #305f59;\" class=\"font-weight-light btn btn-grad text-white\" href=\"./advogados/$url\"><i class=\"fa fa-plus mx-2\"></i>mais informações</a>
                    </div>
                </div> 
                         
                    ";
               }
               ?>

        </div>
    </div>
</section>

<?php include('./includes/footer.php');?>
