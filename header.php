<?php
$conn = mysqli_connect('localhost','root','','booksshopdb');

if(mysqli_connect_errno()){
  echo "error".mysqli_connect_errno();
}
$query = "SELECT * FROM products LIMIT 0,6";
$result = mysqli_query($conn,$query);

$products = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Books Buy Sell : <?php echo $pageName; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Books Buy & Sell</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>
  <style>
  /* store items */
.store{
 background: var(--mainGrey);
}
.img-container{
 position: relative;
 overflow: hidden;
 cursor: pointer;
}
.store-img{
 transition: all 1s ease-in-out;
}
.img-container:hover .store-img{
transform: scale(1.2);
opacity: 0.5;
}
.store-icons{
  position: absolute;
  top: 50%;
  left: 0%;
  width: 100%;
  transform: translateY(550%);
  transition: all 1s ease-in-out;
}
.img-container:hover .store-icons{
  transform: translateY(0)
}
.store-icon{
  font-size: 1.5rem;
  color: var(--mainBlack);
  padding: 0.25rem 0.5rem;
  border-radius: 50%;
  border:0.05rem solid var(--mainBlack);
  transition: all 0.5s ease-in-out;
}
.store-icon:hover{
  color: var(--mainPink);
  border-color: var(--mainPink);
}
/*end of  store items */
  </style>
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo HOME.'home'; ?>">BOOKS BUY SELL</a>
         
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#store">BOOKS</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contacts">Contact</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo HOME.'register'; ?>">SIGN UP</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo HOME.'login'; ?>">SIGN IN</a>
            </li>
            </ul>
        </div>         
      </div>
    </nav>      

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/logo/booklogo.png" alt="">
        <h1 class="text-uppercase mb-0">Books Buy Sell</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Once you have read a book you care about, some part of it is always with you.</h2>
      </div>
    </header>


    <!-- store -->
  <section id="store" class="store py-5">
    <div class="container">
      <div class="row">
        <div class="col-10 mx-auto col-sm-6 text-center">
          <h1 class="text-center text-uppercase text-secondary mb-0"><strong class="banner-title ">ALL BOOKS</strong></h1>
        </div>
      </div>
       <hr class="star-dark mb-5">
       <a href="<?php echo HOME.'booksindex'; ?>"><button style="float:right; margin-top:-40px;width:20%;height:6%" type="button" class="btn btn-info"><strong class="banner-title ">VIEW ALL</strong></button></a>
      <br>
      <!-- store  items-->
      <div class="row" id="store-items">
        <?php foreach ($products as $product):?>
        <!-- single item -->
          <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item">
            <div class="card ">
              <div class="img-container">
                <img src="<?php echo $product['filename']?>" class="card-img-top store-img" alt="">
                <div class="store-icons d-flex justify-content-around align-items-center">
                  <a href="#" class='store-icon'><i class="fas fa-heart fa-fw"></i></a>
                  <a href="#" class='store-icon'><i class="fas fa-search fa-fw"></i></a>
                  <a href="#" class='store-icon' data-id="<?php echo $product['id']?>"><i class="fas fa-shopping-cart fa-fw"></i></a>
                </div>
              </div>
              <div class="card-body">
                <div class="card-text d-flex justify-content-between text-capitalize">
                  <h5 id="store-item-name"><?php echo $product['name']?></h5>
                  <h5 class="store-item-value">Rs : <strong id="store-item-price" class="font-weight-bold"><?php echo $product['price']?></strong></h5>
                </div>
              </div>
            </div>
          </div>
        <!-- end of store item-->
        <?php endforeach;?>
      </div>
    </div>  
  </section><!--End of section products-->
  <!--end of store items -->

  <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Books Buy & Sell is a website where a user can either buy a particular product or sell a particular product.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">A responsive view is provided for ease access to the user as per his convinience.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center" id="contacts">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Mumbai City</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Books Buy & Sell</h4>
            <p class="lead mb-0">Books Buy & Sell is a website where a user can either buy a particular product or sell a particular product.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Books Buy & Sell 2019</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  <!-- jquery -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- script js -->
  <script src="js/app.js"></script>
</body>

</html>
  
    