<?php require_once "functions/db.php" ?>
<?php
    $sql = "select * from trabalhe_conosco";
    $query = mysqli_query($conn, $sql);
    while ($rs = mysqli_fetch_array($query)){
        $img = $rs['header_img'];
        $texto = $rs['texto'];
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

<header id="escritorio-header">
    <div class="container-fluid" id="header-escritorio" style="background-image: url('./libraries/img/<?php echo $img; ?>'); background-size: cover;height: auto; background-repeat: no-repeat; width: 100%;">
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
                            <a title="Página Inicial" href="/" class="nav-link">Página Inicial</a>
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
                <h1 style="color: #0c5460;" class="font-weight-bold mt-5 py-4 display-4 "><?php echo $texto;?></h1>
                <a href="index.php" class="text-white">pagina inicial</a><i class="fa fa-chevron-right mx-2" style="color: white;"></i>
                <span class="text-white text-capitalize"> nosso escritório</span>
            </div>
        </div>
    </div>
</header>


<div class="container-fluid" style="background-color: whitesmoke">
    <div class="row ml-5">
        <div class="py-3 text-center">
            <h1 class="font-weight-bold">Faça parte do time...</h1>
        </div>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
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

