<?php
require('../configs/services.php');
require('../configs/partServices.php');
session_start();



if (!isset($_SESSION["ID"])) {
    header('location: shop.php');
    exit();
}
$posts = selectAll($table, ['userID' => $_SESSION["ID"]]);


if (isset($_GET['delete-item'])) {
    $id = $_GET['delete-item'];
    $count = deletee($table, $id);
    header('location: ItemManage.php');
    exit();
}



$_SESSION["index"] = " ";



if (isset($_GET['reset'])) {
    unset($_GET['reset']);
    unset($_GET['search']);
    unset($_GET['search-text']);
    $posts = selectAll($table, ['userID' => $_SESSION["ID"]]);
}

if (isset($_GET['search'])) {
    unset($_GET['search']);
    unset($_GET['reset']);

    if (isset($_GET['search-text'])) {
        $posts = selectContainsID($table, $_GET['search-text'], $_SESSION["ID"]);

        unset($_GET['search-text']);
    } else {
        $posts = selectAll($table, ['userID' => $_SESSION["ID"]]);
    }
}






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Car Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

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
                    <span class="breadcrumb-item active">Manage</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Manage Start -->

    <!-- Shop Product Start -->
    <div class="col-lg-12 col-md-8">
        <div class="row pb-3">
            <div class="col-12 pb-1">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <div class="ml-2">
                        <form action="ItemManage.php" method="get">
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

            <?php foreach ($posts as $key => $part) : ?>
                <div class="col-lg-4 col-md-8 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?php echo $part["partImg"]; ?>" alt="<?php echo $part["partImg"]; ?>" />
                            <div class="product-action">
                                <form id="myForm" action="" method="post">
                                    <a id="submitButton" class="btn btn-outline-dark btn-square" href="./ItemManage.php?delete-item=<?php echo $part['partID']; ?>">
                                        <i class="fa fa-trash">
                                        </i></a>

                                </form>

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
                                        <?php if($q < 5):?>
                                            <small class="fa fa-star text-primary mr-1"></small>
                                        <?php endif;?>
                                    
                                    <?php endfor; ?>
                                <small> <?php if($part["partRate"]<5 ):?>
                                        <?php echo $part["partRate"];?>
                                        <?php else:?>
                                            5
                                            <?php endif;?>
                                        /5</small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- Pagination Start -->

            <!-- Pagination End-->
        </div>
    </div>
    <!-- Shop Product End -->
    <!-- Manage End -->

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