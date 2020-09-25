<?php 
require 'functions.php';

// cek apakah tombol submit sudah ditekan
if(isset($_POST["submit"])) {
    if(add($_POST) > 0) {
    echo "
      <script>
        alert('Produk baru ditambahkan!');
        document.location.href = 'list.php';
      </script>";
    } else {
        echo "
      <script>
        alert('Produk gagal ditambahkan!');
        // document.location.href = 'index.php';
      </script>";}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="css/add.css" type="text/css">
</head>
<body>
<header>
    <h1>Tambah Produk Baru</h1>
</header>
<div class="container">
<form action="" method="post">
    <ul>
        <li>
            <label for="nama">Nama Produk :</label><br>
            <input type="text" name="nama_produk" id="nama" required>
        </li>
        <li>
            <label for="harga">Harga :</label><br>
            <input type="text" name="harga" id="harga" required>
        </li>
        <li>
            <label for="jumlah">Jumlah :</label><br>
            <input type="number" name="jumlah" id="jumlah">
        </li>
        <li>
            <button type="submit" name="submit">Add to List</button>
        </li>
        <li>
            <a href="list.php">Cancel</a>
        </li>
    </ul>
</form>
</div> 
</body>
</html>