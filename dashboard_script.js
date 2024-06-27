// script.js
document.addEventListener("DOMContentLoaded", function() {
  fetchOverviewData();
  fetchProductData();
});

function fetchOverviewData() {
  // Fetch total products, orders, and sales data from PHP script
  fetch("fetch_overview_data.php")
    .then(response => response.json())
    .then(data => {
      document.getElementById("total-products").textContent = data.total_products;
      document.getElementById("total-orders").textContent = data.total_orders;
      document.getElementById("total-sales").textContent = "$" + data.total_sales.toFixed(2);
    })
    .catch(error => console.error("Error fetching overview data:", error));
}

function fetchProductData() {
  // Fetch product data from PHP script
  fetch("fetch_product_data.php")
    .then(response => response.json())
    .then(data => {
      const productList = document.getElementById("product-list");
      productList.innerHTML = ""; // Clear existing product list
      data.forEach(product => {
        const row = document.createElement("tr");
        row.innerHTML = `
          <td>${product.name}</td>
          <td>${product.description}</td>
          <td>$${product.price.toFixed(2)}</td>
          <td>${product.quantity}</td>
        `;
        productList.appendChild(row);
      });
    })
    .catch(error => console.error("Error fetching product data:", error));
}
