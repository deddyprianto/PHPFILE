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

    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.min.css">


</head>


<body>



    <div id="side-nav" class="sidenav">
        <a href="javascript:void(0)" id="side-nav-close">&times;</a>

        <div class="sidenav-content">
            <p>
                Kuncen WB1, Wirobrajan 10010, DIY
            </p>
            <p>
                <span class="fs-16 primary-color">(+68) 120034509</span>
            </p>
            <p>info@yourdomain.com</p>
        </div>
    </div>


    <div id="side-search" class="sidenav">
        <a href="javascript:void(0)" id="side-search-close">&times;</a>
        <div class="sidenav-content">
            <form action="">

                <div class="input-group md-form form-sm form-2 pl-0">
                    <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="input-group-text red lighten-3" id="basic-text1">
                            <i class="fas fa-search text-grey" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

            </form>
        </div>


    </div>




    <div id="canvas-overlay"></div>
    <div class="boxed-page">
        <nav id="navbar-header" class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
                    <img src="img/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="lnr lnr-menu"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex justify-content-between">
                        <li class="nav-item only-desktop">
                            <a class="nav-link" id="side-nav-open" href="#">
                                <span class="lnr lnr-menu"></span>
                            </a>
                        </li>
                        <div class="d-flex flex-lg-row flex-column">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">About</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Menu Special
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">Daging Pangggang Bakar </a>
                                    <a class="dropdown-item" href="">Ayam Bakar</a>
                                </div>
                            </li>
                        </div>
                    </ul>

                    <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="#">
                        <img src="img/logo.png" alt="">
                    </a>
                    <ul class="navbar-nav d-flex justify-content-between">
                        <div class="d-flex flex-lg-row flex-column">
                            <li class="nav-item active">
                                <a class="nav-link" href="">Daftar Menu</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="">Buku Pesan</a>
                            </li>
                        </div>
                        <li class="nav-item">
                            <a id="side-search-open" class="nav-link" href="#">
                                <span class="lnr lnr-magnifier"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero">

            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 hero-left">
                        <h1 class="display-4 mb-5">Selamat Datang Di Website Restourant<br> Deddy Prianto Sihombing </h1>
                        <p class="text-muted">Scrool Kebawah Untuk Melihat Buku Pesanan</p>
                        <div class="mb-2">
                            <a class="btn btn-primary btn-shadow btn-lg" href="#" role="button">Pesan Sekarang</a>

                        </div>

                        <ul class="hero-info list-unstyled d-flex text-center mb-0">
                            <li class="border-right">
                                <span class="lnr lnr-rocket"></span>
                                <h5>
                                    Pemesanan Cepat
                                </h5>
                            </li>
                            <li class="border-right">
                                <span class="lnr lnr-leaf"></span>
                                <h5>
                                    Makanan Siap saji
                                </h5>
                            </li>
                            <li class="">
                                <span class="lnr lnr-bubble"></span>
                                <h5>
                                    24 jam siap melayani
                                </h5>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-6 hero-right">

                        <img src="img/testi-bg.jpg" width="500" height="500" style="border-radius: 20px;">



                    </div>
                </div>
            </div>
        </div>








        <section id="gtco-welcome" class="bg-white section-padding mt-5">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2" style="background-image: url(img/hero-2.jpg);">

                        </div>
                        <div class="col-sm-7 py-5 pl-md-0 pl-4">
                            <div class="heading-section pl-lg-5 ml-md-5">
                                <span class="subheading">
                                    About
                                </span>
                                <h2>
                                    Welcome to Resto
                                </h2>
                            </div>
                            <div class="pl-lg-5 ml-md-5">
                                <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                <h3 class="mt-5">Minuman Spesial Hari ini</h3>
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover" src="img/hero-1.jpg" />
                                            <h6>Coffe Latte Blackmate</h6>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover" src="img/hero-1.jpg" />
                                            <h6>Coffe Latte </h6>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover" src="img/hero-1.jpg" />
                                            <h6>Caupchino</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="gtco-special-dishes" class="bg-grey section-padding">
            <div class="container">
                <div class="section-content">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Special Daging
                        </span>
                        <h2>
                            Daging Sapi bakar Dicampur rendang Gurih
                        </h2>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-5 col-md-6 align-self-center py-5">
                            <h2 class="special-number">01.</h2>
                            <div class="dishes-text">
                                <h3><span>Sapi</span><br> Sapi Bakar & Rendang Kacang kecap </h3>
                                <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt provident libero qui eum, corporis esse quos excepturi soluta?</p>
                                <h3>Rp.40.000</h3>
                                <a href="#" class="btn-primary mt-3">Pesan Sekarang</a>
                            </div>
                        </div>


                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                            <img src="img/steak.jpg" alt="" class="img-fluid shadow w-100">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                            <img src="img/salmon-zucchini.jpg" alt="" class="img-fluid shadow w-100">
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                            <h2 class="special-number">02.</h2>
                            <div class="dishes-text">
                                <h3><span>Ikan Pari</span><br> Ikan Pari Bakar dengan Sauce Kecap dan seledri</h3>
                                <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, accusamus culpa quam amet ipsam odit ea doloremque accusantium quo, itaque possimus eius. In a quis quibusdam omnis atque vero dolores!</p>
                                <h3>Rp.100.000</h3>
                                <a href="#" class="btn-primary mt-3">Pesan Sekarang <span><i class="fa fa-long-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section id="gtco-menu" class="section-padding">
            <div class="container">
                <div class="section-content">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="heading-section text-center">
                                <span class="subheading">
                                    Daftar Menu
                                </span>
                                <h2>
                                    Menu Makanan Resto DeFood
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 menu-wrap">
                            <div class="heading-menu">
                                <h3 class="text-center mb-5 text-muted">Aneka Telur</h3>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Telur Dadar</h4>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-muted menu-price">Rp.10.000</h5>
                                        </div>
                                    </div>
                                    <p>Telur Dadar</p>
                                </div>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Telur Gulung</h4>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-muted menu-price">Rp14.500</h5>
                                        </div>
                                    </div>
                                    <p>Telur Gulung</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 menu-wrap">
                            <div class="heading-menu">
                                <h3 class="text-center mb-5 text-muted">Pizza & Burger</h3>
                            </div>

                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/4.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Burger King Complete</h4>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-muted menu-price">Rp27.000</h5>
                                        </div>
                                    </div>
                                    <p>Burger King Complete</p>
                                </div>
                            </div>

                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/1.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Pizza Super Besar</h4>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-muted menu-price">Rp.40.000</h5>
                                        </div>
                                    </div>
                                    <p>Pizza Super Besar</p>
                                </div>
                            </div>


                        </div>

                        <div class="col-lg-4 menu-wrap">
                            <div class="heading-menu">
                                <h3 class="text-center text-muted mb-5">Aneka Minuman</h3>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/2.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Juice Buah</h4>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="text-muted menu-price">Rp.12.000</h5>
                                        </div>
                                    </div>
                                    <p>Es Juice Buah</p>
                                </div>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/3.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Teh Poci</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">Rp17.000</h4>
                                        </div>
                                    </div>
                                    <p>Teh Poci Dingin</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section style="background-image: url(img/bg.jpg); background-size: cover;">
            <div class="container">

                <h3 class="text-white mb-4 p-5 text-center  ">List Tambah Edit Hapus & Cari Pemesanan Makanan</h3>



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

                            <form method="post" name="contact-us" action="prosestambah.php">
                                <div class="row">


                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="name" name="nama" placeholder="Nama Makanan">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="email" name="jenis" placeholder="Jenis Makanan">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="phoneNumber" name="telp" placeholder="No HP / WhatsApp">
                                    </div>




                                    <div class="col-md-12 form-group">
                                        <select class="form-control" id="selectPerson" name="pesan">
                                            <option>Berapa Pemesanan</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" id="message" name="saran" rows="6" placeholder="Deskripsi"></textarea>
                                    </div>


                                    <div class="col-md-12 text-center">

                                        <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Tambah Pesanan</button>
                                    </div>
                                </div>


                            </form>

                        </div>
                    </div>


                    <div class="col-lg-7">

                        <form action="prosescari.php" method="post">
                            <div class="input-group mb-3">
                                <input type="text" autocomplete="off" name="keyword" class="form-control bg-light border-0 small" placeholder="Cari Nama Makanan">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit" name="cari">
                                        Cari
                                    </button>
                                </div>
                            </div>
                        </form>

                        <table class="table table-striped text-white" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="bg-dark">
                                    <th>Nama Makanan</th>
                                    <th>Jenis Makanan</th>
                                    <th>No HandPhone</th>
                                    <th>Jumlah Pemesanan</th>
                                    <th>Deskripsi Makanan</th>
                                    <th>Menu Opsi</th>
                                </tr>
                            </thead>


                            <?php


                            $query = mysqli_query($conn, "SELECT * FROM jual");


                            while ($r = mysqli_fetch_array($query)) :
                                ?>


                                <tbody>
                                    <tr>
                                        <td><?= $r['nama']; ?></td>
                                        <td><?= $r['jenis']; ?></td>
                                        <td><?= $r['telp']; ?></td>
                                        <td><?= $r['pesan']; ?></td>
                                        <td><?= $r['saran']; ?></td>
                                        <td>

                                            <a href="proseshapus.php?id=<?= $r['id']; ?>" class="badge badge-danger btn-block" onclick="return confirm('Yakin Akan Dihapus???')">Hapus</a>
                                            <a href="edit.php?id=<?= $r['id']; ?>" class="badge badge-info btn-block">Edit</a>

                                        </td>
                                    </tr>

                                </tbody>





                            <?php endwhile; ?>


                        </table>

                    </div>



                </div>

            </div>
        </section>






















        <!-- End of Reservation Section -->





        <footer class="mastfoot pb-5 bg-white section-padding pb-0">
            <div class="inner container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-widget pr-lg-5 pr-0">
                            <img src="img/logo.png" class="img-fluid footer-logo mb-3" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni, et voluptatum dolorem.</p>
                            <nav class="nav nav-mastfoot justify-content-start">
                                <a class="nav-link" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="nav-link" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="nav-link" href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </nav>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="footer-widget px-lg-5 px-0">
                            <h4>Buka Pada Jam</h4>
                            <ul class="list-unstyled open-hours">
                                <li class="d-flex justify-content-between"><span>Senin</span><span>9:00 - 24:00</span></li>
                                <li class="d-flex justify-content-between"><span>Selasa</span><span>9:00 - 24:00</span></li>
                                <li class="d-flex justify-content-between"><span>Rabu</span><span>9:00 - 24:00</span></li>
                                <li class="d-flex justify-content-between"><span>Kamis</span><span>9:00 - 24:00</span></li>
                                <li class="d-flex justify-content-between"><span>Jumat</span><span>9:00 - 02:00</span></li>
                                <li class="d-flex justify-content-between"><span>Sabtu</span><span>9:00 - 02:00</span></li>
                                <li class="d-flex justify-content-between"><span>minggu</span><span> Closed</span></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="footer-widget pl-lg-5 pl-0">
                            <h4>Kasih Masukan/Saran Tentang Masakan Kami</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <form id="newsletter">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="emailNewsletter" aria-describedby="emailNewsletter" placeholder="Enter email">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-12 d-flex align-items-center">
                        <p class="mx-auto text-center mb-0">Copyright 2019. All Right Reserved. Design by <a href="">Deddy Prianto Sihombing</a></p>
                    </div>

                </div>
            </div>
        </footer>

    </div>
    </div>

    <!-- External JS -->
    <script src="vendor/bootstrap/bootstrap.min.js"></script>

    <!-- Main JS -->
    <script src="js/app.min.js "></script>


</body>

</html>