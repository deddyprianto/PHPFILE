<?php

require_once 'koneksi.php';

$id      = $_POST['id'];
$nama    = $_POST['nama'];
$jenis   = $_POST['jenis'];
$telp    = $_POST['telp'];
$pesan   = $_POST['pesan'];
$saran   = $_POST['saran'];

$update = mysqli_query($conn, "UPDATE jual SET  nama = '$nama' , jenis = '$jenis' , telp = '$telp' , pesan = '$pesan' , saran = '$saran' WHERE id = '$id' ");

if ($update) {
   echo "<script>alert('Menu Makanan Berhasil DiUbah');
   document.location.href='index.php';
   </script>";
} else {
   echo "<script>alert('Data Gagal Diedit , tabel berelasi');
   document.location.href='index.php';
   '</script>";
}
