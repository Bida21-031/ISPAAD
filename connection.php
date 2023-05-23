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