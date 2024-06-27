<!-- fetch_product_data.php -->
<?php
// Include database connection
include "db_connect.php";

// Fetch product data
$productQuery = "SELECT * FROM products";

$result = array();

// Execute query
$productResult = mysqli_query($conn, $productQuery);

// Check for errors
if (!$productResult) {
  die("Error fetching product data: " . mysqli_error($conn));
}

// Fetch data
while ($row = mysqli_fetch_assoc($productResult)) {
  $result[] = $row;
}

// Send JSON response
header("Content-Type: application/json");
echo json_encode($result);
