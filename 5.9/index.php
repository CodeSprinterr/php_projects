<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register</title>
</head>
<script>
    function abc(){
        window.location.href = "viewstudentlist.php";

    }
</script>

<body>
    <?php
    // define variables and set to empty values
    $name = $id = $contact = $percentage = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $name = $_POST["name"];        
        $contact = $_POST["contact"];
        $percentage = $_POST["percentage"];


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "study";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $sql = "insert into studregistration values('$id','$name',' $contact','$percentage')";
        $conn->query($sql);
        $conn->close();
        
    }

    ?>
    <center>
        <h1>Student Registration</h1>
    </center>
    <br><br><br><br>
    <center>
        <form action="index.php" method="post">
            <label style="margin-right: 80px;">id</label>
            <input type="text" name="id" id="id"><br><br>
            <label style="margin-right: 60px;">name</label>
            <input type="text" name="name" id="name"><br><br>
            <label style="margin-right: 50px;">contact</label>
            <input type="text" name="contact" id="contact"><br><br>
            <label style="margin-right: 25px;">percentage</label>
            <input type="text" name="percentage" id="percentage"><br><br>
            <input type="submit" value="register"><br><br>
            <input style="margin-left: 40px;"  type="button" value="view students with 60%" onclick="abc()">
            
        
        </form>
    </center>

</body>

</html>