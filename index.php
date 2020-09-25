<?php 
require 'functions.php';
$produk = query("SELECT * FROM produk");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div class="container">
    <header>
        <h1>Welcome Admin!</h1>
        <h2>Clothing Store</h2>
    </header>

    <a href="add.php">Tambah Produk Baru</a>
    <a href="list.php">Daftar List Produk</a>

</div>

</body>
</html>