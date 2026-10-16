<?php

$name     = $_POST["name"];
$age      = $_POST["age"];
$email    = $_POST["email"];
$password = $_POST["password"];

$errors = [];

if (empty($name) OR empty($age) OR empty($email) OR empty($password)) {
    $errors[] =  "Something is missing";
} if (!is_numeric($age)) {
    $errors[] = "Age is not number";
} if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] =  "Email must be valid";
} if ($age < 16 OR $age > 80) {
    $errors[] =  "Please input a valid age";
} if (strlen($password) < 8) {
    $errors[] =  "Invalid password length";
}

if (empty($errors)) {
    echo "Correct info given";
} else {
    echo "Errors active: ".count($errors)."<br>";
    foreach  ($errors as $error) {
        echo $error."<br>"; 
    }
}
?>
