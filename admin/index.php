<?php  session_start(); ?> 
<?php
if (isset($_POST['salvar'])){
    include 'db.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $email_hash = md5($email);
    $senha_hash = md5($senha);

    $sql = "select * from user where email ='$email_hash' AND senha ='$senha_hash'";
    $query = mysqli_query($conn, $sql);
    $rs = mysqli_num_rows($query);

    if ($rs){
        $_SESSION['email'] = $email_hash;
        $_SESSION['senha'] = $senha_hash;
        echo "<script>window.open('home.php?menu','_self')</script>";
    }else {
        echo "<script>alert('SENHA OU EMAIL NAO CORRESPONDEM')</script>";
        mysqli_error($conn);

    }
}

?>
 <!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="wayster h de melo">
    <title>Painel Login</title>
    <link rel="icon" href="./libraries/css/font-awesome.min.css">
    <link rel="stylesheet" href="./libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="./libraries/css/jquery-confirm.min.css">
    <link rel="icon" href="./libraries/img/logo.jpg" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="css/login.css">
    <script src="./libraries/js/jquery.min.js"></script>

</head>

<body style="min-height:100%">

<div class="container pt-5 mt-5" id="login">
    <div class="row py-5">
       <div class="col-lg-6 d-flex">
           <h6 class="text-left font-weight-light">Painel de administração</h6>
           <img src="../libraries/img/logo.jpg" alt="logo" class="img-fluid my-auto">
       </div>
        <div class="col-sm-9 col-md-7 col-lg-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <form class="form-horizontal col-12 mx-auto" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input name="email" type="email" id="inputEmail" class="form-control mb-3" placeholder="Email" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword">Senha</label>
                            <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        </div>

                        <div class="custom-control custom-checkbox my-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <center><button name="salvar" class="btn btn-outline-dark text-white" type="submit" style="background-color: #305f59">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="./libraries/js/jquery.min.js"></script>
<script src="./libraries/js/bootstrap.min.js"></script>
<script src="./libraries/js/jquery-confirm.min.js"></script>
</body>
</html>
