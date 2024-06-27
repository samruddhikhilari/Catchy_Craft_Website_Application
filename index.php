<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Catchy Craft  E-Commerce Website</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="shopping cart/css/style.css">
<!-- custom js file link  -->
<script src="shopping cart/js/script.js"></script>

  <!--- favicon-->
  <link rel="shortcut icon" href="logo/favicon.jpg" type="image/x-icon" >
  <script src="mini-cart.js" defer></script>

  <!--- custom css link-->
  <link rel="stylesheet" href="style.css">

  <!--- google font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>

  <div class="overlay" data-overlay></div>
  <!--- MODAL-->

<div class="modal" data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="images/lights1.jpg" alt="register catchy craft  " width="400" height="400">
      </div>

      <div class="newsletter">

        <form action="registeration.php" name="Email_Registeration" method="post">

          <div class="newsletter-header">
            <h3 class="newsletter-title">Register to Catchy Craft.</h3>

            <p class="newsletter-desc">
              Subscribe the <b>Catchy Craft </b> to get latest products and discount update.
            </p>
          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required value="">
          <button type="submit" class="btn-newsletter">Register</button>

        </form>

      </div>
    </div>
</div>

  <!-- NOTIFICATION TOAST -->

  <div class="notification-toast" data-toast>

      <button class="toast-close-btn" data-toast-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="toast-banner">
        <img src="products/creative_pot.jpg" alt="Rose Gold flower pot" width="100" height="70">
      </div>

      <div class="toast-detail">
        <p class="toast-message">
          Customer have just bought
        </p>

        <p class="toast-title">
          Rose Gold Flowers Pot
        </p>

        <p class="toast-meta">
          <time datetime="PT2M">2 Minutes</time> ago
        </p>
      </div>

  </div>

  
    <!-- HEADER -->

    <header>

      <div class="header-top">
          <div class="container">
    
            <ul class="header-social-container">
                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>
    
                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>
    
                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>
    
                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-linkedin"></ion-icon>
                  </a>
                </li>
            </ul>
    
            <div class="header-alert-news">
              <p>
                <b>Discount Offers</b>
                This Week Order Over - <span>&#8377</span>55
              </p>
            </div>
    
            <div class="header-top-actions">
              <select name="currency">
                <option value="eur">India <span>&#8377</span></option>
                <option value="usd">USD &dollar;</option>
              </select>
    
              <select name="language">
                <option value="en-US"> English </option>
                <option value="es-Ma"> Marathi </option>
                <option value="es-Hi"> Hindi </option>
              </select>
            </div>
    
          </div>
    
      </div>
    
      <div class="header-main">
    
          <div class="container">
    
            <a href="#" class="header-logo">
              <img src="logo/logo.jpg" alt="Catchy Craft's logo" width="120" height="126">
            </a>
    
            <div class="header-search-container">
              <input type="search" name="search" class="search-field" placeholder="Enter your product name...">
    
              <button class="search-btn">
                <ion-icon name="search-outline"></ion-icon>
              </button>
              
            </div>
    
            <div class="header-user-actions">
    
              <button class="action-btn">
                <nav class="desktop-navigation-menu">
                  <div class="container">
                
                    <ul class="desktop-menu-category-list">
                
                      <li class="menu-category">
                        <a href="#"><ion-icon name="person-outline" class="menu-title"></ion-icon></a>
                        <div class="dropdown-panel">
                
                          <ul class="dropdown-panel-list">
                
                            <li class="panel-list-item">
                              <a href="./Details/admin_login.php" style="width: auto; font-size: large;" name="admin" value="admin"  onclick="admin_login()">ADMIN</a>
                            </li>
                            <li class="panel-list-item">
                              <a href="./Details/login.php" style="width: auto; font-size: large;" name="customer" value="customer" onclick="customer_login()">CUSTOMER</a>
                            </li>
                            </ul>
                        </div>
                      </li>
                      </ul>
                      </div>
                </nav>
              </button>
    
              <button class="action-btn">
                <a href="wishlist.html"><ion-icon name="heart-outline"></ion-icon></a>
              </button>
    
              <button class="action-btn">
                <a href="mini-cart.html"><ion-icon name="bag-handle-outline"></ion-icon></a>
              </button>
    
            </div>
          </div>
    
        </div>
    
        <nav class="desktop-navigation-menu">
    
          <div class="container">
    
            <ul class="desktop-menu-category-list">
    
              <li class="menu-category">
                <a href="index.html" class="menu-title">Home</a>
              </li>
    
              <li class="menu-category">
                <a href="#" class="menu-title">Categories</a>
    
                <div class="dropdown-panel">
    
                  <ul class="dropdown-panel-list">
    
                    <li class="menu-title">
                      <a href="#">Furnitures</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="sofas.html">Sofa's</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="chairs.html">Chair's</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="beds.html">Beds</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="tables.html">Tables</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="stools.html">Stool's</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="#">
                        <img src="products/sofa.jpg" alt="Furnitures collection" width="250" height="119">
                      </a>
                    </li>
    
                  </ul>

                 <ul class="dropdown-panel-list">
    
                    <li class="menu-title">
                      <a href="#">Decoration</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="bottle.html">Bottles</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="cups.html">Cups</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="pots.html">Pots</a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="#">
                        <img src="products/bottles.jpg" alt="Decoration collection" width="250" height="119">
                      </a>
                    </li>
    
                  </ul>

                  <ul class="dropdown-panel-list">
    
                    <li class="menu-title">
                      <a href="#">Hand Crafts </a>
                    </li>
    
                    <li class="panel-list-item">
                      <a href="wallart.html">Wall Art</a>
                    </li>
      
                    <li class="panel-list-item">
                      <a href="craft.html">Crafts</a>
                    </li>
                    
                    <li class="panel-list-item">
                      <a href="Frames.html">Frames</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="clocks.html">Clocks</a>
                    </li>
                    
                    <li class="panel-list-item">
                      <a href="#">
                        <img src="products/bags.jpg" alt="Decoration collection" width="250" height="119">
                      </a>
                    </li>
  
                  </ul>
                  <ul class="dropdown-panel-list">
    
                    <li class="panel-list-item">
                      <a href="#">
                        <img src="products/sporch.jpg" alt="Decoration collection" width="250" height="119">
                      </a>
                    </li>
    
                  </ul>
    
                </div>
              </li>
    
              <li class="menu-category">
                <a href="#" class="menu-title">Hot Offers</a>
              </li>
            </ul>
          </div>
        </nav>
    
        <!-- mobile bottom navigation  -->
        <div class="mobile-bottom-navigation">
    
          <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>
    
          <button class="action-btn">
           <a href="mini-cart.html"> <ion-icon name="bag-handle-outline"></ion-icon></a>
          </button>
    
          <button class="action-btn">
            <ion-icon name="home-outline"></ion-icon>
          </button>
    
          <button class="action-btn">
           <a href="wishlist.html"><ion-icon name="heart-outline"></ion-icon></a> 
    
          </button>
    
          <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="grid-outline"></ion-icon>
          </button>
    
        </div>
    
        <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>
    
          <div class="menu-top">
            <h2 class="menu-title">Menu</h2>
    
            <button class="menu-close-btn" data-mobile-menu-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>
          </div>
        
          <li class="menu-category">
              
              <button class="action-btn">
              <ion-icon name="person-outline"></ion-icon>
              </button>
              <a href="./Details/sign_in.php" class="menu-title">Profile</a> 
            
          </li>
    
          <ul class="mobile-menu-category-list">
    
            <li class="menu-category">
              
              <a href="#" class="menu-title" style="background-color: rgb(239, 124, 181);">Home</a> 
               
            </li>
    
            <li class="menu-category">
    
              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Handmade Products</p>
    
                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
              </button>
    
              <ul class="submenu-category-list" data-accordion>
    
                <li class="submenu-category">
                  <a href="bottle.html" class="submenu-title">Bottles</a>
                </li>
    
                <li class="submenu-category">
                  <a href="cups.html" class="submenu-title"> Cups</a>
                </li>
    
                <li class="submenu-category">
                  <a href="pots.html" class="submenu-title"> pots</a>
                </li>
    
                <li class="submenu-category">
                  <a href="wallets.html" class="submenu-title">Wallet</a>
                </li>
                 
              </ul>
    
            </li>
    
            <li class="menu-category">
    
              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Furniture</p>
    
                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
              </button>
    
              <ul class="submenu-category-list" data-accordion>
    
                <li class="submenu-category">
                  <a href="sofas.html" class="submenu-title">sofa</a>
                </li>
    
                <li class="submenu-category">
                  <a href="beds.html" class="submenu-title">Beds </a>
                </li>
    
                <li class="submenu-category">
                  <a href="stools.html" class="submenu-title">Stool</a>
                </li>
    
                <li class="submenu-category">
                  <a href="chairs.html" class="submenu-title"> Chair</a>
                </li>
    
              </ul>
    
            </li>
    
            <li class="menu-category">
    
              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Wall Decoration </p>
    
                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
              </button>
    
              <ul class="submenu-category-list" data-accordion>
    
                <li class="submenu-category">
                  <a href="wallart.html" class="submenu-title">Wall Art</a>
                </li>
    
                <li class="submenu-category">
                  <a href="pots.html" class="submenu-title">Pots</a>
                </li>
    
                <li class="submenu-category">
                  <a href="cups.html" class="submenu-title">Cups</a>
                </li>
    
                <li class="submenu-category">
                  <a href="clocks.html" class="submenu-title">Clocks</a>
                </li>
    
                <li class="submenu-category">
                  <a href="craft.html" class="submenu-title">Crafts</a>
                </li>
    
              </ul>
    
            </li>
    
            <li class="menu-category">
              <a href="#" class="menu-title"> Offers</a>
            </li>
    
          </ul>
    
          <div class="menu-bottom">
    
            <ul class="menu-category-list">
    
              <li class="menu-category">
    
                <button class="accordion-menu" data-accordion-btn>
                  <p class="menu-title">Language</p>
    
                  <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                </button>
    
                <ul class="submenu-category-list" data-accordion>
    
                  <li class="submenu-category">
                    <a href="#" class="submenu-title">English</a>
                  </li>
    
                  <li class="submenu-category">
                    <a href="#" class="submenu-title"> Marathi </a>
                  </li>
    
                  <li class="submenu-category">
                    <a href="#" class="submenu-title"> Hindi </a>
                  </li>
    
                </ul>
    
              </li>
    
              <li class="menu-category">
                <button class="accordion-menu" data-accordion-btn>
                  <p class="menu-title">Currency</p>
                  <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                </button>
    
                <ul class="submenu-category-list" data-accordion>
                  <li class="submenu-category">
                    <a href="#" class="submenu-title">India <span>&#8377;</span></a>
                  </li>
    
                  <li class="submenu-category">
                    <a href="#" class="submenu-title">USD &dollar;</a>
                  </li>
                </ul>
              </li>
    
            </ul>
    
            <ul class="menu-social-container">
    
              <li>
                <a href="#facebook" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#twitter" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#instagram" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#linkdin" class="social-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>
    
            </ul>
    
          </div>
    
        </nav>
    
      </header>

  <!-- MAIN -->
  <main>

    <!-- BANNER -->

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

          <div class="slider-item">

            <img src="products/bann1.jpg" alt="women's latest fashion sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trending item</p>

              <h2 class="banner-title">Furnitures sale</h2>

              <p class="banner-text">
                starting at &#8377  <b>1000</b>.00
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="products/bann5.jpg" alt="modern sunglasses" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trending accessories</p>

              <h2 class="banner-title">Customize HairBand</h2>

              <p class="banner-text">
                starting at &#8377; <b>100</b>.00
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="products/bann3.jpg" alt="new fashion summer sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Sale Offer</p>

              <h2 class="banner-title">New Year  sale</h2>

              <p class="banner-text">
                starting at &#8377; <b>99</b>
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- Featured categories of products  -->

    <div class="category">

      <div class="container">

        <div class="category-item-container has-scrollbar">

          <div class="category-item">

            <div class="category-img-box">
              <img src="products/sofa.png" alt="dress & frock" width="150">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Sofas</h3>

                <p class="category-item-amount">(53)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="products/hair_bands.jpg" alt="winter wear" width="150">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Hair Bands</h3>

                <p class="category-item-amount">(58)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="products/pot2.jpg" alt="glasses & lens" width="150">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Plant Pots </h3>

                <p class="category-item-amount">(68)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="products/jeans.jpg" alt="shorts & jeans" width="150">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Shorts & jeans</h3>

                <p class="category-item-amount">(84)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="products/jeans_bag.jpg" alt="t-shirts" width="150">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Bags</h3>

                <p class="category-item-amount">(35)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="products/zumbar.jpg" alt="jacket" width="150">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Hangers</h3>

                <p class="category-item-amount">(16)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="products/watch.jpg" alt="watch" width="150">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Watch</h3>

                <p class="category-item-amount">(27)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="products/frames.jpg" alt="hat & caps" width="150">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Frames</h3>

                <p class="category-item-amount">(39)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- PRODUCT categories -->

    <div class="product-container">

      <div class="container">

        <!-- SIDEBAR -->

        <div class="sidebar  has-scrollbar" data-mobile-menu>

          <div class="sidebar-category">

            <div class="sidebar-top">
              <h2 class="sidebar-title">category</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="products/sofa1.jpg" alt="Furniture" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Furniture</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="sofas.html" class="sidebar-submenu-title">
                      <p class="product-name">Sofa</p>
                      <data value="75" class="stock" title="Available Stock">75</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="chairs.html" class="sidebar-submenu-title">
                      <p class="product-name">Chair</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="stools.html" class="sidebar-submenu-title">
                      <p class="product-name">Stool</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="beds.html" class="sidebar-submenu-title">
                      <p class="product-name">Bed</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="tables.html" class="sidebar-submenu-title">
                      <p class="product-name">Table</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="products/pot1.jpg" alt="clothes" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Decoration</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="pots.html" class="sidebar-submenu-title">
                      <p class="product-name">Pots</p>
                      <data value="46" class="stock" title="Available Stock">46</data>
                    </a>
                  </li>

                    <li class="sidebar-submenu-category">
                    <a href="wallart.html" class="sidebar-submenu-title">
                      <p class="product-name">wallart</p>
                      <data value="61" class="stock" title="Available Stock">61</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="bottle.html" class="sidebar-submenu-title">
                      <p class="product-name">Decorative Bottle</p>
                      <data value="73" class="stock" title="Available Stock">73</data>
                    </a>
                  </li>
                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="images/main.jpg" alt="cosmetics" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Handmade Products</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="pots.html" class="sidebar-submenu-title">
                      <p class="product-name">Pots</p>
                      <data value="68" class="stock" title="Available Stock">68</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="cups.html" class="sidebar-submenu-title">
                      <p class="product-name">Cups</p>
                      <data value="46" class="stock" title="Available Stock">46</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Hangin Produts</p>
                      <data value="79" class="stock" title="Available Stock">79</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Mirrors </p>
                      <data value="23" class="stock" title="Available Stock">23</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="images/cups.jpg" alt="glasses" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Crafts</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="clocks.html" class="sidebar-submenu-title">
                      <p class="product-name">Clocks</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="wallart.html" class="sidebar-submenu-title">
                      <p class="product-name">Wall Arts</p>
                      <data value="48" class="stock" title="Available Stock">48</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="bottle.html" class="sidebar-submenu-title">
                      <p class="product-name">Bottles</p>
                      <data value="48" class="stock" title="Available Stock">48</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="products/work_bag.jpg" alt="bags" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Bags</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="bags.html" class="sidebar-submenu-title">
                      <p class="product-name">Purse</p>
                      <data value="80" class="stock" title="Available Stock">80</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="wallets.html" class="sidebar-submenu-title">
                      <p class="product-name">Wallet</p>
                      <data value="75" class="stock" title="Available Stock">75</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Shopping Bag</p>
                      <data value="62" class="stock" title="Available Stock">62</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Work Bag</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>
                  </ul>
              </li>
               
            </ul>

          </div>

          <!-- best sellers  -->
          <div class="product-showcase">

            <h3 class="showcase-heading">best sellers</h3>

            <div class="showcase-wrapper">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="products/jeans.jpg" alt="baby fabric shoes" width="75" height="75"
                      class="showcase-img">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">girls cutomiz jeans</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del><span>&#8377</span>3500</del>
                      <p class="price"><span>&#8377</span>800</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="products/frames.jpg" alt="men's hoodies t-shirt" class="showcase-img"
                      width="75" height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Rosy flowers work cutomize frame</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del><span>&#8377</span>800</del>
                      <p class="price"><span>&#8377</span>500</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="products/pot3.jpg" alt="girls t-shirt" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">black color flowers customize plant pot</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del><span>&#8377</span>1000</del>
                      <p class="price"><span>&#8377</span>399</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="products/cover.jpg" alt="woolen hat for men" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">customize phone cover</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del><span>&#8377</span>500</del>
                      <p class="price"><span>&#8377</span>400</p>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

<div class="product-box">
          <!-- New Arrivals PRODUCTS -->

          <div class="product-minimal">

            <div class="product-showcase">

              <h2 class="title">New Arrivals</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="products/sofa_set.png" alt=" greenich color sofa set " width="150" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Sofa Set </h4>
                      </a>

                      <a href="#" class="showcase-category">Furnitures</a>

                      <div class="price-box">
                        <p class="price"><span>&#8377</span>8999</p>
                        <del><span>&#8377</span>10000</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="products/cloth.jpg" alt="rosy color clock" class="showcase-img" width="150">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Pink Design Clock</h4>
                      </a>
                  
                      <a href="#" class="showcase-category"> Decoration </a>
                  
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>499</p>
                        <del><span>&#8377</span>800</del>
                      </div>
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="products/bags.jpg" alt="bag" class="showcase-img" width="150">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title"> Hand Bag</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Bags</a>
                  
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>800</p>
                        <del><span>&#8377</span>2500</del>
                      </div>
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="products/craft_shoe.jpg" alt="hand painted shoes" class="showcase-img" width="150">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Hand painted shoes</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Women Fashion</a>
                  
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>899</p>
                        <del><span>&#8377</span>2000</del>
                      </div>
                  
                    </div>
                  
                  </div>

                </div>

                <div class="showcase-container">
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="products/bag1.jpg" alt="Party Wear Bag" class="showcase-img"
                        width="150">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Party Wear Bag</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Bags </a>
                
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>399</p>
                        <del><span>&#8377</span>100</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="products/jwellery1.jpg" alt="Black Jwellery Set " class="showcase-img"
                        width="150">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Black Jwellery Set </h4>
                      </a>
                
                      <a href="#" class="showcase-category"> Jwellery  </a>
                
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>299</p>
                        <del><span>&#8377</span>500</p>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="products/work_bag.jpg" alt="bag" class="showcase-img"
                        width="150">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Hand Bag</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Bags</a>
                
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>199</p>
                        <del><span>&#8377</span>400</p>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="products/earrings.jpg" alt="custom earrings " class="showcase-img"
                        width="150">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Red Earring </h4>
                      </a>
                
                      <a href="#" class="showcase-category">Jwellery</a>
                
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>99</p>
                        <del><span>&#8377</span>300</p>
                      </div>
                
                    </div>
                
                  </div>
                
                </div>

              </div>

            </div>

<!-- Trending products -->
            <div class="product-showcase">
            
              <h2 class="title">Trending</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/chair1.jpg" alt="brown chair" class="showcase-img"
                        width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Comfy Chair Set </h4>
                      </a>
            
                      <a href="#" class="showcase-category">Furnitures</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>1999</p>
                        <del><span>&#8377</span>5000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/earrings2.jpg" alt="earrings" class="showcase-img"
                        width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Earrings - glossy</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Jwellery</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>299</p>
                        <del><span>&#8377</span>500</p>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/chair4.jpg" alt="chair" class="showcase-img"
                        width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Comfy Chair</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Furnitures</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>999</p>
                        <del><span>&#8377</span>2000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/hair1.jpg" alt="hair accessories " class="showcase-img"
                        width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Hair Accessory</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Jwellery</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>150</p>
                        <del><span>&#8377</span>300</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/hanger1.jpg" alt="hanger" class="showcase-img"
                        width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Lightish hanger </h4>
                      </a>
            
                      <a href="#" class="showcase-category">Decoration</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>300</p>
                        <del><span>&#8377</span>500</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/table3.jpg" alt="table" class="showcase-img" width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Customize table</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Furnitures</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>1500</p>
                        <del><span>&#8377</span>3000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/wall2.jpg" alt="wall decore " class="showcase-img"
                        width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Wall Decor</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Decoration</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>500</p>
                        <del><span>&#8377</span>1000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/sofa3.jpg" alt="sofa" class="showcase-img" width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Casual Sofa Set</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Furnitures</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>1999</p>
                        <del><span>&#8377</span>5000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
              </div>
            
            </div>

            <!-- top rated products  -->
            <div class="product-showcase">
            
              <h2 class="title">Top Rated</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/pillow1.jpg" alt="pillow" class="showcase-img"
                        width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Shiny Pillow</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Watches</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>799</p>
                        <del><span>&#8377</span>1000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/phone_cover.jpg" alt="phone cover " class="showcase-img"
                        width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Customize Phone Cover </h4>
                      </a>
            
                      <a href="#" class="showcase-category">Accessories</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>299</p>
                        <del><span>&#8377</span>1999</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/wall4.jpg" alt="wall Decoration" class="showcase-img"
                        width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Wall Tree</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Furnitures</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>799</p>
                        <del><span>&#8377</span>2000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/table2.jpg" alt="Tables" class="showcase-img"
                        width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Colorful Table</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Furnitures</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>499</p>
                        <del>$<span>&#8377</span>1999</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/pillow2.jpg" alt="pillow" class="showcase-img"
                        width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Comfy Pillow</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Decoration</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>650</p>
                        <del><span>&#8377</span>2000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/table.jpg" alt="table" class="showcase-img" width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Formal Look Table</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Furnitures</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>399</p>
                        <del><span>&#8377</span>1999</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/phone_cover2.jpg" alt="phone cover " class="showcase-img"
                        width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Blossom Phone Cover</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Accessories</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>250</p>
                        <del><span>&#8377</span>500</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="products/chair2.jpg" alt="rose gold peacock earrings" class="showcase-img"
                        width="150">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title"> Standard Chair </h4>
                      </a>
            
                      <a href="#" class="showcase-category">Furnitures</a>
            
                      <div class="price-box">
                        <p class="price"><span>&#8377</span>999</p>
                        <del><span>&#8377</span>1999</p>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
              </div>
            
            </div>

          </div>
          <!--Deal of the day  -->

          <div class="product-featured">

            <h2 class="title">Deal of the day</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">
                  
                  <div class="showcase-banner">
                    <img src="products/sofa2.jpg" alt="sofa" class="showcase-img">
                  </div>

                  <div class="showcase-content">
                    
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">comfy , soft and affordable sofa set </h3>
                    </a>

                    <p class="showcase-desc">
                      The pink rosy sofa to much comfortable and easy to use for any one it would give a classy and branded look to your home place 
                    </p>

                    <div class="price-box">
                      <p class="price"><span>&#8377</span>999</p>

                      <del><span>&#8377</span>2000</p>
                    </div>
                    <form action="shopping cart/add_to_cart.php" method="post">
                    <button  type="submit" class="add-cart-btn" class="btn" style="color: white; back" value="add to cart" name="add_to_cart">Add to Cart</button>
                    </form>
                    <button class="add-cart-btn">TRY AR FILTER</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          already sold: <b>20</b>
                        </p>

                        <p>
                          available: <b>40</b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Hurry Up! Offer ends in:
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">1</p>

                          <p class="display-text">Days</p>

                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">
              
                <div class="showcase">
              
                  <div class="showcase-banner">
                    <img src="products/chair4.jpg" alt="sofa" class="showcase-img">
                  </div>
              
                  <div class="showcase-content">
              
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>
              
                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">Blossom Sofa Set</a>
                    </h3>
              
                    <p class="showcase-desc">
                      The classy , Standard sofa for you to level up your home place look awesome 
                      Buy this product with best quality and affordable price only for you 
                    </p>
              
                    <div class="price-box">
                      <p class="price"><span>&#8377</span>999</p>
                      <del><span>&#8377</span>5000</del>
                    </div>
              
                    <button class="add-cart-btn" onclick="addToCart('Black Forest Chair', '999', 'products/chair4.jpg')" style="color: white;">Add to Cart</button>
                    <button class="add-cart-btn">TRY AR FILTER</button>
              
                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> already sold: <b>15</b> </p>
              
                        <p> available: <b>40</b> </p>
                      </div>
              
                      <div class="showcase-status-bar"></div>
                    </div>
              
                    <div class="countdown-box">
              
                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>
              
                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">2</p>
                          <p class="display-text">Days</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">12</p>
                          <p class="display-text">Hours</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>
              
                    </div>
              
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>

<!--PRODUCT GRID -->
<!--new products -->>
          <div class="product-main">

            <h2 class="title">New Products</h2>

            <div class="product-grid">

              <div class="showcase">

                <div class="showcase-banner">

                  <img src="products/shoes.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="products/shoes.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

                  <p class="showcase-badge">15%</p>

                  <div class="showcase-actions">

                    <button class="btn-action">
                      <a href="wishlist.html"><ion-icon name="heart-outline"></ion-icon></a>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <a href="mini-cart.html"><ion-icon name="bag-add-outline"></ion-icon></a>
                    </button>

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="#" class="showcase-category">Design Shoes </a>

                  <a href="#">
                    <h3 class="showcase-title">Women Design event wear shoes </h3>
                  </a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price"><span>&#8377</span>700</p>
                    <del><span>&#8377</span>5000</del>
                  </div>

                </div>

              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="products/cup2.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img default"
                    width="300">
                  <img src="products/cup2.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Cup</a>
              
                  <h3>
                    <a href="#" class="showcase-title">3D Painted Decoration Cup</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price"><span>&#8377</span>499</p>
                    <del><span>&#8377</span>2000</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="products/flower_pot.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default"
                    width="300">
                  <img src="products/flower_pot.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Flower Pot</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Rosy look Flower Pot</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price"><span>&#8377</span>199</p>
                    <del><span>&#8377</span>500</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="products/container.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img default"
                    width="300">
                  <img src="products/container.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle pink">new</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Samll customize designed Containers</a>
              
                  <h3>
                    <a href="#" class="showcase-title">customize Containers products</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price"><span>&#8377</span>599</p>
                    <del><span>&#8377</span>5000</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="products/pot3.jpg" alt="Casual Men's Brown shoes" class="product-img default"
                    width="300">
                  <img src="products/pot3.jpg" alt="Casual Men's Brown shoes" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">casual black pot </a>
              
                  <h3>
                    <a href="#" class="showcase-title">flowers hand drew plant pot </a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">$99.00</p>
                    <del>$105.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="products/wall3.jpg" alt="Pocket Watch Leather Pouch" class="product-img default"
                    width="300">
                  <img src="products/wall3.jpg" alt="Pocket Watch Leather Pouch" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Wall hanging</a>
              
                  <h3>
                    <a href="#" class="showcase-title">white classy color wall hanger</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price"><span>&#8377</span>399</p>
                    <del><span>&#8377</span>500</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="products/watch.jpg" alt="Smart watche Vital Plus" class="product-img default"
                    width="300">
                  <img src="products/watch.jpg" alt="Smart watche Vital Plus" class="product-img hover" width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">watches</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Customize yellow color watch</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price"><span>&#8377</span>500</p>
                    <del>&#8377</span>3000</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="products/pot1.jpg" alt="Womens Party Wear Shoes" class="product-img default"
                    width="300">
                  <img src="products/pot1.jpg" alt="Womens Party Wear Shoes" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">plant pot </a>
              
                  <h3>
                    <a href="#" class="showcase-title">white freshy color pot</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price"><span>&#8377</span>400</p>
                    <del><span>&#8377</span>5000</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="products/pillow.jpg" alt="Mens Winter Leathers Jackets" class="product-img default"
                    width="300">
                  <img src="products/pillow.jpg" alt="Mens Winter Leathers Jackets" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">pillows</a>
              
                  <h3>
                    <a href="#" class="showcase-title">customize pillows with images</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price"><span>&#8377</span>250</p>
                    <del><span>&#8377</span>500</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="products/pillow4.jpg" alt="Trekking & Running Shoes - black" class="product-img default"
                    width="300">
                  <img src="products/pillow4.jpg" alt="Trekking & Running Shoes - black" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">flowers</a>
              
                  <h3>
                    <a href="#" class="showcase-title">raw materials cutomize flowers</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price"><span>&#8377</span>299</p>
                    <del><span>&#8377</span>800</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="products/sofa_set.png" alt="Men's Leather Formal Wear shoes" class="product-img default"
                    width="300">
                  <img src="products/sofa_set.png" alt="Men's Leather Formal Wear shoes" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">sofa set</a>
              
                  <h3>
                    <a href="#" class="showcase-title">greenish classy looks sofa set</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price"><span>&#8377</span>5000</p>
                    <del><span>&#8377</span>10000</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="products/wall5.jpg" alt="Better Basics French Terry Sweatshorts"
                    class="product-img default" width="300">
                  <img src="products/wall5.jpg" alt="Better Basics French Terry Sweatshorts"
                    class="product-img hover" width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">shapes Furnitures</a>
              
                  <h3>
                    <a href="#" class="showcase-title">shapes design wall and tables</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price"><span>&#8377</span>2500</p>
                    <del><span>&#8377</span>5000</del>
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- TESTIMONIALS, CTA & SERVICE -->

    <div>

      <div class="container">

        <div class="testimonials-box">

          <!-- TESTIMONIALS -->

          <div class="testimonial">

            <h2 class="title">testimonial</h2>

            <div class="testimonial-card">

              <img src="logo/logo.jpg" alt="catchy Catchy" class="testimonial-banner" width="100" height="80">

              <p class="testimonial-name">Catchy Craft </p>

              <p class="testimonial-title">CEO & Founder Invision</p>

              <img src="logo/favicon.jpg" alt="logo" class="quotation-img" width="50">

              <p class="testimonial-desc">
               The Catchy Craft Organizaion works as medium to make selling of best products which manufactured from raw <b> used products</b> .
               Through Catchy Craft manufactural get interface to interact with customers easily.
               The organization with application helpful for getting <b> qualitative handmade products </b>and help to reduce <b>waste</b>
              </p>

            </div>

          </div>

          <!--  CTA -->

          <div class="cta-container">

            <img src="products/bann1.jpg" alt="new year collection" class="cta-banner add-cart-btn" >

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">New year collection</h2>

              <p class="cta-text">Starting @ <span>&#8377</span>99</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>

          <!-- SERVICE -->

          <div class="service">

            <h2 class="title">Our Services</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Worldwide Delivery</h3>
                  <p class="service-desc">For Order Over <span>&#8377</span>100000</p>

                </div>

              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">With in five days delivery</h3>
                  <p class="service-desc">India Orders Only</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">30% discount </h3>
                  <p class="service-desc">For Order Over <span>&#8377</span>10000</p>
              
                </div>
              
              </a>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!--Best furniture  Products  -->

    <div class="blog">
     
      <div class="container">
        <h2 class="title">Best Furniture Products</h2>
        <div class="blog-container has-scrollbar">

          <div class="product-featured">
              
               <div class="showcase-container">
                         
                           <div class="showcase" width="100%">
                         
                             <div class="showcase-banner">
                               <img src="products/fur1.jpg" alt="sofa" class="showcase-img" width="100%">

                               <div class="showcase-status">
                                <div class="wrapper">
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="showcase-status-bar"></div>
                              </div>


                               <div class="countdown-box">
                         
                                <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                        
                                <div class="countdown">
                                  <div class="countdown-content">
                                    <p class="display-number">2</p>
                                    <p class="display-text">Days</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">12</p>
                                    <p class="display-text">Hours</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">59</p>
                                    <p class="display-text">Min</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">00</p>
                                    <p class="display-text">Sec</p>
                                  </div>
                                </div>
                        
                              </div>
                             </div>
                         
                             <div class="showcase-content">
                         
                               <h3 class="showcase-title">
                                 <a href="#" class="showcase-title">Chair</a>
                               </h3>
                         
                               <p class="showcase-desc">
                                 The classy and traditional set of chairs for you 
                               </p>
                               <div class="showcase-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                              </div>

                               <div class="price-box">
                                 <p class="price"><span>&#8377</span>999</p>
                                 <del><span>&#8377</span>5000</del>
                               </div>
                         
                               <button class="add-cart-btn" onclick="addToCart('Traditional Chair', '1009', 'products/fur1.jpg')" style="color: white;">Add to Cart</button>
                               <button class="add-cart-btn">TRY AR</button>
                               <div class="showcase-status">
                                
                                <div class="wrapper">
                                 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt repellat animi labore dicta? 
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="countdown-box">
                                   <p class="countdown-desc">Hurry Up! It's last chance to get :</p>
                                </div>
                              </div>
                          
                              </div>
                         
                           </div>
                         
                      </div>
           </div>
         

           <!--second products -->>

           <div class="product-featured">
            <div class="showcase-container">
                         
                           <div class="showcase">
                         
                             <div class="showcase-banner">
                               <img src="products/fur2.jpg" alt="sofa" class="showcase-img">
                               
                               <div class="showcase-status">
                                <div class="wrapper">
                                  <p> already sold: <b>15</b> </p>
                        
                                </div>
                        
                                <div class="showcase-status-bar"></div>
                              </div>

                              
                               <div class="countdown-box">
                         
                                <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                        
                                <div class="countdown">
                                  <div class="countdown-content">
                                    <p class="display-number">2</p>
                                    <p class="display-text">Days</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">12</p>
                                    <p class="display-text">Hours</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">59</p>
                                    <p class="display-text">Min</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">00</p>
                                    <p class="display-text">Sec</p>
                                  </div>
                                </div>
                        
                              </div>
                             </div>
                         
                             <div class="showcase-content">
                                                  
                               <h3 class="showcase-title">
                                 <a href="#" class="showcase-title">Traditional chair</a>
                               </h3>
                         
                               <p class="showcase-desc">
                                Buy with Best quality and affordable price 
                               </p>
                               <div class="showcase-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                              </div>

                               <div class="price-box">
                                 <p class="price"><span>&#8377</span>999</p>
                                 <del><span>&#8377</span>5000</del>
                               </div>
                         
                               <button class="add-cart-btn"><a href="mini-cart.html" style="color: white;">add cart</a></button>
                               <button class="add-cart-btn">TRY AR</button>
                         
                               <div class="showcase-status">
                                 <div class="wrapper">
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt repellat animi labore dicta? 
                                   <p> already sold: <b>15</b> </p>
                         
                                   <p> available: <b>40</b> </p>
                                 </div>
                         
                                 <div class="countdown-box">
                                    <p class="countdown-desc">Hurry Up! It's last chance to get :</p>
                                 </div>
                               </div>
                         
                             </div>
                         
                           </div>
                         
                         </div>
           </div>

           <!--third product-->
           <div class="product-featured">
            <div class="showcase-container">
                         
                           <div class="showcase">
                         
                             <div class="showcase-banner">
                               <img src="products/fur3.jpg" alt="sofa" class="showcase-img">
                               
                               <div class="showcase-status">
                                <div class="wrapper">
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="showcase-status-bar"></div>
                              </div>

                              
                               <div class="countdown-box">
                         
                                <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                        
                                <div class="countdown">
                                  <div class="countdown-content">
                                    <p class="display-number">2</p>
                                    <p class="display-text">Days</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">12</p>
                                    <p class="display-text">Hours</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">59</p>
                                    <p class="display-text">Min</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">00</p>
                                    <p class="display-text">Sec</p>
                                  </div>
                                </div>
                        
                              </div>
                             </div>
                         
                             <div class="showcase-content">
                         
                              <h3 class="showcase-title">
                                 <a href="#" class="showcase-title">Chair</a>
                               </h3>
                         
                               <p class="showcase-desc">
                                 Buy with best quality and affordable price 
                               </p>
                         
                               <div class="showcase-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                              </div>

                               <div class="price-box">
                                 <p class="price"><span>&#8377</span>999</p>
                                 <del><span>&#8377</span>5000</del>
                               </div>
                         
                               <button class="add-cart-btn"><a href="mini-cart.html" style="color: white;">add cart</a></button>
                               <button class="add-cart-btn">TRY AR</button>
                         
                               <div class="showcase-status">
                                
                                <div class="wrapper">
                                 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt repellat animi labore dicta? 
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="countdown-box">
                                   <p class="countdown-desc">Hurry Up! It's last chance to get :</p>
                                </div>
                              </div>
                         
                             </div>
                         
                           </div>
                         
                         </div>
           </div>
           <!--fourth product -->
           <div class="product-featured">
            <div class="showcase-container">
                         
                           <div class="showcase">
                         
                             <div class="showcase-banner">
                               <img src="products/fur4.jpg" alt="sofa" class="showcase-img">

                               
                               <div class="showcase-status">
                                <div class="wrapper">
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="showcase-status-bar"></div>
                              </div>

                              
                               <div class="countdown-box">
                         
                                <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                        
                                <div class="countdown">
                                  <div class="countdown-content">
                                    <p class="display-number">2</p>
                                    <p class="display-text">Days</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">12</p>
                                    <p class="display-text">Hours</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">59</p>
                                    <p class="display-text">Min</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">00</p>
                                    <p class="display-text">Sec</p>
                                  </div>
                                </div>
                        
                              </div>
                             </div>
                         
                             <div class="showcase-content">
                         
                               <h3 class="showcase-title">
                                 <a href="#" class="showcase-title">Chair</a>
                               </h3>
                         
                               <p class="showcase-desc">
                                Buy with best quality and affordable price 
                               </p>
                               <div class="showcase-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                              </div>

                               <div class="price-box">
                                 <p class="price"><span>&#8377</span>999</p>
                                 <del><span>&#8377</span>5000</del>
                               </div>
                         
                               <button class="add-cart-btn"><a href="mini-cart.html" style="color: white;">add cart</a></button>
                               <button class="add-cart-btn">TRY AR</button>
                         
                               <div class="showcase-status">
                                
                                <div class="wrapper">
                                 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt repellat animi labore dicta? 
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="countdown-box">
                                   <p class="countdown-desc">Hurry Up! It's last chance to get :</p>
                                </div>
                              </div>
                         
                             </div>
                         
                           </div>
                         
                         </div>
           </div>
           <!--fifth product-->
           <div class="product-featured">
            <div class="showcase-container">
                         
                           <div class="showcase">
                         
                             <div class="showcase-banner">
                               <img src="products/fur5.jpg" alt="sofa" class="showcase-img">
                               
                               <div class="showcase-status">
                                <div class="wrapper">
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="showcase-status-bar"></div>
                              </div>

                              
                               <div class="countdown-box">
                         
                                <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                        
                                <div class="countdown">
                                  <div class="countdown-content">
                                    <p class="display-number">2</p>
                                    <p class="display-text">Days</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">12</p>
                                    <p class="display-text">Hours</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">59</p>
                                    <p class="display-text">Min</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">00</p>
                                    <p class="display-text">Sec</p>
                                  </div>
                                </div>
                        
                              </div>
                             </div>
                         
                             <div class="showcase-content">
                      
                               <h3 class="showcase-title">
                                 <a href="#" class="showcase-title">Chair</a>
                               </h3>
                         
                               <p class="showcase-desc">
                                Buy with best quality and affordable price 
                               </p>
                               <div class="showcase-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                              </div>
                               <div class="price-box">
                                 <p class="price"><span>&#8377</span>999</p>
                                 <del><span>&#8377</span>5000</del>
                               </div>
                         
                               <button class="add-cart-btn"><a href="mini-cart.html" style="color: white;">add cart</a></button>
                               <button class="add-cart-btn">TRY AR </button>
                         
                               <div class="showcase-status">
                                
                                <div class="wrapper">
                                 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt repellat animi labore dicta? 
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="countdown-box">
                                   <p class="countdown-desc">Hurry Up! It's last chance to get :</p>
                                </div>
                              </div>
                         
                             </div>
                         
                           </div>
                         
                         </div>
           </div>
           <!--sixth product-->
           <div class="product-featured">
            <div class="showcase-container">
                         
                           <div class="showcase">
                         
                             <div class="showcase-banner">
                               <img src="products/fur6.jpg" alt="sofa" class="showcase-img">
                               
                               <div class="showcase-status">
                                <div class="wrapper">
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="showcase-status-bar"></div>
                              </div>

                              
                               <div class="countdown-box">
                         
                                <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                        
                                <div class="countdown">
                                  <div class="countdown-content">
                                    <p class="display-number">2</p>
                                    <p class="display-text">Days</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">12</p>
                                    <p class="display-text">Hours</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">59</p>
                                    <p class="display-text">Min</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">00</p>
                                    <p class="display-text">Sec</p>
                                  </div>
                                </div>
                        
                              </div>
                             </div>
                         
                             <div class="showcase-content">
                         
                              <h3 class="showcase-title">
                                 <a href="#" class="showcase-title">Chair</a>
                               </h3>
                         
                               <p class="showcase-desc">
                                Buy with best quality and affordable price 
                               </p>
                         
                               <div class="showcase-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                              </div>

                               <div class="price-box">
                                 <p class="price"><span>&#8377</span>999</p>
                                 <del><span>&#8377</span>5000</del>
                               </div>
                         
                               <button class="add-cart-btn"><a href="mini-cart.html" style="color: white;">add cart</a></button>
                               <button class="add-cart-btn">TRY AR </button>
                         
                               <div class="showcase-status">
                                
                                <div class="wrapper">
                                 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt repellat animi labore dicta? 
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="countdown-box">
                                   <p class="countdown-desc">Hurry Up! It's last chance to get :</p>
                                </div>
                              </div>
                         
                             </div>
                         
                           </div>
                         
                         </div>
           </div>

           <!--seventh product-->
           <div class="product-featured">
            <div class="showcase-container">
                         
                           <div class="showcase">
                         
                             <div class="showcase-banner">
                               <img src="products/fur7.jpg" alt="sofa" class="showcase-img">
                               
                               <div class="showcase-status">
                                <div class="wrapper">
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="showcase-status-bar"></div>
                              </div>

                              
                               <div class="countdown-box">
                         
                                <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                        
                                <div class="countdown">
                                  <div class="countdown-content">
                                    <p class="display-number">2</p>
                                    <p class="display-text">Days</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">12</p>
                                    <p class="display-text">Hours</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">59</p>
                                    <p class="display-text">Min</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">00</p>
                                    <p class="display-text">Sec</p>
                                  </div>
                                </div>
                        
                              </div>
                             </div>
                         
                             <div class="showcase-content">
                         
                              <h3 class="showcase-title">
                                 <a href="#" class="showcase-title">Chair</a>
                               </h3>
                         
                               <p class="showcase-desc">
                                Buy with best quality and affordable price 
                               </p>
                         
                               <div class="showcase-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                              </div>

                               <div class="price-box">
                                 <p class="price"><span>&#8377</span>999</p>
                                 <del><span>&#8377</span>5000</del>
                               </div>
                         
                               <button class="add-cart-btn"><a href="mini-cart.html" style="color: white;">add cart</a></button>
                               <button class="add-cart-btn">TRY AR</button>
                         
                               <div class="showcase-status">
                                
                                <div class="wrapper">
                                 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt repellat animi labore dicta? 
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="countdown-box">
                                   <p class="countdown-desc">Hurry Up! It's last chance to get :</p>
                                </div>
                              </div>
                         
                             </div>
                         
                           </div>
                         
                         </div>
           </div>
           <!--eight product-->
           <div class="product-featured">
            <div class="showcase-container">
                         
                           <div class="showcase">
                         
                             <div class="showcase-banner">
                               <img src="products/fur8.jpg" alt="sofa" class="showcase-img">
                               
                               <div class="showcase-status">
                                <div class="wrapper">
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="showcase-status-bar"></div>
                              </div>

                              
                               <div class="countdown-box">
                         
                                <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                        
                                <div class="countdown">
                                  <div class="countdown-content">
                                    <p class="display-number">2</p>
                                    <p class="display-text">Days</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">12</p>
                                    <p class="display-text">Hours</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">59</p>
                                    <p class="display-text">Min</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">00</p>
                                    <p class="display-text">Sec</p>
                                  </div>
                                </div>
                        
                              </div>
                             </div>
                         
                             <div class="showcase-content">
                               <h3 class="showcase-title">
                                 <a href="#" class="showcase-title">Chair</a>
                               </h3>
                         
                               <p class="showcase-desc">
                                Buy with best quality and affordable price 
                               </p>

                               <div class="showcase-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                              </div>

                               <div class="price-box">
                                 <p class="price"><span>&#8377</span>999</p>
                                 <del><span>&#8377</span>5000</del>
                               </div>
                         
                               <button class="add-cart-btn"><a href="mini-cart.html" style="color: white;">add cart</a></button>
                               <button class="add-cart-btn">TRY AR </button>
                         
                               <div class="showcase-status">
                                
                                <div class="wrapper">
                                 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt repellat animi labore dicta? 
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="countdown-box">
                                   <p class="countdown-desc">Hurry Up! It's last chance to get :</p>
                                </div>
                              </div>
                         
                             </div>
                         
                           </div>
                         
                         </div>
           </div>
           <!-- coding of php to get actual products details -->
           <?php
           $servername = "localhost";
           $uname = "root";
           $password = "";
           $dbname = "CachyCraft";
       
           //global declartion of elements 
           global $prodid;
           global $prodname;
           global $pcat;
           global $pqua;
           global $ppri;
           global $pdesc;

           // Create connection
           $conn = new mysqli($servername, $uname, $password, $dbname);
           // Check connection
           if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
           }
       
           $q="select * from products";
           $result = $conn->query($q);
           while($rs=$result->fetch_assoc())
           {

           $prodid=$rs['id'];
           $prodname=$rs['name'];
           $pcat=$rs['category'];
           $pqua=$rs['quantity'];
           $ppri=$rs['price'];
           $pdesc=$rs['description'];
           ?>
<!--actual  products for database -->
<div class="product-featured">
<div class="showcase-container">

<div class="showcase">

<div class="showcase-banner">
   <img src="products/fur8.jpg" alt="sofa" class="showcase-img">

   <div class="showcase-status">
           <div class="wrapper">
               <p> already sold: <b>15</b> </p>
       
               <p> available: <b>40</b> </p>
           </div>

       <div class="showcase-status-bar"></div>
</div>

<div class="countdown-box">

   <p class="countdown-desc">Hurry Up! Offer ends in:</p>

   <div class="countdown">
               <div class="countdown-content">
                       <p class="display-number">2</p>
                       <p class="display-text">Days</p>
               </div>
   
           <div class="countdown-content">
               <p class="display-number">12</p>
               <p class="display-text">Hours</p>
           </div>
   
           <div class="countdown-content">
               <p class="display-number">59</p>
               <p class="display-text">Min</p>
           </div>
   
           <div class="countdown-content">
               <p class="display-number">00</p>
               <p class="display-text">Sec</p>
           </div>
   </div>

</div>
</div>
<div class="showcase-content">


   <h3 class="showcase-title">
       <a href="#" class="showcase-title"><?php echo $prodname;?></a>
   </h3>

<p class="showcase-desc">
<?php echo $pcat;?>
</p>

<div class="showcase-rating">
       <ion-icon name="star"></ion-icon>
       <ion-icon name="star"></ion-icon>
       <ion-icon name="star"></ion-icon>
       <ion-icon name="star-outline"></ion-icon>
       <ion-icon name="star-outline"></ion-icon>
</div>

<div class="price-box">
       <p class="price"><span>&#8377</span><?php echo $ppri;?></p>
       <del><span>&#8377</span>5000</del>
</div>

<button class="add-cart-btn"><a href="mini-cart.html" style="color: white;">add cart</a></button>
<button class="add-cart-btn">TRY AR </button>

<div class="showcase-status">

<div class="wrapper">
<?php echo $pdesc;?>
<p> already sold: <b>15</b> </p>

       <p> available: <b><?php echo $pqua;?></b> </p>
</div>

<div class="countdown-box">
<p class="countdown-desc">Hurry Up! It's last chance to get :</p>
</div>
</div>

</div>

</div>

</div>
</div>
<?php }?>
           <!--ninth product-->
           <div class="product-featured">
            <div class="showcase-container">
                         
                           <div class="showcase">
                         
                             <div class="showcase-banner">
                               <img src="products/fur9.jpg" alt="sofa" class="showcase-img">
                               
                               <div class="showcase-status">
                                <div class="wrapper">
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="showcase-status-bar"></div>
                              </div>

                              
                               <div class="countdown-box">
                         
                                <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                        
                                <div class="countdown">
                                  <div class="countdown-content">
                                    <p class="display-number">2</p>
                                    <p class="display-text">Days</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">12</p>
                                    <p class="display-text">Hours</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">59</p>
                                    <p class="display-text">Min</p>
                                  </div>
                        
                                  <div class="countdown-content">
                                    <p class="display-number">00</p>
                                    <p class="display-text">Sec</p>
                                  </div>
                                </div>
                        
                              </div>
                             </div>
                         
                             <div class="showcase-content">
                         
                               <h3 class="showcase-title">
                                 <a href="#" class="showcase-title">Chair</a>
                               </h3>
                         
                               <p class="showcase-desc">
                                Buy with best quality and affordable price 
                               </p>

                               <div class="showcase-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                              </div>

                               <div class="price-box">
                                 <p class="price"><span>&#8377</span>999</p>
                                 <del><span>&#8377</span>5000</del>
                               </div>
                         
                               <button class="add-cart-btn"><a href="mini-cart.html" style="color: white;">add cart</a></button>
                               <button class="add-cart-btn">TRY AR </button>
                         
                               <div class="showcase-status">
                                
                                <div class="wrapper">
                                 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt repellat animi labore dicta? 
                                  <p> already sold: <b>15</b> </p>
                        
                                  <p> available: <b>40</b> </p>
                                </div>
                        
                                <div class="countdown-box">
                                   <p class="countdown-desc">Hurry Up! It's last chance to get :</p>
                                </div>
                              </div>
                                                 
                             </div>
                         
                           </div>
                         
                         </div>
           </div>
        </div>

      </div>

    </div>

  </main>
   
<!-- FOOTER -->
<footer>

<div class="footer-nav">

  <div class="container">

    <ul class="footer-nav-list">

      <li class="footer-nav-item">
        <h2 class="nav-title">Popular Categories</h2>
      </li>

      <li class="footer-nav-item">
        <a href="stools.html" class="footer-nav-link">Furnitures</a>
      </li>

      <li class="footer-nav-item">
        <a href="pots.html" class="footer-nav-link">Decoration</a>
      </li>

      <li class="footer-nav-item">
        <a href="womens_cloths.html" class="footer-nav-link">Women's Fashion</a>
      </li>

      <li class="footer-nav-item">
        <a href="mens_accessories.html" class="footer-nav-link">Men's Fashion</a>
      </li>

      <li class="footer-nav-item">
        <a href="hair_accessories.html" class="footer-nav-link">Hair Accessories</a>
      </li>

    </ul>

    <ul class="footer-nav-list">
    
      <li class="footer-nav-item">
        <h2 class="nav-title">Links </h2>
      </li>
    
      <li class="footer-nav-item">
        <a href="./Details/sign_in.html" class="footer-nav-link">Profile</a>
      </li>
    
      <li class="footer-nav-item">
        <a href="wishlist.html" class="footer-nav-link">Whislist</a>
      </li>
    
      <li class="footer-nav-item">
        <a href="mini-cart.html" class="footer-nav-link">Add to Cart </a>
      </li>
    
      <li class="footer-nav-item">
        <a href="#" class="footer-nav-link">About us</a>
      </li>
    
      <li class="footer-nav-item">
        <a href="#" class="footer-nav-link">Contact us</a>
      </li>

    </ul>

    <ul class="footer-nav-list">
    
      <li class="footer-nav-item">
        <h2 class="nav-title">Services</h2>
      </li>
    
      <li class="footer-nav-item">
        <a href="#" class="footer-nav-link">Prices drop</a>
      </li>
    
      <li class="footer-nav-item">
        <a href="#" class="footer-nav-link">New products</a>
      </li>
    
      <li class="footer-nav-item">
        <a href="#" class="footer-nav-link">Best sales</a>
      </li>
    
      <li class="footer-nav-item">
        <a href="#" class="footer-nav-link">Contact us</a>
      </li>
    
      <li class="footer-nav-item">
        <a href="#" class="footer-nav-link">Sitemap</a>
      </li>
    
    </ul>

    <ul class="footer-nav-list">

      <li class="footer-nav-item">
        <h2 class="nav-title">Contact Info </h2>
      </li>

      <li class="footer-nav-item flex">
        <div class="icon-box">
          <ion-icon name="location-outline"></ion-icon>
        </div>

        <address class="content">
          At Awsari(kh) 
          Pune,Maharashtra

        </address>
      </li>

      <li class="footer-nav-item flex">
        <div class="icon-box">
          <ion-icon name="call-outline"></ion-icon>
        </div>

        <a href="tel:+607936-8058" class="footer-nav-link">(7038807447)</a>
      </li>

      <li class="footer-nav-item flex">
        <div class="icon-box">
          <ion-icon name="mail-outline"></ion-icon>
        </div>

        <a href="mailto:example@gmail.com" class="footer-nav-link">catchycraft123@gmail.com</a>
      </li>

    </ul>

    <ul class="footer-nav-list">

      <li class="footer-nav-item">
        <h2 class="nav-title">Follow Us</h2>
      </li>

      <li>
        <ul class="social-link">

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>
      </li>

    </ul>

  </div>

</div>

<div class="footer-bottom">

  <div class="container">

    <img src="logo/payment.png" alt="payment method" class="payment-img">

    <p class="copyright">
      Copyright &copy; <a href="#">Catchy Craft</a> all rights reserved.
    </p>

  </div>

</div>

</footer>

<!--- custom js link-->
<script src="script.js"></script>

<!--- ionicon link-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>