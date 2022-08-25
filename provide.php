<?php 
session_start();
    include "conn.php";
    $srno = $_SESSION['srno'];
    $qty = $_SESSION['quantity'];
    $q = "SELECT * from bus where srno = '$srno'";
    $query = mysqli_query($con,$q);
    $user_count=mysqli_num_rows($query);
        if($user_count)
        {
            $user_pass=mysqli_fetch_assoc($query);
            $quantity = $user_pass['qty'];
            $res = $quantity - $qty;
            $qu = "update bus set qty='$res' where srno='$srno'";
            $query1 = mysqli_query($con,$qu);
            $user_count=mysqli_num_rows($query);
            if($user_count)
            {
                ?>
                    <script>
                        location.replace("farmer.php");
                    </script>
                <?php
            }
            else{
                echo "Does not updated successfully";
            }
        }
        session_abort();
?>