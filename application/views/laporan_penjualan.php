<?php
if (empty($_SESSION['nama'])) {
    $this->session->set_flashdata('login', '<div style="color:red">Anda harus login terlebih dahulu!</div>');
    redirect(user);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css'); ?>">

    <link rel="shortcut icon" href="<?= base_url('assets/img/LogoCallow.png'); ?>">

    <title>Laporan Penjualan</title>
</head>

<body>
    <!-- Navigasi Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ml-auto" href="#"><img src=<?= base_url('assets/img/LOGO.png'); ?> width="82" height="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('content/index'); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('content/apparel'); ?>">Apparel <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('content/accessories'); ?>">Accessories <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('content/bag'); ?>">Bag <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('content/about'); ?>">About <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
            <div>
                <ul class="navbar-nav">
                    <?php if ($this->session->userdata('logged_in')) : ?>
                        <span> <?= $this->session->userdata('nama'); ?> </span>
                    <?php endif; ?>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-sm rgba-white-slight mx-1" href="<?= base_url('user/profil'); ?>">
                            <i><img src="<?= base_url('assets/img/user.png'); ?>"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-sm rgba-white-slight mx-1" href="#">
                            <i><img src="<?= base_url('assets/img/search.png'); ?>"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-sm rgba-white-slight mx-1" href="<?= base_url('order/tampil_order'); ?>">
                            <i><img src="<?= base_url('assets/img/shop.png'); ?>"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Content -->
    <div class="container">
        <br><br>
        <h2 class="text-center font-weight-bold">Laporan Penjualan</h2><br>
        <hr><br>
        <div class="container">
            <table class="table">
                <thead class="table-dark" align="center">
                    <tr>
                        <td scope="col">Order</td>
                        <td scope="col">Product</td>
                        <td scope="col">Harga</td>
                        <td scope="col">Ukuran</td>
                        <td scope="col">Warna</td>
                        <td scope="col">Pembeli</td>
                        <td scope="col">No Hp</td>
                        <td scope="col">Alamat</td>
                        <td scope="col">Pembayaran</td>
                        <td scope="col">Pengiriman</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($order as $row) : ?>
                            <td align="center">#<?= $row['id_order'] ?></td>
                            <td align="center"><?= $row['nama_product'] ?></td>
                            <td align="center"><?= $row['harga'] ?></td>
                            <td align="center"><?= $row['ukuran'] ?></td>
                            <td align="center"><?= $row['warna'] ?></td>
                            <td align="center"><?= $row['nama_pembeli'] ?></td>
                            <td align="center"><?= $row['no_hp_pembeli'] ?></td>
                            <td align="center"><?= $row['alamat_pembeli'] ?></td>
                            <td align="center"><?= $row['metode_bayar'] ?></td>
                            <td align="center"><?= $row['metode_kirim'] ?></td>
                    </tr>
                </tbody>
            <?php endforeach ?>
            </table>
            <br>
            <hr><br>
            <div align="center">
                <h6>Total Penjualan: 2</h6>
                <h6>Uang Masuk: IDR.198000</h6><br>
                <hr>
            </div>
        </div>
    </div>
    <!-- Content -->
    </div>
    <br>
    <h4 align="center">Stok Product</h4><br>
    <div class="container">
        <table class="table">
            <thead class="table-dark" align="center">
                <tr>
                    <td scope="col">Nama Product</td>
                    <td scope="col">Harga</td>
                    <td scope="col">Stok</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($product as $row) : ?>
                        <td align="center"><?= $row['nama_product'] ?></td>
                        <td align="center"><?= $row['harga'] ?></td>
                        <td align="center"><?= $row['stok'] ?></td>

                </tr>
            </tbody>
        <?php endforeach ?>
        </table>
        <br>
    </div>



    <!-- Footer -->
    <footer class="page-footer font-small mdb-color pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">
            <hr>
            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Callow Indonesia</h6>
                    <p>Callow Indonesia adalah sebuah wadah berkreasi di bidang clothes & fashion<br><br>-sejak 2019-</p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                    <p>
                        <a href="<?= base_url('content/apparel'); ?>">Apparel</a>
                    </p>
                    <p>
                        <a href="<?= base_url('content/accessories'); ?>">Accessories</a>
                    </p>
                    <p>
                        <a href="<?= base_url('content/bag'); ?>">Bag</a>
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">About</h6>
                    <p>
                        <a href="#!">Terms and Condition</a>
                    </p>
                    <p>
                        <a href="#!">Privacy Policy</a>
                    </p>
                    <p>
                        <a href="#!">Career</a>
                    </p>
                    <p>
                        <a href="<?= base_url('content/about'); ?>">About Us</a>
                    </p>
                </div>

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p>
                        <i><img src="<?= base_url('assets/img/home.png'); ?>"></i> Yogyakarta, Indonesia</p>
                    <p>
                        <i><img src="<?= base_url('assets/img/envelope.png'); ?>"></i> callowindonesia@gmail.com</p>
                    <p>
                        <i><img src="<?= base_url('assets/img/call.png'); ?>"></i> +628813887488</p>
                    <p>
                        <i><img src="<?= base_url('assets/img/print.png'); ?>"></i> +628813887488</p>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Footer links -->

            <hr>

            <!-- Grid row -->
            <div class="row d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-7 col-lg-8">

                    <!--Copyright-->
                    <p class="text-center text-md-left">© 2019 Copyright:
                        <a href="#">
                            <strong> Callow Indonesia</strong>
                        </a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0">

                    <!-- Social buttons -->
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i><img src="<?= base_url('assets/img/facebook.png'); ?>"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i><img src="<?= base_url('assets/img/twitter.png'); ?>"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i><img src="<?= base_url('assets/img/line.png'); ?>"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i><img src="<?= base_url('assets/img/instagram.png'); ?>"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

    </footer>
    <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>