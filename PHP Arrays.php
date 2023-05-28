<?php

echo"<h2>Indexed Array</h2>";
$fruits = array("apple", "banana", "orange", "mango");

echo "The second element in the fruits array is: " . $fruits[1] . "<br>";

$fruits[0] = "pear";
echo "After changing the first element, the fruits array is now: <br>";
print_r($fruits);

$fruits[] = "kiwi";
echo "After adding a new element, the fruits array is now: <br>";
print_r($fruits);

echo"<h2>Associative Array</h2>";
$person = array("name" => "%rsh", "age" => 19, "city" => "Nashik");

echo "The person's name is: " . $person["name"] . "<br>";

$person["city"] = "Mumbai";
echo "After changing the person's city, the person array is now: <br> ";
print_r($person);

$person["city"] = "Goa";
echo "After adding a new element, the person array is now: <br>";
print_r($person);

echo"<h2>Multi-Dimensional Array</h2>";
$students = array(
    array("name" => "a1", "age" => 20, "major" => "Computer Science"),
    array("name" => "a2", "age" => 22, "major" => "Mathematics"),
    array("name" => "a3", "age" => 21, "major" => "History")
);

echo "The name of the second student is: " . $students[1]["name"] . "<br>";

$students[0]["major"] = "Electrical Engineering";
echo "After changing the major of the first student, the students array is now: <br>";
print_r($students);

$students[] = array("name" => "Shubham", "age" => 19, "major" => "Biology");
echo "After adding a new student, the students array is now: <br>";
print_r($students);
?>