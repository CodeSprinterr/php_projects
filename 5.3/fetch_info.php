<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK master</title>
    
   
</head>
<body>

<h1>Book Details</h1>
<br>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "study";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$a=$_COOKIE["clickonname"];

$sql = "SELECT * FROM bookmaster where name = '$a'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row by making it Array using fetch_assoc();
    while($row = $result->fetch_assoc()) {
      echo "name : " . $row["name"]."<br>";
      echo "author : " . $row["author"]."<br>";
      echo "publisher : " . $row["publisher"]."<br>";
    }
  } else {
    echo "0 results";
  }
?>
</body>
</html>