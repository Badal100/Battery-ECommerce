@include('topheader')
<script>
  
  function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var mobile = document.getElementById('mobile').value;
    var address = document.getElementById('address').value;
    
    // Simple validation for the presence of name, email, mobile, and address
    if (name === '' || email === '' || mobile === '' || address === '') {
      alert('Please fill in all fields');
      return false;
    }

    // Validate email format
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert('Please enter a valid email address');
      return false;
    }

    // Validate mobile number (simple check for 10 digits)
    var mobileRegex = /^\d{10}$/;
    if (!mobileRegex.test(mobile)) {
      alert('Please enter a valid 10-digit mobile number');
      return false;
    }

    // If all validations pass, you can submit the form
    return true;
  }
  
   $(function() {
   
   const urlParams = new URLSearchParams(window.location.search);
   const batteryId = urlParams.get('batteryId');
   $.getJSON('./assets/Constant/Constants.json', function(data) {
   
     let batteryObject = data.Products.filter((item)=> item.id==batteryId)[0];
       
     let features ="";
     batteryObject.Features?.map((item)=>{
      features = features + "<option>" + item + "</option>";
     });

          var tblRow = "<div class=showcase-wrapper has-scrollbar><div class='showcase-container'><div class='showcase'><div class='showcase-banner'><div class='imageOuterDiv'><img src='./assets/images/Battery/battery2.jpg' class='product-showcase-img' id='productimage'></div></div><div class='showcase-content'><a href='#'><h3 class='showcase-title'>"
           + batteryObject.title + 
           "</h3></a><p class='showcase-desc'>Product Dimensions: <b>" + batteryObject.Technical_Details.Product_Dimensions
            + "</b></p>" + 
            "<p class='showcase-desc'>Product Weight: <b>" + batteryObject.Technical_Details.Item_Weight
            + "</b></p><div class='price-box'><p class='price'>₹" + batteryObject.price + "</p><del>₹200.00</del></div><button class='add-cart-btn' onclick=document.getElementById('id01').style.display='block'>BUY NOW</button>" + 
            "<div class='marginClass'><h3 class='showcase-title'>" + batteryObject.title + " Description:</h3><p class='showcase-desc'>" +
            batteryObject.description + "</p></div><div><h3 class='showcase-title'>Features:</h3><ul>" +
            features + "</ul></div>" +
            "<div class='marginClass'><h3 class='showcase-title'>Specifications of </h3><table class='specification-table'><tr><td>Model</td><td>" + 
            batteryObject.Technical_Details.Model_Number + "</td></tr><tr><td>Capacity</td><td>" + 
            batteryObject.Technical_Details.Voltage + "</td></tr><tr><td>Warranty</td><td>" + 
            batteryObject.warranty + "</td></tr><tr><td>Battery Layout</td><td>" +
            batteryObject.Technical_Details.Product_Dimensions + "</td></tr></table></div>"
            +"</div></div></div></div>";

          $(tblRow).appendTo("#BatteryProductSection");
          document.getElementById('selectedBattery').innerHTML = "Selected Battery:- " + batteryObject.title;
   });
   });
</script>
   <!-- <div class="image-gallery-section">
                     <div class="image-gallery-box">
                        <img src="./assets/images/Battery/battery2.jpg" height alt="shampoo, conditioner & facewash packs" class="product-image">
                     </div>
                     <div class="image-gallery-box">
                        <img src="./assets/images/Battery/battery2.jpg" alt="shampoo, conditioner & facewash packs" class="product-image">
                     </div>
                     <div class="image-gallery-box">
                        <img src="./assets/images/Battery/battery2.jpg" alt="shampoo, conditioner & facewash packs" class="product-image">
                     </div>
                  </div> -->
<main>
   <div class="product-featured" style="margin:0px 20px;">
   <div id="BatteryProductSection">
   </div>
   </div>
<!-- <div id='productimage'></div> -->
   <div class="product-container">

<div class="container">


  <!--
    - SIDEBAR
  -->

  <div class="sidebar  has-scrollbar" data-mobile-menu style="display: none;">

    <div class="sidebar-category">

      <div class="sidebar-top">
        <h2 class="sidebar-title">Category</h2>

        <button class="sidebar-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="sidebar-menu-category-list">

        <li class="sidebar-menu-category">

          <button class="sidebar-accordion-menu" data-accordion-btn>

            <div class="menu-title-flex">
              <img src="./assets/images/icons/dress.svg" alt="clothes" width="20" height="20"
                class="menu-title-img">

              <p class="menu-title">Clothes</p>
            </div>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>

          </button>

          <ul class="sidebar-submenu-category-list" data-accordion>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Shirt</p>
                <data value="300" class="stock" title="Available Stock">300</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">shorts & jeans</p>
                <data value="60" class="stock" title="Available Stock">60</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">jacket</p>
                <data value="50" class="stock" title="Available Stock">50</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">dress & frock</p>
                <data value="87" class="stock" title="Available Stock">87</data>
              </a>
            </li>

          </ul>

        </li>

        <li class="sidebar-menu-category">

          <button class="sidebar-accordion-menu" data-accordion-btn>

            <div class="menu-title-flex">
              <img src="./assets/images/icons/shoes.svg" alt="footwear" class="menu-title-img" width="20"
                height="20">

              <p class="menu-title">Footwear</p>
            </div>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>

          </button>

          <ul class="sidebar-submenu-category-list" data-accordion>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Sports</p>
                <data value="45" class="stock" title="Available Stock">45</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Formal</p>
                <data value="75" class="stock" title="Available Stock">75</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Casual</p>
                <data value="35" class="stock" title="Available Stock">35</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Safety Shoes</p>
                <data value="26" class="stock" title="Available Stock">26</data>
              </a>
            </li>

          </ul>

        </li>

        <li class="sidebar-menu-category">

          <button class="sidebar-accordion-menu" data-accordion-btn>

            <div class="menu-title-flex">
              <img src="./assets/images/icons/jewelry.svg" alt="clothes" class="menu-title-img" width="20"
                height="20">

              <p class="menu-title">Jewelry</p>
            </div>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>

          </button>

          <ul class="sidebar-submenu-category-list" data-accordion>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Earrings</p>
                <data value="46" class="stock" title="Available Stock">46</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Couple Rings</p>
                <data value="73" class="stock" title="Available Stock">73</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Necklace</p>
                <data value="61" class="stock" title="Available Stock">61</data>
              </a>
            </li>

          </ul>

        </li>

        <li class="sidebar-menu-category">

          <button class="sidebar-accordion-menu" data-accordion-btn>

            <div class="menu-title-flex">
              <img src="./assets/images/icons/perfume.svg" alt="perfume" class="menu-title-img" width="20"
                height="20">

              <p class="menu-title">Perfume</p>
            </div>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>

          </button>

          <ul class="sidebar-submenu-category-list" data-accordion>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Clothes Perfume</p>
                <data value="12" class="stock" title="Available Stock">12 pcs</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Deodorant</p>
                <data value="60" class="stock" title="Available Stock">60 pcs</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">jacket</p>
                <data value="50" class="stock" title="Available Stock">50 pcs</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">dress & frock</p>
                <data value="87" class="stock" title="Available Stock">87 pcs</data>
              </a>
            </li>

          </ul>

        </li>

        <li class="sidebar-menu-category">

          <button class="sidebar-accordion-menu" data-accordion-btn>

            <div class="menu-title-flex">
              <img src="./assets/images/icons/cosmetics.svg" alt="cosmetics" class="menu-title-img" width="20"
                height="20">

              <p class="menu-title">Cosmetics</p>
            </div>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>

          </button>

          <ul class="sidebar-submenu-category-list" data-accordion>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Shampoo</p>
                <data value="68" class="stock" title="Available Stock">68</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Sunscreen</p>
                <data value="46" class="stock" title="Available Stock">46</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Body Wash</p>
                <data value="79" class="stock" title="Available Stock">79</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Makeup Kit</p>
                <data value="23" class="stock" title="Available Stock">23</data>
              </a>
            </li>

          </ul>

        </li>

        <li class="sidebar-menu-category">

          <button class="sidebar-accordion-menu" data-accordion-btn>

            <div class="menu-title-flex">
              <img src="./assets/images/icons/glasses.svg" alt="glasses" class="menu-title-img" width="20"
                height="20">

              <p class="menu-title">Glasses</p>
            </div>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>

          </button>

          <ul class="sidebar-submenu-category-list" data-accordion>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Sunglasses</p>
                <data value="50" class="stock" title="Available Stock">50</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Lenses</p>
                <data value="48" class="stock" title="Available Stock">48</data>
              </a>
            </li>

          </ul>

        </li>

        <li class="sidebar-menu-category">

          <button class="sidebar-accordion-menu" data-accordion-btn>

            <div class="menu-title-flex">
              <img src="./assets/images/icons/bag.svg" alt="bags" class="menu-title-img" width="20" height="20">

              <p class="menu-title">Bags</p>
            </div>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>

          </button>

          <ul class="sidebar-submenu-category-list" data-accordion>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Shopping Bag</p>
                <data value="62" class="stock" title="Available Stock">62</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Gym Backpack</p>
                <data value="35" class="stock" title="Available Stock">35</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Purse</p>
                <data value="80" class="stock" title="Available Stock">80</data>
              </a>
            </li>

            <li class="sidebar-submenu-category">
              <a href="#" class="sidebar-submenu-title">
                <p class="product-name">Wallet</p>
                <data value="75" class="stock" title="Available Stock">75</data>
              </a>
            </li>

          </ul>

        </li>

      </ul>

    </div>

    <div class="product-showcase">

      <h3 class="showcase-heading">best sellers</h3>

      <div class="showcase-wrapper">

        <div class="showcase-container">

          <div class="showcase">

            <a href="#" class="showcase-img-box">
              <img src="./assets/images/products/1.jpg" alt="baby fabric shoes" width="75" height="75"
                class="showcase-img">
            </a>

            <div class="showcase-content">

              <a href="#">
                <h4 class="showcase-title">baby fabric shoes</h4>
              </a>

              <div class="showcase-rating">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
              </div>

              <div class="price-box">
                <del>$5.00</del>
                <p class="price">$4.00</p>
              </div>

            </div>

          </div>

          <div class="showcase">

            <a href="#" class="showcase-img-box">
              <img src="./assets/images/products/2.jpg" alt="men's hoodies t-shirt" class="showcase-img"
                width="75" height="75">
            </a>

            <div class="showcase-content">

              <a href="#">
                <h4 class="showcase-title">men's hoodies t-shirt</h4>
              </a>
              <div class="showcase-rating">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star-half-outline"></ion-icon>
              </div>

              <div class="price-box">
                <del>$17.00</del>
                <p class="price">$7.00</p>
              </div>

            </div>

          </div>

          <div class="showcase">

            <a href="#" class="showcase-img-box">
              <img src="./assets/images/products/3.jpg" alt="girls t-shirt" class="showcase-img" width="75"
                height="75">
            </a>

            <div class="showcase-content">

              <a href="#">
                <h4 class="showcase-title">girls t-shirt</h4>
              </a>
              <div class="showcase-rating">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star-half-outline"></ion-icon>
              </div>

              <div class="price-box">
                <del>$5.00</del>
                <p class="price">$3.00</p>
              </div>

            </div>

          </div>

          <div class="showcase">

            <a href="#" class="showcase-img-box">
              <img src="./assets/images/products/4.jpg" alt="woolen hat for men" class="showcase-img" width="75"
                height="75">
            </a>

            <div class="showcase-content">

              <a href="#">
                <h4 class="showcase-title">woolen hat for men</h4>
              </a>
              <div class="showcase-rating">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
              </div>

              <div class="price-box">
                <del>$15.00</del>
                <p class="price">$12.00</p>
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>



  <div class="product-box">
    <!--
      - PRODUCT GRID
    -->

    <div class="product-main">

      <h2 class="title" id='showContainer'>Similar Products</h2>

      <div class="product-grid">

<div class="showcase">

  <div class="showcase-banner">
    <img src="./assets/images/Battery/battery2.jpg" alt="Mens Winter Leathers Jackets" class="product-img default"
      width="300">
    <img src="./assets/images/Battery/battery2.jpg" alt="Mens Winter Leathers Jackets" class="product-img hover"
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
    <a href="#" class="showcase-category">truck</a>

    <h3>
      <a href="http://127.0.0.1:8000/view-product?batteryId=8" class="showcase-title">Exide SF Sonic BoltZ-FBZ0-BZ-55LS Car Battery</a>
    </h3>


    <div class="price-box">
      <p class="price">₹32.00</p>
    </div>

  </div>

</div>

<div class="showcase">

  <div class="showcase-banner">
    <img src="./assets/images/Battery/battery2.jpg" alt="Trekking & Running Shoes - black" class="product-img default"
      width="300">
    <img src="./assets/images/Battery/battery5.jpg" alt="Trekking & Running Shoes - black" class="product-img hover"
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
  <a href="#" class="showcase-category">truck</a>

<h3>
  <a href="http://127.0.0.1:8000/view-product?batteryId=8" class="showcase-title">Exide SF Sonic BoltZ-FBZ0-BZ-55LS Car Battery</a>
</h3>


<div class="price-box">
  <p class="price">₹32.00</p>
</div>
  </div>

</div>

<div class="showcase">

  <div class="showcase-banner">
    <img src="./assets/images/Battery/battery3.jpg" alt="Men's Leather Formal Wear shoes" class="product-img default"
      width="300">
    <img src="./assets/images/Battery/battery3.jpg" alt="Men's Leather Formal Wear shoes" class="product-img hover"
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
  <a href="#" class="showcase-category">truck</a>

<h3>
  <a href="http://127.0.0.1:8000/view-product?batteryId=8" class="showcase-title">Exide SF Sonic BoltZ-FBZ0-BZ-55LS Car Battery</a>
</h3>


<div class="price-box">
  <p class="price">₹32.00</p>
</div>
  </div>

</div>

<div class="showcase">

  <div class="showcase-banner">
    <img src="./assets/images/Battery/battery5.jpg" alt="Better Basics French Terry Sweatshorts"
      class="product-img default" width="300">
    <img src="./assets/images/Battery/battery6.jpg" alt="Better Basics French Terry Sweatshorts"
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
  <a href="#" class="showcase-category">truck</a>

<h3>
  <a href="http://127.0.0.1:8000/view-product?batteryId=8" class="showcase-title">Exide SF Sonic BoltZ-FBZ0-BZ-55LS Car Battery</a>
</h3>


<div class="price-box">
  <p class="price">₹32.00</p>
</div>
  </div>

</div>

</div>

    </div>

  </div>

</div>

</div>

<div id="id01" class="w3-modal" style="padding-top:60px">
  <div class="w3-modal-content w3-animate-zoom w3-card-4" style="width:50%">
    <!-- <header class="w3-container">
      <span
        onclick="document.getElementById('id01').style.display='none'"
        class="w3-button"
        ><i class="fas fa-times"></i></span>
    </header> -->
    <div class="w3-content">
  <div class="w3-card-4">
    <header class="w3-light-grey" style="padding-left:24px;display:flex">
      <div style="width:100%">
      <h4 class="w3-section">Buy Battery</h4>
  </div>
  <div style="display:flex;align-items:center">
      <span
        onclick="document.getElementById('id01').style.display='none'"
        class="w3-button"
        ><i class="fas fa-times"></i></span>
  </div>
    </header>
    <div class="w3-container">
      <div style="padding:0px 8px">
      <form id="contactForm">
        <div class="w3-margin-top w3-margin-bottom">
          <label for="name" class="">Name <i class="fas fa-user"></i></label>
          <input class="w3-input w3-border w3-round"  style="margin-top:8px" type="text" id="name" name="name" required>
        </div>
        <div class="w3-margin-top w3-margin-bottom">
          <label for="email">Email <i class="fas fa-at"></i></label>
          <input class="w3-input w3-border w3-round" style="margin-top:8px" type="email" id="email" name="email" required>
        </div>
        <div class="w3-margin-top w3-margin-bottom">
          <label for="mobile">Mobile Number <i class="fas fa-phone"></i></label>
          <input class="w3-input w3-border w3-round" style="margin-top:8px" type="tel" id="mobile" name="mobile" required>
        </div>
        <div class="w3-margin-top w3-margin-bottom">
          <label for="address">Address <i class="fas fa-map-marker-alt"></i></label>
          <textarea class="w3-input w3-border w3-round" style="margin-top:8px" id="address" name="address" rows="1" required></textarea>
        </div>
        <label id="selectedBattery"></label>

<div class="w3-center w3-margin">
          <button class="w3-button w3-blue w3-round w3-margin-bottom">Submit <i class="fas fa-paper-plane"></i></button>
</div>
        
      </form>
      <div>
    </div>
  </div>
</div>

  </div>
</div>

    </div>
  </div>
       
</main>

@include('footer')
<script>
 window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var showContainer = document.getElementById("showContainer");
var productimage = document.getElementById("productimage");
var imageOuterDiv = document.querySelector(".imageOuterDiv");
var sticky = header.offsetTop;
var rect = showContainer.getBoundingClientRect();
console.log(rect.top);

function myFunction() {
try{
  if(productimage==null)
  productimage = document.getElementById("productimage");
if(imageOuterDiv==null)
imageOuterDiv = document.querySelector(".imageOuterDiv");

  if (window.pageYOffset > sticky && window.pageYOffset <= (rect.top+170)) {
    productimage.classList.add("leftStaticClass");
    imageOuterDiv.style.position = "relative";
      imageOuterDiv.style.top = "0px"
  } else {
    if(window.pageYOffset > (rect.top+170)){
      imageOuterDiv.style.position = "relative";
      imageOuterDiv.style.top = "250px"
    }
    productimage.classList.remove("leftStaticClass");
  }
  // if(){
  //   // productimage.classList.remove("leftStaticClass");
  //  console.log(rect.top + window.scrollY);
  // }
}
catch(error){
  console.log(error);
}
}
  </script>
  </body>
  </html>