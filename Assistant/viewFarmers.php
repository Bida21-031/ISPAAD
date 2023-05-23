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
          <p>Registered Farmers</p>
                <br>

<?php
$hostName = "localhost";
$username = "root";
$password = "";
$databaseName = "ispaad";
$conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {

    $query= "SELECT name,  surname,  fam_area,  ploArea,  ftz,  seeds FROM farmers";
$prepared = $conn->prepare($query);
$prepared->execute();
$result = $prepared -> fetchAll(PDO::FETCH_ASSOC);
 ?>
 <table border="1" cellpadding="10" cellspacing="0">
 <tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Surname</th>
    <th>F/Area</th>
    <th>P/Area</th>
    <th>Fertilizers</th>
    <th>Seeds</th>
  </tr>
 <?php
 $sn=1;
 foreach($result as $data) {
   
   ?>
    <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['name']; ?> </td>
   <td><?php echo $data['surname']; ?> </td>
   <td><?php echo $data['fam_area']; ?> </td>
   <td><?php echo $data['ploArea']; ?> </td>
   <td><?php echo $data['ftz']; ?> </td>
   <td><?php echo $data['seeds']; ?> </td>
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

