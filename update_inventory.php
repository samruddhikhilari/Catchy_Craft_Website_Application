<?php
// update_inventory.php
include "db_connect.php";

// Check if the request is sent via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve product ID and action from request body
    $data = json_decode(file_get_contents("php://input"), true);
    $product_id = $data["product_id"];
    $action = $data["action"];

    // Update inventory based on action
    if ($action == "increase") {
        $query = "UPDATE products SET quantity = quantity + 1 WHERE id = $product_id";
    } elseif ($action == "decrease") {
        $query = "UPDATE products SET quantity = GREATEST(quantity - 1, 0) WHERE id = $product_id";
    } elseif ($action == "out_of_stock") {
        $query = "UPDATE products SET quantity = 0 WHERE id = $product_id";
    }

    if (mysqli_query($conn, $query)) {
        echo "Inventory updated successfully";
    } else {
        echo "Error updating inventory: " . mysqli_error($conn);
    }
}
?>
