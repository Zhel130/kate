<?php

include_once("connections/connections.php");

$con = connection();

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (!isset($_GET["id"])){
        header("location:index.php");
        exit;
    }
    $id = $_GET["id"];

    $sql = "SELECT * FROM products WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row){
        header("location:index.php");
        exit;        
    }

    $name = "";
    $description = "";
    $price = "";
    $quantity = "";

} else {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    do {
        if (empty($id) || empty($name) || empty($description) || empty($price) || empty($quantity)) {
            $errorMessage = "All the fields are required";
            break;
        }
        
        $sql = "UPDATE products SET name = '$name', description='$description', price= '$price', quantity= '$quantity' WHERE id='$id'";

        $result = $connection->query($sql);
        if(!$result){
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $successMessage = "Products added correctly";
        header("location:index.php");
        exit;

    } while (false);
}

?>