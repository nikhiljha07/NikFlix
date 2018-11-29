<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>actor shows</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="style1.css"/>
   <link type="text/css" rel="stylesheet" href="myshows.css"/>

<style>

    body
     {
        font-family: Arial, Helvetica, sans-serif;
        height:100%;
        width:100%;
        background-image:url(tv_series.jpg) ;
        background-repeat:no-repeat;
        background-size:cover;
   
    }


    * {
        margin: 0px;
        padding: 0px;
    }
    body{
            position: relative;
            box-sizing: border-box;
            padding: 0%;
            margin: auto;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-weight: 700;
            font-family: Poppins-Bold;
            text-shadow: 0 1px 1px #1f1c18;
            width:100%;
            height: auto;
          
            
    }

    .popup { 
            position: fixed; 
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
            
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 65%;
            background: linear-gradient(-39deg, rgb(0, 204, 255), rgb(231, 136, 250));
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.671), 0 6px 20px 0 rgba(0, 0, 0, 0.678);
             /* Could be more or less, depending on screen size */
        }

        #pkg {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #pkg td, #pkg th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #pkg tr:nth-child(even){background-color: #f2f2f2;}

        #pkg tr:hover {background-color:#e9afab;}

        #pkg th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #605df7;
            color: white;
        }

        #head{
            text-align:center;
            color:#353535;
            padding:20px;
            margin:10px;
            text-decoration: underline;
        }

         img{
            width:100%;
            height: auto;
            filter: blur(1px);
            position:fixed;
        }

        input{
            border:none;
            border-radius:20px;
            color:#353535;
            padding:9px;
            margin:20px;
            text-align:center;
            text-decoration:bold;
        }

        .input{
            text-align:center;
            position:relative;
            bottom:70px;
        }

        button{
            border:none;
            border-radius:10px;
            color:#353535;
            background: #dd1f78;
            padding:9px;
            margin:20px;
           
            
        }

        
        


</style>
</head>
    
<body>

      <!-- Header -->
    <header id="header" class="transparent-nav">
      <div class="container">

        <div class="navbar-header">
          <!-- Logo -->
          <div class="navbar-brand">
            <a class="logo" href="index.html">
              <!--<img src="./img/logo-alt.png" alt="logo">-->
            </a>
          </div>
          <!-- /Logo -->

          <!-- Mobile toggle -->
          <button class="navbar-toggle">
            <span></span>
          </button>
          <!-- /Mobile toggle -->
        </div>

        <!-- Navigation -->
        <nav id="nav">
          <ul class="main-menu nav navbar-nav navbar-right">
            <li><a href="./edusite/edusite/after login.php">HOME</a></li>
            <li><a href="./myprofile1.php">MY PROFILE</a></li>
            <li><a href="./myshows.php">MY SHOWS</a></li>
            <li><a href="./realstoredproc.php">TV SERIES DETAILS</a></li>
            <li><a href="./actorsproc.php">ACTORS</a></li>
            <li><a href="./dropdown.php">FILTER</a></li>
            <li><a href="./login.html">LOG OUT</a></li>
          </ul>
        </nav>
        <!-- /Navigation -->

      </div>
    </header>
    <!-- /Header -->


    <div id= "modal" class="popup">  
       
        <div class="modal-content">
            
            <h3 id="head">ACTOR</h3>
            <table id="pkg">
            <tr>
                
                <th>TV_SERIES NAME</th>
                <th>GENRE</th>
                <th>YEAR OF RELEASE</th>
                <th>SEASON</th>
            </tr>
          </div>
        </div>
                  
<?php 
                 
             $username = "";
              $email    = "";
              $errors = array(); 

              // connect to the database
              $db = mysqli_connect('localhost', 'root', '', 'nikflix');
             

              if (isset($_POST['btnn'])) {

                  
                 $input=mysqli_real_escape_string($db, $_POST['actor_name']);
                 echo $input;
              
                  $sql= "SELECT a.actor_name,t.tv_name,t.genre,t.year_of_release,t.season FROM tv_series t,actor a,cast c WHERE a.actor_name= '$input' and c.actor_id=a.actor_id and c.tv_id=t.tv_id;";
                  $results = mysqli_query($db, $sql);
                  if (mysqli_num_rows($results) > 0)
                  {
                      while($row= mysqli_fetch_assoc($results))
                      {
                         //$tv_id=$row["tv_id"];
                         $actor_name=$row["actor_name"];
                         $tv_name=$row["tv_name"];
                         $genre=$row["genre"];
                         $year=$row["year_of_release"];
                         $season=$row["season"];

                         echo  "<tr><td>" .$tv_name ."</td><td>" .$genre ."</td><td>" .$year. "</td><td>" .$season ."</td></tr>";
                      }
                       
                      //echo $tv_name;
                      //echo $season;
                      echo "</table>";  

                  }            

                  else{
                      array_push($errors, "Please enter valid option");
                  }
              }

              mysqli_close($db);
            
           ?>

</body>
</html>