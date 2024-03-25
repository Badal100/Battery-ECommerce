@include('topheader')
<script>
  
   $(function() {
   
   const urlParams = new URLSearchParams(window.location.search);
   const vehicleName = urlParams.get('vehicleName');
   $.getJSON('./assets/Constant/Constants.json', function(data) {
   
     let batteryObject = data.Products.filter((item)=> item.CompatibleWith.includes(vehicleName));
     $.each(batteryObject, function(i, f) { 
    var productsHTML =  "<a href='/view-product?batteryId=" + f.id + "'><div class='showcase'><div class='showcase-banner'><img src='" +
    f.img  + "' class='product-img default' width='300'><img src='" + f.img2 + 
    "' class='product-img hover' width='300'><div class='showcase-actions'><button class='btn-action'><ion-icon name='heart-outline'></ion-icon></button><button class='btn-action'><ion-icon name='eye-outline'></ion-icon></button><button class='btn-action'><ion-icon name='repeat-outline'></ion-icon></button><button class='btn-action'><ion-icon name='bag-add-outline'></ion-icon></button></div></div><div class='showcase-content'><label class='showcase-category'>" +
    vehicleName + "</label><h3><label class='showcase-title'>" +
    f.title + "</label></h3><div class='showcase-rating'><ion-icon name='star'></ion-icon><ion-icon name='star'></ion-icon><ion-icon name='star'></ion-icon><ion-icon name='star'></ion-icon><ion-icon name='star-outline'></ion-icon></div><div class='price-box'><p class='price'>₹" + 
    f.price + "</p></div></div></div></a>";

    $(productsHTML).appendTo("#productListHTML");
});
    });
   });
</script>
<main>
  

   <div class="product-container">

<div class="container">
  <div class="product-box">
    <!--
      - PRODUCT GRID
    -->

    <div class="product-main">

      <h2 class="title">Vehicle Types Batteries</h2>

      <div class="product-grid" id='productListHTML'>

      </div>

    </div>

  </div>

</div>

</div>

<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-card-4">
    <header class="w3-container">
      <span
        onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright"
        >&times;</span
      >
      <h2 class="w3-center">Buy Battery</h2>
    </header>
    <div class="w3-container container">
      <form class="w3-container" id="myForm" onsubmit="return validateForm()">
        <label>Name</label>
        <input
          class="w3-input w3-border w3-margin-bottom"
          type="text"
          id="name"
          name="name"
        />

        <label>Email</label>
        <input
          class="w3-input w3-border w3-margin-bottom"
          type="email"
          id="email"
          name="email"
        />

        <label>Mobile Number</label>
        <input
          class="w3-input w3-border w3-margin-bottom"
          type="tel"
          id="mobile"
          name="mobile"
        />

        <label>Address</label>
        <textarea
          class="w3-input w3-border w3-margin-bottom"
          id="address"
          name="address"
        ></textarea>

        <label id="selectedBattery"></label>
        <div class="w3-center w3-margin-top">
          <button class="w3-button w3-blue w3-margin-bottom" type="submit">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

    </div>
  </div>
       

</main>

@include('footer')

  </body>
  </html>