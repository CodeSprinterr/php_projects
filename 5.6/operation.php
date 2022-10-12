<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "study";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $id = $_POST["id"];
    $name = $_POST["name"];
    $address = $_POST["address"];

    $sql = "UPDATE ajaxup SET name='$name',address = '$address'  WHERE id='$id'";
    $conn->query($sql) ;
    echo "value updated";
?>