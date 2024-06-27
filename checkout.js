// script.js


function completePurchase() {
  // Perform actions here, such as sending order information to the server,
  // processing the payment, and updating the user's order history.

  // For now, let's display an alert to simulate the purchase completion.
  
 
  // Redirect to a thank you page (replace 'thankyou.html' with your actual thank you page)
  window.location.href = 'thankyou.html';
}
function validateForm() {
  // Get all required input elements
  const requiredInputs = document.querySelectorAll('input[required], textarea[required]');

  // Check if all required fields are filled
  const allFieldsFilled = Array.from(requiredInputs).every(input => input.value.trim() !== '');

  // Enable or disable the button based on validation
  const purchaseButton = document.getElementById('purchaseButton');
  purchaseButton.disabled = !allFieldsFilled;
}

    function showPopup() {
      document.getElementById("myModal").style.display = "block";
    }

    function closePopup() {
      document.getElementById("myModal").style.display = "none";
    }
  
