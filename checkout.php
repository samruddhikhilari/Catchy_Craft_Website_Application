<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <link rel="stylesheet" href="checkout.css">
</head>
<body>

  <div id="productDetailsContainer"></div>

  <h1>Checkout</h1>
  <form id="checkoutForm" oninput="validateForm()" method="post" action="checkout_order.php">
    <!-- Your form fields go here -->
    <h2>Personal Information</h2>
    <label for="fullName">Full Name:</label>
    <input type="text" id="fullName" name="fullName" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required>

    <!-- Example: Shipping Address -->
    <h2>Shipping Address</h2>
    <label for="address">Address:</label>
    <textarea id="address" name="address" required></textarea>

    <label for="city">City:</label>
    <input type="text" id="city" name="city" required>

    <!-- Example: Payment Information -->
    <h2>Payment Information</h2>
    <label for="city">Scan the QR code for Payment:</label>
   <img src="sofas/QR.png" style="height: 400px;margin-left: 3%;border: 2px solid rgb(170, 168, 168);;">
    <button type="submit" id="purchaseButton" onclick="showPopup()" disabled style="margin-top: 3%;width: 34%;">Complete Purchase</button>
  </form>

  <!-- Pop-up Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closePopup()">&times;</span>
      <p><h1>Thank you!</h1> Your details have been successfully submitted. Thanks.</p>
      <button class="okbutton" onclick="closePopup()">OK</button>
      <a href="wallart.html"><button class="returnbutton">Return to Home</button></a>
    </div>
  </div>

  <!-- Include any additional content, such as order summary, total amount, etc. -->

  <script src="checkout.js"></script>
  
</body>
</html>
