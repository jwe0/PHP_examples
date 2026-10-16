<?php

$name     = $_POST["name"];
$age      = $_POST["age"];
$email    = $_POST["email"];
$password = $_POST["password"];

$errors = [];

function age_check($age) {
    if (empty($age)) {
        return False;
    } 
    if(!is_numeric($age)) {
        return False;
    }
    if ($age < 16 OR $age > 80) {
        return False;
    }
    return True;
}

function email_check($email) {
    if (empty($email)) {
        return False;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return False;
    }
    return True;
}

function password_check($password) {
    if (empty($password)) {
        return False;
    }
    if (strlen($password) < 8) {
        return False;
    }
    return True;
}


if (empty($name) OR empty($email) OR empty($password)) {
    $errors[] =  "Something is missing";
} if (!age_check($age)) {
    $errors[] = "Please enter a valid age";
} if (!email_check($email)) {
    $errors[] =  "Email must be valid";
} if (!password_check($password)) {
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
