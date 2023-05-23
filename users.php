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
                <a href="addUsers.php">BACK</a>
            </button>
            </ul>  
          </nav>
        </header>
        <br></br>

   <div class="Register Page">
      <div class="form">
        <form class="registration-form" action="" method="post">
          <p>Users</p>


<?php
$hostName = "localhost";
$username = "root";
$password = "Redroses19!";
$databaseName = "ispaad";
$conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {

    $query= "SELECT username, email,  password FROM assistants";
$prepared = $conn->prepare($query);
$prepared->execute();
$result = $prepared -> fetchAll(PDO::FETCH_ASSOC);
 ?>
 <table border="1" cellpadding="10" cellspacing="0">
 <tr>
    <th>S.N</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
  </tr>
 <?php
 $sn=1;
 foreach($result as $data) {
   
   ?>
    <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['username']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['password']; ?> </td>
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

