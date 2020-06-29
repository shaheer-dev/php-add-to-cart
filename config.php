<?php
    
    $con=mysqli_connect("localhost", "root","", "samradb");
    if(mysqli_connect_errno()){
        echo "Connection Fail".mysqli_connect_error();
    }

?>
