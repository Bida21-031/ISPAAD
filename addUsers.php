<!DOCTYPE html>
<html>
<head>
  <title>Agriculture Management System - Sign Up</title>
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
        <h2>ISPAAD MANAGEMENT SYSTEM</h2>
        <nav>
            <ul>
              <button type="submit">
                <a href="index.php">HOME</a>
            </button>
            <button type="submit">
                <a href="users.php">HOME</a>
            </button>
            </ul>  
          </nav>
    </header>
    <br></br>
    <div class="container">
    <form action="" method="post">
    <h2>Add Users</h2>
    <br>
    <label for="firstname">First Name:</label>
    <input type="text"  name="firstname" required>
    
    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname"  required>

    <label for="email">Email:</label>
    <input type="email"  name="email" required>

    <label for="phonenumber">Phone Number:</label>
    <input type="text"  name="phonenumber" required>

    <label for="password">Password:</label>
    <input type="text"  name="password" required>

    
  <button type="submit" href="" value="submit">Submit</button>
  </form>
  </div>

<footer>
    <p>© 2023 Agriculture Management System</p>
   
  </footer>
</body>
</html>

<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$password=$_POST['password'];

// Create connection
$conn = new mysqli('localhost', 'root', '', 'ispaad');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else{

    $stmt= $conn-> prepare("INSERT INTO users (firstname, lastname, email, phonenumber, password)
    VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstname, $lastname, $email, $phonenumber, $password);
    $stmt->execute();

    echo $email;
    echo "New record created successfully";


}

$stmt->close();
$conn->close();
?>