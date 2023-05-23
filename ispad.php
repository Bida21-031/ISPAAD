<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/style.css">
        <title>ISPAAD</title>
        <link rel="icon" type="image/x-icon" href="images/logo.jpg">
        <style>
            body {
            background-image: url("images/image\ 1.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            }
        </style>
    </head>
    <body>
        <header>
          <h2>ISPAAD MANAGEMENT SYSTEM<br>
            Ministry Of Agriculture</h2>
           <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="addUsers.php">Add Users</a></li>
              <li><a href="#about">About Us</a></li>
              </ul>  
          </nav>
        </header>
        <div class="carousel">
          
        <?php
          @include('top.php');
            ?>
        </div>
        <main>
          <div class="about" id="about">
          <p><b>Integrated Support Programme for Arable Agriculture Development (ISPAAD)</b></p>
          <br>
          <p>Over the past three decades substantial amount of capital was used to fund the Accelerated Rain fed Arable Programme (ARAP), 
          Arable Land Development Programme (ALDEP) and other agricultural support programs. 
          Despite all these interventions these programs have not significantly improved the food security situation in the country. 
            On the 30th June 2008, ALDEP III was terminated and replaced with Integrated Support Programme for Arable Agriculture Development 
            (ISPAAD) to address challenges facing arable farmers and the inherent low productivity of the arable sub sector. 
            It was envisaged that the performance of the arable sub-sector would be greatly improved by establishing Agricultural Service Centres 
            and assisting arable farmers to acquire requisite inputs and draught power to undertake field operations.
          The components of the Integrated Support Programme for Arable Agriculture Development include, Cluster Fencing, 
            Provision of Potable Water, Seeds and Fertilizers, Facilitation of access to Credit and Establishment of Agricultural Service Centres. 
          </p>
          <br>
          <p>Arable farming is a costly venture, especially where most agricultural inputs are imported. It is imperative that arable farmers be 
            assisted to improve their competitiveness. Government will, therefore, facilitate access to seasonal loans for farmers by injecting 
            funds into the National Development Bank (NDB) to enable it to finance arable farming and reduce interest on loans. 
            NDB will provide seasonal loans at prime rate to farmers and beneficiaries of the facility will be required to take up the 
            Agricultural Credit Guarantee Scheme (ACGS).
          </p>
            <br>
            </div>
        <br></br>
        <footer>
        <div class="footer">
      <p>© 2023 Agriculture Management System</p>
      <p>Agricultural Department dedicated to providing innovative solutions to farmers and agricultural businesses to improve productivity, profitability, and sustainability in the agricultural industry</p>
      <p>All rights reserved | Design by BIDA21 GROUP2C></p>
    </div>
   </footer>
          
      </body>
</html>
