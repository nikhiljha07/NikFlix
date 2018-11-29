<?php
session_start();
$email=$_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>HOME PAGE</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style>
			
        .choose_city{
              text-align: center;
              border:1px solid rgb(83, 198, 233);
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.671), 0 6px 20px 0 rgba(0, 0, 0, 0.678);
              background: linear-gradient(-39deg, rgb(0, 204, 255), rgb(231, 136, 250));
              margin:30px;
              padding:80px 0;
        }

        .choose_city h3{
            padding:10px;
            margin:10px;
        }

        .choose_city form input{
            padding:10px;
            margin-bottom: 20px;
            

        }

        .choose_city button{
            padding:20px;
            color:black;
            background-color: aqua;
            border: none;
            border-radius: 20px;

        }

        button:hover{
            color:black;
            background-color: rgb(17, 247, 197);
            cursor: pointer;
        }
         
        input[type="text"]:focus, #city-style:focus{
            transition: 0.6s ease-out;
            padding: 16px;
            font-size: 15px;
            color:black;
            border:none;
            border-radius: 10px;
        }

        .city{

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
						<li><a href="after login.php">HOME</a></li>
						<li><a href="../../myprofile1.php">MY PROFILE</a></li>
						<li><a href="../../myshows.php">MY SHOWS</a></li>
						<li><a href="../../realstoredproc.php">TV SERIES DETAILS</a></li>
						<li><a href="../../actorsproc.php">ACTORS</a></li>
						<li><a href="../../dropdown.php">FILTER</a></li>
						<li><a href="../../login.html">LOG OUT</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->

		

		<!-- Shows -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>OUR SHOWS</h2>
						
					</div>
				</div>
				<!-- /row -->

				<!-- shows -->
				<div id="courses-wrapper">

					<!-- row -->
					<div class="row">

						<!-- single show -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="../../narcos11.html" class="course-img">
									<img src="./img/narcos_2.jpg"  height=fit width=fit alt="">
								</a>
								<a class="course-title" href="#">NARCOS SEASON 1</a>
							</div>
						</div>
						<!-- /single show -->

						<!-- single show -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="../../narcos2.html" class="course-img">
									<img src="./img/narcos2_1.jpg"  height=fit width=fit alt="">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
								<a class="course-title" href="#">NARCOS SEASON 2</a>
								<!--<div class="course-details">
									<span class="course-category">Web Design</span>
									<span class="course-price course-premium">Premium</span>
								</div>-->
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="../../got1.html" class="course-img">
									<img src="./img/got1_1.jpg" alt="">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
								<a class="course-title" href="#">GAME OF THRONES SEASON 1</a>
								<!--<div class="course-details">
									<span class="course-category">Drawing</span>
									<span class="course-price course-premium">Premium</span>
								</div>-->
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="../../got2.html" class="course-img">
									<img src="./img/got2.jpg" alt="">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
								<a class="course-title" href="#">GAME OF THRONES SEASON 2</a>
								<!--<div class="course-details">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>-->
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="../../hoc.html" class="course-img">
									<img src="./img/hoc.jpg" alt="">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
								<a class="course-title" href="#">HOUSE OF CARDS</a>
								<!--<div class="course-details">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>-->
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="../../hohh.html" class="course-img">
									<img src="./img/hohh.jpg" alt="">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
								<a class="course-title" href="#">THE HAUNTING OF HILL HOUSE</a>
								<!--<div class="course-details">
									<span class="course-category">Web Design</span>
									<span class="course-price course-free">Free</span>
								</div>-->
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="../../billions.html" class="course-img">
									<img src="./img/billions.jpg" alt="">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
								<a class="course-title" href="#">BILLIONS</a>
								<!--<div class="course-details">
									<span class="course-category">Photography</span>
									<span class="course-price course-free">Free</span>
								</div>-->
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="../../sg.html" class="course-img">
									<img src="./img/sg.jpg" alt="">
									<!--<i class="course-link-icon fa fa-link"></i>-->
								</a>
								<a class="course-title" href="#">SACRED GAMES</a>
								<!--<div class="course-details">
									<span class="course-category">Typography</span>
									<span class="course-price course-free">Free</span>
								</div>-->
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

				</div>
				<!-- /courses -->


			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->


		

		<div class="container" >
			<div class="choose_city">
                
                    <h3>CHOOSE TV_SERIES</h3>
                    <form method="post" action="../../show_details1.php">
                        <input id="city-style" list="city" name="tv_series" placeholder="CHOOSE ONE">
                            <datalist id="city">
                            <option value="NARCOS_SEASON_1">
                            <option value="NARCOS_SEASON_2">
                            <option value="GAME_OF_THRONES_SEASON_1">
                            <option value="GAME_OF_THRONES_SEASON_2">
                            <option value="HOUSE OF CARDS">
                            <option value="THE HAUNTING OF HILL HOUSE">
                            <option value="BILLIONS">
                            <option value="SACRED GAMES">	
                            </datalist>
                            <button type="submit" name="btnn">submit</button>
                    </form>  
                        
                    
                </div>
           
   		</div>


   		

		 	

		

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>
