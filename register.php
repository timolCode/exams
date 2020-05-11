<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$jschool = $_POST['jschool'];
$pass = $_POST['pass'];

$errArray =[];

if($fname == "") {
    $errArray = "First Name Cannot be Blank";
}
elseif ($lname == "") {
    $errArray = "Last Name Cannot be Blank";
}
elseif ($email == "") {
    $errArray = "Last Name Cannot be Blank";
}
elseif ($gender == "") {
    $errArray = "Student Gender Cannot be Blank";
}
elseif ($jschool == "") {
    $errArray = "Name of Junior Secondary School Attended Cannot be Blank";
}
elseif ($pass == "") {
    $errArray = "Password Cannot be Blank";
} 

print_r($errArray);


?>