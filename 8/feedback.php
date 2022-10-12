<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php

    $name = $addr = $contact = $acc = "";
    $name = $_POST["name"];
    $addr = $_POST["address"];
    $contact = $_POST["contact"];
    $acc = $_POST["acc"];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "study";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


    $sql = "insert into cregistration values('$name',' $addr',' $contact','$acc')";
    $conn->query($sql);
    $conn->close();
    header("Location: index.html");
      



    ?>

</body>

</html>