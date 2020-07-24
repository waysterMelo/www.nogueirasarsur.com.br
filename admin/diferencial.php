<?php
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location: escritorio.php");
    exit();
}else {
    ?>
<h1 class="text-white text-uppercase">diferencial</h1>
<div class="table-responsive">
    <table class="table table-light">
        <thead>
        <tr>
            <th class="text-center">IMAGEM</th>
            <th class="text-center">TITULO</th>
            <th class="text-center">DESCRIÇÃO</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            $sql = "select * from diferencial";
            $query = mysqli_query($conn,$sql);
            while ($rs = mysqli_fetch_array($query)){
                $imagem = $rs['imagem'];
                $titulo = $rs['titulo'];
                $texto = $rs['texto'];

            }
            ?>
            <div class="row">
            <td class="text-center" style="width: 240px">
                <img class="img-fluid bg-white" src="../libraries/img/<?php echo $imagem ?>" alt="logo">
                <div class="form-group">
                    <form action="" enctype="multipart/form-data" method="post">
                        <label for=""></label>
                        <input type="file" name="imagem" class="form-control">
                        <button type="submit" name="s_img" class="btn btn-success mt-2">salvar imagem</button>
                    </form>
                    <?php
                       if (isset($_POST['s_img'])){
                           $img = $_FILES['imagem']['name'];
                           $tmp_name = $_FILES['imagem']['tmp_name'];
                           move_uploaded_file($tmp_name, "../libraries/img/$img");

                           $sql = "update diferencial set imagem='$img'";
                           $query = mysqli_query($conn,$sql);

                           if ($query){
                               echo "<script>alert('IMAGEM ALTERADA')</script>";
                               echo "<script>window.open('?diferencial', '_self')</script>";
                           }
                       }
                    ?>
                </div>
            </td>

                <td class="text-center">
                    <form action="" method="post" enctype="multipart/form-data">
                        <textarea name="titulo1" class="form-control text-center" id=""><?php echo $titulo; ?></textarea>
                        <button name="atualizar-titulo1" class="btn btn-primary mt-2">atualizar titulo</button>
                    </form>
                    <?php
                        if (isset($_POST['atualizar-titulo1'])){
                            $titulo1 = $_POST['titulo1'];
                            $sql = "update diferencial set titulo='$titulo1'";
                            $query = mysqli_query($conn,$sql);

                            if ($query){
                                echo "<script>alert('TEXTO ALTERADO')</script>";
                                echo "<script>window.open('?diferencial', '_self')</script>";
                            }
                        }
                    ?>
                </td>
                <td class="text-center">
                    <form action="" method="post" enctype="multipart/form-data">
                    <textarea name="desc1" class="form-control text-center"><?php echo $texto; ?></textarea>
                    <button name="atualizar-desc" class="btn btn-primary mt-2">atualizar titulo</button>
                    </form>
                    <?php
                    if (isset($_POST['atualizar-desc'])){
                        $desc1 = $_POST['desc1'];
                        $sql = "update diferencial set texto='$desc1'";
                        $query = mysqli_query($conn,$sql);

                        if ($query){
                            echo "<script>alert('TEXTO ALTERADO')</script>";
                            echo "<script>window.open('?diferencial', '_self')</script>";
                        }
                    }
                    ?>
                </td>

        </tr>

        </tbody>
    </table>
</div>
<hr>
<div class="table-responsive">
    <table class="table table-light">
        <thead>
        <tr>
            <th class="text-center">IMAGEM</th>
            <th class="text-center">TITULO</th>
            <th class="text-center">DESCRIÇÃO</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            $sql = "select * from diferencial";
            $query = mysqli_query($conn,$sql);
            while ($rs = mysqli_fetch_array($query)){
                $imagem2 = $rs['imagem2'];
                $titulo2 = $rs['titulo_img2'];
                $descricao2 = $rs['texto_img2'];

                $imagem3 = $rs['imagem3'];
                $titulo3 = $rs['titulo_img3'];
                $texto3 = $rs['texto_img3'];

            }
            ?>
            <div class="row">
                <td class="text-center" style="width: 240px">
                    <img class="img-fluid bg-white" src="../libraries/img/<?php echo $imagem2 ?>" alt="logo">
                    <div class="form-group">
                        <form action="" enctype="multipart/form-data" method="post">
                            <label for=""></label>
                            <input type="file" name="imagem2" class="form-control">
                            <button type="submit" name="s_img2" class="btn btn-success mt-2">salvar imagem</button>
                        </form>
                        <?php
                        if (isset($_POST['s_img2'])){
                            $img = $_FILES['imagem2']['name'];
                            $tmp_name = $_FILES['imagem2']['tmp_name'];
                            move_uploaded_file($tmp_name, "../libraries/img/$img");

                            $sql = "update diferencial set imagem2='$img'";
                            $query = mysqli_query($conn,$sql);

                            if ($query){
                                echo "<script>alert('IMAGEM ALTERADA')</script>";
                                echo "<script>window.open('?diferencial', '_self')</script>";
                            }
                        }
                        ?>
                    </div>
                </td>

                <td class="text-center">
                    <form action="" method="post" enctype="multipart/form-data">
                        <textarea name="titulo2" class="form-control text-center" id=""><?php echo $titulo2; ?></textarea>
                        <button name="atualizar-titulo2" class="btn btn-primary mt-2">atualizar titulo</button>
                    </form>
                    <?php
                    if (isset($_POST['atualizar-titulo2'])){
                        $titulo2 = $_POST['titulo2'];
                        $sql = "update diferencial set titulo_img2='$titulo2'";
                        $query = mysqli_query($conn,$sql);

                        if ($query){
                            echo "<script>alert('TEXTO ALTERADO')</script>";
                            echo "<script>window.open('?diferencial', '_self')</script>";
                        }
                    }
                    ?>
                </td>
                <td class="text-center">
                    <form action="" method="post" enctype="multipart/form-data">
                        <textarea name="desc2" class="form-control text-center"><?php echo $descricao2; ?></textarea>
                        <button name="atualizar-desc2" class="btn btn-primary mt-2">atualizar titulo</button>
                    </form>
                    <?php
                    if (isset($_POST['atualizar-desc2'])){
                        $desc2 = $_POST['desc2'];
                        $sql = "update diferencial set texto_img2='$desc2'";
                        $query = mysqli_query($conn,$sql);

                        if ($query){
                            echo "<script>alert('TEXTO ALTERADO')</script>";
                            echo "<script>window.open('?diferencial', '_self')</script>";
                        }
                    }
                    ?>
                </td>

        </tr>

        </tbody>
    </table>
</div>
<hr>
<div class="table-responsive">
    <table class="table table-light">
        <thead>
        <tr>
            <th class="text-center">IMAGEM</th>
            <th class="text-center">TITULO</th>
            <th class="text-center">DESCRIÇÃO</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            $sql = "select * from diferencial";
            $query = mysqli_query($conn,$sql);
            while ($rs = mysqli_fetch_array($query)){
                $imagem3 = $rs['imagem3'];
                $titulo3 = $rs['titulo_img3'];
                $texto3 = $rs['texto_img3'];

            }
            ?>
            <div class="row">
                <td class="text-center" style="width: 240px">
                    <img class="img-fluid bg-white" src="../libraries/img/<?php echo $imagem3 ?>" alt="logo">
                    <div class="form-group">
                        <form action="" enctype="multipart/form-data" method="post">
                            <label for=""></label>
                            <input type="file" name="imagem3" class="form-control">
                            <button type="submit" name="s_img3" class="btn btn-success mt-2">salvar imagem</button>
                        </form>
                        <?php
                        if (isset($_POST['s_img3'])){
                            $img3 = $_FILES['imagem3']['name'];
                            $tmp_name = $_FILES['imagem3']['tmp_name'];
                            move_uploaded_file($tmp_name, "../libraries/img/$img3");

                            $sql = "update diferencial set imagem3='$img3'";
                            $query = mysqli_query($conn,$sql);

                            if ($query){
                                echo "<script>alert('IMAGEM ALTERADA')</script>";
                                echo "<script>window.open('?diferencial', '_self')</script>";
                            }
                        }
                        ?>
                    </div>
                </td>

                <td class="text-center">
                    <form action="" method="post" enctype="multipart/form-data">
                        <textarea name="titulo3" class="form-control text-center" id=""><?php echo $titulo3; ?></textarea>
                        <button name="atualizar-titulo3" class="btn btn-primary mt-2">atualizar titulo</button>
                    </form>
                    <?php
                    if (isset($_POST['atualizar-titulo3'])){
                        $titulo2 = $_POST['titulo3'];
                        $sql = "update diferencial set titulo_img3='$titulo2'";
                        $query = mysqli_query($conn,$sql);

                        if ($query){
                            echo "<script>alert('TEXTO ALTERADO')</script>";
                            echo "<script>window.open('?diferencial', '_self')</script>";
                        }
                    }
                    ?>
                </td>
                <td class="text-center">
                    <form action="" method="post" enctype="multipart/form-data">
                        <textarea name="desc3" class="form-control text-center"><?php echo $texto3; ?></textarea>
                        <button name="atualizar-desc3" class="btn btn-primary mt-2">atualizar titulo</button>
                    </form>
                    <?php
                    if (isset($_POST['atualizar-desc3'])){
                        $desc3 = $_POST['desc3'];
                        $sql = "update diferencial set texto_img3='$desc3'";
                        $query = mysqli_query($conn,$sql);

                        if ($query){
                            echo "<script>alert('TEXTO ALTERADO')</script>";
                            echo "<script>window.open('?diferencial', '_self')</script>";
                        }
                    }
                    ?>
                </td>

        </tr>

        </tbody>
    </table>
</div>
<?php }?>
