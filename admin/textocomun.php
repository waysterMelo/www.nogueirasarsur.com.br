<?php
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location: escritorio.php");
    exit();
}else {
    ?>
<h1 class="text-white text-uppercase">Texto comum</h1>
<div class="table-responsive">
    <table class="table table-light">
        <thead>
        <tr>
            <th>Imagem</th>
            <th>Texto 1</th>
            <th>Texto 2</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
                $select = "select * from advertise";
                $query = mysqli_query($conn, $select);
                while($rs = mysqli_fetch_array($query)){
                    $img = $rs['imagem'];
                    $titulo = $rs['titulo'];
                    $desc = $rs['descricao'];
                }
            ?>
            <form action="" method="post" enctype="multipart/form-data">
            <td class="text-center" style="max-width: 200px;">
                <img src="../libraries/img/<?php echo $img; ?>" alt="imagem" class="img-fluid">
                <label for="" class="mt-3">atualizar imagem</label>
                <input type="file" class="form-control" name="img">
                <button name="salvar_img" class="btn btn-success mt-2">salvar imagem</button>
            </td>
            <td class="text-center">
                <textarea name="titulo" class="form-control text-center">
                    <?php echo $titulo; ?>
                </textarea>
                <button type="submit" name="save_txt" class="btn btn-success mt-2">atualizar texto</button>
            </td>
            <td class="text-center">
                <textarea name="descricao" class="form-control">
                    <?php echo $desc; ?>
                </textarea>
                <button type="submit" name="descricao_save" class="btn btn-success mt-2">atualizar texto</button>
            </td>
            </form>
            <?php
                if (isset($_POST['salvar_img'])){
                    $img = $_FILES['img']['name'];
                    $tmp_name = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_name, "../libraries/img/$img");

                    $sql = "update advertise set imagem='$img'";
                    $query = mysqli_query($conn, $sql);

                    if ($query){
                        echo "<script>alert('Imagem Atualizada')</script>";
                        echo "<script>window.open('?texto_comum', '_self')</script>";
                    }
                }

                if (isset($_POST['save_txt'])){
                    $titulo = $_POST['titulo'];
                    $sql = "update advertise set titulo='$titulo'";
                    $query = mysqli_query($conn,$sql);
                    if ($query){
                        if ($query){
                            echo "<script>alert('Texto Atualizado')</script>";
                            echo "<script>window.open('?texto_comum', '_self')</script>";
                        }
                    }
                }

            if (isset($_POST['descricao_save'])){
                $desc = $_POST['descricao'];
                $sql = "update advertise set descricao='$desc'";
                $query = mysqli_query($conn,$sql);
                if ($query){
                    if ($query){
                        echo "<script>alert('Texto Atualizado')</script>";
                        echo "<script>window.open('?texto_comum', '_self')</script>";
                    }
                }
            }
            ?>
        </tr>
        </tbody>
    </table>
</div>

<?php } ?>
