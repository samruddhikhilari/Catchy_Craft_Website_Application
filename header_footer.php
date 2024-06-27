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
  