<?php
$name="";
$email="";
ini_set("SMTP", "ssl://smtp.gmail.com");
ini_set("smtp_port", "587");
ini_set("sendmail_from", "shlomo@zend.com");
$msg = "Dear Student,\nYour Registration Done..!";
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $date	= date("Y-m-d");
  if(!empty($name)||!empty($email)){
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="scholarship";

    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        
        $SELECT="SELECT email from student where email=? LIMIT 1";
        $INSERT="INSERT Into student(name,email,date) values(?,?,?)";

        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        if($rnum==0){
            $stmt->close();

            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("sss",$name,$email,$date);
            $stmt->execute();
            echo '<script>alert("Student registered successfully..!")</script>';
            
        }
        else{
          echo '<script>alert("Someone already registered with this email")</script>';
          $msg = wordwrap($msg,70);
          mail("saundaryasargam2002@gmail.com","Registration Done",$msg);
        }
        $stmt->close();
        $conn->close();
    }
  }
  else{
    echo "All fields are required";
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
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          Scholarships
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Scholarship Categories</a>
                              <ul class="sub-menu">
                                  <li><a href="foreign.php">Foreign Scholarship</a></li>
                                  <li><a href="indiagov.php">Indian Government Scholarships</a></li>
                                  <li><a href="statgov.php">State Government Scholarships</a></li>
                                  <li><a href="mnc.php">MNC's Scholarships</a></li>
                              </ul>
                          </li>
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      
                  </nav>
              </div>
          </div>
      </div>
  </header>
 
  <section class="section main-banner" id="top" data-section="section1">
     <img id="bg-video" src="assets/images/sch1.jpg"/>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="caption">
              <h6>Hello Students</h6>
              <h2>Welcome to Scholarship Treasure.</h2>
              <p>This is an scholarship portal,where you can find all type of scholarships </p>
              <div class="main-button-blue">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  
  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="POST">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Let's get in touch</h2>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input name="name" type="text" id="name" name="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" name= "email" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button" name="submit">REGISTER</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
       </div>
    </div>
    <br>
    <br>
  
  </section>
  

 
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>