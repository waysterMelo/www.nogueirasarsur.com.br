<?php require_once "functions/db.php" ?>
<?php
    $sql = "select * from trabalhe_conosco";
    $query = mysqli_query($conn, $sql);
    while ($rs = mysqli_fetch_array($query)){
        $img = $rs['header_img'];
        $textoWorks = $rs['texto'];
    }
?>
<?php
$sql = "select * from contato";
$query = mysqli_query($conn, $sql);
while($rs = mysqli_fetch_array($query)){
    $img = $rs['header_img'];
    $texto = $rs['texto'];
    $desc = $rs['descricao1'];
    $desc2 = $rs['descricao2'];
    $endereco = $rs['endereco'];
    $tel = $rs['tel'];
    $email = $rs['email'];
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
    <title>Nogueira & Sarsur | Escritório de Advocacia em Belo Horizonte</title>
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

<header id="header">
    <div class="container-fluid" id="header-escritorio" style="background-image: url('./libraries/img/<?php echo $img; ?>');
            background-size: cover;height: 550px; background-repeat: no-repeat;background-attachment: fixed;">
        <div class="row">
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
                            <a title="Página Inicial" href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a title="Escritório" href="escritorio.php" class="nav-link">Institucional</a>
                        </li>
                        <li class="nav-item">
                            <a title="Áreas de atuação" href="services.php" class="nav-link">Áreas de Atuação</a>
                        </li>
                        <li class="nav-item">
                            <a title="Advogados" href="./advogados/" class="nav-link">Advogados</a>
                        </li>

                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contato
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="contato.php">Entre em contato  <i class="fa fa-mail-forward"></i></a>
                                <a class="dropdown-item" href="works.php">Trabalhe conosco  <i class="fa fa-suitcase"></i></a>
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
            <div class="text-capitalize text-center pb-5">
                <h1 style="background:  -webkit-linear-gradient(#A9BA9D, #679267);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;" class="font-weight-bold mt-5 py-4 display-4 "><?php echo $textoWorks;?></h1>
                <a href="services.php" class="text-white">pagina inicial</a><i class="fa fa-chevron-right mx-2" style="color: white;"></i>
                <span class="text-white text-capitalize"> trabalhe conosco</span>
            </div>
        </div>
    </div>
</header>


<div class="container-fluid" style="background-color: whitesmoke">
    <div class="row justify-content-center">
        <div class="col-lg-5 py-5">
            <h1 style="font-size: 32px; color: #305f59;"><?php echo $desc; ?></h1>
            <p class="pb-3 font-italic"><?php echo $desc2; ?></p>
            <div class="card" style="border: none;">
                <img src="./libraries/img/address.png" alt="endereco" class="img-fluid card-img-top" style="width: 13%;">
                <div class="card-body" style="margin-top: -17%; margin-left: 10%;">
                    <h4>Endereço</h4>
                    <p class="text-left">
                        <?php echo nl2br($endereco);?>
                    </p>
                </div>
            </div>
            <div class="card" style="border: none;">
                <img src="./libraries/img/phone.png" alt="endereco" class="img-fluid card-img-top" style="width: 10%;">
                <div class="card-body" style="margin-top: -14%; margin-left: 10%;">
                    <h4>Telefone</h4>
                    <p class=""><?php echo $tel; ?></p>
                </div>
            </div>
            <div class="card" style="border: none;">
                <img src="./libraries/img/email.png" alt="endereco" class="img-fluid card-img-top" style="width: 10%;">
                <div class="card-body" style="margin-top: -14%; margin-left: 10%;">
                    <h4>Email</h4>
                    <p class=""><?php echo $email; ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 mt-5 py-5">
            <div class="py-3 text-center my-auto">
                <h5 class="font-weight-bold">Faça parte do time...</h5>
            </div>
            <form class="my-auto" action="" method="post" enctype="multipart/form-data">
                <div class="row justify-content-center pb-5 mb-5" id="work_us">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control py-4" name="nome" placeholder="Digite seu nome completo">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control py-4" name="email" placeholder="Digite seu email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control py-4" name="tel" placeholder="Número para contato">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control py-4" name="city" placeholder="Cidade e Estado">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-2">
                        <div class="form-group">
                            <select name="formacao" class="form-control" style="border: none;">
                                <option>Selecione sua formação</option>
                                <option>3 grau incompleto</option>
                                <option>3 grau completo</option>
                                <option>Superior em andamento</option>
                                <option>Superior completo</option>
                                <option>Pós graduação</option>
                                <option>MBA</option>
                                <option>Estágio</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea style="border:none;" name="message" type="text" class="form-control" rows="4" placeholder="Resumo"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cv">Currículo</label>
                            <input style="border: none;" type="file" name="cv" class="form-control" placeholder="Breve Resumo">
                        </div>
                        <button type="submit" name="enviar" class="btn btm-lg float-right text-white" style="background-color: #305f59">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

<?php

if(isset($_POST['enviar'])) {

    $name = $_POST['nome'];
    $sender_email = $_POST['email'];
    $send_to = 'contato@nogueirasarsur.com.br';
    $subject = 'Currículo para análise';
    $message = $_POST['message'];

    $attachment = $_FILES["cv"]["tmp_name"];
    $folder = "file/";
    $file_name = $_FILES["cv"]["name"];
    move_uploaded_file($attachment, $folder.$file_name);

    require_once('./phpmailer/class.phpmailer.php');
    $send_mail = new PHPMailer();
    $send_mail->From = $sender_email;
    $send_mail->FromName = $name;
    $send_mail->Subject = $subject;

    $headers .= "Formação:". $_POST['formacao']. "\r\n" ;
    $headers .= "Cidade: ".$_POST['city']. "\r\n" ;

    $send_mail->CharSet = "UTF-8";
    $send_mail->Body = $headers ."\r\n" . $message;
    $send_mail->AddAddress($send_to);

    $attach_file = $folder . "" . $file_name;
    $send_mail->AddAttachment($attach_file);

    $send_mail->Send();

    if ($send_mail){

            echo "<script>alert('Curriculo Enviado com Sucesso')</script>";
            echo "<script>window.open('works.php', '_self')</script>";
    }else{

    }

}

?>

<?php include  './includes/footer.php'; ?>

