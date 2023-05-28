<html>
<head>
    <title>PHP Database Update & Delete</title>
</head>
<body>
  <?php
    $conn = mysqli_connect("localhost", "root", "", "mydb");

    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $date=$_POST['date'];

        $sql=mysqli_query($conn, "UPDATE user SET name='$name',email='$email',mobile='$mobile',date='$date' WHERE id='$id'");
        if($sql){
            echo"Record updated successfully<br>";
        }
        else{
            echo"Failed<br>";
        }
    }

    if(isset($_POST['delete'])){
        $id=$_POST['id'];

        $sql=mysqli_query($conn, "DELETE FROM user WHERE id='$id'");
        if($sql){
            echo"Record deleted successfully<br>";
        }
        else{
            echo"Failed<br>";
        }
    }

    $result=mysqli_query($conn, "SELECT * FROM user");
    echo "<table border='1'>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Date</th>
            <th>Action</th>
          </tr>";
    while($row=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>
                <form action='' method='POST'>
                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                    <input type='submit' name='edit' value='Edit'>
                    <input type='submit' name='delete' value='Delete'>
                </form>
            </td>";
        echo "</tr>";
    }
    echo "</table>";

    if(isset($_POST['edit'])){
        $id=$_POST['id'];
        $result=mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
        $row=mysqli_fetch_array($result);
        echo "<form action='' method='POST'>
                Name:<input type='text' name='name' value='".$row['name']."'></br>
                Email:<input type='email' name='email' value='".$row['email']."'></br>
                Mobile:<input type='mobile' name='mobile' value='".$row['mobile']."'></br>
                Date:<input type='date' name='date' value='".$row['date']."'></br>
                <input type='hidden' name='id' value='".$row['id']."'>
                <input type='submit' name='update' value='Update'>
            </form>";
    }

    mysqli_close($conn);
    ?>
    </body>
    </html>