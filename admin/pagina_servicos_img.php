<?php
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location: index.php");
    exit();
}else {
    ?>
    <?php
        $sql = "select * from page_services";
        $query  = mysqli_query($conn,$sql);
        $rs = mysqli_fetch_array($query);
        $img_header = $rs['header_img'];
        $imagem1 = $rs['img1'];
        $imagem2 = $rs['img2']

    ?>
<h1 class="text-uppercase text-white">servicos</h1>
<div class="table-responsive">
    <table class="table table-light">
        <thead>
        <tr>
            <td class="text-center">Imagem Cabeçalho</td>
            <td class="text-center">Imagem Direito Civil</td>
            <td class="text-center">Imagem Direito do Trabalho</td>
        </tr>
        </thead>
        <tbody>
            <tr>
                <form action="" method="post" enctype="multipart/form-data">
                <td class="text-center">
                    <img class="img-fluid" style="width: 200px; height: 100px;" src="../libraries/img/<?= $img_header; ?>" alt="imagem">
                    <input type="file" name="img_header" class="mt-2 form-control">
                    <button type="submit" name="header_save" class="btn btn-danger mt-2">salvar imagem</button>
                </td>
                <td class="text-center">
                    <img style="width: 200px; height: 100px;" src="../libraries/img/<?php echo $imagem1; ?>" alt="imagem">
                    <input type="file" name="img1" class="mt-2 form-control">
                    <button type="submit" name="img1_save" class="btn btn-danger mt-2">salvar imagem</button>
                </td>
                <td class="text-center">
                    <img style="width: 200px; height: 100px;" src="../libraries/img/<?php echo $imagem2; ?>" alt="imagem">
                    <input type="file" name="img2" class="mt-2 form-control">
                    <button type="submit" name="img2_save" class="btn btn-danger mt-2">salvar imagem</button>
                </td>
                </form>
                <?php
                    if (isset($_POST['header_save'])){
                        $img = $_FILES['img_header']['name'];
                        $tmp_name = $_FILES['img_header']['tmp_name'];
                        move_uploaded_file($tmp_name, "../libraries/img/$img");
                        $sql = "update page_services set header_img='$img'";
                        $query = mysqli_query($conn,$sql);
                        if ($query){
                            echo "<script>alert('Imagem Alterada')</script>";
                            echo "<script>window.open('?services_img', '_self')</script>";

                        }else{
                            echo "<script>alert('Erro')</script>";
                        }
                    }
                    if (isset($_POST['img1_save'])){
                    $img = $_FILES['img1']['name'];
                    $tmp_name = $_FILES['img1']['tmp_name'];
                    move_uploaded_file($tmp_name, "../libraries/img/$img");
                    $sql = "update page_services set img1='$img'";
                    $query = mysqli_query($conn,$sql);
                    if ($query){
                        echo "<script>alert('Imagem Alterada')</script>";
                        echo "<script>window.open('?services_img', '_self')</script>";

                    }else{
                        echo "<script>alert('Erro')</script>";
                    }
                }
                if (isset($_POST['img2_save'])){
                    $img = $_FILES['img2']['name'];
                    $tmp_name = $_FILES['img2']['tmp_name'];
                    move_uploaded_file($tmp_name, "../libraries/img/$img");
                    $sql = "update page_services set img2 ='$img'";
                    $query = mysqli_query($conn,$sql);
                    if ($query){
                        echo "<script>alert('Imagem Alterada')</script>";
                        echo "<script>window.open('?services_img', '_self')</script>";

                    }else{
                        echo "<script>alert('Erro')</script>";
                    }
                }
                ?>
            </tr>
        </tbody>
    </table>
</div>

<?php } ?>