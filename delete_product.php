<?php
// Include database connection
include "db_connect.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve product ID
    $product_id = $_POST["product_id"];

    // Delete product from the database
    $deleteQuery = "DELETE FROM products WHERE id=$product_id";

    if (mysqli_query($conn, $deleteQuery)) {
        echo "Product deleted successfully";
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
}
?>
