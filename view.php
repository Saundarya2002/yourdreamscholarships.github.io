<?php
  session_start();
  $host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $id="";
  $dbname="scholarship";
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    
  }
  
  $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
        //Here write your SQL query to get the data from your cards database
            $sql = "SELECT * FROM scholar where id=".$id;
            $result = $conn->query($sql);
        ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Scholarship</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
  </head>

<body>

   

 

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                         Scholarship Details
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="index.html">Home</a></li>
                         
                          
                          <li class="has-sub">
                            <a href="javascript:void(0)">Scholarship Categories</a>
                            <ul class="sub-menu">
                                <li><a href="meetings.html">Foreign Scholarships</a></li>
                                <li><a href="meeting-details.html">Indian Government Scholarships</a></li>
                                <li><a href="meeting-details.html">State Government Scholarships</a></li>
                                <li><a href="meeting-details.html">MNC's Offered Scholarships</a></li>
                            </ul>
                          </li>
                          <!--<li><a href="index.html" class="active">State Government Scholarship</a></li> -->
                
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Get all details</h3>
          
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
               <!-- <div class="thumb">
                <?php
                  if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                
                ?>
                  <a href="view.php"><img src="assets/images/mahadbt.jpg" alt=""></a>
                </div>-->
                <div class="down-content">
                  <h4><?php echo $row['title']; ?></h4></a>
                  <br>
                  <h5>Eligibility</h5>
                  <ul>
                  <?php
                          $elig=explode("-",$row['eligibility']);
                          for ($i=0; $i<count($elig); $i++) {
                          ?>
                          <li><?php echo $elig[$i]; ?></li>
                          <?php 
                          } ?>
                  </ul>
                  <h5>Documents Required</h5>
                  <ul>
                  <?php
                          $doc=explode("-",$row['document']);
                          for ($i=0; $i<count($doc); $i++) {
                          ?>
                          <li><?php echo $doc[$i]; ?></li>
                          <?php 
                          } ?>
                  </ul>
                  <br>
                  <div class="main-button-blue">
                  <div class="scroll-to-section"><a href="<?php echo $row['link'];?>">Visit Official Link</a></div>
                  </div>
                  
                  <?php
           }
           }
           else
            { echo "No data found"; } ?>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <!--<div class="col-lg-12">
              
              <button class="btn btn-primary" onclick="history.back()">Go Back</button>
              
            </div>-->
            <br>
          </div>
        </div>
      </div>
    </div>
    
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
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
