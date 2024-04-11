<?php
require('../configs/services.php');
require('../configs/userServices.php');
session_start();

$_SESSION["index"] = " ";



if ($_SESSION['Logged'] == true) {
    $users = selectAll($table, ['userID' => $_SESSION["ID"]]);
    foreach ($users as $key => $value) {
        $_SESSION['userID'] = $value['userID'];
        $_SESSION['userFirstName'] = $value['userFirstName'];
        $_SESSION['userLastName'] = $value['userLastName'];
        $_SESSION['userPhone'] = $value['userPhone'];
        $_SESSION['userEmail'] = $value['userEmail'];
        $_SESSION['userAddress'] = $value['userAddress'];
        $_SESSION['userImg'] = $value['userImg'];
        $_SESSION['userDate'] = $value['userDate'];
    }
} else {
    die(header("location: ../index.php"));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Car Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>




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
                    <span class="breadcrumb-item active">Profile</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Pro Start -->

    <section class="vh-100" style="background-color: #f4f5f7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-11 mb-9 mb-lg-6">
                    <div class="card mb-8" style="border-radius: .5rem;">
                        <div class="row g-10">
                            <div class="col-md-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="<?php echo $_SESSION['userImg'] ?>" alt="Avatar" class="img-fluid my-5"
                                    style="width: 280px;" />
                                <h5><?php echo $_SESSION['userFirstName']  ?></h5>
                                <p></p>
                                <i class="far fa-edit mb-5"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted"><?php echo $_SESSION['userEmail']  ?></p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Date Created</h6>
                                            <p class="text-muted"><?php echo $_SESSION['userDate']  ?></p>
                                        </div>
                                    </div>
                                    <h6>Extra Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Phone</h6>
                                            <p class="text-muted"><?php echo $_SESSION['userPhone']  ?></p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Address</h6>
                                            <p class="text-muted"><?php echo $_SESSION['userAddress']  ?></p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pro End -->

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