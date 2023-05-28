<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
  <form action="" method="POST">
    Name:<input type="text" name="name"></br>
    Email:<input type="email" name="email"></br>
    Mobile:<input type="mobile" name="mobile"></br>
    Date:<input type="date" name="date"></br>
    <input type="submit" name="submit">
  </form>  

  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully<br>";

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $date=$_POST['date'];

        $sql=mysqli_query($conn, "INSERT into user values('','$name','$email','$mobile','$date')");
        if($sql){
            echo"Record inserted Successfully<br>";
        }
        else{
            echo"Failed<br>";
        }
    }

    //fetch data from database
    $result=mysqli_query($conn, "SELECT * FROM user");
    echo "<table border='1'>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Date</th>
          </tr>";
    while($row=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($conn);    
  ?>    
</body>
</html>
