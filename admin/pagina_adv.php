<?php
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location: index.php");
    exit();
}else {
    ?>
<h1 class="text-white text-uppercase py-5">Advogados página</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Cabeçalho Imagem e Título</li>
        </ol>
    </nav>

    <?php
    $sql = "select * from header_page_adv";
    $query = mysqli_query($conn,$sql);
    while ($rs = mysqli_fetch_array($query)){
        $img_he = $rs['img'];
        $texto_header = $rs['texto'];
    }
    ?>
    <section style="background-image: url('../libraries/img/<?php echo $img_he; ?>');height: 300px;background-size: cover;">
        <div class="container-fluid" id="header_advogados" >
            <div class="py-5 text-center">
                <div class="text-capitalize">
                    <h1 style="color: white;" class="font-weight-bold mt-5 pb-3 display-4"><?php echo $texto_header;?></h1>
                </div>
            </div>
        </div>
    </section>


    <div class="table-responsive">
        <table class="table table-light">
            <thead>
            <tr>
                <td>Imagem de fundo</td>
                <td>Titulo</td>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <form action="" method="post" enctype="multipart/form-data">
                <td>
                    <img style="width: 200px; height: 100px" src="../libraries/img/<?=$img_he?>" alt="imagem" class="img-fluid">
                    <input type="file" name="img" class="form-control mt-2">
                    <button type="submit" name="save1" class="btn btn-danger mt-2">salvar imagem</button>
                </td>
                <td>
                    <textarea type="text" name="titulo" class="form-control"><?=$texto_header?></textarea>
                    <button type="submit" name="save2" class="btn btn-danger mt-2">atualizar</button>
                </td>
                </form>
                <?php
                    if (isset($_POST['save1'])){
                        $img = $_FILES['img']['name'];
                        $tmp = $_FILES['img']['tmp_name'];
                        move_uploaded_file($tmp, "../libraries/img/$img");
                        $sql = "update header_page_adv set img='$img'";
                        $query = mysqli_query($conn,$sql);
                        if ($query){
                            echo "<script>alert('Imagem Alterada')</script>";
                            echo "<script>window.open('?pagina_adv','_self')</script>";
                        }
                    }

                    if (isset($_POST['save2'])){
                        $title = $_POST['titulo'];
                        $sql = "update header_page_adv set texto='$title'";
                        $query = mysqli_query($conn,$sql);
                        if ($query){
                            echo "<script>alert('Texto Alterado')</script>";
                            echo "<script>window.open('?pagina_adv','_self')</script>";
                        }
                    }
                ?>
            </tr>
            </tbody>
        </table>
    </div>


<?php } ?>
