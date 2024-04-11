<?php
require('../configs/services.php');
require('../configs/partServices.php');
session_start();

$_SESSION["index"] = " ";


require('../configs/priceFilter.php');
require('../configs/colorFilter.php');
require('../configs/brandFilter.php');



if (isset($_GET['reset'])) {
    unset($_GET['reset']);
    unset($_GET['search']);
    unset($_GET['search-text']);
    $posts = selectAll($table);
}

if (isset($_GET['search'])) {
    unset($_GET['search']);
    unset($_GET['reset']);

    if (isset($_GET['search-text'])) {
        $posts = selectContains($table, $_GET['search-text']);

        unset($_GET['search-text']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Car Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
    <?php include("../components/header.php");
    ?>

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Parts</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Price</span>
                </h5>
                <div class="bg-light p-4 mb-30">
                    <form method="post" action="shop.php">
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="priceOne" class="btn btn-outline-dark">0$ - 50$</button>
                        </div>

                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="priceTwo" class="btn btn-outline-dark ">50$ - 150$</button>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="priceThree" class="btn btn-outline-dark ">150$ - 250$</button>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="priceFour" class="btn btn-outline-dark ">250$ - 350$</button>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="priceFive" class="btn btn-outline-dark ">350$ - 9999$</button>
                        </div>
                    </form>
                </div>
                <!-- Price End -->

                <!-- Color Start -->
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Color</span>
                </h5>
                <div class="bg-light p-4 mb-30">
                    <form method="post" action="shop.php">
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="Black" class="btn btn-outline-dark">Black</button>
                        </div>

                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="White" class="btn btn-outline-dark ">White</button>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="Red" class="btn btn-outline-red ">Red</button>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="Blue" class="btn btn-outline-blue ">Blue</button>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="Green" class="btn btn-outline-green">Green</button>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="Silver" class="btn btn-outline-silver ">Silver</button>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="Purple" class="btn btn-outline-purple ">Purple</button>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="Brown" class="btn btn-outline-brown ">Brown</button>
                        </div>
                    </form>
                </div>
                <!-- Color End -->

                <!-- Size Start -->
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Brands</span>
                </h5>
                <div class="bg-light p-4 mb-30">
                    <form method="post" action="shop.php">
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="Ford" class="btn btn-outline-dark">Ford</button>
                        </div>

                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="Nissan" class="btn btn-outline-dark ">Nissan</button>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="Dodge" class="btn btn-outline-dark ">Dodge</button>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="Kia" class="btn btn-outline-dark ">Kia</button>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="Toyota" class="btn btn-outline-dark ">Toyota</button>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <button type="submit" name="BMW" class="btn btn-outline-dark ">BMW</button>
                        </div>
                    </form>
                </div>
                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="ml-2">
                                <form action="shop.php" method="get">
                                    <div class="input-group">
                                        <input type="text" name="search-text" class="form-control" placeholder="Search for parts" />
                                        <div class="input-group-append">
                                            <button type="submit" name="search" class="input-group-text bg-transparent text-primary">
                                                <i class="fa fa-search"></i>
                                            </button>
                                            <button type="submit" name="reset" class="input-group-text bg-transparent text-primary">
                                                <i class="fa fa-reply"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <?php if (count($posts) == 0) : ?>
                        <h1>No Item Fount By That Filter</h1>
                    <?php endif; ?>
                    <?php foreach ($posts as $key => $part) : ?>

                        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="<?php echo $part["partImg"]; ?>" alt="<?php echo $part["partImg"]; ?>" />
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square"><button class="btn btn-outline-dark btn-square" onclick="addToCart('<?php echo $part['partName'] ?>', <?php echo $part['partPrice'] ?>,'<?php echo $part['partImg'] ?>')"><i class="fa fa-shopping-cart"></i></button></a>

                                        <a class="btn btn-outline-dark btn-square" href="./detail.php?post-id=<?php echo $part['partID']; ?>"><i class="fa fa-bars"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="">
                                        <?php echo $part["partName"]; ?>
                                    </a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5><?php echo $part["partPrice"]; ?>$</h5>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <?php for ($q = 0; $q < $part["partRate"]; $q++) : ?>
                                            <?php if ($q < 5) : ?>
                                                <small class="fa fa-star text-primary mr-1"></small>
                                            <?php endif; ?>

                                        <?php endfor; ?>
                                        <small> <?php if ($part["partRate"] < 5) : ?>
                                                <?php echo $part["partRate"]; ?>
                                            <?php else : ?>
                                                5
                                            <?php endif; ?>
                                            /5</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <!-- Pagination Start -->
                    <!-- <div class="col-12">
                    <nav>
                      <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </nav>
                </div> -->
                    <!-- Pagination End-->
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->

    <?php include("../components/footer.php");
    ?>

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