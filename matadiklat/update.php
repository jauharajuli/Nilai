<?php
if(isset($_POST['update'])){
    include_once "koneksi.php";
    $id           = $_POST['id'];
    $mata_diklat = $_POST['mata_diklat'];
    $sks    = $_POST['sks'];

    $sql= "UPDATE matadiklat SET mata_diklat='$mata_diklat', sks='$sks' WHERE id= '$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location: index.php?m=matadiklat');
    } else {
        include 'index.php?m=matadiklat';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal ditambahkan")';
        echo '<script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}