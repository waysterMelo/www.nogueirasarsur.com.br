<?php
require_once '../functions/db.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from advogados where id='$id'";
    $query = mysqli_query($conn,$sql);
    if ($query){
        echo "<script>alert('Advogado Excluido')</script>";
        echo "<script>window.open('index.php?advogados', '_self')</script>";
    }
}

?>