<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_POST['submit'])){
    $cookie_name = "user";
    $cookie_value = $_POST['name'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 

    if(isset($_COOKIE[$cookie_name])) {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    } else {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name"><br>
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
