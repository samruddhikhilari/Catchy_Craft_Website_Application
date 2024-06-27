<?php
// adjust_quantity.php
include "db_connect.php";

// Check if the request is sent via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve product ID and action from request body
    $data = json_decode(file_get_contents("php://input"), true);
    $product_id = $data["product_id"];
    $action = $data["action"];

    // Adjust product quantity based on action
    if ($action == "increase") {
        $quantityQuery = "UPDATE products SET quantity = quantity + 1 WHERE id = $product_id";
    } elseif ($action == "decrease") {
        $quantityQuery = "UPDATE products SET quantity = GREATEST(quantity - 1, 0) WHERE id = $product_id";
    }

    if (mysqli_query($conn, $quantityQuery)) {
        echo "Product quantity adjusted successfully";
    } else {
        echo "Error adjusting product quantity: " . mysqli_error($conn);
    }
}
?>
