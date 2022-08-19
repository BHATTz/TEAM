<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sih";
    
    // Connecting to database
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn)
{
   die('Connection Failed'.mysql_error());
}
?>