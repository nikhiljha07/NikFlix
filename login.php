<?php
session_start();
$uname=$_POST['uname'];
$psw=$_POST['psw'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nikflix";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT user_id,password FROM customer where user_id='$uname' and password='$psw';";
$result = $conn->query($sql);
if ($result->num_rows > 0)	
{
	$_SESSION['email']=$uname;
	$_SESSION['success']="You are now logged in";
	header("location:./edusite/edusite/after login.php");
}
else 
{
    echo "Wrong username/password combination";
}
$conn->close();
?>
