<?php
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location: index.php");
    exit();
}else {
?>
<div class="col-lg-12">
    <h1 class="text-uppercase" style="color:white;">Textos</h1>
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
            <tr>
                <th class="text-center">Cabeçalho</th>
                <th class="text-center">Titulo</th>
                <th class="text-center">Descrição</th>
            </tr>
            </thead>
            <tbody>
            <form action="" method="post" enctype="multipart/form-data">
                <tr>
                    <?php
                    $sql = "select * from page_escritorio";
                    $query = mysqli_query($conn,$sql);
                    while ($rs = mysqli_fetch_array($query)){
                        $header_txt = $rs['header_texto'];
                        $titulo = $rs['titulo'];
                        $texto_1 = $rs['texto1'];
                    }
                    ?>
                    <td class="text-center">
                        <input type="text" name="header_txt" class="form-control mt-3" value="<?php echo $header_txt; ?>">
                        <button type="submit" name="headertexto" class="btn btn-success mt-2 btn-md">atualizar</button>
                    </td>
                    <td class="text-center">
                        <input type="text" name="titulo" class="form-control mt-3" value="<?php echo $titulo; ?>">
                        <button type="submit" name="savetexto1" class="btn btn-success mt-2 btn-md">atualizar</button>
                    </td>

                    <td class="text-center">
                        <textarea type="text" name="texto1" class="aqui form-control mt-3"><?php echo $texto_1;?></textarea>
                        <button type="submit" name="savetexto2" class="btn btn-success mt-2 btn-md">atualizar</button>
                    </td>
                </tr>
            </form>
            <?php
            if (isset($_POST['headertexto'])){
                    $header_txt = $_POST['header_txt'];

                $sql = "update page_escritorio set header_texto='$header_txt'";
                $query=mysqli_query($conn, $sql);
                if ($query){
                    echo "<script>alert('Texto Alterado')</script>";
                    echo "<script>window.open('?office_textos', '_self')</script>";
                }else{
                    exit();
                }

            }
            if (isset($_POST['savetexto1'])){
                $titulo = $_POST['titulo'];

                $sql = "update page_escritorio set titulo='$titulo'";
                $query=mysqli_query($conn, $sql);
                if ($query){
                    echo "<script>alert('Texto Alterado')</script>";
                    echo "<script>window.open('?office_textos', '_self')</script>";
                }else{
                    exit();
                }

            }
            if (isset($_POST['savetexto2'])){
                $txt1 = $_POST['texto1'];

                $sql = "update page_escritorio set texto1='$txt1'";
                $query=mysqli_query($conn, $sql);
                if ($query){
                    echo "<script>alert('Texto Alterado')</script>";
                    echo "<script>window.open('?office_textos', '_self')</script>";
                }else{
                    exit();
                }

            }
            ?>
            </tbody>
        </table>
    </div>
    <hr>
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
            <tr>
                <th class="text-center">Titulo</th>
                <th class="text-center">Descrição</th>
            </tr>
            </thead>
            <tbody>
            <form action="" method="post" enctype="multipart/form-data">
                <tr>
                    <?php
                    $sql = "select * from page_escritorio";
                    $query = mysqli_query($conn,$sql);
                    while ($rs = mysqli_fetch_array($query)){
                        $titulo2 = $rs['titulo2'];
                        $texto2 = $rs['texto2'];
                    }
                    ?>
                    <td class="text-center">
                        <input type="text" name="titulo2" class="form-control mt-3" value="<?php echo $titulo2; ?>">
                        <button type="submit" name="savetexto2_2" class="btn btn-success mt-2 btn-md">atualizar</button>
                    </td>

                    <td class="text-center">
                        <textarea type="text" name="desc2" class="aqui form-control mt-3"><?php echo $texto2;?></textarea>
                        <button type="submit" name="savetexto2_de_2" class="btn btn-success mt-2 btn-md">atualizar</button>
                    </td>
                </tr>
            </form>
            <?php
            if (isset($_POST['savetexto2_2'])){
                $titulo2 = $_POST['titulo2'];

                $sql = "update page_escritorio set titulo2='$titulo2'";
                $query=mysqli_query($conn, $sql);
                if ($query){
                    echo "<script>alert('Texto Alterado')</script>";
                    echo "<script>window.open('?office_textos', '_self')</script>";
                }else{
                    exit();
                }

            }
            if (isset($_POST['savetexto2_de_2'])){
                $desc2 = $_POST['desc2'];

                $sql = "update page_escritorio set texto2='$desc2'";
                $query=mysqli_query($conn, $sql);
                if ($query){
                    echo "<script>alert('Texto Alterado')</script>";
                    echo "<script>window.open('?office_textos', '_self')</script>";
                }else{
                    exit();
                }

            }
            ?>
            </tbody>
        </table>
    </div>
    <hr>
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
            <tr>
                <th class="text-center">Titulo</th>
                <th class="text-center">Descrição</th>
            </tr>
            </thead>
            <tbody>
            <form action="" method="post" enctype="multipart/form-data">
                <tr>
                    <?php
                    $sql = "select * from page_escritorio";
                    $query = mysqli_query($conn,$sql);
                    while ($rs = mysqli_fetch_array($query)){
                        $titulo3 = $rs['titulo3'];
                        $texto3 = $rs['texto3'];
                        $desc3 = $rs['descricao3'];
                    }
                    ?>
                    <td class="text-center">
                        <input type="text" name="titulo3" class="form-control mt-3" value="<?php echo $titulo3; ?>">
                        <button type="submit" name="savetexto3" class="btn btn-success mt-2 btn-md">atualizar</button>
                    </td>

                    <td class="text-center">
                        <textarea type="text" name="texto3" class="aqui form-control mt-3"><?php echo $texto3;?></textarea>
                        <textarea type="text" name="desc3" class="aqui form-control mt-3"><?php echo $desc3;?></textarea>
                        <button type="submit" name="savetexto3_de2" class="btn btn-success mt-2 btn-md">atualizar</button>
                    </td>
                </tr>
            </form>
            <?php
            if (isset($_POST['savetexto3'])){
                $titulo_3 = $_POST['titulo3'];

                $sql = "update page_escritorio set titulo3='$titulo_3'";
                $query=mysqli_query($conn, $sql);
                if ($query){
                    echo "<script>alert('Texto Alterado')</script>";
                    echo "<script>window.open('?office_textos', '_self')</script>";
                }else{
                    exit();
                }

            }
            if (isset($_POST['savetexto3_de2'])){
                $txt3 = $_POST['texto3'];
                $desc3 = $_POST['desc3'];

                $sql = "update page_escritorio set texto3='$txt3', descricao3='$desc3'";
                $query=mysqli_query($conn, $sql);
                if ($query){
                    echo "<script>alert('Texto Alterado')</script>";
                    echo "<script>window.open('?office_textos', '_self')</script>";
                }else{
                    exit();
                }

            }
            ?>
            </tbody>
        </table>
    </div>


    <?php } ?>
