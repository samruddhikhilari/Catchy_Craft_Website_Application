<!-- fetch_overview_data.php -->
<?php
// Include database connection
include "db_connect.php";

// Fetch total products, orders, and sales data
$totalProductsQuery = "SELECT COUNT(*) AS total_products FROM products";
$totalOrdersQuery = "SELECT COUNT(*) AS total_orders FROM orders";
$totalSalesQuery = "SELECT SUM(price * quantity) AS total_sales FROM orders";

$result = array();

// Execute queries
$totalProductsResult = mysqli_query($conn, $totalProductsQuery);
$totalOrdersResult = mysqli_query($conn, $totalOrdersQuery);
$totalSalesResult = mysqli_query($conn, $totalSalesQuery);

// Check for errors
if (!$totalProductsResult || !$totalOrdersResult || !$totalSalesResult) {
  die("Error fetching overview data: " . mysqli_error($conn));
}

// Fetch data
$totalProducts = mysqli_fetch_assoc($totalProductsResult)["total_products"];
$totalOrders = mysqli_fetch_assoc($totalOrdersResult)["total_orders"];
$totalSales = mysqli_fetch_assoc($totalSalesResult)["total_sales"];

// Format data as JSON
$result["total_products"] = $totalProducts;
$result["total_orders"] = $totalOrders;
$result["total_sales"] = $totalSales;

// Send JSON response
header("Content-Type: application/json");
echo json_encode($result);
