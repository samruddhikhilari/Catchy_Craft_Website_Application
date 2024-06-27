document.addEventListener("DOMContentLoaded", function() {
  fetchInventoryData();
});

function fetchInventoryData() {
  // Fetch product inventory data from PHP script
  fetch("fetch_inventory_data.php")
    .then(response => response.json())
    .then(data => {
      const inventoryTable = document.getElementById("inventory-table").getElementsByTagName('tbody')[0];
      inventoryTable.innerHTML = ""; // Clear existing inventory table
      data.forEach(product => {
        const row = document.createElement("tr");
        row.innerHTML = `
          <td>${product.name}</td>
          <td>${product.description}</td>
          <td>$${product.price.toFixed(2)}</td>
          <td>${product.quantity}</td>
          <td>
            <button onclick="adjustQuantity(${product.id}, 'increase')">Increase</button>
            <button onclick="adjustQuantity(${product.id}, 'decrease')">Decrease</button>
            <button onclick="markOutOfStock(${product.id})">Mark Out of Stock</button>
          </td>
        `;
        inventoryTable.appendChild(row);
      });
    })
    .catch(error => console.error("Error fetching inventory data:", error));
}

function adjustQuantity(productId, action) {
  // Send request to PHP script to adjust product quantity
  fetch("adjust_quantity.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({
      product_id: productId,
      action: action
    })
  })
  .then(response => response.text())
  .then(message => {
    alert(message);
    fetchInventoryData(); // Refresh inventory table after adjustment
  })
  .catch(error => console.error("Error adjusting quantity:", error));
}

function markOutOfStock(productId) {
  // Send request to PHP script to mark product as out of stock
  fetch("mark_out_of_stock.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({
      product_id: productId
    })
  })
  .then(response => response.text())
  .then(message => {
    alert(message);
    fetchInventoryData(); // Refresh inventory table after marking as out of stock
  })
  .catch(error => console.error("Error marking as out of stock:", error));
}
