<?php
// fetch_inventory.php
include "db_connect.php";

// Fetch inventory data from the database
$inventoryQuery = "SELECT * FROM products";
$result = mysqli_query($conn, $inventoryQuery);

if ($result) {
    $inventoryData = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $inventoryData[] = $row;
    }
    header("Content-Type: application/json");
    echo json_encode($inventoryData);
} else {
    echo "Error fetching inventory data: " . mysqli_error($conn);
}
?>
