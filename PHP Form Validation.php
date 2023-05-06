<?php
$msg = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];

  // Validate name
  if (empty($name)) {
    $msg = "Name is required";
  } else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
    $msg = "Only letters and white space allowed in name";
  }

  // Validate email
  if (empty($email)) {
    $msg = "Email is required";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $msg = "Invalid email format";
  }

  // Validate mobile
  if (empty($mobile)) {
    $msg = "Mobile number is required";
  } else if (!preg_match("/^[0-9]*$/", $mobile)) {
    $msg = "Only numbers allowed in mobile number";
  } else if (strlen($mobile) != 10) {
    $msg = "Mobile number should be 10 digits";
  }

  // If all validation passed
  if (empty($msg)) {
    // Insert data to database or do other actions
    $msg = "Data has been recorded successfully";
  }
}
?>

<html>
  <body>
    <h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Name: <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"><br><br>
      Email: <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"><br><br>
      Mobile: <input type="text" name="mobile" value="<?php echo isset($_POST['mobile']) ? $_POST['mobile'] : ''; ?>"><br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
    <?php echo $msg; ?>
  </body>
</html>
