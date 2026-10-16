<?php

$name     = $_POST["name"];
$age      = $_POST["age"];
$email    = $_POST["email"];
$password = $_POST["password"];

if (empty($name) OR empty($age) OR empty($email) OR empty($password)) {
    echo "Something is missing";
} else if (!is_numeric($age)) {
    echo "<p>Age is not number</p>";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p>Email must be valid</p>";
} else if ($age < 16 OR $age > 80) {
    echo "<p>Please input a valid age</p>";
} else if (strlen($password) < 8) {
    echo "<p>Invalid password length</p>";
} else {
    echo "<p>Valid account</p>";
}
?>
