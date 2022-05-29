        // Here you need to create your connection to the database with your values
        <?php
            $host="localhost";
            $dbUsername="root";
            $dbPassword="";
            $dbname="scholarship";
    
            $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
        //Here write your SQL query to get the data from your cards database
            $sql = "SELECT * FROM scholar";
            $result = $conn->query($sql);
        ?>

        // Then we start with the html code to get the data and show the cards
        <!doctype html>
        <html>
          <body>
           <h1 align="center">CARDS</h1>
        <?php
        //Fetch Data form database
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
         ?>
            <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['title'] ?></h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
         <?php
           }
           }
           else
            { echo "No data found"; } ?>
          </body>
        </html> 
