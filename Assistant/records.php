
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

   <div class="Farmers Information Page">
      <div class="form">
        
        <form class="Records" action="" method="post">
          <p> Farmers Records</p>
          <input name="name" type="text" placeholder="Farmer Name" required/>
          <input name="area" type="text" placeholder="Farming Area" required/>
          <input name="size"  type="number" placeholder="Ploughing Size(Max 4ha)" required/>
          <input name="report" type="text" placeholder="Assessment Report" required/>
          <input name="seeds" type="number" placeholder="Seeds issued(P/4ha)" required/>
          <input name="fertilizers" type="number" placeholder="Fertilizers issued(P/4ha)" required/>
          <button type="submit" name="submit" value="home.php">Save</button>
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
$area=$_POST['area'];
$size=$_POST['size'];
$report=$_POST['report'];
$seeds=$_POST['seeds'];
$fertilizers=$_POST['fertilizers'];



// Create connection
$conn = new mysqli('localhost', 'root', '', 'ispaad');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else{
    echo "New record created successfully";

    $stmt= $conn-> prepare("INSERT INTO records (name, area, size, report, seeds, fertilizers)
    VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("siisii",$name, $area, $size, $report, $seeds, $fertilizers);
    $stmt->execute();
    echo "New record created successfully";

}

$stmt->close();
$conn->close();
?>

