// script.js
document.addEventListener("DOMContentLoaded", function() {
  fetchOrders();
});

function fetchOrders() {
  fetch("fetch_orders.php")
    .then(response => response.json())
    .then(data => {
      const ordersContainer = document.getElementById("orders-container");
      ordersContainer.innerHTML = ""; // Clear existing orders
      data.forEach(order => {
        const orderDiv = document.createElement("div");
        orderDiv.classList.add("order");
        orderDiv.innerHTML = `
          <h2>Order ID: ${order.order_id}</h2>
          <p>Customer Name: ${order.customer_name}</p>
          <p>Status: ${order.status}</p>
          <p>Total Amount: $${order.total_amount.toFixed(2)}</p>
          <select onchange="updateOrderStatus(${order.order_id}, this.value)">
            <option value="processing" ${order.status === 'processing' ? 'selected' : ''}>Processing</option>
            <option value="shipped" ${order.status === 'shipped' ? 'selected' : ''}>Shipped</option>
            <option value="completed" ${order.status === 'completed' ? 'selected' : ''}>Completed</option>
          </select>
        `;
        ordersContainer.appendChild(orderDiv);
      });
    })
    .catch(error => console.error("Error fetching orders:", error));
}

function updateOrderStatus(orderId, newStatus) {
  fetch("update_order_status.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({
      order_id: orderId,
      new_status: newStatus
    })
  })
  .then(response => response.text())
  .then(message => {
    alert(message);
    fetchOrders(); // Refresh orders after status update
  })
  .catch(error => console.error("Error updating order status:", error));
}
