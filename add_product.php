<!-- add_product.php -->
<?php
// Include database connection
include "db_connect.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    // Handle image upload if needed

    // Insert product data into the database
    $insertQuery = "INSERT INTO products (name, description, price, quantity) VALUES ('$name', '$description', $price, $quantity)";

    if (mysqli_query($conn, $insertQuery)) {
        echo "Product added successfully";
    } else {
        echo "Error adding product: " . mysqli_error($conn);
    }
}
?>
