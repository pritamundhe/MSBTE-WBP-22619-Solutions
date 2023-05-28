<!DOCTYPE html>
<html>
<head>
	<title>Form Example</title>
</head>
<body>

	<form method="POST" action="">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" placeholder="Enter your name" required><br><br>

		<label>Gender:</label><br>
		<input type="radio" name="gender" value="male" checked>Male<br>
		<input type="radio" name="gender" value="female">Female<br><br>

		<label>Hobbies:</label><br>
		<input type="checkbox" name="hobbies[]" value="reading">Reading<br>
		<input type="checkbox" name="hobbies[]" value="sports">Sports<br>
		<input type="checkbox" name="hobbies[]" value="music">Music<br><br>

		<button type="submit" name="submit">Submit</button>
		<button type="reset">Reset</button>
	</form>

	<?php
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$gender = $_POST['gender'];
			$hobbies = $_POST['hobbies'];

			echo "<br><br>";
			echo "Name: ".$name."<br>";
			echo "Gender: ".$gender."<br>";
			echo "Hobbies: ";
			foreach ($hobbies as $hobby) {
				echo $hobby." ";
			}
		}
	?>

</body>
</html>
