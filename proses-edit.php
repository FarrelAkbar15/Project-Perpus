<?php

include("config.php");

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $title = $_POST['judul'];
    $category = $_POST['kategori'];
    $isbn_number = $_POST['isbn'];
    $author = $_POST['pengarang'];
    $publisher = $_POST['penerbit'];
    $publication_year = $_POST['tahun'];

    $sql = "UPDATE buku SET judul='$title', kategori='$category', isbn='$isbn_number', pengarang='$author', penerbit='$publisher', tahun='$publication_year' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-buku.php');
        exit();
    } else {
        die("Gagal memperbarui data...");
    }
} else {
    die("Gagal mengakses situs...");
}
?>