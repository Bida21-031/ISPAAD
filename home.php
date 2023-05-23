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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="trcCET12jdfqhvZd9smbcBXUZUFA7AyfdvxqHuWt">

    <title>ISPAAD</title>
    <link rel="icon" type="image/x-icon" href="images/logo.JPG">
    <?php
    @include('css.php');
    ?>  
  </head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">
    <div>
    <?php
          @include('sidebar.php');
    ?>
    </div>
    <?php
        @include('navbar.php');
    ?>

    <div class="app-body"> 
        <main class="main">


        </main>
       
    </div>

    <footer class="container-fluid text-center">
    <p>© 2023 | Design by BIDA21 GROUP2C</p>
        
</footer>

    <?php
            @include('scripts.php');
            ?>
    
</body>

</html>
