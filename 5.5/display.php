<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration detail</title>


</head>

<body>

    <h1>Registration detail</h1>
    <br><br>
    <form id="formsubmit" method="post" action="display.php">
        <label style="margin-right: 55px;"> name</label>
        <input type="text" name="name" id="name"><br><br>
        <input type="submit" value="search">
        <br><br><br><br>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


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
        $a = $_POST["name"];

        $sql = "SELECT * FROM cregistration where name = '$a'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<h3>name : &nbsp;&nbsp;&nbsp;&nbsp; " . $row["name"] . "</h3><br>";
                echo "<h3>address : &nbsp;&nbsp;&nbsp; " . $row["address"] . "</h3><br>";
                echo "<h3>contact :&nbsp;&nbsp;&nbsp; " . $row["contact"] . "</h3><br>";
                echo "<h3>account no :&nbsp;&nbsp;&nbsp; " . $row["acc"] . "</h3><br>";
            }
        } else {
        }
    }
    ?>
    <h3></h3>
</body>

</html>