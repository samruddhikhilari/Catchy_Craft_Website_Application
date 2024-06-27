<?php
// Include database connection
include "db_connect.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $product_id = $_POST["product_id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    // Update product data in the database
    $updateQuery = "UPDATE products SET name='$name', description='$description', price=$price, quantity=$quantity WHERE id=$product_id";

    if (mysqli_query($conn, $updateQuery)) {
        echo "Product updated successfully";
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
}
?>
