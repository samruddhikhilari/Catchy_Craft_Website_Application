<!-- dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seller Dashboard</title>
  <link rel="stylesheet" href="dashboard_style.css">
</head>
<body>
  <header>
    <h1>Seller Dashboard</h1>
  </header>
  <section id="overview">
    <h2>Overview</h2>
    <div class="overview-container">
      <div class="box">
        <h3>Total Products</h3>
        <span id="total-products">0</span>
      </div>
      <div class="box">
        <h3>Total Orders</h3>
        <span id="total-orders">0</span>
      </div>
      <div class="box">
        <h3>Total Sales</h3>
        <span id="total-sales">$0.00</span>
      </div>
    </div>
  </section>
  <section id="products">
    <h2>Products</h2>
    <table id="product-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Quantity</th>
        </tr>
      </thead>
      <tbody id="product-list">
        <!-- Product list will be populated dynamically -->
      </tbody>
    </table>
  </section>
  <script src="dashboard_script.js"></script>
</body>
</html>
