<?php
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location: index.php");
    exit();
}else {
    ?>
    <?php
    $sql = "select * from trabalhe_conosco";
    $query  = mysqli_query($conn,$sql);
    $rs = mysqli_fetch_array($query);
    $img_header = $rs['header_img'];

    ?>
    <h1 class="text-nowrap text-white p-4">Página Trabalhe Conosco</h1>
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
            <tr>
                <td class="text-center">Imagem Cabeçalho</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <form action="" method="post" enctype="multipart/form-data">
                    <td class="text-center">
                        <img class="img-fluid" style="width: 200px; height: 100px;" src="../libraries/img/<?= $img_header; ?>" alt="imagem">
                        <input type="file" name="img_header" class="mt-2 form-control col-md-6 mx-auto">
                        <button type="submit" name="header_save" class="btn btn-danger mt-2">salvar imagem</button>
                    </td>
                </form>
                <?php
                if (isset($_POST['header_save'])){
                    $img = $_FILES['img_header']['name'];
                    $tmp_name = $_FILES['img_header']['tmp_name'];
                    move_uploaded_file($tmp_name, "../libraries/img/$img");
                    $sql = "update trabalhe_conosco set header_img='$img'";
                    $query = mysqli_query($conn,$sql);
                    if ($query){
                        echo "<script>alert('Imagem Alterada')</script>";
                        echo "<script>window.open('?works', '_self')</script>";

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