<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK master</title>
    <script>
    function valueset(a)
    {
        document.cookie='clickonname='+a;
        window.location = "fetch_info.php"; 
    }
    </script>
</head>
<body>

<center><h1>Book Master</h1></center>
<h2>book list</h2>
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
$sql = "SELECT * FROM bookmaster ";
$result = $conn->query($sql);

//making array by using fetch_assoc()
while($row = $result->fetch_assoc()) {
    $b = $row['name'];
    
   ?>
   <h3><a href="#" onclick="valueset('<?php echo $b ?>')"><?php echo $b ?></a></h3><br><?php
  //  echo $row["name"];
  }
?>
</body>
</html>