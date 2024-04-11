<?php
require('../configs/services.php');
session_start();

$_SESSION["index"] = " ";


if (!isset($_SESSION["ID"])) {
    header('location: shop.php');
    exit();
}





if (isset($_POST['add-item'])) {
    unset($_POST['add-item']);
    $posts_id = create('parts', $_POST);
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
                    <span class="breadcrumb-item active">Add Items</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- addItem Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">ADD ITEM</span>
        </h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form action="addItem.php" method="POST" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" name="partName" class="form-control" id="partName"
                                placeholder="Part Name" required="required"
                                data-validation-required-message="Please enter the part name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="partColor" class="form-control" id="partColor"
                                placeholder="Part Color" required="required"
                                data-validation-required-message="Please enter the part color" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="partBrand" class="form-control" id="partBrand"
                                placeholder="Part Brand" required="required"
                                data-validation-required-message="Please enter the part brand" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="partImg" class="form-control" id="partImg"
                                placeholder="Part Image Link" required="required"
                                data-validation-required-message="Please enter the part image address" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="partPrice" class="form-control" id="partPrice"
                                placeholder="Part Price in Dollar" required="required"
                                data-validation-required-message="Please enter the part price" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="partRate" class="form-control" id="partRate"
                                placeholder="Part Rate From 1-5" required="required"
                                data-validation-required-message="Please enter the part rating" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" name="partDescription" rows="8" id="partDescription"
                                placeholder="Part Description" required="required"
                                data-validation-required-message="Please enter the part description"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div style="display: none;">
                            <input type="text" name="userID" class="form-control" id="userID"
                                placeholder="Part Rate From 1-5" value="<?php echo $_SESSION['ID']; ?>" />

                            <p class="help-block text-danger"></p>
                        </div>

                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="add-item" name="add-item">
                                Add Item
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- addItem End -->

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