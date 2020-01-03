<?php
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location: index.php");
    exit();
}else {

    ?>
<h1 class="text-uppercase text-white">Cabeçalho</h1>
<div class="table-responsive">
    <?php
        $sql = "select * from top";
        $query = mysqli_query($conn, $sql);
        $rs = mysqli_fetch_array($query);
        $logo = $rs['logo'];
        $tel = $rs['telefone'];
        $endereco = $rs['endereco'];
    ?>
    <table class="table table-light">
        <thead>
        <tr>
            <th class="text-center">Logo</th>
            <th class="text-center">Telefone</th>
            <th class="text-center">Endereço</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <form action="" method="post" enctype="multipart/form-data">
                <td class="text-center">
                    <img style="width: 200px; height: 100px;" src="../libraries/img/<?php echo  $logo; ?>" alt="logo" class="img-fluid">
                    <input type="file" name="logo" class="form-control mt-2 p-0" />
                    <button type="submit" name="salvar_logo" class="btn btn-danger mt-2">salvar imagem</button>
                </td>
                <td class="text-center">
                    <input name="telefone" value="<?php echo $tel; ?>" class="form-control p-0 text-center">
                    <button type="submit" name="salvar_tel" class="btn btn-danger mt-2">atualizar</button>
                </td>
                <td class="text-center">
                    <textarea id="aqui" type="text" name="endereco" rows="3" class="form-control"><?php echo $endereco; ?></textarea>
                    <button type="submit" name="salvar_ende" class="btn btn-danger mt-2">atualizar</button>
                </td>
                </form>
                <?php
                    if (isset($_POST['salvar_logo'])){
                        $img = $_FILES['logo']['name'];
                        $tmp_name = $_FILES['logo']['tmp_name'];
                        move_uploaded_file($tmp_name, "../libraries/img/$img");
                        $sql = "update top set logo='$img'";
                        $query = mysqli_query($conn,$sql);
                        if ($query){
                            echo "<script>alert('Imagem Alterada')</script>";
                            echo "<script>window.open('?menu', '_self')</script>";
                        }else {
                            echo "Erro";
                        }
                    }

                    if (isset($_POST['salvar_tel'])){
                        $tel = $_POST['telefone'];
                    $sql = "update top set telefone='$tel'";
                    $query = mysqli_query($conn,$sql);
                    if ($query){
                        echo "<script>alert('Telefone Alterado')</script>";
                        echo "<script>window.open('?menu', '_self')</script>";
                    }else {
                        echo "Erro";
                    }
                }

                if (isset($_POST['salvar_ende'])){
                    $endereco = $_POST['endereco'];
                    $sql = "update top set endereco='$endereco'";
                    $query = mysqli_query($conn,$sql);
                    if ($query){
                        echo "<script>alert('Endereco Alterado')</script>";
                        echo "<script>window.open('?menu', '_self')</script>";
                    }else {
                        echo "Erro";
                    }
                }

                ?>
            </tr>
        </tbody>
    </table>
</div>

<?php } ?>
