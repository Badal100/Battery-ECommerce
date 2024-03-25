<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <br/>
    <h1>Place Order</h1>
    <form id="contactForm">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile Number:</label>
            <input type="tel" class="form-control" id="mobile" name="mobile" pattern="[0-9]{10}" required>
            <small class="form-text text-muted">Enter a 10-digit mobile number.</small>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" id="address" name="address" required></textarea>
        </div>
        <div class="form-group">
            <label for="battery">Battery Name:</label>
            <label id="battery">Car Battery Name</label>
           
</select>        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    // JavaScript form validation
    document.getElementById('contactForm').addEventListener('submit', function (event) {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var mobile = document.getElementById('mobile').value;
        var address = document.getElementById('address').value;

        // Simple validation example (you can add more complex validation)
        if (!name || !email || !mobile || !address) {
            alert('Please fill in all fields.');
            event.preventDefault(); // Prevent form submission
        }
    });
</script>

</body>
</html>
<?php /**PATH D:\Share Folder\Projects\E-Commerce\resources\views/order.blade.php ENDPATH**/ ?>