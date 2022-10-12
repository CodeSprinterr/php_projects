<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOOK master</title>
  <style>
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    td, th {
  border: .5px solid #dddddd;
  text-align: left;
  padding: 12px;
}

  </style>

</head>

<body>

  <center><h1>Book Details</h1></center>
  <br>
  <table style="width: 100%;">
    <tr>
      <th>name</th>
      <th>author</th>
      <th>publisher</th>
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


    $sql = "SELECT * FROM bookmaster";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row["name"] ?></td>
          <td><?php echo $row["author"] ?></td>
          <td><?php echo $row["publisher"] ?></td>
        </tr><?php

            }
          } else {
            echo "0 results";
          }
              ?>
  </table>
</body>

</html>