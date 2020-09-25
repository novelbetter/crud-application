<?php 
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// query data produk berdasarkan id
$item = query("SELECT * FROM produk WHERE id = $id")[0];  //-> Index array id

// cek apakah tombol submit sudah ditekan
if(isset($_POST["submit"])) {
    if(update($_POST) > 0) {
    echo "
      <script>
        alert('Produk telah diubah');
        document.location.href = 'list.php';
      </script>";
    } else {
    echo "
      <script>
        alert('Produk gagal diubah');
        document.location.href = 'list.php';
      </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="css/add.css" type="text/css">
</head>
<body>
<header>
  <h1>Edit Produk</h1>
</header>

<div class="container">
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $item["id"]; ?>">
    <ul>
        <li>
            <label for="nama">Nama Produk :</label><br>
            <input type="text" name="nama_produk" id="nama" required value="<?= $item["nama_produk"]; ?>">
        </li>
        <li>
            <label for="harga">Harga :</label><br>
            <input type="text" name="harga" id="harga" required value="<?= $item["harga"]; ?>">
        </li>
        <li>
            <label for="jumlah">Jumlah :</label><br>
            <input type="number" name="jumlah" id="jumlah" value="<?= $item["jumlah"]; ?>">
        </li>
        <li>
            <button type="submit" name="submit">Update</button>
        </li>
        <li>
            <a href="list.php">Cancel</a>
        </li>
    </ul>
</form>
</div> 
</body>
</html>