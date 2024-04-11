<?php
require('../configs/services.php');
require('../configs/partServices.php');
session_start();

$_SESSION["index"] = " ";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Car Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="../statics/js/addToCart.js"></script>
    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="../statics/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="../statics/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../statics/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Navbar Start -->
    <?php include("../components/header.php");
    ?>
    <!-- Navbar End -->

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Part details</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src=" <?php echo $partImg; ?>" alt="Image" />
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3> <?php echo $partName; ?></h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                        <?php for ($q = 0; $q < $partRate; $q++) : ?>
                                        <?php if($q < 5):?>
                                            <small class="fa fa-star text-primary mr-1"></small>
                                        <?php endif;?>
                                    
                                    <?php endfor; ?>
                        </div>
                        <small class="pt-1">(<?php if($partRate<5 ):?>
                                        <?php echo $partRate;?>
                                        <?php else:?>
                                            5
                                            <?php endif;?>
                                        /5)</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4"><?php echo $partPrice; ?>$</h3>
                    <p class="mb-4" style=" overflow-wrap: break-word; ">
                        <?php echo $partDescription; ?></p>

                    <div class="d-flex mb-4">
                        <strong class="text-dark mr-3">Color:</strong>
                        <h6><?php echo $partColor; ?></h6>

                    </div>

                    <div class="d-flex mb-4">
                        <strong class="text-dark mr-3">Category:</strong>
                        <h6><?php echo $partBrand; ?></h6>

                    </div>
                    <div class="d-flex align-items-center mb-4 pt-2">
                        <button class="btn btn-primary px-3" onclick="addToCart('<?php echo $partName ?>', <?php echo $partPrice ?>,'<?php echo $partImg ?>')">
                            <i class="fa fa-shopping-cart mr-1"></i> add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Buy</a>

                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">To order</h4>
                            <p>Call this number </p>
                            <p><?php echo $userPhone; ?></p>
                            <p>or email us</p>
                            <p><?php echo $userEmail; ?></p>
                            <p>or visit this address</p>
                            <p><?php echo $userAddress; ?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->

    <!-- Footer Start -->
    <?php include("../components/footer.php");
    ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../statics/lib/easing/easing.min.js"></script>
    <script src="../statics/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../statics/mail/jqBootstrapValidation.min.js"></script>
    <script src="../statics/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../statics/js/main.js"></script>
</body>

</html>