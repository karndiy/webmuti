// Get the product details from the server
function getProductDetails(productId) {
    fetch(`/product/details/${productId}`)
      .then(response => response.json())
      .then(data => {
        const productDetails = document.querySelector('#product-details');
        productDetails.innerHTML = `
          <h2>${data.name}</h2>
          <p>${data.description}</p>
          <p><strong>Price:</strong> $${data.price}</p>
          <button onclick="addToCart(${data.id})">Add to cart</button>
        `;
      })
      .catch(error => console.error(error));
  }
  
  // Add a product to the cart
  function addToCart(productId) {
    fetch(`/cart/add/${productId}`, { method: 'POST' })
      .then(response => response.json())
      .then(data => {
        const cartCount = document.querySelector('#cart-count');
        cartCount.innerText = data.cartCount;
        alert('Product added to cart!');
      })
      .catch(error => console.error(error));
  }
  
  // Remove a product from the cart
  function removeFromCart(productId) {
    fetch(`/cart/remove/${productId}`, { method: 'POST' })
      .then(response => response.json())
      .then(data => {
        const cartCount = document.querySelector('#cart-count');
        const cartTotal = document.querySelector('#cart-total');
        const productRow = document.querySelector(`#product-${productId}`);
        cartCount.innerText = data.cartCount;
        cartTotal.innerText = `$${data.cartTotal.toFixed(2)}`;
        productRow.remove();
      })
      .catch(error => console.error(error));
  }

// const darkModeToggle = document.querySelector('#dark-mode-toggle');

// darkModeToggle.addEventListener('change', () => {
//   if (darkModeToggle.checked) {
//     document.body.classList.add('dark-mode');
//     localStorage.setItem('darkMode', 'enabled');
//   } else {
//     document.body.classList.remove('dark-mode');
//     localStorage.setItem('darkMode', 'disabled');
//   }
// }


const darkModeToggle = document.querySelector('#dark-mode-toggle');

// get the initial value of the 'darkMode' setting from localStorage
var darkModeSetting = localStorage.getItem('darkMode');

console.log(darkModeSetting);

// if the 'darkMode' setting is 'enabled', set the dark mode toggle to checked
if (darkModeSetting === 'enabled') {
  darkModeToggle.checked = true;
  document.body.classList.add('dark-mode');
}

darkModeToggle.addEventListener('change', () => {
  if (darkModeToggle.checked) {
    document.body.classList.add('dark-mode');
    darkModeSetting = localStorage.setItem('darkMode', 'enabled');
  } else {
    document.body.classList.remove('dark-mode');
    darkModeSetting = localStorage.setItem('darkMode', 'disabled');
  }
}
);


  