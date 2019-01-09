<?php
include 'db_config.php';
$sql = "SELECT * FROM dog";
$result = mysqli_query($con, $sql);
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lumbini Kennel Club</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: rgba(20, 24, 79, 0.8);" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"> <img src="img/logo.png" width="200px;" height alt=""> </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#dogs">Available Dogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase">Lumbini Kennel Club and Pet-Vet Clinic heartly welcomes you !</div>
          <a class="btn btn-info  text-uppercase js-scroll-trigger" href="#contact">Order Now</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Some of the list of services we provide to our valuable costomer.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Puppy buy/sell</h4>
            <p class="text-muted">We provide high quality dog breed. And if you have any kinds breeds puppy you can contact for appropriate price.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-hospital-symbol fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Vet-clinic</h4>
            <p class="text-muted">We provide quality vet-care services by recocnized animal doctor. So feel free to contact us for any kind of health care facility for your loving pets.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-syringe fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Vaccination</h4>
            <p class="text-muted">It is compulsory to procide scheduled vaccination for pets to make them resistance from different kinds of deadly diseases. So you can register your pet for timely vaccination.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light container-fluid" id="dogs">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Available Breeds</h2>
          <h3 class="section-subheading text-dark">Here are the some of the list of available dog breeds that are available from lumbini kennel club.</h3>
        </div>
      </div>
      <div class="row ">
        <?php
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
              ?>
        <div class="col-md-3 col-sm-6">
          <div class="card" style="width:400px; margin-bottom: 30px;">
            <img class="card-img-top" style="width:100%; height:300px;" src="admin/uploads/dog/<?php echo trim($row['image']) ?>" alt="Card image">
            <div class="card-body">
              <h4 class="card-title text-center"> <?php echo $row['breed_name'] ?></h4>
              <hr>
              <p class="card-text">Type: <?php echo $row['dog_type'] ?></p>
              <p class="card-texst">Life: <?php echo $row['life_span'] ?> yrs.</p>
              <p class="card-text"> Weight: <?php echo $row['weight'] ?>Kg.</p>
              <p class="card-text"> Height: <?php echo $row['height'] ?>cm</p>
              <h5>Price: NRS <?php echo $row['price']; ?> /-</h5>
              <hr>
            </div>
          </div>

        </div>
        <div class="col-md-1">

        </div>
      <?php	}
      } else {
      echo "0 results";
      }
      mysqli_close($con);
      ?>
      <div class="col-md-1">

      </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
      <h2 class="section-heading text-uppercase">About us</h2>
        <div class="row">
          <div class="col-md-8">
            <p>Lumbini Kennel Club is a club for evaluation, authentication and certification of various dog breeds bred in Nepal. We provide breed authentication certificates to dog owners, breeders. We also ensure that dogs without a particular breed characters  are adopted and reared in society by increasing awareness about them through our shows, activities and providing special certification to them. We take extra effort to enlist special and useful characters of so that to invoke interest in general public about them. We hold dog shows  to increase awareness about various breeds of dogs and their characters and to improve man animal relationship. We also ensure that pedigree of a litter be provided to pet owner so that they should be aware of purity of their breed and any inherited disease.

            </p>
            </div>
          <div class="col-md-4">
            <img src="img//about.jpg" class="rounded-circle image-fluid float-right" alt=""  width="300" height="300">
          </div>
        </div>
</div>
        </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Meet Our Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
              <h4>Dr. Rajendra Tiwari</h4>
              <p class="text-muted">Founder & Vet-Doctor</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>------</h4>
              <p class="text-muted">Pet assistance</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
              <h4>------</h4>
              <p class="text-muted">Receptionist</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted"></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Please feel free to drop messge here.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.805856831811!2d84.43605278824928!3d27.689378449866375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb33843d6d47%3A0x51e6e5562f7e4593!2sDipendra+Chowk+Bus+Stop!5e0!3m2!1sen!2snp!4v1543645140228" width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-lg-8">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-md text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/lumbinikennelclub/">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-8 text-primary float-right">
            <h4>Links:</h4>
            <a href="#dogs">DOGS |</a>
            <a href="#team">TEAM |</a>
            <a href="#service">SERVICE |</a>
            <a href="#contact">CONTACT |</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Lumbini Kennel Club 2018</span>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
