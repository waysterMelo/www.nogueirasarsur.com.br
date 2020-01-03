<?php
session_start();
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))){

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location: index.php");

}else {
    require_once "db.php"
    ?>
    <!doctype html>
    <html lang="pt" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <meta name="description" content="Dashboard">
        <meta name="author" content="wayster h de melo">
        <title>Painel de Administração</title>

        <link rel="stylesheet" href="../libraries/css/bootstrap.min.css">
        <script src="js/font-awesome.js"></script>
        <link rel="stylesheet" href="css/style4.css">
        <link rel="icon" href="../libraries/img/icon.png" type="image/png" sizes="16x16">

        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({
                selector:'#aqui',
                branding: false
            });</script>
        <script src="../libraries/js/jquery.min.js"></script>
    </head>

    <body>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar" style="background-color: white;">
                <ul class="nav flex-column" style="font-size: 12px;">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="index.php">
                            <img src="../libraries/img/logo.jpeg" class="img-fluid" style="width: 100%;">
                        </a>
                    </li>

                    <li class="nav-item text-center">
                        <p class="text-uppercase text-dark text-center">bem vindo(a)</p>
                        <span class="text-dark">Bem Vindo Administrador</span>
                        <hr class="bg-dark">
                    </li>

                    <li class="nav-item">
                        <a class="text-uppercase nav-link text-dark font-weight-bold" data-toggle="collapse" data-target="#menu" href="#">
                            <i class="fas fa-archway mx-2"></i>cabeçalho
                        </a>
                        <ul id="menu" class="collapse">
                            <li>
                                <a class="dropdown-item-text font-weight-bold text-uppercase" style="color: #305f59" href="home.php?menu">Informações</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item mb-2">
                        <a class="nav-link text-dark text-uppercase font-weight-bold"  href="#" data-toggle="collapse" data-target="#produtos">
                            <i class="fa fa-table mx-2"></i> página inicial
                        </a>
                        <ul id="produtos" class="collapse">
                            <li>
                                <a class="dropdown-item-text font-weight-bold" style="color: #305f59" href="home.php?sliders">SLIDERS</a>
                            </li>
                            <li>
                                <a class="dropdown-item-text font-weight-bold" style="color: #305f59" href="home.php?diferencial">DIFERENCIAL</a>
                            </li>
                            <li>
                                <a class="dropdown-item-text font-weight-bold" style="color: #305f59" href="home.php?sobre">SOBRE NOS</a>
                            </li>
                            <li>
                                <a class="dropdown-item-text text-uppercase font-weight-bold" style="color: #305f59" href="home.php?atuacao">Areas atuação</a>
                            </li>
                            <li>
                                <a class="dropdown-item-text text-uppercase font-weight-bold" style="color: #305f59" href="home.php?texto_comum">texto comum</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item mb-2">
                        <a class="nav-link text-dark text-uppercase font-weight-bold"  href="#" data-toggle="collapse" data-target="#office">
                            <i class="far fa-building mx-2"></i></i>escritório
                        </a>
                        <ul id="office" class="collapse">
                            <li>
                                <a class="dropdown-item font-weight-bold text-uppercase" style="color: #305f59" href="home.php?office_imagens">imagens</a>
                            </li>
                            <li>
                                <a class="dropdown-item font-weight-bold text-uppercase" style="color: #305f59" href="home.php?office_textos">textos</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item mb-2">
                        <a class="nav-link text-dark text-uppercase font-weight-bold"  href="#" data-toggle="collapse" data-target="#services">
                            <i class="fas fa-briefcase mx-2"></i>áreas atuação
                        </a>
                        <ul id="services" class="collapse">
                            <li>
                                <a class="dropdown-item font-weight-bold text-uppercase" style="color: #305f59" href="home.php?services_img">imagens</a>
                            </li>
                            <li>
                                <a class="dropdown-item font-weight-bold text-uppercase" style="color: #305f59" href="home.php?services_txt">textos</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark text-uppercase" href="home.php?contato"><i class="fab fa-wpforms mx-2"></i></i>página Contato</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark text-uppercase" href="home.php?pagina_adv">
                            <i class="fab fa-wpforms mx-2"></i></i>página advogados</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark text-uppercase" href="home.php?advogados">
                            <i class="fab fa-wpforms mx-2"></i></i>advogados</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark text-uppercase" href="logout.php"><i class="fas fa-sign-out-alt mx-2"></i>Sair</a>
                    </li>

                </ul>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-5" id="coluna_central">
                <div class="d-flex justify-content-center border-bottom">
                    <h1 class="h1 text-white py-5 text-uppercase"><i class="far fa-edit mx-2"></i>Nogueira & Sarsur Advogados</h1>
                </div>
                    <?php
                    if (isset($_GET['id'])){
                        $id = $_GET['id'];
                        $sql= "select * from advogados where id='$id'";
                        $query = mysqli_query($conn, $sql);
                        while ($rs = mysqli_fetch_array($query)) {
                            $id = $rs['id'];
                            $nome = $rs['nome'];
                            $cargo = $rs['cargo'];
                            $areas  = $rs['areas'];
                            $email = $rs['email'];
                            $resume = $rs['formacao_experiencia'];

                        }
                    }

                    ?>
                    <h1 class="text-white text-uppercase py-4">Editar Advogado</h1>
                    <div class="mt-5">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal" method="post" enctype="multipart/form-data">

                                    <div class="form-group" >

                                        <label class="col-md-3 control-label" >Nome</label>

                                        <div class="col-md-6" >

                                            <input type="text" name="nome" class="form-control" required value="<?php echo $nome; ?>">

                                        </div>

                                    </div>


                                    <div class="form-group" >

                                        <label class="col-md-3 control-label" >Cargo</label>

                                        <div class="col-md-6" >

                                            <input type="text" name="cargo" class="form-control" required value="<?php echo $cargo; ?>" >

                                        </div>

                                    </div>

                                    <div class="form-group" >

                                        <label class="col-md-3 control-label" >Areas de atuação</label>

                                        <div class="col-md-6" >

                                            <input type="text" name="areas" class="form-control" required value="<?php echo $areas; ?>" >

                                        </div>

                                    </div>

                                    <div class="form-group" >

                                        <label class="col-md-3 control-label" >Email</label>

                                        <div class="col-md-6" >

                                            <input type="email" name="email" class="form-control" required value="<?php echo $email; ?>" >

                                        </div>

                                    </div>

                                    <div class="form-group" >

                                        <label class="col-md-3 control-label" >Formação / Experiência</label>

                                        <div class="col-md-6" >

                                            <textarea type="text" name="desc" class="form-control" rows="6" cols="19" ><?php echo nl2br($resume); ?></textarea>

                                        </div>

                                    </div>

                                    <div class="form-group" >

                                        <label class="col-md-3 control-label" ></label>

                                        <div class="col-md-6" >

                                            <input type="submit" name="update" value="Atualizar" class="btn btn-primary form-control" >

                                        </div>

                                    </div>

                                </form>
                                <?php
                                if (isset($_POST['update'])){
                                    $nome = $_POST['nome'];
                                    $cargo = $_POST['cargo'];
                                    $email = $_POST['email'];
                                    $areas = $_POST['areas'];
                                    $desc = $_POST['desc'];

                                    $sql = "update advogados set nome='$nome',cargo='$cargo',email='$email',areas='$areas',formacao_experiencia='$desc' where id = '$id'";
                                    $rs = mysqli_query($conn,$sql);
                                    if ($rs){
                                        echo "<script>alert('Edição Concluida')</script>";
                                        echo "<script>window.open('index.php?advogados', '_self')</script>";
                                    }
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                </main>
            </div>
        </div>

        <script src="../libraries/js/bootstrap.min.js"></script>
        </body>
        </html>
<?php } ?>