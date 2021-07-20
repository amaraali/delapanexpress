<link href="<?= base_url('assets/'); ?>/css/theme.css" rel="stylesheet" />

</head>


<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-2" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container">
                <a class="navbar-brand" href="#"><img class="img-fluid" src="<?= base_url('assets/'); ?>/img/icons/yuki.png" alt="" width="50" height="50" />DEX</a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto ms-lg-4 ms-xl-7 border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
                        <li class="nav-item"><a class="nav-link fw-bold active" aria-current="page" href="#">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link fw-medium" href="#layanan">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link fw-medium" href="#inpo">Inpo</a></li>
                        <li class="nav-item"><a class="nav-link fw-medium" href="#ulasan">Ulas Kami</a></li>
                    </ul>
                    <form class="d-flex py-3 py-lg-0">
                        <a class="btn btn-light rounded-pill shadow fw-bold" href="<?= base_url(); ?>autentifikasi">Login</a>
                    </form>
                </div>
            </div>
        </nav>


        <!-- ============================================-->
        <!-- <BERANDA> begin ============================-->
        <div class="cekbarang" id="beranda">
            <section class="py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-lg-7 order-md-1 pt-8"><img class="img-fluid" src="<?= base_url('assets/'); ?>/img/illustrations/waw.svg" alt="" /></div>
                        <div class="col-md-7 col-lg-5 text-center text-md-start pt-5 pt-md-9">
                            <h1 class="mb-4 display-2 fw-bold">Delapan <br class="d-block d-lg-none d-xl-block" />Express</h1>
                            <p class="mt-3 mb-4">Percayakan barangmu pada kami, niscaya akan sampai tepat waktu dengan aman tentram terkendali.</p><a class="btn btn-lg btn-info rounded-pill" href="#cekbarang" role="button">Cek Barang</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- <BERANDA> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <CEK BARANG> begin ============================-->
        <div class="cekbarang" id="cekbarang">
            <section class="py-4">

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-3 bg-soft-danger rounded-3">
                                <div class="row g-0 align-items-center">
                                    <div class="col-md-5 col-lg-6 text-md-center"><img class="img-fluid" src="<?= base_url('assets/'); ?>/img/illustrations/wew.svg" alt="" /></div>
                                    <div class="col-md-7 col-lg-6 px-md-2 px-xl-6 text-center text-md-start">
                                        <div class="card-body px-4 py-5 p-lg-3 p-md-4">
                                            <h1 class="mb-4 fw-bold">Cek paketmu di sini kawan!</h1>
                                            <p class="card-text">Untuk dapat melihat status paket, <br class="d-none d-xxl-block" />kamu bisa memasukan id paket.</p>
                                            <form class="need-validation" action="" method="post">
                                                <div class="form-floating mb-2">
                                                    <input type="text" class="form-control rounded-pill shadow" id="floatingInput" placeholder=" " name="keyword">
                                                    <label for="floatingInput">ID Paket</label>
                                                </div>
                                                <button class="btn btn-light rounded-pill shadow fw-bold " type="submit" href="#cekbarang">Cari</button>
                                            </form>
                                        </div>
                                    </div>
                                    <?php if (!empty($_POST["keyword"])) { ?>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">ID Pengiriman</th>
                                                        <th scope="col">Tanggal</th>
                                                        <th scope="col">Kurir</th>
                                                        <th scope="col">Penerima</th>
                                                        <th scope="col">Keterangan</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($data_pengiriman as $p) { ?>
                                                        <tr>
                                                            <td><?= $p['id_pengiriman']; ?></td>
                                                            <td><?= $p['tanggal']; ?></td>
                                                            <td><?= $p['nama_kurir']; ?></td>
                                                            <td><?= $p['penerima']; ?></td>
                                                            <td><?= $p['keterangan']; ?></td>
                                                            <td class="text-success"><b><?= $p['status']; ?></b></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
        </div>
        <!-- <CEK BARANG> close ============================-->
        <!-- ============================================-->

        <!-- <LAYANAN> begin ============================-->
        <!-- ============================================-->
        <div class="layanan" id="layanan">
            <section class="py-4">

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-3 bg-soft-info rounded-3">
                                <div class="row g-0 align-items-center">

                                    <div class="col-md-7 col-lg-6 px-md-2 px-xl-6 text-center text-md-start">
                                        <div class="card-body px-4 py-5 p-lg-3 p-md-4">
                                            <h1 class="mb-4 fw-bold">Daftar Layanan</h1>
                                            <p class="card-text">Berikut ini merupakan daftar layanan<br class="d-none d-xxl-block" /> Delapan Express yang tersedia</p>
                                        </div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Layanan</th>
                                                    <th scope="col">Proses</th>
                                                    <th scope="col">Harga</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $a = 1;
                                                foreach ($layanan as $l) { ?>
                                                    <tr>
                                                        <th scope="row"><?= $a++; ?></th>
                                                        <td><?= $l['layanan']; ?></td>
                                                        <td><?= $l['proses']; ?></td>
                                                        <td>Rp. <?= $l['harga']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-5 col-lg-5 text-md-center"><img class="img-fluid" src="<?= base_url('assets/'); ?>/img/illustrations/cekbarang.svg" alt="" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
        </div>
        <!-- <LAYANAN> close ============================-->
        <!-- ============================================-->

        <!-- <INPO> begin ============================-->
        <!-- ============================================-->
        <div class="inpo" id="inpo">
            <section class="py-6">
                <div class="container-lg">
                    <div class="row flex-center mb-5">
                        <div class="col-auto text-center my-4">
                            <h1 class="mb-4 fw-bold">Inpo Kopi Gratis</h1>
                            <p>Perhatikan beberapa informasi penting mengenai paket yang <br> akan dikirim agar dapat sesuai dengan prosedur dan layanan yang kami sediakan</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card px-5 px-md-3 py-lg-5">
                                <div class="row flex-center">
                                    <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(<?= base_url('assets/'); ?>/img/illustrations/feature-bg-1.png);background-position:center;background-size:contain;">
                                    </div>
                                    <!--/.bg-holder-->

                                    <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(<?= base_url('assets/'); ?>/img/illustrations/feature-bg-1.png);background-position:center;background-size:cover;">
                                    </div>
                                    <!--/.bg-holder-->

                                    <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="<?= base_url('assets/'); ?>/img/illustrations/feature-search.png" alt="" /></div>
                                    <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                                        <div class="card-body px-0">
                                            <h4 class="card-title pt-md-5">Informasi ukuran paket</h4>
                                            <li>Ukuran paket harus lebih besar <br> dari label resi (24 cm x 15 cm)</li>
                                            <li>Paket kurang dari 1 kg yang ukurannya melebihi 40 cm x 25 cm dikenakan biaya tambahan</li>
                                            <li>Untuk paket berukuran jumbo dapat menggunakan layanan kargo</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card px-5 px-md-3 py-lg-5">
                                <div class="row flex-center">
                                    <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(<?= base_url('assets/'); ?>/img/illustrations/feature-bg-2.png);background-position:center;background-size:contain;">
                                    </div>
                                    <!--/.bg-holder-->

                                    <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(<?= base_url('assets/'); ?>/img/illustrations/feature-bg-2.png);background-position:center;background-size:cover;">
                                    </div>
                                    <!--/.bg-holder-->

                                    <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="<?= base_url('assets/'); ?>/img/illustrations/feature-hour.png" alt="" /></div>
                                    <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                                        <div class="card-body px-0">
                                            <h4 class="card-title pt-md-5">Cara packing barang elektronik</h4>
                                            <li>Setiap barang yang dikirimkan pastikan memiliki kemasan luar</li>
                                            <li>Lapisi barang dengan bubble wrap</li>
                                            <li>Sisipkan PE Foam di setiap sisi kardus <br> untuk peredeam benturan</li>
                                            <li>Pastikan ukuran barang sesuai dengan ukuran kardus</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card px-5 px-md-3 py-lg-5">
                                <div class="row flex-center">
                                    <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(<?= base_url('assets/'); ?>/img/illustrations/feature-bg-3.png);background-position:center;background-size:contain;">
                                    </div>
                                    <!--/.bg-holder-->

                                    <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(<?= base_url('assets/'); ?>/img/illustrations/feature-bg-3.png);background-position:center;background-size:cover;">
                                    </div>
                                    <!--/.bg-holder-->

                                    <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="<?= base_url('assets/'); ?>/img/illustrations/feature-print.png" alt="" /></div>
                                    <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                                        <div class="card-body px-0">
                                            <h4 class="card-title pt-md-5">Cara packing untuk barang cairan dan pecah belah</h4>
                                            <li>Pastikan barang dikemas menggunakan kardus</li>
                                            <li>Lapisi barang dengan bubble wrap 3-5 layer disesuaikan dengan kerentanan paket</li>
                                            <li>Sisipkan PE Foam di setiap sisi kardus untuk peredeam benturan</li>
                                            <li>Pastikan ukuran barang sesuai dengan ukuran kardus</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card px-5 px-md-3 py-lg-5">
                                <div class="row flex-center">
                                    <div class="bg-holder z-index-1 d-none d-lg-block" style="background-image:url(<?= base_url('assets/'); ?>/img/illustrations/feature-bg-4.png);background-position:center;background-size:contain;">
                                    </div>
                                    <!--/.bg-holder-->

                                    <div class="bg-holder z-index-1 d-block d-lg-none" style="background-image:url(<?= base_url('assets/'); ?>/img/illustrations/feature-bg-4.png);background-position:center;background-size:cover;">
                                    </div>
                                    <!--/.bg-holder-->

                                    <div class="col-md-4 pe-0 pe-md-0 text-center"><img class="img-fluid" src="<?= base_url('assets/'); ?>/img/illustrations/feature-security.png" alt="" /></div>
                                    <div class="col-md-8 ps-md-3 pe-md-2 text-center text-md-start z-index-2">
                                        <div class="card-body px-0">
                                            <h4 class="card-title pt-md-5">Cara packing barang besar dan panjang</h4>
                                            <li>Setiap barang yang dikirimkan pastikan memiliki kemasan</li>
                                            <li>Lapisi barang dengan bubble wrap 3-5 <br> layer disesuaikan dengan kerentanan paket</li>
                                            <li>Lakban dengan padat untuk menghindari goncangan yang dapat menimbulkan <br> kerusakan isi paket</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- <INPO> close ============================-->
        <!-- ============================================-->

        <!-- <ULASAN INPUT> begin ============================-->
        <!-- ============================================-->
        <div class="ulasan" id="ulasan">
            <section class="py-2">
                <div class="container-lg bg-info p-2 p-md-2 p-xl-4 col-md-7 col-lg-6 content-center rounded-3">
                    <h3 class="fw-bold text-light">Ceritakan pengalamanmu dengan DEX!</h3>
                    <!-- <div class="card-body p-lg-3 p-md-4 col-md-7 col-lg-6"> -->
                    <form class="need-validation" action="" method="post">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control rounded-pill shadow" id="floatingInput" placeholder=" " name="nama">
                            <label for="floatingInput">Nama</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control rounded-pill shadow" placeholder=" " id="floatingTextarea" name="komentar"></textarea>
                            <label for="floatingTextarea">Komentar</label>
                        </div>
                        <button class="btn btn-light rounded-pill shadow fw-bold mt-2 " href="#ulasan" type="submit">Kirim</button>
                    </form>
                </div>
            </section>
        </div>
        <!-- <ULASAN INPUT> close ============================-->
        <!-- ============================================-->

        <!-- <ULASAN> begin ============================-->
        <!-- ============================================-->
        <section class="py-5">
            <div class="container-lg bg-info p-5 p-md-5 p-xl-7 content-center rounded-3">
                <div class="row flex-center">
                    <div class="col-12">
                        <h3 class="text-light fw-bold">Ulasan Customer</h3>
                    </div>
                </div>
                <div class="testimonials-carousel-wrap">
                    <div class="listing-carousel-button listing-carousel-button-next"><i class="fa fa-caret-right" style="color: #fff"></i></div>
                    <div class="listing-carousel-button listing-carousel-button-prev"><i class="fa fa-caret-left" style="color: #fff"></i></div>
                    <div class="testimonials-carousel">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php foreach ($ulasan as $ul) { ?>
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testi-avatar"><img src="<?= base_url('assets/'); ?>/img/21.jpg"></div>
                                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                            <div class="testimonials-text">
                                                <p><?php echo $ul->komentar ?></p>
                                                <a href="#" class="text-link"></a>
                                                <div class="testimonials-avatar">
                                                    <h3><?php echo $ul->nama ?></h3>
                                                </div>
                                            </div>
                                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <!--testi end-->
                            </div>
                        </div>
                    </div>
                    <div class="tc-pagination"></div>
                </div>
            </div>
        </section>
        <!-- <ULASAN> close ============================-->
        <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->