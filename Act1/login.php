<?php

if(!isset($_SESSION)){
    session_start();
}
include_once("connections/connections.php");
$con = connection();

if(isset($_POST['login'])){
    echo "Login";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1>LogIn Page</h1>
    <br>
    <form action="" method="post"></form>
    <label>Username</label>
    <input type="text" name="username" id="username">
    <label>Password</label>
    <input type="password" name="password" id="password">
    <button type="submit" name="login">LogIn</button>
</body>
</html>
