<?php
include('lib/function.php');
$db		=	new db_function();
$urname="";
$pwd="";
$user_name_error="";
$flag	=	0;
$password_error="";
if(isset($_POST['login']))
{
  $urname	=	$_POST['urname'];
  $pwd	=	$_POST['pwd'];
  
  $db_password	=	$db->admin_login($urname);
  if($db_password=="")
  {
    echo '<script>alert("Could not login")</script>';
    $flag=1;
  }
  else
  {
    if($db_password==$pwd)
    {
      echo '<script>alert("Login successfully..!")</script>';
      /*header("location:dashboard.php");*/
    }	
    else
    {
      echo '<script>alert("Incorrect Password..")</script>';
      $flag=1;
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Scholarships</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

  </head>

<body>

  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      
                      <a href="index.html" class="logo">
                          Scholarships
                      </a>
                      
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Admin Login</a></li>
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      
                  </nav>
              </div>
          </div>
      </div>
  </header>
 <br>
 <br>
  
  <section class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 align-self-center">
          <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
              <form id="contact" action="sholrdet.php" method="POST">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Admin Login</h2>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="text" id="name" name="urname" placeholder="Username" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                    <input  type="password" id="pwd" name= "pwd" placeholder="Your Password." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button" name="login">LOGIN</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-4"></div>
          </div>
        </div>
       </div>
    </div>
    <br>
    <br>
  </section>
<br>
<br>
<br>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>