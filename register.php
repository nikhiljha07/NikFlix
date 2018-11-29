<?php
$sex=$_POST['sex'];
$cname=$_POST['cname'];
$phone=$_POST['phone'];
$psw=$_POST['psw'];
$email=$_POST['email'];
$pswrepeat=$_POST['pswrepeat'];
$age=$_POST['age'];

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
if ($psw!=$pswrepeat) 
{
    echo "password mismatch";
}
else
{
    $sql = "INSERT INTO `customer` ()
    VALUES ('$cname','$age','$sex','$phone','$email','$psw')";

    if ($conn->query($sql) === TRUE) 
    {
        $_SESSION['email']=$uname;
        $_SESSION['success']="You are now logged in";
        header("location:./edusite/edusite/after login.php");
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
