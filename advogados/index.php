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
    <link rel="stylesheet" href="style2.css">
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
<div class="container-fluid" id="header"
            style="background-image: url('../libraries/img/<?php echo $img_he; ?>');
                    background-size: cover; height: 550px;
                    background-attachment: fixed;">

            <div class="row" id="address">   
            <div class="col-lg-12 col-md-12 col-12 bg-light text-dark p-2">  
                <div class="text-center">
                <p><i class="fa fa-globe mx-2"></i> <?php echo $endereco ?>
                <span class="border-left mx-2"></span> 
                <span class="mx-4"> 
                <i class="fa fa-phone"></i> 
                 <?php echo $telefone; ?>
                 </span> 
                 </p>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
             <a class="navbar-brand" href="index.php">
                 <img id="img_logo_menu" alt="logo" src="../libraries/img/logo.jpg" 
                 class="img-fluid col-12">
             </a>
                   <button class="navbar-toggler mx-auto" id="buttonnav" type="button" data-toggle="collapse" data-target="#nav">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="nav">
                       <ul class="navbar-nav mx-auto text-center">
                           <li class="nav-item">
                               <a title="Página Inicial" href="../services.php" class="nav-link">Home</a>
                           </li>
                           <li class="nav-item">
                               <a title="Escritório" href="../institucional/escritorio.php" class="nav-link">Institucional</a>
                           </li>
                           <li class="nav-item">
                               <a title="Áreas de atuação" href="../services.php" class="nav-link">Áreas de atuação</a>
                           </li>
                           <li class="nav-item active">
                               <a title="Advogados" href="" class="nav-link">Advogados</a>
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
            <div class="text-capitalize text-center pb-5">
                <h1 style="background: -webkit-linear-gradient(#A9BA9D, #679267);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: #679267; font-size: 4rem;" class="font-weight-lighter mt-5 py-4 display-4 "><?php echo $texto_header;?></h1>
                <a href="index.php" class="text-light">página inicial</a><i class="fa fa-chevron-right mx-2" style="color: white;"></i>
                <span class="text-light"> advogados</span>
            </div>
        </div>
    </div>
</header>


<section class="py-3 bg-white" id="advogados_novo" >
    <div class="container">
        <div class="py-5 text-center">
            <h2 class="font-weight-bold text-uppercase"></h2>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xl-4 pt-2 text-center" data-aos="zoom-in" data-aos-duration="2000" >
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
                        <p class=" pb-3"><?php echo $area;?></p>
                        <a style="color: #305f59;" class="font-weight-bold text-center btn btn-grad text-white" href=<?php echo $url1; ?>><i class="fa fa-plus mx-2"></i>mais informações</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xl-4 pt-2 text-center "data-aos="zoom-in" data-aos-duration="2000" >
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

                   echo "<div class=\"col-lg-4 col-md-12 col-sm-12 pt-2 text-center\" data-aos='zoom-in' data-aos-duration='2000'>
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

<footer id="footer" class="pt-4" style="background-image: linear-gradient(#A9BA9D, #679267);">
    <div class="container-fluid">
        <div class="row">
             <div class="col-lg-3 col-md-12">
               <img src="../libraries/img/logo.jpg" title="logo marca" alt="logo"
                    class="img-fluid">
               <p class="text-left text-white mt-3 font-weight-bold">
                   Serviços de alta qualidade, desenvolvidos sob medida para cada cliente, bem como equipe de advogados experientes e altamente comprometidos.
               </p>

           </div>
            <div class="col-lg-3 col-md-4 d-none d-sm-block">
                <p class="font-weight-light text-light">Menu</p>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="../services.php"><i class="fa fa-chevron-right mx-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="../advogados/"><i class="fa fa-chevron-right mx-2"></i>Advogados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="../institucional/escritorio.php"><i class="fa fa-chevron-right mx-2"></i>Escritorio</a>
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
                <p class="font-weight-light text-light">Contato</p>
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

<div id="copyright" style="background-color: black; color: white; font-size:smaller">
    <div class="container pt-3 mx-auto row">
        <p class="font-weight-light text-capitalize"><?php echo date ('Y'); ?>  &copy; todos os direitos reservados Nogueira & Sarsur Advogados  </p>
        <div class="ml-auto">
            <a href="https://api.whatsapp.com/send?phone=31998956974&text=Ola%20,%20gostaria%20de%20fazer%20um%20or%C3%A7amento"><p class="text-white" style="font-size: 10px">Desenvolvido por: Wayster H. De Melo</p>
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
