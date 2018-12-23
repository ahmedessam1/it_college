<?php
// formProcess.php file

// STEP 1: GET THE USER INPUTS FROM THE HTML FORM
$username = $_POST['username'];
$password = $_POST['password'];

// STEP 2: CONNECTING TO THE DATABASE
$a = 'localhost';
$b = 'root';
$c = '';
$d = 'test';
$connect = mysqli_connect($a, $b, $c, $d);

// STEP 3: CHECK IF USER EXISTS OR NOT
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$query_run = mysqli_query($connect, $query);
if($query_run)

$counter = mysqli_num_rows($query_run);

if ($counter == 0)
    echo "User not found";
else
    echo "Logged in";
