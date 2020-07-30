<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include('includes/dbconnection.php');
?>
<html>
	<head>
	<!-- meta tag section-->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- meta tag section end-->
	<title>Shelter - Service Apartment</title>
	<!-- css styleing link-->
	<!--bootstrap link-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="css/style.css">     
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="font-awesome\css\font-awesome.css">
	<link rel="stylesheet" href="font-awesome\css\font-awesome.min.css">

	<!-- css styleing link end-->
	</head>
	<body>
	<!--header section-->
	<header>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top transparent">
            <a class="navbar-brand" href="index 2.php"><img src="image/logo.jpg" alt="imade not found" width="100px%" height="60px"></a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
               <ul class="navbar-nav ment-list-format">
                  <li class="nav-item <?= ($activePage == 'index 2') ? 'active':''; ?>">
                     <a class="nav-link text_white" href="index 2.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item <?= ($activePage == 'about') ? 'active':''; ?>">
                     <a class="nav-link text_white" href="about.php">About</a>
                  </li>
                  <li class="nav-item <?= ($activePage == 'project') ? 'active':''; ?>">
                     <a class="nav-link text_white" href="project.php">Project</a>
                  </li>
				  <li class="nav-item <?= ($activePage == 'service') ? 'active':''; ?>">
                     <a class="nav-link text_white " href="service.php">Service</a>
                  </li>
				  <li class="nav-item <?= ($activePage == 'contact') ? 'active':''; ?>">
                     <a class="nav-link text_white" href="contact.php">Contact</a>
                  </li>
               </ul>
			<button style="background:orange;" class="btn btn-info d-none d-md-block text-white" data-toggle="modal" data-target="#myModal"type="button">
			 Book Now
            </button>
            </div>
         </nav>
	</header>
	
</body>

</html>