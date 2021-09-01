<?php


require_once 'koneksi.php';

$keyword = $_POST['keyword'];


?>



<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Restourant Deddy</title>
   <meta name="description" content="Resto Deddy">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.min.css">


</head>


<body>
   <section style="background-image: url(img/bggg.jpg); background-size: cover;">
      <div class="container">

         <h3 class="text-white  p-5 text-center  ">Hasil Pencarian Pemesanan Makanan</h3>



         <div class="row justify-content-center">



            <div class="col-lg-7">

               <a href="index.php" class="btn btn-success btn-block">Kembali Ke Home</a>

               <table class="table table-striped text-white mt-3" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr class="bg-dark">
                        <th>Nama Makanan</th>
                        <th>Jenis Makanan</th>
                        <th>No HandPhone</th>
                        <th>Jumlah Pemesanan</th>
                        <th>Deskripsi Makanan</th>
                     </tr>
                  </thead>


                  <?php


                  $query = mysqli_query($conn, "SELECT * FROM jual WHERE nama LIKE'%$keyword%'");


                  while ($r = mysqli_fetch_array($query)) :
                     ?>

                     <tbody>
                        <tr>
                           <td class="text-white font-weight-bold"><?= $r['nama']; ?></td>
                           <td class="text-white font-weight-bold"><?= $r['jenis']; ?></td>
                           <td class="text-white font-weight-bold"><?= $r['telp']; ?></td>
                           <td class="text-white font-weight-bold"><?= $r['pesan']; ?></td>
                           <td class="text-white font-weight-bold"><?= $r['saran']; ?></td>

                        </tr>

                     </tbody>





                  <?php endwhile; ?>


               </table>

            </div>



         </div>

      </div>
   </section>

   <!-- External JS -->
   <script src="vendor/bootstrap/bootstrap.min.js"></script>

   <!-- Main JS -->
   <script src="js/app.min.js "></script>


</body>

</html>