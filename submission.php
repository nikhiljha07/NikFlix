<?php
$email=$_POST['email'];
$tv_id=$_POST['tv_id'];

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
$sql = "SELECT user_id FROM customer where user_id='$email';";
$result = $conn->query($sql);
if ($result->num_rows > 0)	
{
	$query="INSERT INTO `users` ()
    VALUES ('$email','$tv_id')";
    $conn->query($query);
	header("location:./edusite/edusite/../../myshows.php");
 }   
else 
{
    echo "Wrong email";
}
$conn->close();
?>