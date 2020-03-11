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
    <title>Serviços</title>
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
    <div class="container-fluid" id="header-escritorio" style="background-image: url('./libraries/img/<?php echo $header_img; ?>'); background-size: cover;height: 450px; background-repeat: no-repeat; background-attachment: fixed">
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
                <h1 style="color: #0c5460;" class="font-weight-bold mt-5 py-4 display-4 "><?php echo $header_texto;?></h1>
                <a href="index.php" class="text-dark">pagina inicial</a><i class="fa fa-chevron-right mx-2" style="color: white;"></i>
                <span class="text-success text-capitalize"> nosso escritório</span>
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
                <h1 class="text-capitalize font-weight-bold"><?php echo $title1; ?></h1>
                    <p class="font-weight-bold pt-4 text-left lead" style="line-height: 200%"><?php echo $description1; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
                <h1 class="text-capitalize font-weight-bold"><?php echo $title2; ?></h1>
                <p class="font-weight-bold pt-4 text-left lead" style="line-height: 200%"><?php echo $description2; ?></p>
            </div>
            <div class="col-lg-4 servicos2" data-aos="slide-right" data-aos-duration="1000">
                <img src="libraries/img/<?php echo $img2; ?>" alt="servicos" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!--<section class="py-3" data-aos="fade-up" data-aos-duration="2000" style="background-color: white" id="advogados_novo">-->
<!--    <div class="container">-->
<!--        <div class="py-5 text-center">-->
<!--            <h2 class="font-weight-bold text-uppercase">Advogados</h2>-->
<!--            <i class="fa fa-star"></i>-->
<!--        </div>-->
<!--        <div data-aos="slide-left" data-aos-duration="2000" class="row justify-content-center">-->
<!--            <div class="col-lg-4 col-md-6 col-sm-12 col-xl-4 pt-2 text-center">-->
<!--                --><?php
//                $sql = "SELECT * from advogados limit 0,1";
//                $query = mysqli_query($conn, $sql);
//                while ($rs = mysqli_fetch_array($query)){
//                    $id = $rs['id'];
//                    $nomeSocia = $rs['nome'];
//                    $cargo = $rs['cargo'];
//                    $email = $rs['email'];
//                    $area = $rs['areas'];
//                    $url = $rs['url'];
//                }
//                ?>
<!--                <div class="card bg-gray">-->
<!--                    <img src="./libraries/img/socio_adv2.png" alt="advogados" class=" mx-auto py-3" style="width: 64px">-->
<!--                    <div class="card-heading d-flex">-->
<!--                        <h6 class="my-auto mx-auto font-weight-bold">--><?php //echo $nomeSocia ;?><!--</h6>-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <p>--><?php //echo $cargo;?><!--</p>-->
<!--                        <p class="text-capitalize pb-3">--><?php //echo $area;?><!--</p>-->
<!--                        <a style="color: #305f59;" class="font-weight-bold" href="./advogados/--><?php //echo $url ?><!--"><i class="fa fa-plus mx-2"></i>mais informações</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-6 col-sm-12 col-xl-4 pt-2 text-center">-->
<!--                --><?php
//                $sql = "select * from advogados LIMIT 1,1";
//                $query = mysqli_query($conn, $sql);
//                while ($rs = mysqli_fetch_array($query)){
//                    $id = $rs['id'];
//                    $nome = $rs['nome'];
//                    $cargo = $rs['cargo'];
//                    $email = $rs['email'];
//                    $area = $rs['areas'];
//                    $url = $rs['url'];
//
//                }
//                ?>
<!--                <div class="card bg-gray">-->
<!--                    <img src="./libraries/img/socio_adv2.png" alt="advogados" class=" mx-auto py-3" style="width: 64px">-->
<!--                    <div class="card-heading d-flex">-->
<!--                        <h6 class="my-auto mx-auto font-weight-bold">--><?php //echo $nome; ?><!--</h6>-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <p>--><?php //echo $cargo; ?><!--</p>-->
<!--                        <p class="pb-3">--><?php //echo $area; ?><!--</p>-->
<!--                        <a style="color: #305f59;" class="font-weight-bold" href="./advogados/--><?php //echo $url;?><!--"><i class="fa fa-plus mx-2"></i>mais informações</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-xl-4 pt-2 d-md-none d-lg-block">-->
<!--                <div class="card" style="height: 400px; border:none;">-->
<!--                    <div class="my-auto">-->
<!--                        <img style="width: 60%;" src="./libraries/img/logoG.png" alt="logo" class="img-fluid mx-auto">-->
<!--                        <span>-->
<!--                        <a href="./advogados" class="btn btn-danger btn-md float-right">ver todos advogados</a>-->
<!--                    </span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div data-aos="slide-right" data-aos-duration="2000" class="row justify-content-center text-center">-->
<!--            --><?php
//            $sql = "SELECT * FROM `advogados` limit 2,4";
//            $query = mysqli_query($conn, $sql);
//            while($rs = mysqli_fetch_array($query)){
//                $id = $rs['id'];
//                $nome = $rs['nome'];
//                $cargo = $rs['cargo'];
//                $area = $rs['areas'];
//                $url = $rs['url'];
//
//
//                echo "<div class=\"col-lg-4 col-md-12 col-sm-12 pt-2 text-center\">
//                                        <div class=\"card bg-gray\">
//                    <img src=\"./libraries/img/socio_adv2.png\" alt=\"advogados\" class=\"img-fluid mx-auto py-3\" style=\"width: 64px\">
//                    <div class=\"card-heading d-flex\">
//                        <h6 class=\"my-auto mx-auto font-weight-bold\">$nome</h6>
//                    </div>
//                    <div class=\"card-body\">
//                        <p>$cargo</p>
//                        <p class=\"pb-3\">$area</p>
//                        <a style=\"color: #305f59;\" class=\"font-weight-bold\" href='./advogados/$url'><i class=\"fa fa-plus mx-2\"></i>mais informações</a>
//                    </div>
//                </div>
//              </div>";}?>
<!--        </div>-->
<!--    </div>-->
<!--</section>-->




<?php include('./includes/footer.php');?>
