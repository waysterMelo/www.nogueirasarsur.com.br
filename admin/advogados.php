<?php
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {

    echo "<script>alert('Voce precisa logar para acessar')</script>";
    header("Location:../admin/login.php");
    exit();
}else {
?>
<h1 class="text-white text-uppercase py-5">advogados</h1>
<div class="table-responsive">
    <table class="table table-light">
        <thead>
        <tr>
            <td>#</td>
            <td>Advogados</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql= "select * from advogados";
        $query = mysqli_query($conn, $sql);
        while ($rs = mysqli_fetch_array($query)){
            $id = $rs['id'];
            $nome = $rs['nome'];

            echo "
             <tr>
            <td>$id</td>
            <td>$nome</td>
            <td><a class='text-info' href='editar_adv.php?id=$id'><i class=\"fas fa-edit\"></i></a></td>
            <td><a class='text-danger' href='exluir_adv.php?id=$id'><i class='fas fa-eraser'></i></a></td>
            </tr>
            ";
        }
        ?>

        </tbody>
    </table>
</div>

<?php } ?>