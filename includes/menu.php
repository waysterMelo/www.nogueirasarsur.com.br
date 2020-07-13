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
    <link rel="stylesheet" href="/libraries/css/main1.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
</head>

<body>

<div id="fb-root"></div>
<div id="preloader">
    <div id="status"></div>
</div>

<header id="teste">
       <div class="container-fluid" id="header"
            style="background-image: url('../libraries/img/<?php echo $img1; ?>'); background-size: cover; height: 600px;">
           
            <div class="row" id="adress">   
            <div class="col-lg-12 col-md-12 col-12 bg-white">  
                <div class="text-center">
                <p><i class="fa fa-globe"></i> <?php echo $endereco ?>
                <span class="border-left mx-2"></span> 
                <span class="mx-4">  
                 <?php echo $telefone; ?>
                 </span> 
                 </p>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
             <a class="navbar-brand" href="index.php">
                 <img id="img_logo_menu" alt="logo" src="./libraries/img/logo.jpg" 
                 class="img-fluid col-12">
             </a>
                   <button class="navbar-toggler mx-auto" id="buttonnav" type="button" data-toggle="collapse" data-target="#nav">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="nav">
                       <ul class="navbar-nav mx-auto text-center">
                           <li class="nav-item active">
                               <a title="Página Inicial" href="../index.php" class="nav-link">Home</a>
                           </li>
                           <li class="nav-item">
                               <a title="Escritório" href="escritorio.php" class="nav-link">Institucional</a>
                           </li>
                           <li class="nav-item">
                               <a title="Áreas de atuação" href="services.php" class="nav-link">Áreas de atuação</a>
                           </li>
                           <li class="nav-item">
                               <a title="Advogados" href="./advogados/" class="nav-link">Advogados</a>
                           </li>
                           <li class="nav-item">
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

      
        <div class="mt-5 justify-content-center">
                    <h1 id="main_txt" data-aos="fade-right" data-aos-duration="3000" style="color: #0c5460" 
                    class="font-weight-bold py-5 text-center display-3">
                       <?php echo $texto1; ?></h1>
                       <hr style="background-color:white; width:20%">
                    <!-- <h2 data-aos-duration="3000" data-aos="fade-up" class="display-4 font-weight-light"><?php echo $texto2; ?></h2> -->
           </div>
        </div>
</header>