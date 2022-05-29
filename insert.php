<?php
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
                echo "New Record Inserted";
            }
            else{
                echo "Someone already registered using this email";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else{
        echo "All fields are required";
    }
?>