  <?php


    if ($_SESSION["index"]  == "contact") {
    } else {

        if ($_SESSION["index"]  == "index") {
            //index
            require('mailer/PHPMailer.php');
            require('mailer/Exception.php');
            require('mailer/SMTP.php');
        } else {
            //not index
            require('../mailer/Exception.php');
            require('../mailer/PHPMailer.php');
            require('../mailer/SMTP.php');
        }





        if (isset($_POST["mail"])) {
            unset($_POST["mail"]);
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = 'as17176@auis.edu.krd';
            $mail->Password = 'ymjw rspu dsbq stsr';
            $mail->SMTPSecure = "ssl";
            $mail->Port = 465;

            $mail->setFrom("as17176@auis.edu.krd");
            $mail->addAddress($_POST['email']);
            $mail->isHTML(true);
            $mail->Subject = 'News Subscription';
            $mail->Body = 'This is a test to check that it is working';
            $mail->send();
        }
    }


    ?>



  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
      <div class="row px-xl-5 pt-5">
          <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
              <h5 class="text-secondary text-uppercase mb-4">Car Part</h5>
              <p class="mb-4">
                  On this site، you can find any data you want.
                  You can see the parts in the car، like lights، doors، engines.
              </p>
              <p class="mb-2">
                  <i class="fa fa-map-marker-alt text-primary mr-3"></i>
                  auto repair district
              </p>
              <p class="mb-2">
                  <i class="fa fa-envelope text-primary mr-3"></i>as17176@auis.edu.krd
              </p>
              <p class="mb-0">
                  <i class="fa fa-phone-alt text-primary mr-3"></i>+9647728517734
              </p>
          </div>
          <div class="col-lg-8 col-md-12">
              <div class="row">
                  <div class="col-md-4 mb-5">
                      <h5 class="text-secondary text-uppercase mb-4">Links</h5>
                      <div class="d-flex flex-column justify-content-start">
                          <?php if ($_SESSION["index"] == "index") : ?>
                              <a class="text-secondary mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                          <?php else : ?>
                              <a class="text-secondary mb-2" href="../index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                          <?php endif; ?>

                          <?php if ($_SESSION["index"] == "index") : ?>
                              <a class="text-secondary mb-2" href="./pages/shop.php"><i class="fa fa-angle-right mr-2"></i>Shopping</a>
                          <?php else : ?>
                              <a class="text-secondary mb-2" href="shop.php"><i class="fa fa-angle-right mr-2"></i>Shopping</a>
                          <?php endif; ?>


                          <?php if ($_SESSION["index"] == "index") : ?>
                              <a class="text-secondary" href="./pages/contact.php"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                          <?php else : ?>
                              <a class="text-secondary" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                          <?php endif; ?>
                      </div>
                  </div>

                  <div class="col-md-4 mb-5">
                      <h5 class="text-secondary text-uppercase mb-4">Other car parts</h5>
                      <p>want to stay updated on the latest car parts</p>
                      <form action="" method="post">
                          <div class="input-group">
                              <input type="text" class="form-control" name="email" placeholder="Your Email Address" />
                              <div class="input-group-append">
                                  <button class="btn btn-primary" name="mail">Register</button>
                              </div>
                          </div>
                      </form>
                      <h6 class="text-secondary text-uppercase mt-4 mb-3">
                          Be with us
                      </h6>
                      <div class="d-flex">
                          <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                          <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End -->