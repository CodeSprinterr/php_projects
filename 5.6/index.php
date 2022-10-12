<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK master</title>
    <script>
        function updatevalue(val) {
            val = val.trim();
            if (val = "") {
                document.getElementById("divison").innerHTML = "";
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("divison").innerHTML = this.responseText;
                    }
                };           
                xmlhttp.open("POST","operation.php",true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");              
                xmlhttp.send("id="+document.getElementById("id").value+"&name="+document.getElementById("name").value+"&address="+document.getElementById("address").value); 
            }
        }
    </script>
</head>

<body>
    <center>
        <br><br><br><br>
        <label style="margin-right: 60px;">id</label>
        <input type="text" name="id" id="id">
        <br><br>

        <label style="margin-right: 38px;">name</label>
        <input type="text" name="name" id="name">
        <br><br>

        <label style="margin-right: 26px;">address</label>
        <input type="text" name="address" id="address">
        <br><br>
        <input type="button" value="update" onclick="updatevalue(document.getElementById('id').value)">
        <br><br>
        <h3 id="divison"></h3>
    </center>
</body>

</html>