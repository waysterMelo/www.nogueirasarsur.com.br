<?php
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location: escritorio.php");
    exit();
}else {
?>
    <h1 class="text-white text-uppercase">
        Contato</h1>
    <?php
    $sql = "select * from contato";
    $query = mysqli_query($conn, $sql);
    while($rs = mysqli_fetch_array($query)){
        $header_img = $rs['header_img'];
        $texto = $rs['texto'];
        $descricao1 = $rs['descricao1'];
        $descricao2 = $rs['descricao2'];
        $tel = $rs['tel'];
        $endereco = $rs['endereco'];
        $email = $rs['email'];
    }
    ?>
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
            <tr class="text-center">
                <td>Imagem Cabeçalho</td>
                <td>Título</td>
                <td>Texto 1</td>
                <td>Texto 2</td>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <form action="" method="post" enctype="multipart/form-data">
                <td>
                    <img style="width: 200px; height: 100px" src="../libraries/img/<?php echo $header_img?>" alt="">
                    <input type="file" name="img" class="form-control mt-2">
                    <button type="submit" name="save" class="btn btn-danger mt-2">salvar imagem</button>
                </td>
                <td>
                    <input type="text" name="titulo" class="form-control" value="<?php echo $texto;?>">
                    <button type="submit" name="save1" class="btn btn-danger mt-2">atualizar</button>
                </td>

                <td>
                    <input type="text" name="desc" class="form-control" value="<?php echo $descricao1;?>">
                    <button type="submit" name="save2" class="btn btn-danger mt-2">atualizar</button>
                </td>

                <td>
                    <textarea type="text" name="desc2" class="form-control"><?php echo $descricao2;?></textarea>
                    <button type="submit" name="save3" class="btn btn-danger mt-2">atualizar</button>
                </td>
                </form>
                <?php
                    if (isset($_POST['save'])){
                        $img  = $_FILES['img']['name'];
                        $tmp_name = $_FILES['img']['tmp_name'];
                        move_uploaded_file($tmp_name, "../libraries/img/$img");
                        $sql = "update contato set header_img='$img'";
                        $query = mysqli_query($conn,$sql);
                        if ($query){
                            echo "<script>alert('Imagem Alterada')</script>";
                            echo "<script>window.open('?contato', '_self')</script>";
                        }else {
                            echo "<script>alert('Erro')</script>";
                        }
                    }

                    if (isset($_POST['save1'])){
                        $titulo = $_POST['titulo'];
                        $sql = "update contato set texto='$titulo'";
                        $query = mysqli_query($conn,$sql);
                        if ($query){
                            echo "<script>alert('Texto Alterado')</script>";
                            echo "<script>window.open('?contato', '_self')</script>";
                        }else {
                            echo "<script>alert('Erro')</script>";
                        }
                    }

                    if (isset($_POST['save2'])){
                    $desc = $_POST['desc'];
                    $sql = "update contato set descricao1='$desc'";
                    $query = mysqli_query($conn,$sql);
                    if ($query){
                        echo "<script>alert('Texto Alterado')</script>";
                        echo "<script>window.open('?contato', '_self')</script>";
                    }else {
                        echo "<script>alert('Erro')</script>";
                    }
                }

                    if (isset($_POST['save3'])){
                    $desc = $_POST['desc2'];
                    $sql = "update contato set descricao2='$desc'";
                    $query = mysqli_query($conn,$sql);
                    if ($query){
                        echo "<script>alert('Texto Alterado')</script>";
                        echo "<script>window.open('?contato', '_self')</script>";
                    }else {
                        echo "<script>alert('Erro')</script>";
                    }
                }
                ?>
            </tr>
            </tbody>
        </table>

        <table class="table table-light">
            <thead>
            <tr class="text-center">
                <td>Endereço</td>
                <td>Telefone</td>
                <td>Email</td>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <form action="" method="post" enctype="multipart/form-data">
                <td>
                    <textarea id="aqui" type="text" name="endereco" class="form-control"><?php echo $endereco;?></textarea>
                    <button type="submit" name="save4" class="btn btn-danger mt-2">atualizar</button>
                </td>

                <td>
                    <textarea type="text" name="tel" class="form-control"><?php echo $tel;?></textarea>
                    <button type="submit" name="save5" class="btn btn-danger mt-2">atualizar</button>
                </td>

                <td>
                    <textarea type="text" name="email" class="form-control"> <?php echo $email;?></textarea>
                    <button type="submit" name="save6" class="btn btn-danger mt-2">atualizar</button>
                </td>
                </form>
                <?php
                if (isset($_POST['save4'])){
                    $endereco = $_POST['endereco'];
                    $sql = "update contato set endereco='$endereco'";
                    $query = mysqli_query($conn,$sql);
                    if ($query){
                        echo "<script>alert('Texto Alterado')</script>";
                        echo "<script>window.open('?contato', '_self')</script>";
                    }else {
                        echo "<script>alert('Erro')</script>";
                    }
                }

                if (isset($_POST['save5'])){
                    $tel = $_POST['tel'];
                    $sql = "update contato set tel='$tel'";
                    $query = mysqli_query($conn,$sql);
                    if ($query){
                        echo "<script>alert('Texto Alterado')</script>";
                        echo "<script>window.open('?contato', '_self')</script>";
                    }else {
                        echo "<script>alert('Erro')</script>";
                    }
                }

                if (isset($_POST['save6'])){
                    $email = $_POST['email'];
                    $sql = "update contato set email='$email'";
                    $query = mysqli_query($conn,$sql);
                    if ($query){
                        echo "<script>alert('Texto Alterado')</script>";
                        echo "<script>window.open('?contato', '_self')</script>";
                    }else {
                        echo "<script>alert('Erro')</script>";
                    }
                }
                ?>
            </tr>
            </tbody>
        </table>
    </div>
    <?php } ?>
