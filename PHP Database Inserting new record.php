<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="MyGuest";

    $conn=mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        die("Connection failed".mysqli_connect_error);
    }
    echo("Connected Successfully!");

    $sql="INSERT INTO MyGuest (fname,lname,email) VALUES ('Pritam','Mundhe','pritamundhe@gmail.com')";
    
    if(mysqli_query($conn,$sql)){
        echo("New record inserted successfully!");
    }
    else{
        echo("could not insert record:".mysqli_erro());
    }
        mysqli_close($conn);
?>