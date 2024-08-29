<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $last_name = $_POST['jaa_last_name'];
    $first_name = $_POST['jaa_first_name'];
    $email = $_POST['jaa_email'];
    $gender = $_POST['jaa_gender'];
    $address = $_POST['jaa_address'];

    $stmt = $pdo->prepare("INSERT INTO jaa_users (jaa_last_name, jaa_first_name, jaa_email, jaa_gender, jaa_address) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$last_name, $first_name, $email, $gender, $address]);
    header("Location: index.php");
}
?>

<form method="post">
    Last Name: <input type="text" name="jaa_last_name"><br>
    First Name: <input type="text" name="jaa_first_name"><br>
    Email: <input type="email" name="jaa_email"><br>
    Gender: <input type="text" name="jaa_gender"><br>
    Address: <input type="text" name="jaa_address"><br>
    <input type="submit" value="Create">
</form>