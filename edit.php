<?php

require_once 'koneksi.php';



?>




<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Restourant Deddy</title>
   <meta name="description" content="Resto Deddy">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- External CSS -->
   <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">

   <link rel="stylesheet" href="css/style.min.css">


</head>


<body>


   <h3 class="text-muted mt-5 mb-5 text-center  ">Form Edit Pemesanan Makanan</h3>
   <!-- Reservation Section -->
   <section style="background-image: url(img/bgg.jpg); background-size: cover;">
      <div class="container">
         <div class="row">
            <div class="col-lg-5">

               <div class="section-content bg-white p-5 shadow">
                  <div class="heading-section text-center">
                     <span class="subheading">
                        Buku Pemesanan
                     </span>
                     <h2>
                        Pesan Sekarang
                     </h2>
                  </div>


                  <!-- FORM PEMESANAN MAKAANAN -->


                  <?php

                  $id = $_GET['id'];

                  $hasil = mysqli_query($conn, "SELECT * FROM jual WHERE id = '$id'");

                  if (mysqli_num_rows($hasil) == 0) {
                     echo '<tr><td colspan="6"><center>Data Kosong!!!</center></td></tr>';
                  } else {
                     while ($data = mysqli_fetch_array($hasil)) {


                        ?>

                        <form method="post" name="contact-us" action="prosesedit.php">
                           <div class="row">


                              <input type="hidden" name="id" value="<?= $data['id']; ?>">

                              <div class="col-md-12 form-group">
                                 <input type="text" class="form-control" name="nama" placeholder="Nama Makanan" value="<?= $data['nama']; ?>">
                              </div>
                              <div class="col-md-12 form-group">
                                 <input type="text" class="form-control" name="jenis" value="<?= $data['jenis']; ?>" placeholder="Jenis Makanan">
                              </div>
                              <div class="col-md-12 form-group">
                                 <input type="text" value="<?= $data['telp']; ?>" class="form-control" name="telp" placeholder="No HP / WhatsApp">
                              </div>




                              <div class="col-md-12 form-group">

                                 <select class="form-control" name="pesan">
                                    <option value="<?= $data['pesan']; ?>"><?= $data['pesan']; ?></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                 </select>

                              </div>

                              <div class="col-md-12 form-group">
                                 <input type="text" value="<?= $data['saran']; ?>" class="form-control" name="saran" placeholder="Saran">
                              </div>


                              <div class="col-md-12 text-center">

                                 <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Ubah Pesanan</button>
                              </div>
                           </div>


                        </form>


                  <?php }
                  } ?>

                  <a href="index.php" class="btn btn-success mt-2" style="margin-left: 100px; border-radius: 20px;">Kembali Ke Home</a>


               </div>
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