<?php
session_start();
$email=$_SESSION['email'];
?>



 <?php 

             $username = "";
              $errors = array(); 

              // connect to the database
              $db = mysqli_connect('localhost', 'root', '', 'nikflix');
              
                  $sql= "SELECT * FROM customer WHERE user_id='$email';";
                  $results = mysqli_query($db, $sql);
                  if (mysqli_num_rows($results) > 0)
                  {
                      while($row= mysqli_fetch_assoc($results))
                      {
                        $name=$row["cust_name"];
                        $age=$row["age"];
                        $sex=$row["sex"];
                        $phone=$row["phone_number"];
                        $password=$row["password"];

                      } 
                      echo "</table>";  

                  }            

                  else
                  {
                     array_push($errors, "Please enter valid option");
                  }

              mysqli_close($db);
            
            ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOW DETAILS</title>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;
      height:100%;
     width:100%;
    background-image:url(tv_series.jpg) ;
    background-repeat:no-repeat;
     background-size:cover;
   
}

.contain{
    position: absolute;
    top:60%;
    left:40%;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=tel], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: rgb(0, 183, 255);
    color: white;
    padding: 15px;
    margin: 8px 30%;
    border: 1px solid transparent;
    border-radius: 20px;
    cursor: pointer;
    width: 50%;
    font-size: 24px;

}

button:hover {
    color:black;
    background: #f44336;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
     /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 90%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
}


/* Add Zoom Animation */
.animate {
    animation: animatezoom 0.6s;
}

.modal2 {
   
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 50%;
    top: 0;
    width: 50%; /* Full width */
    height: 100%; /* Full height */
    overflow: hidden; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4);
    padding-top: 60px;
}

/* Modal Content/Box */
.modal2-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered*/
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */



/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

h1{
    margin:25px;
    text-transform: uppercase;

}
</style>
</head>

  
<body>

  

  <div class="contain">
  <div id="id01" class="modal">
  <form class="modal-content animate" action="modification.php" method="post">
    
    <h1>UPDATE INFO</h1>
    <hr>
    <div class="container">
      <label for="tv_id"><b>NAME</b></label>
      <input type="text" placeholder="" name="name" value="<?php echo @$name;?>">

      </div>
      
    <div class="container">
      <label for="tv_name"><b>AGE</b></label>
      <input type="text" placeholder="" name="age" value="<?php echo @$age;?>">
    </div>
      
    <div class="container">
      <label for="genre"><b>SEX</b></label>
      <input type="text" placeholder="" name="sex" value="<?php echo @$sex;?>">
    </div>
      
    <div class="container">
      <label for="season"><b>PHONE_NUMBER</b></label>
      <input type="text" placeholder="" name="phone" value="<?php echo @$phone;?>">
              
     </div>
     
    <div class="container">
    <label for="year" ><b>EMAIL_ID</b></label>
    <input type="text" id="psw" placeholder="" name="email" value="<?php echo @$email;?>" required readonly>         
    </div>


     <div class="container">
    <label for="year" ><b>PASSWORD</b></label>
    <input type="text" id="psw" placeholder="" name="password" value="<?php echo @$password;?>" >         
    </div>
    
    <!--<div class="container">
    <label for="email" ><b>Email</b></label>
    <input type="email" id="email" placeholder="enter email" name="email" required >         
    </div>-->

    <div class="btn">
    	
      		<button type="submit" class="btn" name="btnn">UPDATE</button>
    </div>
    
    </form>
</div>
</div>
</div>
</body>
</html>
