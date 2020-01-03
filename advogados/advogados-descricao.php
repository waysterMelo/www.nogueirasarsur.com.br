<?php
 include "../functions/db.php";
 
    if (isset($_GET['advogado'])){
        $id = $_GET['advogado'];
        $sql = "select * from advogados where url='$id'";
        $query = mysqli_query($conn, $sql);
        while($rs = mysqli_fetch_array($query)){
            $nome = $rs['nome'];
            $cargo = $rs['cargo'];
            $formacao = nl2br($rs['formacao_experiencia']);
            $areas = $rs['areas'];
            $email = $rs['email'];
            
       } 
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145823645-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-145823645-1', { 'optimize_id': 'GTM-D52NT8H'});
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nosso Time | Nogueira e Sarsur Advogados</title>
    <link rel="icon" href="../libraries/img/icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="../libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="../libraries/css/font-awesome.min.css">
    <link rel="stylesheet" href="../libraries/css/animate.css">
    <link rel="stylesheet" href="../libraries/css/aos.css">
    <link rel="stylesheet" href="../libraries/css/estilo4.css">
    <script src="../libraries/js/jquery.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>

</head>

<body>

<div id="fb-root"></div>

<div id="preloader">
    <div id="status"></div>
</div>

<div class="container-fluid" id="header">
    <div class="row">
        <div class="col-md-12 col-lg-4 col-sm-2" id="logo">
            <img src="../libraries/img/<?php echo $logo; ?>" title="Nogueira e Sarsur Advogados Logo" alt="logo" class="img-fluid">
        </div>
        <div class="col-md-4 col-md-12 col-lg-2 font-weight-bold text-center my-auto" style="color: #000;">
           <i class="fa fa-phone fa-2x"></i>
            <span><?php echo $telefone ?></span>
        </div>
        <div class="col-md-4 col-md-12 col-lg-6 font-weight-bold text-center mx-auto my-auto border-left" style="color: #000;">
            <i class="fa fa-home fa-2x"></i>
            <span><?php echo nl2br($endereco);?></span>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav mx-auto">
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
                <a title="Advogados" href="index.php" class="nav-link">Advogados</a>
            </li>
            <li class="nav-item mx-1">
                <a title="Trabalhe Conosco" href="../works.php" class="nav-link">Trabalhe Conosco</a>
            </li>
            <li class="nav-item mx-1">
                <a title="Contato" href="../contato.php" class="nav-link">Contato</a>
            </li>
            <li class="nav-item mx-1">
                <a title="Webmail" href="https://nogueirasarsur.com.br:2096" target="_blank" class="nav-link border-left">Webmail</a>
            </li>
        </ul>
    </div>
</nav>


<?php

?>

<?php
$sql = "select * from header_page_adv";
$query = mysqli_query($conn, $sql);
while ($rs = mysqli_fetch_array($query)){
    $img = $rs['img'];
    $texto = $rs['texto'];
}
?>

<section style="background-image: url('../libraries/img/<?php echo $img; ?>');height: 300px;background-size: cover;">
    <div class="container-fluid" id="resume_adv">
        <div class="py-5 text-center">
            <div class="text-capitalize">
                <h1 style="color: white; font-size: 4rem" class="font-weight-bold my-4 text-capitalize"><?php echo $texto; ?></h1>
                <a href="../index.php" class="text-white">pagina inicial</a><i class="fa fa-chevron-right mx-2" style="color: white;"></i>
                <a href="index.php" class="text-white">advogados</a><i class="fa fa-chevron-right mx-2" style="color: white;"></i>
                <span class="text-white"><?php echo $nome; ?></span>
            </div>
        </div>
    </div
</section>

<section id="descricao_adv" class="pb-4 mb-5 pt-4 mx-auto">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto text-center">
                <div class="card" style="background-color: #305f59;">
                    <h1 class="text-center font-weight-bold text-white"><?php echo $nome; ?></h1>
                    <div class="card-heading" style="background-color: #305f59">
                        <h2 class="text-white text-center text-capitalize font-weight-bold py-3">Informações Pessoais</h2>
                    </div>
                    <div class="card-body" style="background-color: whitesmoke">
                        <p class="font-weight-bold">Cargo: <span class="font-weight-normal ml-2 text-capitalize"><?php echo $cargo; ?></span></p>
                        <p class="font-weight-bold">Áreas: <span class="font-weight-normal ml-2 text-capitalize"><?php echo $areas; ?></span></p>
                        <p class="font-weight-bold">Email: <span class="font-weight-normal ml-2"><?php echo $email; ?></span></p>
                        <p class="font-weight-bold">Formação / Experiência</p>
                        <ul class="list-group">
                            <li class="list-group-item"><p class="font-weight-bold"><?php echo $formacao; ?></p></li>
                        </ul>
                    </div>
                    <div class="card-footer" style="background-color: #305f59"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card" style="background-color: whitesmoke; border: none; width: 90%">

                </div>

            </div>
        </div>
    </div>
</section>


<footer id="footer" class="pt-4" style="background-color: #305f59; color: #000;">
    <div class="container-fluid">
       <div class="row">
           <div class="col-lg-3 col-md-12">
               <img src="../libraries/img/logo.jpeg" title="logo marca" alt="logo"
                    class="img-fluid">
               <p class="text-left text-white mt-3 font-weight-bold">
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
                       <a class="nav-link text-white font-weight-bold" href="index.php"><i class="fa fa-chevron-right mx-2"></i>Advogados</a>
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
                   <li class="nav-item">
                       <a class="nav-link text-white font-weight-bold" href="../admin/login.php"><i class="fa fa-chevron-right mx-2"></i>Login</a>
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
               <h6 class="font-weight-bold">Rede Social</h6>
               <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                   <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore">
                       <a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
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