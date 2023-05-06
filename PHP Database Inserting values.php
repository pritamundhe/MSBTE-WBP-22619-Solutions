<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
$sql = "INSERT INTO mydb (firstname, lastname, email) 
        VALUES ('Pritam', 'Mundhe', 'pritammundhe@.com')";
if (mysqli_query($conn, $sql)) {
    echo "New record inserted successfully";
} else {
    echo "Could not insert record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
