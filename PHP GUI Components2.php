<!DOCTYPE html>
<html>
<head>
	<title>Form Example</title>
</head>
<body>

	<form method="POST" action="">
		<label for="fruits">Select your favorite fruit:</label>
		<select name="fruits" id="fruits">
			<option value="apple">Apple</option>
			<option value="banana">Banana</option>
			<option value="orange">Orange</option>
			<option value="mango">Mango</option>
			<option value="grapes">Grapes</option>
		</select><br><br>

		<label for="cars">Select your favorite car:</label>
		<select name="cars" id="cars">
			<option value="audi">Audi</option>
			<option value="bmw">BMW</option>
			<option value="mercedes">Mercedes</option>
			<option value="toyota">Toyota</option>
			<option value="honda">Honda</option>
		</select><br><br>

		<input type="hidden" name="username" value="pritamundhe">

		<button type="submit" name="submit">Submit</button>
		<button type="reset">Reset</button>
	</form>

	<?php
		if(isset($_POST['submit'])){
			$fruit = $_POST['fruits'];
			$car = $_POST['cars'];
			$username = $_POST['username'];

			echo "<br><br>";
			echo "Selected Fruit: ".$fruit."<br>";
			echo "Selected Car: ".$car."<br>";
			echo "Username: ".$username."<br>";
		}
	?>

</body>
</html>
