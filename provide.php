<?php 
    include "conn.php";
    if(isset($_POST['submit']))
    {
        $quantity = $_POST['quantity'];
        $user_search="select quantity from bus where srno='$srno'";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>