// wishlist.js

let wishlistItems = JSON.parse(localStorage.getItem('wishlistItems')) || [];

function addToWishlist(productName, price, image) {
  updateWishlistLabel('added ');
  wishlistItems.push({ name: productName, price: price, image: image });
  localStorage.setItem('wishlistItems', JSON.stringify(wishlistItems));
  updateWishlistUI();

  // Prompt the user to view the wishlist
  const confirmation = confirm('Item added to Wishlist. Do you want to view your Wishlist?');
  if (confirmation) {
    viewWishlist();
  }
}

function updateWishlistUI() {
  const wishlistList = document.getElementById('wishlist-items');

  if (!wishlistList) {
    console.error("Element with id 'wishlist-items' not found.");
    return;
  }

  wishlistList.innerHTML = '';

  wishlistItems.forEach((item, index) => {
    const li = document.createElement('li');
    // Display name, price, and image
    li.innerHTML = `<strong>${item.name}</strong><br>₹${item.price}<br><img src="${item.image}" alt="${item.name}" style="max-width: 100px; max-height: 100px;">`;
    wishlistList.appendChild(li);
  });
}

function updateWishlistLabel(label) {
  const addToWishlistButtons = document.querySelectorAll('.addtowishlist-button');

  addToWishlistButtons.forEach(button => {
    button.textContent = label;
    setTimeout(() => {
      button.textContent = 'Add to Wishlist';
    }, 1000);
  });
}

function viewWishlist() {
  // Redirect to the wishlist page
  window.location.href = 'wishlist.html';
}
