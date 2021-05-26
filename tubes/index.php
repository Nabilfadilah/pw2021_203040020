<?php
// menghubungkan dengan file lainya
require 'php/functions.php';

// melakukan query
$tabel_product = query("SELECT * FROM tabel_product")

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- import css from materialize -->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection">

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>203040020</title>

</head>

<body bgcolor="white" id="home" class="scrollspy">

    <!-- navbar -->
    <div class="navbar-fixed">
        <nav class="grey darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#home" class="brand-logo right">Zibantek Shoes</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="left hide-on-med-and-down">
                        <li><a href="#Buy Now">Buy Now</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="php/login.php">Log In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="php/login.php">Sign In</a></li>
        <li><a href="#Buy Now">Buy Now</a></li>
        <li><a href="#services">Services</a></li>
    </ul>

    <!-- slider -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="assets/slider/slider.jpg">
                <div class="caption center-align">
                    <h2>Selamat Datang</h2>
                    <h5 class="light white-text text-lighten-3"><b>Kepuasan pelanggan Adalah Suatu Keutamaan</b></h5>
                </div>
            </li>
            <li>
                <img src="assets/slider/slider1.jpg" alt="">
                <div class="caption center-align">
                    <h3>Converse</h3>
                    <h5 class="light black-text text-lighten-3"></h5>
                </div>
            </li>
            <li>
                <img src="assets/slider/slider2.jpg" alt="">
                <div class="caption center-align">
                    <h3>Diadora</h3>
                    <h5 class="light black-text text-lighten-3"></h5>
                </div>
            </li>
            <li>
                <img src="assets/slider/slider3.jpg" alt="">
                <div class="caption center-align">
                    <h3>Vans</h3>
                    <h5 class="light black-text text-lighten-3"></h5>
                </div>
            </li>
        </ul>
    </div>

    <!-- services -->
    <section id="services" class="services grey lighten-3 scrollspy">
        <div class="container services">
            <div class="row">
                <h3 class="light center black-text text-accent-2"><b>Our Services</b></h3>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">check</i>
                        <h5>Original</h5>
                        <p>Kami memastikan barang yang kami jual 100% asli, jika tidak asli maka uang 100% kembali.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">redeem</i>
                        <h5>Pengemasan</h5>
                        <p>packing barang sesuai dengan standar pengemasan produk, terdiri dari kardus dan plastik toko.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">insert_invitation</i>
                        <h5>Pengiriman</h5>
                        <p>Kami akan memproses pesanan dihari anda memesan dan mengririm dihari yang sama atau kesesokan harinya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- card -->
    <h3 class="light center black-text text-brown darken-4"><b>Daftar Produk</b></h3><br>
    <div class="row">
        <?php if (empty($tabel_product)) : ?>
            <h1>Data tidak ditemukan</h1>
        <?php else : ?>
            <?php foreach ($tabel_product as $tp) : ?>
                <div class="col s12 m2">
                    <div class="card">
                        <div class="card-image">
                            <img src="assets/img/<?= $tp["img"] ?>" class="responsive-img materialboxed">
                            <p class="foto">
                        </div>
                        </p>
                        <div class="card-action black">
                            <a href="php/detail.php?id=<?= $tp['id'] ?>">
                                <?= $tp["nama"] ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- Buy Now -->
    <section id="Buy Now" class="parallax-container scrollspy">
        <div class="parallax"><img src="assets/slider/buy.jpg"></div>
        <div class="parallax-container scrollspy">
            <div class="parallax"><img src=""></div>
            <h3 class="light black-text text-darken-2 center"><b>Buy Now</b></h3>
            <div class="container Buy Now">
                <div class="row">
                    <form>
                        <div class="col  m6 s9">
                            <div class="card-panel">
                                <h5>Payment Form</h5>
                                <div class="input-field">
                                    <input type="text" name="name" id="name" required class="validate">
                                    <label for="name">Name</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="email" id="email" required class="validate">
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="phone" id="phone" required class="validate">
                                    <label for="phone">Phone</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="adress" id="adress" required class="validate">
                                    <label for="adress">Address</label>
                                </div>
                                <label for="payment">Payment Method</label>
                                <select class="browser-default">
                                    <div class="input-field col s6">
                                    </div>
                                    <option value="" disabled selected>Payment Method</option>
                                    <option value="1">Debit</option>
                                    <option value="2">Credit Card</option>
                                </select>
                            </div>
                        </div>
                    </form>

                    <form>
                        <div class="col m6 s9">
                            <div class="card-panel">
                                <h5>Ordered Product</h5>
                                <div class="input-field">
                                    <input type="text" name="nama produk" id="nama produk" required class="validate">
                                    <label for="nama produk">Nama Produk</label>
                                </div>
                                <div class="input-field">
                                    <label for="ukuran"></label>
                                    <select class="browser-default" name="Ukuran" id="ukuran" required class="active">
                                        <option value="" disabled selected>------Pilih Ukuran-----</option>
                                        <option value="All Size">All Size</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                    </select>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="item" id="item" required class="validate" autocomplete="off">
                                    <label for="item" class="active">Jumlah Item</label>
                                </div>
                            </div>
                        </div>
                        <div style="text-align: center">
                            <button type="submit" class="btn grey darken-4">Buy</button>
                        </div>
                </div>
                </form>
                <div class="col m5 s12">
                    <div class="card-panel grey darken-4 center white-text">
                        <i class="material-icons">phone_in_talk</i>
                        <h5>Contact</h5>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header">
                            <h4>Office</h4>
                        </li>
                        <li class="collection-item">Zibantek Shoes</li>
                        <li class="collection-item">085-23-445-5452</li>
                        <li class="collection-item">@Zibantek_Shoes77</li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- addres -->
    <div class="tm-container-inner-2 tm-map-section">
        <div class="row">
            <h3 class="light black-text text-darken-2 center"><b>Address</b></h3>
            <div class="col-12">
                <div class="tm-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8110889938143!2d107.61482391459265!3d-6.913177095004855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63392af5681%3A0x6ffdbde1e1fed928!2sJl.%20Sumbawa%2011%2C%20Merdeka%2C%20Kec.%20Sumur%20Bandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040113!5e0!3m2!1sid!2sid!4v1617866380347!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="grey darken-4 white-text center">
        <p>Zibantek Shoes. @copyright 2021</p>
    </footer>







    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);


        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 630,
            transition: 600,
            interval: 3000
        });


        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);


        const materialbox = document.querySelectorAll('.materialboxed');
        M.materialbox.init(materialbox);


        const scrollspy = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrollOffset: 50
        });
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, options);
        });
    </script>



</body>

</html>