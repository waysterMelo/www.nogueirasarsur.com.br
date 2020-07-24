<?php
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location: escritorio.php");
    exit();
}else {
    ?>
<div class="col-lg-12">
    <h1 class="text-uppercase" style="color:white;">Imagem</h1>
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
            <tr>
                <th class="text-center">Cabeçalho</th>
                <th class="text-center">Fundo 1</th>
                <th class="text-center">Fundo 2</th>
                <th class="text-center">Fundo 3</th>
            </tr>
            </thead>
            <tbody>
            <form action="" method="post" enctype="multipart/form-data">
                <tr>
                    <?php
                    $sql = "select * from page_escritorio";
                    $query = mysqli_query($conn,$sql);
                    while ($rs = mysqli_fetch_array($query)){
                        $header_img = $rs['header_img'];
                        $img1 = $rs['img1'];
                        $img2 = $rs['img2'];
                        $img3 = $rs['img3'];
                    }
                    ?>
                    <td class="text-center">
                        <img  style="height: 100px;" class="img-fluid" src="../libraries/img/<?php echo $header_img ?>" alt="logo">
                        <input type="file" name="header_img" class="form-control mt-3">
                        <button type="submit" name="save_img_header" class="btn btn-success mt-2 btn-md">salvar imagem</button>
                    </td>
                    <td class="text-center">
                        <img  style="height: 100px;" class="img-fluid" src="../libraries/img/<?php echo $img1 ?>" alt="logo">
                        <input type="file" name="img1" class="form-control mt-3">
                        <button type="submit" name="save_img1" class="btn btn-success mt-2 btn-md">salvar imagem</button>
                    </td>

                    <td class="text-center">
                        <img  style="height: 100px;" class="img-fluid" src="../libraries/img/<?php echo $img2 ?>" alt="logo">
                        <input type="file" name="img2" class="form-control mt-3">
                        <button type="submit" name="save_img2" class="btn btn-success mt-2 btn-md">salvar imagem</button>
                    </td>

                    <td class="text-center">
                        <img style="height: 100px;" class="img-fluid" src="../libraries/img/<?php echo $img3 ?>" alt="logo">
                        <input type="file" name="img3" class="form-control mt-3">
                        <button type="submit" name="save_img3" class="btn btn-success mt-2 btn-md">salvar imagem</button>
                    </td>

                </tr>
            </form>
            <?php
                if (isset($_POST['save_img_header'])){
                    $img = $_FILES['header_img']['name'];
                    $tmp_nameIMG = $_FILES['header_img']['tmp_name'];

                    move_uploaded_file($tmp_nameIMG, "../libraries/img/$img");

                    $sql = "update page_escritorio set header_img='$img'";
                    $query=mysqli_query($conn, $sql);
                    if ($query){
                        echo "<script>alert('Imagem Alterada')</script>";
                        echo "<script>window.open('?office_imagens', '_self')</script>";
                    }else{
                        exit();
                    }

                }

            if (isset($_POST['save_img1'])){
                $img1 = $_FILES['img1']['name'];
                $tmp_nameIMG1 = $_FILES['img1']['tmp_name'];

                move_uploaded_file($tmp_nameIMG1, "../libraries/img/$img1");

                $sql = "update page_escritorio set img1='$img1'";
                $query=mysqli_query($conn, $sql);
                if ($query){
                    echo "<script>alert('Imagem Alterada')</script>";
                    echo "<script>window.open('?office_imagens', '_self')</script>";
                }else{
                    exit();
                }

            }

            if (isset($_POST['save_img2'])){
                $img2 = $_FILES['img2']['name'];
                $tmp_nameIMG2 = $_FILES['img2']['tmp_name'];

                move_uploaded_file($tmp_nameIMG2, "../libraries/img/$img2");

                $sql = "update page_escritorio set img2='$img2'";
                $query=mysqli_query($conn, $sql);
                if ($query){
                    echo "<script>alert('Imagem Alterada')</script>";
                    echo "<script>window.open('?office_imagens', '_self')</script>";
                }else{
                    exit();
                }

            }

            if (isset($_POST['save_img3'])){
                $img3 = $_FILES['img3']['name'];
                $tmp_nameIMG3 = $_FILES['img3']['tmp_name'];

                move_uploaded_file($tmp_nameIMG3, "../libraries/img/$img3");

                $sql3 = "update page_escritorio set img3='$img3'";
                $query3=mysqli_query($conn, $sql3);
                if ($query3){
                    echo "<script>alert('Imagem Alterada')</script>";
                    echo "<script>window.open('?office_imagens', '_self')</script>";
                }else{
                    exit();
                }

            }

            ?>
            </tbody>
        </table>
    </div>
    <hr>

    <?php } ?>