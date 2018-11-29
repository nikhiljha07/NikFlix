<?php
session_start();
$email=$_SESSION['email'];
?>


<?php 
		
			$sex=$_POST['sex'];
			$name=$_POST['name'];
			$phone=$_POST['phone'];
			$psw=$_POST['password'];
			$age=$_POST['age'];

			echo $password;

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "nikflix";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql="UPDATE customer set cust_name='$name',age='$age',sex='$sex',phone_number='$phone',password='$psw' where user_id='$email';";

			$conn->query($sql);

			header("location:login.html");

			$conn->close();
?>



      