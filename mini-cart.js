document.addEventListener('DOMContentLoaded', function () {
  // Add event listeners to all add to cart buttons
  const addToCartButtons = document.querySelectorAll('.addtocart-button');

  addToCartButtons.forEach(button => {
    button.addEventListener('click', function () {
      // Get product details from the button's data attributes or other source
      const productName = button.getAttribute('data-product-name');
      const price = button.getAttribute('data-price');
      const imageUrl = button.getAttribute('data-image-url');

      // Add the product to the cart
      addToCart(productName, parseFloat(price), imageUrl);

      // Change the button label to indicate success
      updateLabel(button, 'Added ');

      // Reset the button label after a short delay (optional)
      setTimeout(() => {
        updateLabel(button, 'Add to Cart');
      }, 1000);
    });
  });

  // Update the mini cart UI
  updateMiniCartUI();
});

function addToCart(productName, price, imageUrl) {
  const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
  cartItems.push({ name: productName, price: price, imageUrl: imageUrl });
  localStorage.setItem('cartItems', JSON.stringify(cartItems));
  // Update the mini cart
  /*updateMiniCartUI();
  alert(productName);
  alert(price);*/
}

function updateLabel(button, label) {
  button.textContent = label;
}

function updateMiniCartUI() {
  const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
  console.log('cartItems:', cartItems);

  const miniCartTotal = document.getElementById('mini-cart-total');
  if (miniCartTotal) {
    const total = cartItems.reduce((acc, item) => acc + (parseFloat(item.price) || 0), 0);
    console.log('total:', total);
    miniCartTotal.textContent = `Total: ₹{total.toFixed(2)}`;
  }

  const miniCartItemsList = document.getElementById('mini-cart-items-list');
  if (miniCartItemsList) {
    miniCartItemsList.innerHTML = '';

    cartItems.forEach(item => {
      const li = document.createElement('li');
      const itemPrice = parseFloat(item.price) || 0;
      li.textContent = `${item.name} - ₹${itemPrice.toFixed(2)}`;
      miniCartItemsList.appendChild(li);
    });
  }
}

function redirectToCheckout() {
  // Get product details from session storage
  const productName = sessionStorage.getItem('productName') || "Wall Art";
  const price = sessionStorage.getItem('price') || "₹200";
  const rating = sessionStorage.getItem('rating') || "⭐⭐⭐⭐⭐";

  // Store product details in session storage (if needed)
  sessionStorage.setItem('productName', productName);
  sessionStorage.setItem('price', price);
  sessionStorage.setItem('rating', rating);

  // Redirect to the checkout page
  window.location.href = 'checkout.html';
}
