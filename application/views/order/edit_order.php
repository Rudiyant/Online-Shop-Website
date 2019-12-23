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

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css');?>">

    <link rel="shortcut icon" href="<?= base_url('assets/img/LogoCallow.png');?>">

    <title>Edit Data Order</title>
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
        <h2 class="text-center font-weight-bold">Edit Data Order</h2><br><hr><br>
        <!-- Form -->
        <form class="order" method="POST" action="<?= base_url('order/update/'). $order['id_order'];?>">
            <small>Masukkan Data Product</small>
            <hr>
            <div class="form-group">
                <label>Nama Produk</label><br>
                <input type="text" class="form-control" id="inputName" name="nama_product" value="<?= $order['nama_product'] ?>" readonly>
            </div>
            <div class="form-group">
                <label>Harga</label><br>
                <input type="text" class="form-control" id="inputName" name="harga" value="<?= $order['harga'] ?>" readonly>
            </div>
            <div>
                <label>Ukuran</label>
                <br>
                <label class="radio-inline"><input type="radio" name="ukuran" value="S" <?php echo ($order['ukuran']=='S')?'checked':'' ?>>S &ensp;</label>
                <label class="radio-inline"><input type="radio" name="ukuran" value="M" <?php echo ($order['ukuran']=='M')?'checked':'' ?>>M &ensp;</label>
                <label class="radio-inline"><input type="radio" name="ukuran" value="L" <?php echo ($order['ukuran']=='L')?'checked':'' ?>>L &ensp;</label>
                <label class="radio-inline"><input type="radio" name="ukuran" value="XL" <?php echo ($order['ukuran']=='XL')?'checked':'' ?>>XL &ensp;</label>
            </div>
            <div>
                <label>Warna</label>
                <br>
                <label class="radio-inline"><input type="radio" name="warna" value="Hitam" <?php echo ($order['warna']=='Hitam')?'checked':'' ?>>Hitam &ensp;</label>
                <label class="radio-inline"><input type="radio" name="warna" value="Navy" <?php echo ($order['warna']=='Navy')?'checked':'' ?>>Navy &ensp;</label>
                <label class="radio-inline"><input type="radio" name="warna" value="Putih" <?php echo ($order['warna']=='Putih')?'checked':'' ?>>Putih &ensp;</label>
            </div>
            <br><br>
            <small>Masukkan Data Pembeli</small>
            <hr>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" id="inputName" name="nama" value="<?= $order['nama_pembeli'] ?>">
            </div>
            <div class="form-group">
                <label>Nomor Handphone</label>
                <input type="text" class="form-control" id="inputNumber" name="no_hp" value="<?= $order['no_hp_pembeli'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat Pengiriman Product</label>
                <textarea class="form-control" id="inputAddress" rows="3" name="alamat"><?= $order['alamat_pembeli'] ?></textarea>
            </div>
            <br><br>
            <small>Pilih Metode Pembayaran</small>
            <hr>
            <div class="form-group">
                <label>Metode Pembayaran</label>
                <br><br>
                <label class="radio-inline"><input type="radio" name="bayar" value="BNI" <?php echo ($order['metode_bayar']=='BNI')?'checked':'' ?>>
                    <img src="<?= base_url('assets/img/bni.png'); ?>"> &ensp;
                </label>
                <label class="radio-inline"><input type="radio" name="bayar" value="BRI" <?php echo ($order['metode_bayar']=='BRI')?'checked':'' ?>>
                    <img src="<?= base_url('assets/img/bri.png'); ?>"> &ensp;
                </label>
                <label class="radio-inline"><input type="radio" name="bayar" value="BCA" <?php echo ($order['metode_bayar']=='BCA')?'checked':'' ?>>
                    <img src="<?= base_url('assets/img/bca.png'); ?>"> &ensp;
                </label>
                <label class="radio-inline"><input type="radio" name="bayar" value="Mandiri" <?php echo ($order['metode_bayar']=='Mandiri')?'checked':'' ?>>
                    <img src="<?= base_url('assets/img/mandiri.png'); ?>"> &ensp;
                </label>
                <br>
                <label class="radio-inline"><input type="radio" name="bayar" value="ALfamart" <?php echo ($order['metode_bayar']=='ALfamart')?'checked':'' ?>>
                    <img src="<?= base_url('assets/img/alfamart.png'); ?>"> &ensp;
                </label>
                <label class="radio-inline"><input type="radio" name="bayar" value="Indomart" <?php echo ($order['metode_bayar']=='Indomart')?'checked':'' ?>>
                    <img src="<?= base_url('assets/img/indomart.png'); ?>"> &ensp;
                </label>
                <br>
                <label class="radio-inline"><input type="radio" name="bayar" value="OVO" <?php echo ($order['metode_bayar']=='OVO')?'checked':'' ?>>
                    <img src="<?= base_url('assets/img/ovo.png'); ?>"> &ensp;
                </label>
                <label class="radio-inline"><input type="radio" name="bayar" value="GoPay" <?php echo ($order['metode_bayar']=='GoPay')?'checked':'' ?>>
                    <img src="<?= base_url('assets/img/gopay.png'); ?>"> &ensp;
                </label>
                <label class="radio-inline"><input type="radio" name="bayar" value="Dana" <?php echo ($order['metode_bayar']=='Dana')?'checked':'' ?>>
                    <img src="<?= base_url('assets/img/dana.png'); ?>"> &ensp;
                </label>
            </div>
            <br><br>
            <small>Pilih Metode Pengiriman Product</small>
            <hr>
            <div class="form-group">
                <label>Metode Pengiriman Product</label>
                <br><br>
                <label class="radio-inline"><input type="radio" name="kirim" value="POS Indonesia" <?php echo ($order['metode_kirim']=='POS Indonesia')?'checked':'' ?>>
                    <img src="<?= base_url('assets/img/pos.png'); ?>"> &ensp;
                </label>
                <label class="radio-inline"><input type="radio" name="kirim" value="JNE Express" <?php echo ($order['metode_kirim']=='JNE Express')?'checked':'' ?>>
                    <img src="<?= base_url('assets/img/jne.png'); ?>"> &ensp;
                </label>
            </div>
            <br>
            <hr><br>
            <div class="btnOrder">
                <input type="submit" name="submit" value="Update Data" class="btn btn-warning">
            </div>
        </form>
        <!-- Form -->
    </div>
    <!-- Content -->
    </div>
    <br>


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