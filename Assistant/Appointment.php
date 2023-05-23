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
  <body>


    <div class="Appointment Page">
      <div class="form">
        <form class="Appointment-form" action="" method="post">
          <h4>Appointment</h4>
          <br>
          <label for="name">Farmer Name:</label>
          <input type="text" name="name" placeholder="Farmer Name" required/>
          <label for="contact">Farmer Contact:</label>
          <input type="text" name="contact" placeholder="Farmer Contact" required/>
          <label for="appdate">Appointment Created Date:</label>
          <input type="date" name="appdate" placeholder="Appointment Created Date " required/>
          <label for="area">Farming Area:</label>
          <input type="text" name="area" placeholder="Farming Area" required/>
          <label for="setDate">Set Appoinment Date:</label>
          <input type="date" name="setDate" placeholder="Set Appoinment Date" required/>
          <button type="submit">Save</button>
        </form>
      </div>
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

<?php

$name=$_POST['name'];
$contact=$_POST['contact'];
$appdate=$_POST['appdate'];
$area=$_POST['area'];
$setDate=$_POST['setDate'];




// Create connection
$conn = new mysqli('localhost', 'root', '', 'ispaad');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else{
    echo "New record created successfully";

    $stmt= $conn-> prepare("INSERT INTO appointments (name, contact, appdate, area, setDate)
    VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss",$name, $contact, $appdate, $area, $setDate);
    $stmt->execute();
    echo "New record created successfully";

}

$stmt->close();
$conn->close();
?>

