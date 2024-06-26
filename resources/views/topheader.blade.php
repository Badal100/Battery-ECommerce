<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Battery - eCommerce</title>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="./assets/js/SearchScript.js"></script>
  <link rel="stylesheet" href="./assets/css/SearchStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>

<body>


  <div class="overlay" data-overlay></div>

  <!--
    - NOTIFICATION TOAST
  -->

  <!-- <div class="notification-toast" data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Someone in new just bought
      </p>

      <p class="toast-title">
        Rose Gold Earrings
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p>

    </div>

  </div> -->





  <!--
    - HEADER
  -->

  <header>

    <div class="header-top" style="display: none;">

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
            <b>Free Shipping</b>
            This Week Order Over -₹$55
          </p>
        </div>

        <div class="header-top-actions">

          <select name="currency">

            <option value="usd">USD &dollar;</option>
            <option value="eur">EUR &euro;</option>

          </select>

          <select name="language">

            <option value="en-US">English</option>
            <option value="es-ES">Espa&ntilde;ol</option>
            <option value="fr">Fran&ccedil;ais</option>

          </select>

        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="searchBarContainer">
        <div style='width:25%'>
        <a href="#" class="header-logo" >
          <img src="./assets/images/Battery/Logo.png" alt="Anon's logo" width="120" height="36">
        </a>
    </div>
        <div class="header-search-container" style='width:75%;margin-right:100px'>

          <input type="search" name="search" id="searchInput" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>
          <div id="id02" class="searchPopup" style="width:100%">
  <div class="w3-card-4">
    <div class="">
        <div id="searchResults"></div>
    </div>
  </div>
</div>
        </div>

        <div class="header-user-actions" style="display: none;">

          <button class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </button>

          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button>

          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container" id="myHeader">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="/" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="/car-battery" class="menu-title">Car Battery</a>

            <div class="dropdown-panel">

<ul class="dropdown-panel-list">

  <li class="menu-title">
    <a href="#">Maruti Suzuki</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Swift</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Swift D-Zire</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Alto</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Brezza</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Swift</a>
  </li>

</ul>

<ul class="dropdown-panel-list">

  <li class="menu-title">
    <a href="#">Men's</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Formal</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Casual</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Sports</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Jacket</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Sunglasses</a>
  </li>

</ul>

<ul class="dropdown-panel-list">

  <li class="menu-title">
    <a href="#">Women's</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Formal</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Casual</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Perfume</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Cosmetics</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Bags</a>
  </li>
</ul>

<ul class="dropdown-panel-list">

  <li class="menu-title">
    <a href="#">Electronics</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Smart Watch</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Smart TV</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Keyboard</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Mouse</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Microphone</a>
  </li>
</ul>

</div>
          </li>

          <li class="menu-category">
            <a href="/bike-battery" class="menu-title">Bike Battery</a>

            <div class="dropdown-panel">

<ul class="dropdown-panel-list">

  <li class="menu-title">
    <a href="#">Electronics</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Desktop</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Laptop</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Camera</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Tablet</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Headphone</a>
  </li>

</ul>

<ul class="dropdown-panel-list">

  <li class="menu-title">
    <a href="#">Men's</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Formal</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Casual</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Sports</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Jacket</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Sunglasses</a>
  </li>

</ul>

<ul class="dropdown-panel-list">

  <li class="menu-title">
    <a href="#">Women's</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Formal</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Casual</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Perfume</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Cosmetics</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Bags</a>
  </li>

</ul>

<ul class="dropdown-panel-list">

  <li class="menu-title">
    <a href="#">Electronics</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Smart Watch</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Smart TV</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Keyboard</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Mouse</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Microphone</a>
  </li>

</ul>

</div>
          </li>

          <li class="menu-category">
            <a href="/truck-battery" class="menu-title">Truck Battery</a>

            <div class="dropdown-panel">

<ul class="dropdown-panel-list">

  <li class="menu-title">
    <a href="#">Electronics</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Desktop</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Laptop</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Camera</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Tablet</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Headphone</a>
  </li>

</ul>

<ul class="dropdown-panel-list">

  <li class="menu-title">
    <a href="#">Men's</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Formal</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Casual</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Sports</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Jacket</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Sunglasses</a>
  </li>

</ul>

<ul class="dropdown-panel-list">

  <li class="menu-title">
    <a href="#">Women's</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Formal</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Casual</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Perfume</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Cosmetics</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Bags</a>
  </li>
</ul>

<ul class="dropdown-panel-list">

  <li class="menu-title">
    <a href="#">Electronics</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Smart Watch</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Smart TV</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Keyboard</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Mouse</a>
  </li>

  <li class="panel-list-item">
    <a href="#">Microphone</a>
  </li>
</ul>

</div>
          </li>

          <li class="menu-category">
            <a href="/other-battery" class="menu-title">Other Battery</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Electronics</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Desktop</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Laptop</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Camera</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Tablet</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Headphone</a>
                </li>
              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Men's</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Formal</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Casual</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Sports</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Jacket</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Sunglasses</a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Women's</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Formal</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Casual</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Perfume</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Cosmetics</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Bags</a>
                </li>
              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Electronics</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Smart Watch</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Smart TV</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Keyboard</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Mouse</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Microphone</a>
                </li>

              </ul>

            </div>
          </li>
        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
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

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Men's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Women's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Dress & Frock</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Makeup Kit</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Jewelry</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Couple Rings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Bracelets</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Perfume</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Clothes Perfume</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Deodorant</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Flower Fragrance</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Air Freshener</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
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
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
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
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

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

      </div>

    </nav>

  </header>



