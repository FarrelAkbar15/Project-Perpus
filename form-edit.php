<?php
include("config.php");

if (!isset($_GET['id'])) {
    header('Location: list-buku.php');
    exit();
}

$id = $_GET['id'];

// // Sanitize the input to prevent SQL injection
// $id = mysqli_real_escape_string($db, $id);

$sql = "SELECT * FROM buku WHERE id=$id";
$query = mysqli_query($db, $sql);
$buku = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Tidak berhasil menemukan data...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Buku Baru</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: #6665ee;
        }
        .form-label{
            color: #ffffff;     
        }
        .text-center{
            color: #ffffff;
        }

        .btn-primary {
            background-color: #6CB2FF;
            border-color: #6CB2FF;
            margin-right: 30px;
        }

        .btn-primary:hover {
            background-color: #6CB2FF;
            border-color: #6CB2FF;
        }

        .form-control {
            background-color: #FCE4EC;
        }

       
    </style>
</head>
<body>
    <header>
        <h1 class="text-center">Formulir Edit Buku</h1>
    </header>
    <div class="container">
        <form action="proses-edit.php" method="post">
            <fieldset>
                <input type="hidden" name="id" value="<?php echo $buku['id']; ?>">
                <div class="mb-3">
                    <label for="judul" class="form-label mt-3">Judul Buku</label>
                    <input type="text" name="judul" class="form-control" placeholder="Judul buku..." value=" <?php echo $buku['judul']; ?>">
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label mt-3">Kategori Buku</label>
                    <input type="text" name="kategori" class="form-control" placeholder="Kategori buku..." value=" <?php echo $buku['kategori']; ?>">
                </div>
                <div class="mb-3">
                    <label for="isbn" class="form-label mt-3">No. ISBN Buku</label>
                    <input type="text" name="isbn" class="form-control" placeholder="No. ISBN buku..." value=" <?php echo $buku['isbn']; ?>">
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label mt-3">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" placeholder="Pengarang buku..." value=" <?php echo $buku['pengarang']; ?>">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label mt-3">Penerbit Buku</label>
                    <input type="text" name="penerbit" class="form-control" placeholder="Penerbit buku..." value=" <?php echo $buku['penerbit']; ?>">
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label mt-3">Tahun Terbit</label>
                    <input type="text" name="tahun" class="form-control" placeholder="Tahun terbit buku..." value=" <?php echo $buku['tahun']; ?>">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    <a href="list-buku.php" class="btn btn-primary">Kembali ke List Buku</a>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>