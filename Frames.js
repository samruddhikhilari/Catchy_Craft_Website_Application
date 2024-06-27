
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
        { name: "Frame ", price: "200", rating: "⭐⭐⭐⭐⭐", image: "Frame/frame1jpg.jpg" },
        { name: "Frame ", price: "150", rating: "⭐⭐⭐⭐⭐", image: "Frame/frame2jpg.jpg" },
        // Add more products as needed
        { name: "Frame ", price: "350", rating: "⭐⭐⭐⭐⭐", image: "Frame/frame3jpg.jpg" },
        { name: "Frame ", price: "450", rating: "⭐⭐⭐⭐⭐", image: "Frame/frame4jpg.jpg" },
        { name: "Frame ", price: "250", rating: "⭐⭐⭐⭐⭐", image: "Frame/frame5jpg.jpg" },
        { name: "Frame ", price: "150", rating: "⭐⭐⭐⭐⭐", image: "Frame/frame6.jpg" },
        { name: "Frame ", price: "350", rating: "⭐⭐⭐⭐⭐", image: "Frame/frame7.jpg" },
        { name: "Frame ", price: "450", rating: "⭐⭐⭐⭐⭐", image: "Frame/frame8.jpg" },
        { name: "Frame  ", price: "600", rating: "⭐⭐⭐⭐⭐", image: "Frame/frame9.jpg" },
        { name: "Frame  ", price: "250", rating: "⭐⭐⭐⭐⭐", image: "Frame/frame10.jpg" },
        { name: "Frame  ", price: "350", rating: "⭐⭐⭐⭐⭐", image: "Frame/frame11.jpg" },
        { name: "Frame  ", price: "150", rating: "⭐⭐⭐⭐⭐", image: "Frame/frame12.jpg" },
      ];
  
      // Function to create a product card
      function createProductCard(product) {
        const card = document.createElement("div");
        card.className = "product-card";
  
        card.innerHTML = `
          <div class="product-image">
            <img src="${product.image}" alt="${product.name}">
            <div class="overlay">
              <button class="buy-button" onclick="redirectToCheckout('${product.name}', '${product.price}', '${product.rating}')">Buy Now</button>
            </div>
          </div>
          <div class="product-details">
            <h2 class="product-title">${product.name}</h2>
            <p class="product-description">Frame for  visual appreciation of objects and imagery such as photographs, canvas paintings, drawings.</p>
            <h2>${product.rating}</h2>
            <p class="product-price">${product.price}<span>₹650</span></p>
            <button class="buy-button" onclick="redirectToCheckout('${product.name}', '${product.price}', '${product.rating}')">Buy Now</button>
            <!-- Update the class name to match the selector in mini-cart.js -->
            <button class="addtocart-button" onclick="addToCart('${product.name}', '${product.price}', '${product.image}')">Add to Cart</button>

  
            <button class="addtowishlist-button" onclick="addToWishlist('${product.name}', '${product.price}')">Add to Wishlist</button>
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
  
      // Call the function to render product cards
      renderProductCards();