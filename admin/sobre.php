<?php
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location: escritorio.php");
    exit();
}else {
    ?>

<h1 class="text-uppercase text-white">sobre nos</h1>
<section id="about" class="pb-5">
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <?php
                $sql = "select * from sobre";
                $query = mysqli_query($conn,$sql);
                while ($rs = mysqli_fetch_array($query)){
                    $titulo = $rs['titulo'];
                    $texto1 = nl2br($rs['texto1']);
                }
                ?>
                <textarea name="titulo" class="text-uppercase form-control my-3 font-weight-bold" style="color: #000;"><?php echo $titulo; ?></textarea>
                <textarea type="text" name="texto1" class="aqui pb-5 form-control"><?php echo $texto1; ?></textarea>
                <button class="btn btn-success mt-3" type="submit" name="atualizar_sobre">atualizar</button>
            </div>
        </div>
        </form>
        <?php
        if (isset($_POST['atualizar_sobre'])){
            $titulo = $_POST['titulo'];
            $texto1 = $_POST['texto1'];


            $sql = "update sobre set titulo='$titulo',texto1='$texto1'";
            $query  = mysqli_query($conn, $sql);

            if ($query){
                echo "<script>alert('Textos Atualizados com sucesso')</script>";
                echo "<script>window.open('?sobre', '_self')</script>";
            }else {
                echo "<script>alert('Erro')</script>";
                die();
            }
        }
        ?>
        <div class="row bg-white mt-4">
            <div class="col-lg-4 pt-4">
             <div class="row">
                 <div class="col-12 py-4 d-flex">
                     <?php
                     $sql = "select * from sobre";
                     $query = mysqli_query($conn, $sql);
                     while ($rs = mysqli_fetch_array($query)){
                         $img1 = $rs['img'];
                         $img2 = $rs['img2'];
                         $img3 = $rs['img3'];
                     }
                     ?>
                     <img src="../libraries/img/<?php echo $img1;?>" alt="<?php echo $img1;?>" style="width: 300px;
                        height: 200px" class="img-fluid mx-auto img-thumbnail">
                 </div>
                 <div class="col-12 py-4">
                     <form action="" method="post" enctype="multipart/form-data">
                         <div class="form-group text-center">
                             <label for="img">nova imagem</label>
                             <input type="file" id="img" name="img" class="form-control ml-3">
                             <button type="submit" name="img1-save" class="btn btn-success mx-auto mt-3">atualizar</button>
                         </div>
                     </form>
                     <?php
                     if (isset($_POST['img1-save'])){

                         $img = $_FILES['img']['name'];
                         $tmp = $_FILES['img']['tmp_name'];

                         $update = "update sobre set img = '$img'";
                         $query = mysqli_query($conn, $update);

                         move_uploaded_file($tmp, "../libraries/img/$img");

                         if ($query){
                             echo "<script>alert('Imagem Alterada')</script>";
                             echo "<script>window.open('?sobre', '_self')</script>";
                         }else {
                             echo "<script>alert('Imagem nao alterada consulte o desenvolvedor')</script>";
                             echo "<script>window.open('?sobre', '_self')</script>";
                         }
                     }
                     ?>
                 </div>
             </div>
            </div>
            <div class="col-lg-4 pt-4">
                <div class="row">
                    <div class="col-12 py-4 d-flex">
                        <?php
                        $sql = "select * from sobre";
                        $query = mysqli_query($conn, $sql);
                        while ($rs = mysqli_fetch_array($query)){
                            $img1 = $rs['img'];
                            $img2 = $rs['img2'];
                            $img3 = $rs['img3'];
                        }
                        ?>
                        <img src="../libraries/img/<?php echo $img2;?>" alt="<?php echo $img2;?>" style="width: 300px;
                                height: 200px" class="img-fluid mx-auto img-thumbnail">
                    </div>
                    <div class="col-12 py-4">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group text-center">
                                <label for="img">nova imagem</label>
                                <input type="file" id="img" name="img2" class="form-control ml-3">
                                <button type="submit" name="save-img2" class="btn btn-success mx-auto mt-3">atualizar</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['save-img2'])){

                            $img2 = $_FILES['img2']['name'];
                            $tmp2 = $_FILES['img2']['tmp_name'];

                            $update = "update sobre set img2 = '$img2'";
                            $query = mysqli_query($conn, $update);

                            move_uploaded_file($tmp2, "../libraries/img/$img2");

                            if ($query){
                                echo "<script>alert('Imagem Alterada')</script>";
                                echo "<script>window.open('?sobre', '_self')</script>";
                            }else {
                                echo "<script>alert('Imagem nao alterada consulte o desenvolvedor')</script>";
                                echo "<script>window.open('?sobre', '_self')</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-4">
                <div class="row">
                    <div class="col-12 py-4 d-flex">
                        <?php
                        $sql = "select * from sobre";
                        $query = mysqli_query($conn, $sql);
                        while ($rs = mysqli_fetch_array($query)){
                            $img1 = $rs['img'];
                            $img2 = $rs['img2'];
                            $img3 = $rs['img3'];
                        }
                        ?>
                        <img src="../libraries/img/<?php echo $img3;?>" alt="<?php echo $img3;?>" style="width: 300px;
                            height: 200px" class="img-fluid mx-auto img-thumbnail">
                    </div>
                    <div class="col-12 py-4">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group text-center">
                                <label for="img">nova imagem</label>
                                <input type="file" id="img" name="img3" class="form-control ml-3">
                                <button type="submit" name="save_img3" class="btn btn-success mx-auto mt-3">atualizar</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['save_img3'])){

                            $img3 = $_FILES['img3']['name'];
                            $tmp3 = $_FILES['img3']['tmp_name'];

                            $update = "update sobre set img3 = '$img3'";
                            $query = mysqli_query($conn, $update);

                            move_uploaded_file($tmp3, "../libraries/img/$img3");

                            if ($query){
                                echo "<script>alert('Imagem Alterada')</script>";
                                echo "<script>window.open('?sobre', '_self')</script>";
                            }else {
                                echo "<script>alert('Imagem nao alterada consulte o desenvolvedor')</script>";
                                echo "<script>window.open('?sobre', '_self')</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php } ?>
