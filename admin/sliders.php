<?php
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location: index.php");
    exit();
}else {
    ?>
<h1 class="text-uppercase text-white">sliders</h1>
<div class="table-responsive-lg">
    <table class="table table-light">
        <thead>
        <tr>
            <th class="text-center">PRIMEIRA IMAGEM </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            $sql = "select * from slides";
            $query = mysqli_query($conn,$sql);
            while ($rs = mysqli_fetch_array($query)){
                $id = $rs['id'];
                $imagem1 = $rs['imagem1'];
                $texto1 = $rs['texto1'];
                $texto2 = $rs['texto2'];
            }
            ?>
            <td>
                <img style="max-width: 300px; max-height: 200px;" class="img-fluid" src="../libraries/img/<?php echo $imagem1;?>" alt="logo">
            </td>
            <td class="text-center">
                <form action="" method="post" enctype="multipart/form-data">
                <label for="">Inserir nova Imagem</label>
                <input name="img" type="file" class="form-control">
                <button class="btn btn-success mt-3" type="submit" name="salvar_img">salvar imagem</button>
                </form>
                <?php
                if (isset($_POST['salvar_img'])){

                    $img_nova = $_FILES['img']['name'];
                    $tmp_name= $_FILES['img']['tmp_name'];

                    move_uploaded_file($tmp_name, "../libraries/img/$img_nova");

                    $update = "update slides set imagem1='$img_nova'";
                    $query = mysqli_query($conn,$update);

                    if ($query){
                        echo "<script>alert('IMAGEM INSERIDA')</script>";
                        echo "<script>window.open('?sliders', '_self')</script>";
                    }

                }

                ?>
            </td>
        </tr>

        </tbody>
    </table>
    <table class="table table-light">
        <thead>
        <tr>
            <th class="text-center">PRIMEIRO TEXTO</th>
            <th class="text-center">SEGUNDO TEXTO</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <div class="row">
                <div class="col-lg-4">
            <td class="text-center">
                <form action="" method="post" enctype="multipart/form-data">
                    <textarea class="form-control" name="texto1"><?php echo $texto1;?></textarea>
                    <button type="submit" name="atualizar_texto1" class="btn btn-primary mt-2">atualizar</button>
                </form>
                <?php
                if (isset($_POST['atualizar_texto1'])){
                    $texto1 = $_POST['texto1'];
                    $sql = "update slides set texto1 ='$texto1'";
                    $query = mysqli_query($conn, $sql);

                    if ($query){
                        echo "<script>alert('TEXTO ATUALIZADO')</script>";
                        echo "<script>window.open('?sliders', '_self')</script>";
                    }
                }
                ?>
            </td>
                </div>
                <div class="col-lg-4">
                    <td class="text-center">
                        <form action="" method="post" enctype="multipart/form-data">
                            <textarea class="form-control" name="texto2"><?php echo $texto2;?></textarea>
                            <button type="submit" name="atualizar_texto2" class="btn btn-primary mt-2">atualizar</button>
                        </form>
                        <?php
                        if (isset($_POST['atualizar_texto2'])){
                            $texto2 = $_POST['texto2'];
                            $sql = "update slides set texto2 ='$texto2'";
                            $query = mysqli_query($conn, $sql);

                            if ($query){
                                echo "<script>alert('TEXTO ATUALIZADO')</script>";
                                echo "<script>window.open('?sliders', '_self')</script>";
                            }
                        }
                        ?>
                    </td>
                </div>
            </div>
        </tr>
        </tbody>
    </table>
</div>
<?php } ?>