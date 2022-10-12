<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student List</title>
<style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}


</style>

</head>

<body>
    <center><h1>Senior Citizen list</h1></center>
    <br><br><br>
<table>
<tr>
<th>id</th>
<th>name</th>
<th>contact</th>
<th>age</th>
</tr>

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
        

        $sql = "SELECT * FROM citizen ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                if((int)$row["age"]>=60)
                {
                    echo "<tr><td>". $row["id"]."</td>";
                    echo "<td>". $row["NAME"] . "</td>";
                    echo "<td>" . $row["contact"] . "</td>";
                    echo "<td>" . $row["age"] . "</td></tr>";
                }
               
            }
        } else {
        }
    ?>
</table>
</body>

</html>