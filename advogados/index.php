<?php include '../functions/db.php';?>
<?php
$sql = "select * from top";
$query = mysqli_query($conn,$sql);
while($rs = mysqli_fetch_array($query)){
    $logo = $rs['logo'];
    $telefone = $rs['telefone'];
    $endereco = $rs['endereco'];}?>
<!doctype html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nossos Advogados | Nogueira & Sarsur</title>
    <script src="../libraries/js/jquery.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
    <link rel="icon" href="../libraries/img/logo.jpg" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="../libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="../libraries/css/font-awesome.min.css">
    <link rel="stylesheet" href="../libraries/css/animate.css">
    <link rel="stylesheet" href="../libraries/css/aos.css">
    <link rel="stylesheet" href="../libraries/css/estilo4.css">
</head>

<body style="background-color: whitesmoke">


<div id="fb-root"></div>

<div id="preloader">
    <div id="status"></div>
</div>

<?php
$sql = "select * from header_page_adv";
$query = mysqli_query($conn,$sql);
while ($rs = mysqli_fetch_array($query)){
    $img_he = $rs['img'];
    $texto_header = $rs['texto'];
}
?>

<header id="escritorio-header">
    <div class="container-fluid" id="header-escritorio" style="background-image: url('../libraries/img/<?php echo $img_he; ?>'); background-size: cover;height: auto; background-repeat: no-repeat; width: 100%;">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-sm-2" id="logo">
                <img src="/libraries/img/logo.jpg" title="Nogueira e Sarsur Advogados Logo" alt="logo" class="img-fluid">
            </div>
            <div class="col-md-3 col-lg-3 font-weight-bold text-center my-auto" style="color: #000;">
                <i class="fa fa-phone fa-2x textobranco"></i>
                <span class="textobranco"><?php echo $telefone ?></span>
            </div>
            <div class="col-md-6 col-lg-5 font-weight-bold text-center mx-auto my-auto border-left" style="color: #000;">
                <i class="fa fa-home fa-2x textobranco"></i>
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
                            <a title="Escritório" href="../escritorio.php" class="nav-link">Escritório</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a title="Áreas de atuação" href="../services.php" class="nav-link">Áreas de atuação</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a title="Advogados" href="../advogados/" class="nav-link">Advogados</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a title="Trabalhe Conosco" href="../works.php" class="nav-link">Trabalhe Conosco</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a title="Contato" href="../contato.php" class="nav-link">Contato</a>
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
                <h1 style="color: white;" class="font-weight-bold mt-5 py-4 display-4 "><?php echo $texto_header;?></h1>
                <a href="index.php" class="text-white">pagina inicial</a><i class="fa fa-chevron-right mx-2" style="color: white;"></i>
                <span class="text-white text-capitalize"> nosso escritório</span>
            </div>
        </div>
    </div>
</header>


<section class="py-3 bg-white" data-aos="zoom-in" data-aos-duration="2000" id="advogados_novo" >
    <div class="container">
        <div class="py-5 text-center">
            <h2 class="font-weight-bold text-uppercase">Advogados</h2>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xl-4 pt-2 text-center">
                <?php
                $sql = "SELECT * from advogados limit 0,1";
                $query = mysqli_query($conn, $sql);
                while ($rs = mysqli_fetch_array($query)){
                    $id = $rs['id'];
                    $nomeSocia = $rs['nome'];
                    $cargo = $rs['cargo'];
                    $email = $rs['email'];
                    $area = $rs['areas'];
                    $url1 = $rs['url'];
                }
                ?>
                <div class="card bg-light">
                    <img src="../libraries/img/socio_adv2.png" alt="advogados" class=" mx-auto py-3" style="width: 64px">
                    <div class="card-heading d-flex">
                        <h6 class="my-auto mx-auto font-weight-bold"><?php echo $nomeSocia ;?></h6>
                    </div>
                    <div class="card-body">
                        <p><?php echo $cargo;?></p>
                        <p class="text-capitalize pb-3"><?php echo $area;?></p>
                        <a style="color: #305f59;" class="font-weight-bold text-center btn btn-grad text-white" href=<?php echo $url1; ?>><i class="fa fa-plus mx-2"></i>mais informações</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xl-4 pt-2 text-center">
                <?php
                $sql = "select * from advogados LIMIT 1,1";
                $query = mysqli_query($conn, $sql);
                while ($rs = mysqli_fetch_array($query)){
                    $id = $rs['id'];
                    $nome = $rs['nome'];
                    $cargo = $rs['cargo'];
                    $email = $rs['email'];
                    $area = $rs['areas'];
                    $url2 = $rs['url'];
                }
                ?>
                <div class="card bg-light">
                    <img src="../libraries/img/socio_adv2.png" alt="advogados" class=" mx-auto py-3" style="width: 64px">
                    <div class="card-heading d-flex">
                        <h6 class="my-auto mx-auto font-weight-bold"><?php echo $nome; ?></h6>
                    </div>
                    <div class="card-body">
                        <p><?php echo $cargo; ?></p>
                        <p class="pb-3"><?php echo $area; ?></p>
                        <a style="color: #305f59;" class="font-weight-bold btn text-center btn-grad text-white" href=<?php echo $url2; ?>><i class="fa fa-plus mx-2"></i>mais informações</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center mb-5">
            <?php
            $sql = "SELECT * FROM `advogados` limit 2,4";
            $query = mysqli_query($conn, $sql);
            while($rs = mysqli_fetch_array($query)){
                $id = $rs['id'];
                $nome = $rs['nome'];
                $cargo = $rs['cargo'];
                $area = $rs['areas'];
                $url = $rs['url'];

                   echo "<div class=\"col-lg-4 col-md-12 col-sm-12 pt-2 text-center\">
                                        <div class=\"card bg-light\">
                    <img src=\"../libraries/img/socio_adv2.png\" alt=\"advogados\" class=\"img-fluid mx-auto py-3\" style=\"width: 64px\">
                    <div class=\"card-heading d-flex\">
                        <h6 class=\"my-auto mx-auto font-weight-bold\">$nome</h6>
                    </div>
                    <div class=\"card-body\">
                        <p>$cargo</p>
                        <p class=\"pb-3\">$area</p>
                        <a style=\"color: #305f59;\" class=\"font-weight-bold text-white btn btn-grad\" href=\"$url\"><i class=\"fa fa-plus mx-2\"></i>mais informações</a>
                    </div>
                </div>
              </div>";}?>
    </div>
</section>

<footer id="footer" class="pt-4" style="  background: #00bf8f;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #001510, #00bf8f);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #001510, #00bf8f); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 my-auto">
                <p class="text-center text-white mt-3 font-weight-bold">
                    Serviços de alta qualidade, desenvolvidos sob medida para cada cliente, bem como equipe de advogados experientes e altamente comprometidos.
                </p>
            </div>
            <div class="col-lg-3 col-md-4 d-none d-sm-block">
                <h6 class="font-weight-bold">Menu</h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="../index.php"><i class="fa fa-chevron-right mx-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="../advogados/"><i class="fa fa-chevron-right mx-2"></i>Advogados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="../escritorio.php"><i class="fa fa-chevron-right mx-2"></i>Escritorio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="../works.php"><i class="fa fa-chevron-right mx-2"></i>Trabalhe conosco</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="../contato.php"><i class="fa fa-chevron-right mx-2"></i>Contato</a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6 class="font-weight-bold">Contato</h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <address class="nav-link text-white font-weight-bold">
                            Avenida do Contorno, nº 3257 <br> 6º Andar <br> Bairro Santa Efigênia <br> Belo Horizonte / MG <br> CEP 30.110-017</address>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link text-white font-weight-bold">contato@nogueirasarsur.com.br</span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link text-white font-weight-bold">(31) 3586-2146</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4" id="facebook_footer">
                <div class="fb-page" data-href="https://www.facebook.com/nogueirasarsuradvogados/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/nogueirasarsuradvogados/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/nogueirasarsuradvogados/">Nogueira &amp; Sarsur Advogados</a></blockquote></div>
            </div>
        </div>
    </div>
    </div>
</footer>

<div id="copyright" style="background-color: black; color: white;">
    <div class="container pt-3 mx-auto row">
        <p class="font-weight-bold text-capitalize"><?php echo date ('Y'); ?>  &copy; todos os direitos reservados Nogueira & Sarsur Advogados  </p>
        <div class="ml-auto">
            <a href="#"><p class="text-white" style="font-size: 10px">Desenvolvido por: Wayster H. De Melo</p>
            </a>
        </div>
    </div>
</div>

<script src="../libraries/js/bootstrap.min.js"></script>
<script src="../libraries/js/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="../libraries/js/script_main.js"></script>
</body>
</html>
