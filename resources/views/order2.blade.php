<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
   <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Custom CSS -->
  <style>
    /* Optional: Add custom styles here */
    .card {
      animation: fadeInUp 0.5s;
    }
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>


<div class="w3-container w3-content w3-center w3-margin-top">
  <div class="w3-card-4 w3-animate-zoom">
    <header class="w3-container w3-light-grey">
      <h4>Contact Form</h4>
    </header>
    <div class="w3-container">
      <form id="contactForm">
        <p>
          <label for="name">Name <i class="fas fa-user"></i></label>
          <input class="w3-input w3-border" type="text" id="name" name="name" required>
        </p>
        <p>
          <label for="email">Email <i class="fas fa-at"></i></label>
          <input class="w3-input w3-border" type="email" id="email" name="email" required>
        </p>
        <p>
          <label for="mobile">Mobile Number <i class="fas fa-phone"></i></label>
          <input class="w3-input w3-border" type="tel" id="mobile" name="mobile" required>
        </p>
        <p>
          <label for="address">Address <i class="fas fa-map-marker-alt"></i></label>
          <textarea class="w3-input w3-border" id="address" name="address" rows="3" required></textarea>
        </p>
        <p>
          <button class="w3-button w3-blue">Submit <i class="fas fa-paper-plane"></i></button>
        </p>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS and jQuery (for form validation) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Custom JavaScript for form validation -->
<script>
  // Form validation using jQuery
  $(document).ready(function () {
    $('#contactForm').submit(function (event) {
      var isValid = true;

      // Validate each input field
      $(this).find('input, textarea').each(function () {
        if (!$(this).prop('validity').valid) {
          isValid = false;
          $(this).addClass('is-invalid');
        } else {
          $(this).removeClass('is-invalid');
        }
      });

      if (!isValid) {
        event.preventDefault(); // Prevent form submission if any field is invalid
      }
    });
  });
</script>

</body>
</html>
