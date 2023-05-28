<?php
    $con=mysqli_connect("localhost","root","","Employee");
    if(!con){
        die('error in connection'.mysqli_connect_error());
    }
    $data="UPDATE empinfo SET name='pritam", mobile=8767847219 WHERE email='pritamundhe@gmail.com'";
    mysqli_query($con,$data);
    mysqli_close($con);
?>