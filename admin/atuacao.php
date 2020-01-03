<?php
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location:../admin/login.php");
    exit();
}else {
    ?>
<h1 class="text-uppercase text-white">área de atuação</h1>
<section id="areas">
        <div class="container-fluid">
            <?php
            $sql = "select * from areas";
            $query = mysqli_query($conn,$sql);
            while ($rs = mysqli_fetch_array($query)){
                $titulo = $rs['titulo'];
                $txt = $rs['texto1'];
                $img1 = $rs['imagem1'];
                $img2 = $rs['imagem2'];
                $area_title = $rs['area_title'];
                $area_desc = $rs['area_desc'];
                $area_title2 = $rs['area_title2'];
                $area_desc2 = $rs['area_desc2'];
            }
            ?>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="py-5 text-center">
               <textarea name="titulo" class="form py-3 text-uppercase text-capitalize font-weight-bold" style="font-size: 3rem"><?php echo $titulo;?></textarea>
                <hr style="width: 30%;">
            </div>
            <div class="row">
                    <div class="col-lg-8 mx-auto col-md-12">
                        <textarea name="texto1" class="mb-2 font-italic pb-2 form-control" style="font-size: 24px;"><?php echo $txt;?></textarea>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="card" data-aos="flip-left" data-aos-duration="1000">
                                    <div class="card-img-top">
                                        <img src="../libraries/img/<?php echo $img1;?>"
                                             title="reconhecimento" alt="pratice areas" class="img-fluid"/>
                                        <textarea name="area_titulo" class="card-title text-uppercase titulo"><?php echo $area_title;?></textarea>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="descricao" class="form-control text-left"><?php echo $area_desc;?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card" data-aos="flip-right" data-aos-duration="1000">
                                    <div class="card-img-top">
                                        <img src="../libraries/img/<?php echo $img2;?>"
                                             title="areas" alt="pratice areas" class="img-fluid"/>
                                        <textarea name="area_titulo2" class="card-title text-uppercase titulo"><?php echo $area_title2;?></textarea>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="descricao2" class="form-control text-left"><?php echo $area_desc2;?></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="salvar_dados" class="btn btn-success btn-md mx-auto my-5">atualizar informações</button>
                        </div>
                        <hr>
                    </div>
            </div>
            </form>
            <?php
            if (isset($_POST['salvar_dados'])){
                $title = $_POST['titulo'];
                $txt1 = $_POST['texto1'];
                $txt2 = $_POST['texto2'];
                $area_title = $_POST['area_titulo'];
                $area_desc = $_POST['descricao'];
                $saiba = $_POST['saiba_mais'];

                $area_title2 = $_POST['area_titulo2'];
                $area_desc2 = $_POST['descricao2'];
                $saiba2 = $_POST['saiba_mais2'];

                $update = "update areas set titulo='$title', texto1='$txt1', texto2='$txt2',area_title='$area_title', area_desc='$area_desc', area_title2='$area_title2',area_desc2='$area_desc2'";
                $query = mysqli_query($conn, $update);

                if ($query){
                    echo "<script>alert('Texto Alterado com sucesso')</script>";
                    echo "<script>window.open('?atuacao','_self')</script>";
                }else {
                    die();
                    exit();
                }
            }
            ?>
        </div>
</section>
<?php }?>
