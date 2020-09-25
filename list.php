<?php 
require 'functions.php';

$produk = query("SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar List Produk</title>
    <link rel="stylesheet" href="css/list.css" type="text/css">
</head>
<body>
    <header>
        <h1>Daftar List Produk</h1>
    </header>
<div class="container">
    <a href="add.php">[+] Tambah Item</a>
    <br>
    <a href="index.php">&laquo; Back to Home</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Keterangan</th>

    </tr>
<?php $i = 1; ?>
<?php foreach($produk as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["nama_produk"]; ?></td>
        <td><?= $row["harga"]; ?></td>
        <td><?= $row["jumlah"]; ?></td>
        <!-- <td><?= $row["keterangan"]; ?></td> -->
        <td>
            <a href="edit.php?id=<?= $row["id"]; ?>">Edit</a>  | 
            <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Hapus produk?');">Delete</a>
        </td>
    </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</div>
</body>
</html>