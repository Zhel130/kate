<?php

include_once("connections/connections.php");

$con = connection();

$sql = "SELECT * FROM products ORDER BY id ASC";
$products = $con ->query($sql) or die ($con->error);
$row = $products -> fetch_assoc();


// do{
//     echo $row ['firstname'] . " " . $row['lastname'] . "<br>";


// }while($row = $student -> fetch_assoc());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Info</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1>PRODUCTS INFO</h1>
    <br>
    <br>

    <a href="insert.php"> <button class="btn">Add New</button></a>
    <div class="container">
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Created_at</th>
            <th>Updated_at</th>

        </tr>
        </thead>
        <tbody>
        <?php do{ ?>
        <tr>
        <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Description']; ?></td>
            <td><?php echo $row['Price']; ?></td>
            <td><?php echo $row['Quantity']; ?></td>
            <td><?php echo $row['Created_at']; ?></td>
            <td><?php echo $row['Updated_at']; ?></td>
            <td>
    <button><a href="update.php?ID=<?php echo $row['ID']; ?>">UPDATE</a></button>
    <button>
        <a href="delete.php?ID=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
    </button>


        </td>


        </tr>
        <?php }while($row = $products -> fetch_assoc()) ?>

        </tbody>
    </table>
    </div>
</body>
</html>
