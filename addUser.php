
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
            </ul>  
          </nav>
    </header>
    <br></br>
    <form action="" method="post">
    <h2>Add Users</h2>
    <label for="name">Name:</label>
    <input type="text" id="username" name="username" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <label for="confirm-password">Confirm Password:</label>
    <input type="password" id="confirm-password" name="confirm_password" required>
  <button type="submit" href="" value="submit">ADD</button>
  </form>

<footer>
    <p>© 2023 Agriculture Management System</p>
   
  </footer>
</body>
</html>

<?php

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];

// Create connection
$conn = new mysqli('localhost', 'root', '', 'ispaad');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else{

    $stmt= $conn-> prepare("INSERT INTO assistants (username, email, password, confirm_password)
    VALUES (?,?,?,?)");
    $stmt->bind_param("ssss",$username, $email, $password, $confirm_password);
    $stmt->execute();

}
echo "New record created successfully";

$stmt->close();
$conn->close();
?>