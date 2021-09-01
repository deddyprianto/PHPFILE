<?php


require_once 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM jual WHERE id = '$id' ";

$hapus = mysqli_query($conn, $query);

if (isset($hapus) > 0) {
   echo "
   <script>
   alert('Menu Makanan Berhasil Dihapus');
   document.location.href='index.php';
   </script>";
} else {
   echo "
   <script>
   alert('Data Gagal Dihapus')
   document.location.href='index.php'
   </script>";
}
