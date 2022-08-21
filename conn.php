<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sih";
    
    // Connecting to database
    $con = mysqli_connect($servername, $username, $password, $database);
    if(!$con)
{
   die('Connection Failed'.mysql_error());
}
?>