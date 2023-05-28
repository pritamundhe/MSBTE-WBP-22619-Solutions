<?php
  $msg=0;
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    if(empty($_POST['fname'])){
      echo("Name cant be Blank!");
      $msg=1;
    }
    if(!is_numeric($_POST['mobileno'])){
      echo("Enter a valid Mobile Number!");
      $msg=1;
    }
    pattern='/\b[\w.-]+@[\w.-]+\.[A-Z a-z]{2,6}\b/';
    if(!preg_match($pattern,$_POST['email'])){
      echo("Enter a valid Email ID!");
      $msg=1;
      }
      if($msg==0)
      {
        echo("Data has been recorded successfully");
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
