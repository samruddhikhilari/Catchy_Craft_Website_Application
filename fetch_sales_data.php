<?php
// fetch_sales_data.php
include "db_connect.php";

$query = "SELECT * FROM sales";
$result = mysqli_query($conn, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
?>
