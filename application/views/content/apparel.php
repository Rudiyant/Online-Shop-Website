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

    <title>Callow Indonesia Apparel</title>
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
    <br><br>
    <div class="container">
        <h2 class="text-center font-weight-bold">Apparel</h2>
        <br><hr><br>
        <!-- Form -->
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <div align="center">
                        <h4 align="font-weight-bold" for="inputEmail4">Callow Nature Black</h4>
                    </div>
                    <!-- Image -->
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= base_url('assets/img/callow1.png'); ?>" class="d-block w-100" alt="NatureBlack">
                                    <div class="carousel-caption d-none d-md-block text-warning">
                                        <h5>Front</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url('assets/img/callow2.png'); ?>" class="d-block w-100" alt="NatureBlack">
                                    <div class="carousel-caption d-none d-md-block text-warning">
                                        <h5>Back</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- Image -->
                    <!-- Price and Button -->
                    <div align="center">
                        <h5>IDR 99.000</h5>
                        <?php $id_product="Ap001"; ?>
                        <a href="<?= base_url('product/detail_product/'). $id_product; ?>" class="btn btn-warning btn-rounded">Order</a>
                    </div>
                    <!-- Price and Button -->
                </div>
                <div class="form-group col-md-6">
                    <div align="center">
                        <h4 align="font-weight-bold" for="inputEmail4">Syntax Error</h4>
                    </div>
                    <!-- Image -->
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= base_url('assets/img/syntax1.jpg'); ?>" class="d-block w-100" alt="SyntaxError">
                                    <div class="carousel-caption d-none d-md-block text-warning">
                                        <h5>Front</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url('assets/img/syntax2.jpg'); ?>" class="d-block w-100" alt="SyntaxError">
                                    <div class="carousel-caption d-none d-md-block text-warning">
                                        <h5>Back</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- Image -- >
          <!-- Price and Button -->
                    <div align="center">
                        <h5>IDR 99.000</h5>
                        <?php $id_product="Ap002"; ?>
                        <a href="<?= base_url('product/detail_product/'). $id_product; ?>" class="btn btn-warning btn-rounded">Order</a>
                    </div>
                    <!-- Price and Button -->
                </div>
            </div>
            <br><br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <div align="center">
                        <h4 align="font-weight-bold" for="inputEmail4">Callow Indonesia</h4>
                    </div>
                    <!-- Image -->
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= base_url('assets/img/indo1.png'); ?>" class="d-block w-100" alt="CallowIndonesia">
                                    <div class="carousel-caption d-none d-md-block text-warning">
                                        <h5>Front</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url('assets/img/indo2.png'); ?>" class="d-block w-100" alt="CallowIndonesia">
                                    <div class="carousel-caption d-none d-md-block text-warning">
                                        <h5>Back</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- Image -->
                    <!-- Price and Button -->
                    <div align="center">
                        <h5>IDR 99.000</h5>
                        <?php $id_product="Ap003"; ?>
                        <a href="<?= base_url('product/detail_product/'). $id_product; ?>" class="btn btn-warning btn-rounded">Order</a>
                    </div>
                    <!-- Price and Button -->
                </div>
                <div class="form-group col-md-6">
                    <div align="center">
                        <h4 align="font-weight-bold" for="inputEmail4">Callow Berbagi</h4>
                    </div>
                    <!-- Image -->
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= base_url('assets/img/berbagi1.png'); ?>" class="d-block w-100" alt="CallowBerbagi">
                                    <div class="carousel-caption d-none d-md-block text-warning">
                                        <h5>Front</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url('assets/img/berbagi2.png'); ?>" class="d-block w-100" alt="CallowBerbagi">
                                    <div class="carousel-caption d-none d-md-block text-warning">
                                        <h5>Back</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- Image -->
                    <!-- Price and Button -->
                    <div align="center">
                        <h5>IDR 99.000</h5>
                        <?php $id_product="Ap004"; ?>
                        <a href="<?= base_url('product/detail_product/'). $id_product; ?>" class="btn btn-warning btn-rounded">Order</a>
                    </div>
                    <!-- Price and Button -->
                </div>
            </div>
        </form>
        <!-- Form -->

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