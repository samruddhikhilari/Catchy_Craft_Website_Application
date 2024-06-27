<?php
// mark_out_of_stock.php
include "db_connect.php";

// Check if the request is sent via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve product ID from request body
    $data = json_decode(file_get_contents("php://input"), true);
    $product_id = $data["product_id"];

    // Mark product as out of stock in the database
    $outOfStockQuery = "UPDATE products SET quantity = 0 WHERE id = $product_id";

    if (mysqli_query($conn, $outOfStockQuery)) {
        echo "Product marked as out of stock successfully";
    } else {
        echo "Error marking product as out of stock: " . mysqli_error($conn);
    }
}
?>
