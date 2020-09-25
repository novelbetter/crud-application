# Membuat CRUD (Create, Read, Update, Delete) dengan PHP & mySQL
<p>CRUD adalah singkatan dari create, read, update, dan delete yang merupakan dasar manipulasi data dalam database.</p>
<p>Create: membuat sebuah data baru untuk dimasukkan dalam database.<br> Read: menampilkan/membaca data yang ada didalam database.<br> Update: mengedit/memberikan pembaruan pada sebuah data lalu menggantinya dengan data yang baru.<br> Delete: menghapus data dari database.</p>

<p>Berikut preview repository arkademy</p>
<h3>Welcome Page</h3>
<p>Repository ini merupakan database pengelolaan list produk yang sebagian besar dibuat dengan menggunakan PHP, mySQL, HTML, sedikit CSS dan JavaScript.
Pada halaman awal, tampilan yang akan muncul berupa Welcome Page sederhana dimana terdapat option untuk langsung menambahkan list produk baru atau melihat list produk yang telah ada sebelumnya.</p>

![welcome-page](https://user-images.githubusercontent.com/68772101/94268964-2c1cfb80-ff68-11ea-8872-a783ea4413d8.png)

<h3>Add Product</h3>
<p>Pada option 'Tambah Produk Baru', halaman akan langsung diarahkan untuk mengisi input data berupa nama produk, harga, dan jumlah barang. Pastikan untuk menambahkan simbol mata uang di depan harga agar orang lain tau dalam mata uang apa anda menjual barang. Kemudian input secara otomatis akan dimasukkan kedalam database saat tombol 'Add to List' diklik, <em>Horay,</em> kita telah melakukan <em>create!</em>.<br> Jika memilih cancel maka akan diarahkan langsung ke halaman daftar list.</p>

![add-product](https://user-images.githubusercontent.com/68772101/94268989-350dcd00-ff68-11ea-8303-9f86d77a7454.png)

<h3>List Product</h3>
<p>Sedangkan pada option 'Daftar List', halaman akan menampilkan seluruh data produk yang telah dibuat di database, disinilah yang dinamakan <em>read</em>. Pada bagian pojok kiri atas terdapat opsi untuk menambahkan data produk baru atau kembali ke halaman awal. Pada bagian keterangan dalam tabel list produk terdapat 2 buah opsi lain untuk mengubah/mengedit data atau menghapusnya.</p>

![list-product](https://user-images.githubusercontent.com/68772101/94272777-bc117400-ff6d-11ea-9caf-d1ff10c06251.png)

<h3>Edit Product</h3>
<p>Opsi 'Edit' akan mengarahkan ke halaman lain untuk mengedit produk, yang diinputkan sama dengan menambah produk baru, namun dalam mengupdate database kita cukup mengubah bagian yang ingin diperbarui, atau pun bisa semuanya. Saat tombol 'Update' diklik, tabel dalam databse akan menggantinya dengan data terakhir yang disimpan.</p>

![edit-product](https://user-images.githubusercontent.com/68772101/94268985-33dca000-ff68-11ea-901e-7e90444aef43.png)

<h3>Delete Alert!</h3>
<p>Lalu 'Delete' akan menghapus list sebuah produk dalam tabel maupun database, namun ketika diklik terdapat peringatan untuk mengonfirmasi perintah penghapusan data, sehingga apabila opsi delete tidak sengaja diklik, data tidak akan langsung terhapus.</p>

![alert-delete-product](https://user-images.githubusercontent.com/68772101/94268992-35a66380-ff68-11ea-9d2a-3205326ba813.png)

<p>Dan itulah beberapa penjelasan singkat tentang aplikasi program CRUD sederhana menggunakan php dan mySQL</p>
