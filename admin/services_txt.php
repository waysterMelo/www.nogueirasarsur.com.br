<?php
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location: escritorio.php");
    exit();
}else {
    ?>
    <?php
    $sql = "select * from page_services";
    $query  = mysqli_query($conn,$sql);
    $rs = mysqli_fetch_array($query);
    $header_texto = $rs['header_texto'];
    $title1 = $rs['title1'];
    $description1 = $rs['description1'];
    $title2 = $rs['title2'];
    $desc2 = $rs['description2'];
    ?>
<h1 class="text-white text-uppercase" >textos</h1>
<div class="table-responsive">
    <table class="table table-light">
        <thead>
        <tr>
            <td>Texto Cabeçalho</td>
            <td>Titulo do serviço</td>
            <td>Descrição do serviço</td>
        </tr>
        </thead>
        <tbody>
            <tr>
                <form action="" method="post" enctype="multipart/form-data">
                <td class="text-center">
                    <input name="header_txt" type="text" class="form-control" value="<?=$header_texto; ?>">
                    <button class="btn btn-danger mt-2" type="submit" name="save1">atualizar</button>
                </td>
                <td class="text-center">
                    <input name="titulo1" type="text" class="form-control" value="<?php echo $title1?>">
                    <button class="btn btn-danger mt-2" type="submit" name="save2">atualizar</button>
                </td>
                <td class="text-center">
                    <textarea type="text" name="descr1" class="form-control"><?=$description1;?></textarea>
                    <button class="btn btn-danger mt-2" type="submit" name="save3">atualizar</button>
                </td>
                </form>
                <?php
                    if (isset($_POST['save1'])){
                        $header_texto = $_POST['header_txt'];
                        $sql = "update page_services set header_texto='$header_texto'";
                        $rs = mysqli_query($conn,$sql);
                        if ($rs){
                            echo "<script>alert('Texto Alterado')</script>";
                            echo "<script>window.open('?services_txt', '_self')</script>";

                        }else{
                            echo "<script>alert('Erro')</script>";
                        }

                    }

                    if (isset($_POST['save2'])){

                    $text_1 = $_POST['titulo1'];
                    $sql = "update page_services set title1='$text_1'";
                    $rs = mysqli_query($conn,$sql);
                    if ($rs){
                        echo "<script>alert('Texto Alterado')</script>";
                        echo "<script>window.open('?services_txt', '_self')</script>";

                    }else{
                        echo "<script>alert('Erro')</script>";
                    }

                }
                    if (isset($_POST['save3'])){
                    $desc1 = $_POST['descr1'];
                    $sql = "update page_services set description1='$desc1'";
                    $rs = mysqli_query($conn,$sql);
                    if ($rs){
                        echo "<script>alert('Texto Alterado')</script>";
                        echo "<script>window.open('?services_txt', '_self')</script>";

                    }else{
                        echo "<script>alert('Erro')</script>";
                    }

                }
                ?>
            </tr>
        </tbody>
    </table>

    <table class="table table-light">
        <thead>
        <tr>
            <td>Titulo do Segundo serviço</td>
            <td>Descrição do Segundo serviço</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <form action="" method="post" enctype="multipart/form-data">
            <td class="text-center">
                <input type="text" name="title_2" class="form-control" value="<?=$title2; ?>">
                <button class="btn btn-danger mt-2" type="submit" name="save4">atualizar</button>
            </td>
            <td class="text-center">
                <textarea type="text" name="descr2" class="form-control"><?=$desc2;?></textarea>
                <button class="btn btn-danger mt-2" type="submit" name="save5">atualizar</button>
            </td>
            </form>
            <?php
            if (isset($_POST['save4'])){
                $title2 = $_POST['title_2'];
                $sql = "update page_services set title2='$title2'";
                $rs = mysqli_query($conn,$sql);
                if ($rs){
                    echo "<script>alert('Texto Alterado')</script>";
                    echo "<script>window.open('?services_txt', '_self')</script>";

                }else{
                    echo "<script>alert('Erro')</script>";
                }

            }
            if (isset($_POST['save5'])){
                $desc_2 = $_POST['descr2'];
                $sql = "update page_services set description2='$desc_2'";
                $rs = mysqli_query($conn,$sql);
                if ($rs){
                    echo "<script>alert('Texto Alterado')</script>";
                    echo "<script>window.open('?services_txt', '_self')</script>";

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