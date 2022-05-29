<?php
include('lib/function.php');
$db		=	new db_function();
$category="";
$title="";
$elig="";
$doc	="";
$link="";
if(isset($_POST['submit']))
{
  $category	=	$_POST['category'];
  $title	=	$_POST['title'];
  $elig     =   $_POST['eligibility'];
  $doc      =   $_POST['doc'];
  $link     =   $_POST['link'];
  
  if($db->insert_scholarship_details($category,$title,$elig,$doc,$link))
    {
        echo '<script>alert("Details inserted..")</script>';
    }
    else
    {
        echo '<script>alert("Could not inserted details")</script>';
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
                          <li class="scroll-to-section"><a href="admin.php" class="active">Logout</a></li>
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
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <form id="contact" action="" method="POST">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Scholarship Details</h2>
                  </div>
                  <div class="col-lg-12">
                    <h6>Select Category</h6>
                    <fieldset>
                        <select class="form-control" name="category" id="category" required="">
                            <option value="Maharashtra State">Maharashtra </option>
                            <option value="Indian Government">Indian Government</option>
                            <option value="MNC">MNC</option>
                            <option value="Foreign">Foreign</option>
                        </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <h6>Scholarship Title</h6>
                    <fieldset>
                      <input type="text" id="name" name="title" placeholder="title" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <h6>Enter Eligibility</h6>
                    <fieldset>
                    <textarea name="eligibility" placeholder="Enter Eligibility(Seperate by comma)..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <h6>Enter Documents Required</h6>
                    <fieldset>
                    <textarea name="doc" placeholder="Enter Documents Required(Seperate by comma)..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                      <h6>Enter Official Link</h6>
                    <fieldset>
                    <input  type="text"  name= "link" placeholder="Enter Official link" required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button" name="submit">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-2"></div>
          </div>
        </div>
       </div>
    </div>
    <br>
    <br>
  </section>

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