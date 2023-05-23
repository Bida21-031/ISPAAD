<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/style.css">
        <title>ISPAAD</title>
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
              <button type="submit">
                <a href="home.php">HOME</a>
            </button>
            </ul>  
          </nav>
        </header>
        <br></br>

   <div class="Register Page">
      <div class="form">
        <form class="registration-form" action="" method="post">
          <p>Register Farmer</p>
          <input name="name" type="text" placeholder="Name" required/>
          <input name="surname" type="text" placeholder="Surname" required/>
          <input name="fam_area" type="text" placeholder="Farming Area" required/>
          <input type="number" name="ploArea" placeholder="Ploughing Area" required/>
          <input type="number" name="ftz" placeholder="Fertilizers to be issued(P/4ha)" required/>
          <input type="number" name="seeds" placeholder="Seeds to be issued(P/4ha)" required/>
         <button type="number" value="login">Save</button>

</div>
        </form>
        
      </div>
    </div>
    <br></br>
    <footer>
      <p>© 2023 Agriculture Management System</p>
      <p>Agricultural Department dedicated to providing innovative solutions to farmers and agricultural businesses to improve productivity, profitability, and sustainability in the agricultural industry</p>
      <p>All rights reserved | Design by BIDA21 GROUP2C></p>
    </footer>
    
  </body>
</html>

<?php

$name=$_POST['name'];
$surname=$_POST['surname'];
$fam_area=$_POST['fam_area'];
$ploArea=$_POST['ploArea'];
$ftz=$_POST['ftz'];
$seeds=$_POST['seeds'];



// Create connection
$conn = new mysqli('localhost', 'root', '', 'ispaad');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else{

    $stmt= $conn-> prepare("INSERT INTO farmers ( name,  surname,  fam_area,  ploArea,  ftz,  seeds)
    VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("sssiii",$name, $surname, $fam_area, $ploArea, $ftz, $seeds);
    $stmt->execute();
    echo "New record created successfully";

}

$stmt->close();
$conn->close();
?>