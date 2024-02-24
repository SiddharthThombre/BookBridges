
<!DOCTYPE html>
<?php
session_start();
include("function/functions.php");
include("includes/db.php");
?>
<html lang="en">

  <head>
    <title>Books Buy Sell</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Books Buy & Sell</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login/css/style.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
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
.brand::before {
  background: #212529;
  }
#foot{
  margin-top: -17px;
  height:50px;
}
#footlbl{
  margin-top: -10px;
}
/*end of  store items */
  </style>
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index1.php" style="margin-left: -100px;">BOOKS BUY SELL</a>
         
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>&nbsp;
      
      </div>
    </nav>      

    <div class="container">
   <section id="formHolder">

      <div class="row">

         <!-- Brand Box -->
         <div class="col-sm-6 brand">
            <a href="#" class="logo">Login/SignUp</a>

            <div class="heading">
                <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" width=140 height=140 alt="">
               <p>Once you have read a book you care about, some part of it is always with you.</p>
            </div>

            <div class="success-msg">
               <p>Great! You are one of our members now</p>
               <a href="#" class="profile">Your Profile</a>
            </div>
         </div>


         <!-- Form Box -->
         <div class="col-sm-6 form">

            <!-- Login Form -->
            <div class="login form-peice switched">
               <form class="login-form" action="login1.php" method="post">
                  <div class="form-group">
                     <label for="loginemail">Email Adderss</label>
                     <input type="email" name="loginemail" id="loginemail" required>
                  </div>

                  <div class="form-group">
                     <label for="loginPassword">Password</label>
                     <input type="password" name="loginPassword" id="loginPassword" required>
                  </div>

                  <div class="CTA">
                     <input type="submit" name="login" value="Login">
                     <a href="#" class="switch">I'm New</a>
                  </div>
                   <a href="checkout.php?forgot_pass">Forgot password</a>
               </form>
            </div><!-- End Login Form -->


            <!-- Signup Form -->
            <div class="signup form-peice">
               <form action="login1.php" class="signup-form"  method="post">

                  <div class="form-group">
                     <label for="name">Full Name</label>
                     <input type="text" name="username" id="name" class="name">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="email">Email Address</label>
                     <input type="email" name="emailAdress" id="email" class="email">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="phone">Phone Number - <small>Optional</small></label>
                     <input type="text" name="phone" id="phone">
                  </div>
                  

                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" class="pass">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="passwordCon">Confirm Password</label>
                     <input type="password" name="passwordCon" id="passwordCon" class="passConfirm">
                     <span class="error"></span>
                  </div>

                  <div class="CTA">
                     <input type="submit" value="Signup" name="signup" id="submit">
                     <a href="#" class="switch">I have an account</a>
                  </div>
               </form>
            </div><!-- End Signup Form -->
         </div>
      </div>

   </section>

</div>
    <div class="copyright py-4 text-center text-white" id="foot">
      <div class="container" id="footlbl">
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src="login/js/index.js"></script>

    
    
    <?php if(isset($_POST['signup'])){
        $ip = getIpAdd();
        $c_name = $_POST['username'];
        $c_email = $_POST['emailAdress'];
        $c_phone = $_POST['phone'];
        $c_pass = $_POST['password'];
        $query = "INSERT INTO customer (`cust_ip`, `name`, `email`, `password`, `phone`) VALUES ('$ip','$c_name','$c_email','$c_pass','$c_phone')";
        $result = mysqli_query($conn, $query);
        if($result){
            echo "<script>alert('Registration Successful')</script>";
        }
        $get_items="SELECT * FROM `cart` WHERE `ip_add`='$ip'";
        $run=mysqli_query($conn, $get_items);
        $check_cart = mysqli_num_rows($run);
        if($check_cart==0){
            $_SESSION['email']=$c_email;
            echo "<script>window.open('index.php','_self')</script>";
        }
        else{
            $_SESSION['email']=$c_email;
            echo "<script>window.open('checkout.php','_self')</script>";
            
            
        }
        
    }
    //sign in
            if(isset($_POST['login'])){
                $email= $_POST['loginemail'];
                $pass = $_POST['loginPassword'];
                $sel_c="select * from customer where password='$pass' AND email='$email'";
                $run_c=mysqli_query($conn,$sel_c);
                $check_customer=mysqli_num_rows($run_c);
                if($check_customer==0)
                {
                    echo "<script>alert('Password or Username is incorrect')</script>";
                }
                 $ip = getIpAdd();
                    $get_items="SELECT * FROM `cart` WHERE `ip_add`='$ip'";
                    $run=mysqli_query($conn, $get_items);
                    $check_cart = mysqli_num_rows($run);
                    if($check_customer>0 AND $check_cart==0){
                        
                         $_SESSION['email']=$email;
                         echo "<script>alert('Login Successful')</script>";
                        echo "<script>window.open('index.php','_self')</script>";
                    }
                    if($check_customer>0 AND $check_cart>0){
                            $_SESSION['email']=$email;
                          echo "<script>alert('Login Successful')</script>";
                        echo "<script>window.open('index.php','_self')</script>";
            
            
        }
    
            }?>
</body>

</html>
  
    