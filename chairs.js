document.addEventListener("DOMContentLoaded", function () {
  let slideImages = document.querySelectorAll(".slides img");
  let next = document.querySelector(".next");
  let prev = document.querySelector(".prev");
  let dots = document.querySelectorAll(".dot");
  let counter = 0;
  let deleteInterval;

  next.addEventListener("click", slideNext);
  prev.addEventListener("click", slidePrev);

  function slideNext() {
      resetAnimation();
      slideImages[counter].style.animation = "next1 0.5s ease-in-out forwards";
      counter = (counter + 1) % slideImages.length;
      slideImages[counter].style.animation = "next2 0.5s ease-in-out forwards";
      indicators();
  }

  function slidePrev() {
      resetAnimation();
      slideImages[counter].style.animation = "prev1 0.5s ease-in-out forwards";
      counter = (counter - 1 + slideImages.length) % slideImages.length;
      slideImages[counter].style.animation = "prev2 0.5s ease-in-out forwards";
      indicators();
  }

  function resetAnimation() {
      slideImages.forEach(img => img.style.animation = "");
  }

  function autoSliding() {
      deleteInterval = setInterval(timer, 2000);
      function timer() {
          slideNext();
          indicators();
      }
  }

  autoSliding();

  const container = document.querySelector(".slide-container");
  container.addEventListener('mouseover', function () {
      clearInterval(deleteInterval);
  });

  container.addEventListener("mouseout", autoSliding);

  function indicators() {
      dots.forEach(dot => dot.classList.remove('active'));
      dots[counter].classList.add('active');
  }    
});

// Dummy data for product cards
const productsData = [
    { name: "Chair ", price: "4000", rating: "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>", image: "chairs/chair12.jpg" },
    { name: " Chair ", price: "3500", rating: "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>", image: "chairs/chair2.jpg" },
    // Add more products as needed
    { name: "Chair ", price: "6000", rating: "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>", image: "chairs/chair3.jpg" },
    { name: "Chair ", price: "7000", rating: "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>", image: "chairs/chair4.jpg" },
    { name: "Chair ", price: "2900", rating: "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>", image: "chairs/chair5.jpg" },
    { name: "Chair ", price: "4600", rating: "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>", image: "chairs/chair6.jpg" },
    { name: "Chair ", price: "9999", rating: "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>", image: "chairs/chair7.jpg" },
    { name: "Chair ", price: "2000", rating: "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>", image: "chairs/chair8.jpg" },
    { name: "Chair  ", price: "8000", rating: "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>", image: "chairs/chair9.jpg" },
    { name: "Chair  ", price: "4500", rating: "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>", image: "chairs/chair10.jpg" },
    { name: "Chair  ", price: "7000", rating: "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>", image: "chairs/chair11.jpg" },
    { name: "Chair  ", price: "2000", rating: "<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>", image: "chairs/chair1.jpg" },
  ];
  

// Function to create a product card
function createProductCard(product) {
  const card = document.createElement("div");
  card.className = "product-card";

  card.innerHTML = `
    <div class="product-image">
      <a href="chair_product_details.html?name=${encodeURIComponent(product.name)}&price=${product.price}&rating=${encodeURIComponent(product.rating)}">
        <img src="${product.image}" alt="${product.name}">
      </a>
      
    </div>
    <div class="product-details">
      <h2 class="product-title">${product.name}</h2>
      <p class="product-description">A chair is an upholstered bench or seat featuring arms and a back, allowing people to sit comfortably.</p>
      <h2>${product.rating}</h2>
      <p class="product-price">${product.price}<span>₹10,000</span></p>
      <button class="buy-now-button" onclick="buyNow()">Buy Now</button>
      <button class="addtocart-button" onclick="addToCart('${product.name}', '${product.price}', '${product.image}')">Add to Cart</button>
      <button class="addtowishlist-button" onclick="addToWishlist('${product.name}', '${product.price}','${product.image}')">Add to Wishlist</button>
    </div>
  `;

  return card;
}

// Function to render product cards
function renderProductCards() {
  const productGrid = document.getElementById("productGrid");

  productsData.forEach(product => {
    const card = createProductCard(product);
    productGrid.appendChild(card);
  });
}
function buyNow() {
    window.location.href = 'checkout.html';
  }
// Call the function to render product cards
renderProductCards();