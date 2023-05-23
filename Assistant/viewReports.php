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
          <p>Records</p>


<?php
$hostName = "localhost";
$username = "root";
$password = "";
$databaseName = "ispaad";
$conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {

    $query= "SELECT name, area, size, report, seeds, fertilizers FROM records";
$prepared = $conn->prepare($query);
$prepared->execute();
$result = $prepared -> fetchAll(PDO::FETCH_ASSOC);
 ?>
 <table border="1" cellpadding="10" cellspacing="0">
 <tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Area</th>
    <th>Size</th>
    <th>Report</th>
    <th>Seeds</th>
    <th>Fertilizers</th>
  </tr>
 <?php
 $sn=1;
 foreach($result as $data) {
   
   ?>
    <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['name']; ?> </td>
   <td><?php echo $data['area']; ?> </td>
   <td><?php echo $data['size']; ?> </td>
   <td><?php echo $data['report']; ?> </td>
   <td><?php echo $data['seeds']; ?> </td>
   <td><?php echo $data['fertilizers']; ?> </td>

    </tr>
    <?php
        $sn++;

  }
  ?>
</table>
  <?php
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>

</div>
        </form>
        
      </div>
    </div>
    <br></br>
    <footer class="footer container-fluid text-center">
    <p>© 2023 Agriculture Management System</p>
          <p>Agricultural Department dedicated to providing innovative solutions to farmers and agricultural businesses to improve productivity, profitability, and sustainability in the agricultural industry</p>
          <p>All rights reserved | Design by BIDA21 GROUP2C></p>
        
</footer>
    
  </body>
</html>

