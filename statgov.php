<?php
  session_start();
  $state="";
  
            $host="localhost";
            $dbUsername="root";
            $dbPassword="";
            $dbname="scholarship";
    
            $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
        //Here write your SQL query to get the data from your cards database
            $sql = "SELECT * FROM scholar ORDER BY id DESC";
            $result = $conn->query($sql);
        ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Scholarship</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  </head>

<body>

   
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <form method="POST" action="">
                      <a href="index.html" class="logo">
                          State Government
                      </a>
                      <ul class="nav">
                          <li><a href="index.php">Home</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Scholarship Categories</a>
                              <ul class="sub-menu">
                              <li><a href="foreign.php">Foreign Scholarship</a></li>
                              <li><a href="indiagov.php">Indian Government Scholarships</a></li>
                              <li class="has-sub">
                                  <a href="statgov.php">State Government Scholarships</a>
                                  
                              </li>
                              <li><a href="mnc.php">MNC's Scholarships</a></li>
                              
                              </ul>
                          </li>
                          <li class="has-sub">
                            <a href="#">State Government</a>
                            <ul class="sub-menu" name="state">
                              <li><a href="statgov.php">Maharashtra</a></li>
                              <li><a href="statgov.php">Andra Pradesh</a></li>
                            </ul>
                            
                        </li>
                        <li><a href="#" class="active">State Government</a></li>
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
</form>
                  </nav>
              </div>
          </div>
      </div>
  </header>
  
  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Here are our Foreign Scholarships</h6>
          <h2>Explore more scholarships here</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="meetings-page" id="meetings">
  <?php
        
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
         ?>
          <div class="card" style="margin:50px;">
            <div class="row">
              <div class="col-lg-4">
                <img src="assets/images/mahadbt.jpg">
              </div>
              <div class="col-lg-8">
                <div class="card-header"><?php echo $row['category']; ?></div>
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $row['title']; ?></h4>
                    <h5>Eligibility</h5>
                      <ul>
                        <?php
                          $rid=1;
                          $id=$row['id'];
                          $_SESSION['id']=$row['id'];
                          $elig=explode("-",$row['eligibility']);
                          for ($i=0; $i<2; $i++) {
                          ?>
                          <li><?php echo $elig[$i]; ?></li>
                          </ul>
                          <?php 
                          } ?>
                      <p class="card-text"><?php echo $row['document']; ?></p>
                      <a href="view.php?id=<?php echo $id; ?>" value= class="btn btn-primary">View Scholarship</a>
                      
                  </div>
                </div>
              </div>
            </div>
          </div>
      <br>
         <?php
           }
           }
           else
            { echo "No data found"; } ?>
        
        
          </section>
   
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    
</body>


  </body>

</html>
