<?php
	session_start();
	class db_function
	{
		private $con;
		function __construct()
		{
			$this->con=new mysqli("localhost","root","","scholarship");
		}
	
		function insert_student_details($name,$email_id)
		{
			echo 2;
			$date	= date("Y-m-d");
		
			if($stmt=$this->con->prepare("INSERT INTO `student`( `name`,`email`,`date`) VALUES(?,?,?)"))
			{
				echo 3;
				$stmt->bind_param("sss",$name,$email_id,$date);
			
				if($stmt->execute())
				{
					echo 4;
					return true;
				}
			}
			else
			{
				return false;
			}
		}
		function insert_scholarship_details($category,$title,$elig,$doc,$link)
		{
			echo 2;
			$date	= date("Y-m-d");
		
			if($stmt=$this->con->prepare("INSERT INTO `scholar`(`category`, `title`, `eligibility`, `document`, `link`, `date`) VALUES(?,?,?,?,?,?)"))
			{
				echo 3;
				$stmt->bind_param("ssssss",$category,$title,$elig,$doc,$link,$date);
			
				if($stmt->execute())
				{
					echo 4;
					return true;
				}
			}
			else
			{
				return false;
			}
		}
	
	
	function admin_login($urname)
	{
		if($stmt=$this->con->prepare("SELECT `password` FROM `admin` WHERE `adminname`=?"))
		{
			$stmt->bind_param("s",$urname);
			$stmt->bind_result($res_password);
			
			if($stmt->execute())
			{
				if($stmt->fetch())
				{
					return $res_password;
				}
			}
		}
	
		else
		{
				return false;
		}
	}
//End Main  Class

	}
?>