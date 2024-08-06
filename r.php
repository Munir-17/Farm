<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form>
    <label>choose</label>
<input type="checkbox" name="us" id="us" value="welcome">
<input type="submit" name="submit">
</form>

<?php 
if(!isset($_POST["us"])){echo 'gud';}
else{ echo 'faaaaaaaaaaaaaailed';}
?>
</body>
</html>