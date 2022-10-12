<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Welcome to the world of cookies<br>";   
    setcookie("category", "Books", time() + 1800, "/"); 
    echo "The cookie is set<br>";
    
    ?>
</body>
</html>