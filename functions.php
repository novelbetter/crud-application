<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "arkademy");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
return $rows;
}
// Create
function add($data) {
    global $conn;
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $harga = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $query = "INSERT INTO produk 
             VALUES
             ('', '$nama_produk', '$keterangan', '$harga', '$jumlah')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// Delete
function delete($id) {
    global $conn;
    // // ambil id
    // $id = $_GET["id"];
    mysqli_query($conn, "DELETE FROM produk WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// Update
function update($data) {
    global $conn;
    $id = ($data["id"]);
    $nama = htmlspecialchars($data["nama_produk"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $harga = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $query = "UPDATE produk SET
             nama_produk = '$nama',
             keterangan = '',
             harga = '$harga',
             jumlah = '$jumlah'
             WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>