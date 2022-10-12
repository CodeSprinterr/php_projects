<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
</head>
<body>
<center><h1>Library Management System</h1>
<hr>
    <form action="index.php" method="post">

        <label style="margin-right: 50px;">Book Name</label>
        <input style type="text" name="bname" id="bname"><br><br>

        <label style="margin-right: 50px;">Author Name</label>
        <input style type="text" name="aname" id="aname"><br><br>

        <label style="margin-right: 50px;">Publisher Name</label>
        <input style type="text" name="pname" id="pname"><br><br>

        <label style="margin-right: 50px;">Synopsis</label>
        <input style type="text" name="synopsis" id="synopsis"><br><br>

        <input type="submit" value="submit">
    </form>
    </center>    


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["bname"])) {
       echo' <script>alert("Name is required")</script>';
      
    } 
    
   elseif (empty($_POST["aname"])) {
       echo'<script>alert("Author Name is required")</script>';
    } 
      
    elseif (empty($_POST["pname"])) {
        echo'<script>alert("publisher name  is required")</script>';
    } 
  
    elseif (empty($_POST["synopsis"])) {
      echo'<script>alert("synopsis  is required")</script>';
    } 
    else{
        echo '<script>alert("Data entered Successfully")</script>';
      }
  }
  
?>    
</body>
</html>