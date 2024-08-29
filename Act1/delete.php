<?php
require 'connections.php';

$ID = $_GET['ID'];
$stmt = $pdo->prepare("DELETE FROM products WHERE ID = ?");
$stmt->executed([$ID]);
header("Location: index.php");

?>
