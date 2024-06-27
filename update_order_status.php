<?php
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    $order_id = $data["order_id"];
    $new_status = $data["new_status"];

    $updateQuery = "UPDATE orders SET status = '$new_status' WHERE order_id = $order_id";

    if (mysqli_query($conn, $updateQuery)) {
        echo "Order status updated successfully";
    } else {
        echo "Error updating order status: " . mysqli_error($conn);
    }
}
?>
