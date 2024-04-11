<!-- Navbar Start -->

<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px">
                <h6 class="text-dark m-0">
                    <i class="fa fa-bars mr-2"></i>sections
                </h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 59">
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown dropright">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Lights<i class="fa fa-angle-right float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <?php if ($_SESSION["index"]  == "index") : ?>
                                <a href="./pages/shop.php" class="dropdown-item">headlight</a>
                            <?php else : ?>
                                <a href="shop.php" class="dropdown-item">headlight</a>
                            <?php endif; ?>

                            <?php if ($_SESSION["index"]  == "index") : ?>
                                <a href="./pages/shop.php" class="dropdown-item">rear light</a>
                            <?php else : ?>
                                <a href="shop.php" class="dropdown-item">rear light</a>
                            <?php endif; ?>

                            <?php if ($_SESSION["index"]  == "index") : ?>
                                <a href="./pages/shop.php" class="dropdown-item">undercarriage light</a>
                            <?php else : ?>
                                <a href="shop.php" class="dropdown-item">undercarriage light</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ($_SESSION["index"]  == "index") : ?>
                        <a href="./pages/shop.php" class="dropdown-item">tire</a>
                    <?php else : ?>
                        <a href="shop.php" class="dropdown-item">tire</a>
                    <?php endif; ?>
                    <?php if ($_SESSION["index"]  == "index") : ?>
                        <a href="./pages/shop.php" class="dropdown-item">door</a>
                    <?php else : ?>
                        <a href="shop.php" class="dropdown-item">door</a>
                    <?php endif; ?>
                    <?php if ($_SESSION["index"]  == "index") : ?>
                        <a href="./pages/shop.php" class="dropdown-item">windshield</a>
                    <?php else : ?>
                        <a href="shop.php" class="dropdown-item">windshield</a>
                    <?php endif; ?>
                    <?php if ($_SESSION["index"]  == "index") : ?>
                        <a href="./pages/shop.php" class="dropdown-item">outside mirror</a>
                    <?php else : ?>
                        <a href="shop.php" class="dropdown-item">outside mirror</a>
                    <?php endif; ?>
                    <?php if ($_SESSION["index"]  == "index") : ?>
                        <a href="./pages/shop.php" class="dropdown-item">radio</a>
                    <?php else : ?>
                        <a href="shop.php" class="dropdown-item">radio</a>
                    <?php endif; ?>
                    <?php if ($_SESSION["index"]  == "index") : ?>
                        <a href="./pages/shop.php" class="dropdown-item">wheel</a>
                    <?php else : ?>
                        <a href="shop.php" class="dropdown-item">wheel</a>
                    <?php endif; ?>
                    <?php if ($_SESSION["index"]  == "index") : ?>
                        <a href="./pages/shop.php" class="dropdown-item">cover</a>
                    <?php else : ?>
                        <a href="shop.php" class="dropdown-item">cover</a>
                    <?php endif; ?>

                    <?php if ($_SESSION["index"]  == "index") : ?>
                        <a href="./pages/shop.php" class="dropdown-item">hood</a>
                    <?php else : ?>
                        <a href="shop.php" class="dropdown-item">hood</a>
                    <?php endif; ?>
                    <?php if ($_SESSION["index"]  == "index") : ?>
                        <a href="./pages/shop.php" class="dropdown-item">roof</a>
                    <?php else : ?>
                        <a href="shop.php" class="dropdown-item">roof</a>
                    <?php endif; ?>


            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Automobile</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">



                        <?php if ($_SESSION["index"] == "index") : ?>
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                        <?php else : ?>
                            <a href="../index.php" class="nav-item nav-link active">Home</a>
                        <?php endif; ?>

                        <?php if (isset($_SESSION["ID"])) : ?>
                            <?php if ($_SESSION["index"] == "index") : ?>
                                <a href="./pages/ItemManage.php" class="nav-item nav-link ">Item Manage</a>
                            <?php else : ?>
                                <a href="ItemManage.php" class="nav-item nav-link ">Item Manage</a>
                            <?php endif; ?>
                        <?php endif; ?>


                        <?php if (isset($_SESSION["ID"])) : ?>
                            <?php if ($_SESSION["index"] == "index") : ?>
                                <a href="./pages/addItem.php" class="nav-item nav-link ">Add Item</a>
                            <?php else : ?>
                                <a href="addItem.php" class="nav-item nav-link ">Add Item</a>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php if (isset($_SESSION["ID"])) : ?>
                            <?php if ($_SESSION["index"] == "index") : ?>
                                <a href="./pages/profile.php" class="nav-item nav-link ">Profile</a>
                            <?php else : ?>
                                <a href="profile.php" class="nav-item nav-link ">Profile</a>
                            <?php endif; ?>
                        <?php endif; ?>



                        <?php if ($_SESSION["index"]  == "index") : ?>
                            <a href="./pages/shop.php" class="nav-item nav-link">Shop</a>
                        <?php else : ?>
                            <a href="shop.php" class="nav-item nav-link">Shop</a>
                        <?php endif; ?>




                        <?php if ($_SESSION["index"] == "index") : ?>
                            <a href="./pages/contact.php" class="nav-item nav-link">Contact</a>
                        <?php else : ?>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <?php endif; ?>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">

                        <?php if ($_SESSION['Logged'] == false) : ?>

                            <?php if ($_SESSION["index"] == "index") : ?>

                                <a href="pages/auth.php" class="btn px-0">
                                    <i class="fas fa-user text-primary"></i>
                                    <span class="badge text-secondary border border-secondary rsounded-circle" style="padding-bottom: 2px"></span>
                                </a>
                                <a href="pages/cart.php" class="btn px-0 ml-3">
                                    <i class="fas fa-shopping-cart text-primary"></i>
                                    <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px"></span>
                                </a>
                            <?php else : ?>
                                <a href="auth.php" class="btn px-0">
                                    <i class="fas fa-user text-primary"></i>
                                    <span class="badge text-secondary border border-secondary rsounded-circle" style="padding-bottom: 2px"></span>
                                </a>
                                <a href="cart.php" class="btn px-0 ml-3">
                                    <i class="fas fa-shopping-cart text-primary"></i>
                                    <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px"></span>
                                </a>
                            <?php endif; ?>



                        <?php else : ?>
                            <?php if ($_SESSION["index"] == "index") : ?>

                                <a href="configs/logout.php" class="btn px-0">
                                    <i class="fas fa-sign-out-alt text-primary"></i>
                                    <span class="badge text-secondary border border-secondary rsounded-circle" style="padding-bottom: 2px"></span>
                                </a>
                                <a href="pages/cart.php" class="btn px-0 ml-3">
                                    <i class="fas fa-shopping-cart text-primary"></i>
                                    <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px"></span>
                                </a>
                            <?php else : ?>
                                <a href="../configs/logout.php" class="btn px-0">
                                    <i class="fas fa-sign-out-alt text-primary"></i>
                                    <span class="badge text-secondary border border-secondary rsounded-circle" style="padding-bottom: 2px"></span>
                                </a>
                                <a href="cart.php" class="btn px-0 ml-3">
                                    <i class="fas fa-shopping-cart text-primary"></i>
                                    <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px"></span>
                                </a>
                            <?php endif; ?>


                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->