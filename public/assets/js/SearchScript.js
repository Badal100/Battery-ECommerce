document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById("searchInput");
  const modal = document.getElementById("id02");
  const searchResultsContainer = document.getElementById("searchResults");

  let batteryObject;
  $.getJSON('./assets/Constant/Constants.json', function(data) {
   
    batteryObject = data.Products.map(({id,title})=> {return {id,title}});
    let names = data.vehicleNames
    batteryObject = [...batteryObject,...names];
    console.log("battery name ",batteryObject);
  });

  // Function to perform search
  function performSearch(query) {
    const results = batteryObject.filter(item => typeof(item)==='string'? item.toLowerCase().includes(query.toLowerCase()):item.title.toLowerCase().includes(query.toLowerCase()));
    return results;
  }

  // Function to display search results in the modal
  function displayResults(results) {
    let topFiveResult = results.filter((item,index) => index<=4);
    const resultHTML = topFiveResult.map(result => `<div class='w3-padding w3-hover-pale-green'><label><a href=${typeof(result)==='string'?"/searchItemRedirect?vehicleName="+result:"view-product?batteryId=" + result.id}>${typeof(result)==='string'?result:result.title}</a></label></div>`).join("");
    searchResultsContainer.innerHTML = resultHTML;
    modal.style.display = "block";
  }

  // Event listener for the search input
  searchInput.addEventListener("input", function () {
    const query = this.value;
    const results = performSearch(query);
    displayResults(results);
  });

  // Close the modal if the user clicks outside the modal content
  window.addEventListener("click", function (event) {
    // if (event.target === modal) {
      modal.style.display = "none";
    // }
  });
});
