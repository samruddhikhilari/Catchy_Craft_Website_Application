// client-side validation can be added to ensure that required fields are not empty and correct data types are used for numeric inputs
// for example:
document.getElementById('add-product-form').addEventListener('submit', function(event) {
  const name = document.getElementById('name').value;
  const description = document.getElementById('description').value;
  const price = document.getElementById('price').value;
  const quantity = document.getElementById('quantity').value;
  const image = document.getElementById('image').value;

  if (!name || !description || !price || !quantity || !image) {
    event.preventDefault(); // prevent form submission if any field is empty
    alert('All fields are required');
  } else if (isNaN(price) || isNaN(quantity)) {
    event.preventDefault(); // prevent form submission if price or quantity are not numbers
    alert('Price and quantity must be numbers');
  }
});
