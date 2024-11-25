<!DOCTYPE html>
<html>

<head>
  <title>Cyber Books</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    h1 {
      color: #333;
    }

    .product {
      display: flex;
      margin-bottom: 20px;
    }

    .product img {
      width: 200px;
      height: auto;
      margin-right: 20px;
    }

    .product-info {
      flex: 1;
    }

    .product-title {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .product-description {
      color: #666;
      margin-bottom: 10px;
    }

    .product-price {
      font-size: 18px;
      color: #f00;
    }

    .cart-button {
      cursor: pointer;
    }

    .cart-summary {
      border: 1px solid #ccc;
      padding: 10px;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <h1>Cyber Books</h1>

  <div class="product">
    <img src="cp.jpg" alt="Product Image">
    <div class="product-info">
      <h2 class="product-title">Computer Programming and Cyber Security for Beginners</h2>
      <p class="product-description">Product description goes here.</p>
      <p class="product-price">$30.00</p>
      <button class="cart-button"
        onclick="addToCart('Computer Programming and Cyber Security for Beginners' , 30.00)">Add to
        Cart</button>
    </div>
  </div>

  <div class="product">
    <img src="B2.jpg" alt="Product Image">
    <div class="product-info">
      <h2 class="product-title">Beginners guide to Hacking and Cyber Security</h2>
      <p class="product-description">Product description goes here.</p>
      <p class="product-price">$4.35</p>
      <button class="cart-button" onclick="addToCart('Beginners guide to Hacking and Cyber Security', 4.35)">Add to
        Cart</button>
    </div>
  </div>

  <div class="product">
    <img src="B3.jpg" alt="Product Image">
    <div class="product-info">
      <h2 class="product-title">Internet of Things- A Hands on approach</h2>
      <p class="product-description">Product description goes here.</p>
      <p class="product-price">$11.00</p>
      <button class="cart-button" onclick="addToCart('Internet of Things- A Hands on approach', 11.00)">Add to
        Cart</button>
    </div>
  </div>
  </div>


  <div class="cart-summary">
    <h3>Cart Summary</h3>
    <ul id="cartItems">
      <!-- Carted products will be displayed here -->
    </ul>
    <p>Total Price: <span id="totalPrice">$0.00</span></p>
  </div>

  <script>
    var cartItems = [];
    var totalPrice = 0.00;

    function addToCart(productName, price) {
      cartItems.push(productName);
      totalPrice += price;
      updateCartSummary();
    }

    function updateCartSummary() {
      var cartItemsElement = document.getElementById("cartItems");
      cartItemsElement.innerHTML = "";

      for (var i = 0; i < cartItems.length; i++) {
        var li = document.createElement("li");
        li.textContent = cartItems[i];
        cartItemsElement.appendChild(li);
      }

      var totalPriceElement = document.getElementById("totalPrice");
      totalPriceElement.textContent = "$" + totalPrice.toFixed(2);
    }
  </script>
</body>

</html>