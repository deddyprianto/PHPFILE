<?php

require_once 'koneksi.php';

$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$telp = $_POST['telp'];
$pesan = $_POST['pesan'];
$saran = $_POST['saran'];

$result = mysqli_query($conn, "INSERT INTO jual(nama,jenis,telp,pesan,saran) VALUES('$nama' , '$jenis' , '$telp' , '$pesan' , '$saran' )");

if (isset($result) > 0) {
    echo "<script>alert('Menu Makanan Berhasil Ditambah ');
    document.location.href='index.php';
    </script>";
} else {

    echo "<script>alert('Data Gagal Ditambah ');
    document.location.href='index.php';
    </script>";
}
