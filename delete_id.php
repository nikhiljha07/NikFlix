<?php
session_start();
$email=$_SESSION['email'];
?>
<?php 
              $username = "";
              $errors = array(); 
              // connect to the database
              $db = mysqli_connect('localhost', 'root', '', 'nikflix');
              if (isset($_POST['btnn'])) {
                  $input=mysqli_real_escape_string($db, $_POST['tv_id']);
                  $sql= "DELETE FROM users WHERE user_id='$email' AND tv_id='$input';";
                  $results = mysqli_query($db, $sql);
                  header("location:./myshows.php");
              }

              mysqli_close($db);
            
            ?>