<?php
include "db_connect.php";

$ordersQuery = "SELECT * FROM orders";
$result = mysqli_query($conn, $ordersQuery);

if ($result) {
    $ordersData = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $ordersData[] = $row;
    }
    header("Content-Type: application/json");
    echo json_encode($ordersData);
} else {
    echo "Error fetching orders data: " . mysqli_error($conn);
}
?>
