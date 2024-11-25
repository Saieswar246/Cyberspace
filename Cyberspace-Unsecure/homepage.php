<!DOCTYPE html>
<html>

<head>
  <title>Home Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      overflow-y: scroll;
      overflow-x: hidden;
      background-color: black;

    }

    .logo {
      position: absolute;
      top: 20px;
      left: 20px;
      width: 60px;
      height: 50px;
    }

    .main-image {
      position: absolute;
      margin-top: 50px;
      left: 100px;
      width: 400px;
      height: 200px;
      animation-name: slideInLeft;
      animation-duration: 1s;
      animation-timing-function: ease-in;
      animation-delay: 1s;
      animation-iteration-count: 1;
      animation-direction: normal;
      animation-fill-mode: none;
    }

    @keyframes slideInLeft {
      from {
        transform: translateX(-200px)
      }

      to {
        transform: translateX(10px);
      }
    }

    @keyframes slideInright {
      from {
        transform: translateX(150px)
      }

      to {
        transform: translateX(10px);
      }
    }

    .second-image {
      position: absolute;
      margin-top: 50px;
      left: 600px;
      width: 400px;
      height: 200px;
      animation-name: slideInright;
      animation-duration: 1s;
      animation-timing-function: ease-in;
      animation-delay: 1s;
      animation-iteration-count: 1;
      animation-direction: normal;
      animation-fill-mode: none;
    }

    .third-image {
      position: absolute;
      margin-top: 50px;
      left: 100px;
      width: 400px;
      height: 200px;
      top: 400px;
      animation-name: slideInLeft;
      animation-duration: 1s;
      animation-timing-function: ease-in;
      animation-delay: 1s;
      animation-iteration-count: 1;
      animation-direction: normal;
      animation-fill-mode: none;
    }

    .fourth-image {
      position: absolute;
      margin-top: 50px;
      left: 600px;
      width: 400px;
      height: 200px;
      top: 400px;
      animation-name: slideInright;
      animation-duration: 1s;
      animation-timing-function: ease-in;
      animation-delay: 1s;
      animation-iteration-count: 1;
      animation-direction: normal;
      animation-fill-mode: none;
    }

    h1 {
      margin-top: 20px;
      margin-left: 90px;
      /* Adjust the margin as needed */
      text-align: left;
      /* Adjust the alignment as needed */
      color: white;
    }


    .search-bar {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      width: 500px;
      margin: 20px auto;
      background-color: black;

    }

    .search-bar input {
      flex: 1;
      padding: 5px 10px;
      background-color: black;
      color: white;
      /* Set the text color to white */
      border: none;

    }

    .search-bar button {
      padding: 5px 10px;
      background-color: black;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-left: 10px;

    }

    .search-icon {
      width: 20px;
      height: 20px;

    }

    .home-button {
      position: absolute;
      top: 20px;
      right: 280px;
      padding: 10px 20px;
      background-color: black;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      text-decoration: none;
      color: white;
      transition-property: transfrom;
      transition-duration: 1s;
      transition-timing-function: ease;
      transition-delay: 0s;
    }

    .home-button:hover {
      transform: translateY(-5px)
    }

    .product-button {
      position: absolute;
      top: 20px;
      right: 200px;
      padding: 10px 20px;
      background-color: black;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      text-decoration: none;
      color: white;
      transition-property: transfrom;
      transition-duration: 1s;
      transition-timing-function: ease;
      transition-delay: 0s;
    }

    .product-button:hover {
      transform: translateY(-5px)
    }

    .login-button {
      position: absolute;
      top: 20px;
      right: 130px;
      padding: 10px 20px;
      background-color: black;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      text-decoration: none;
      color: white;
      transition-property: transfrom;
      transition-duration: 1s;
      transition-timing-function: ease;
      transition-delay: 0s;
    }

    .login-button:hover {
      transform: translateY(-5px)
    }

    .register-button {
      position: absolute;
      top: 20px;
      right: 40px;
      padding: 10px 20px;
      background-color: black;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      text-decoration: none;
      color: white;
      transition-property: transfrom;
      transition-duration: 1s;
      transition-timing-function: ease;
      transition-delay: 0s;
    }

    .register-button:hover {
      transform: translateY(-5px)
    }


    .quote {
      position: absolute;
      font-style: italic;
      top: 380px;
      left: 130px;
      color: azure;
      animation-name: flash;
      animation-duration: 3s;
      animation-timing-function: ease-in;
      animation-delay: 2s;
      animation-iteration-count: 1;
      animation-direction: normal;
      animation-fill-mode: none;

    }

    .quote2 {
      position: absolute;
      font-style: italic;
      left: 660px;
      top: 380px;
      color: azure;
      animation-name: flash;
      animation-duration: 3s;
      animation-timing-function: ease-in;
      animation-delay: 2s;
      animation-iteration-count: 1;
      animation-direction: normal;
      animation-fill-mode: none;

    }

    .quote3 {
      position: absolute;
      font-style: italic;
      left: 130px;
      top: 650px;
      color: azure;
      animation-name: flash;
      animation-duration: 3s;
      animation-timing-function: ease-in;
      animation-delay: 2s;
      animation-iteration-count: 1;
      animation-direction: normal;
      animation-fill-mode: none;

    }

    .quote4 {
      position: absolute;
      font-style: italic;
      left: 650px;
      top: 650px;
      color: azure;
      animation-name: flash;
      animation-duration: 3s;
      animation-timing-function: ease-in;
      animation-delay: 2s;
      animation-iteration-count: 1;
      animation-direction: normal;
      animation-fill-mode: none;

    }

    @keyframes flash {

      0%,
      50%,
      100% {
        opacity: 1;
      }

      25%,
      75% {
        opacity: 0;
      }
    }

    .review-section {
      margin-top: 600px;
      padding: 20px;
      background-color: #f1f1f1;
    }

    .review-section h2 {
      margin-bottom: 10px;
    }

    .review-section .review-form {
      margin-bottom: 20px;
    }


    .review-section .review-form button {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .review-section .social-media-icons {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .review-section .social-media-icons img {
      width: 30px;
      height: 30px;
      margin: 0 10px;

    }
  </style>
  </style>
</head>

<body>

  <a class="home-button" href="home.php">Home</a>

  <a class="product-button" href="product.php">Books</a>

  <a class="login-button" href="login.php">Login</a>

  <a class="register-button" href="signup.php">Register</a>

  <img class="logo" src="logo.png" alt="Logo">

  <h1>Welcome to Cyber Space</h1>

  <div class="search-bar">
    <input type="text" name="query" placeholder="Search..." id="searchInput">
    <button type="submit" onclick="performSearch()">
      <img class='search-icon' src="glass-icon.png" alt="Search" id="searchIcon">
    </button>
  </div>

  <a href="https://en.wikipedia.org/wiki/Secure_coding">
    <img class="main-image" src="cyber.jpeg" alt="Main Image">
  </a>

  <a href="https://en.wikipedia.org/wiki/Computer_security">
    <img class="second-image" src="cyber2.jpg" alt="Second Image">
  </a>

  <a href="https://en.wikipedia.org/wiki/Digital_forensics">
    <img class="third-image" src="digital_forensics.jpg" alt="Third Image">
  </a>

  <a href="https://en.wikipedia.org/wiki/Internet_of_things">
    <img class="fourth-image" src="iot.jpg" alt="Fourth Image">
  </a>

  <p class="quote">"One vulnerability is all an attacker needs"</p>

  <p class="quote2">"Unlock the depths of Cyber Security"</p>

  <p class="quote3">"Uncover the crime integrating digital forensics"</p>

  <p class="quote4">"Navigate the IoT Cybersecurity Landscape"</p>
  
  <input type="hidden" name="admin@gmail.com" value="7e60bc642fefc11b43792e8745df6c1d">

  <div class="review-section">
    <h2>Write a review</h2>
    <form class="review-form" action="review.php" method="POST">
      <button type="submit">Review Section</button>
    </form>
    <div class="social-media-icons">
      <a href="https://www.instagram.com/">
        <img src="Instagram-icon.png" alt="Instagram">
      </a>
      <a href="https://www.facebook.com/">
        <img src="Linkedin-icon.png" alt="Linkedin">
      </a>
    </div>
  </div>
  <script>
    function performSearch() {
      var queryInput = document.getElementById("searchInput");
      var query = queryInput.value.trim();
      if (query !== "") {

        alert(" " + query);
        
      } else {
        alert("Please enter a search query");
      }
    }
  </script>

</body>

</html>