<!DOCTYPE html>
<html>

<head>
     <title>Register to Cyber Space</title>
     <style>
          body {
               background-color: black;
               display: flex;
               justify-content: center;
               align-items: center;
               height: 100vh;
               flex-direction: column;
          }

          * {
               font-family: sans-serif;
               box-sizing: border-box;
               color: white;
          }

          form {
               width: 500px;
               border: 2px solid #ccc;
               padding: 30px;
               background: black;
               border-radius: 5px;

          }

          h2 {
               text-align: center;
               margin-bottom: 40px;
          }

          input {
               display: block;
               border: 2px solid #ccc;
               width: 95%;
               padding: 10px;
               margin: 10px auto;
               border-radius: 5px;
               color: black;
          }

          label {
               color: white;
               font-size: 18px;
               padding: 10px;
          }

          button {
               float: right;
               background: black;
               padding: 10px 15px;
               color: white;
               border-radius: 5px;
               border-color: white;
               margin-right: 10px;
               border: 5px;
          }

          button:hover {
               opacity: .7;
          }

          .error {
               background: #F2DEDE;
               color: #A94442;
               padding: 10px;
               width: 95%;
               border-radius: 5px;
               margin: 20px auto;
          }

          .success {
               background: #D4EDDA;
               color: #40754C;
               padding: 10px;
               width: 95%;
               border-radius: 5px;
               margin: 20px auto;
          }

          h1 {
               text-align: center;
               color: #fff;
          }

          .ca {
               font-size: 14px;
               display: inline-block;
               padding: 10px;
               text-decoration: none;
               color: #444;
          }

          .ca:hover {
               text-decoration: underline;
          }
     </style>
     <script>
        // JavaScript to redirect to login page after 10 seconds
        setTimeout(function () {
            window.location.href = "login.php";
        }, 50000);
    </script>
</head>

<body>
     <form action="signup-check.php" method="post">
          <h2>Register to Cyber Space</h2>
          <?php if (isset($_GET['error'])) { ?>
               <p class="error">
                    <?php echo $_GET['error']; ?>
               </p>
          <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success">
                    <?php echo $_GET['success']; ?>
               </p>
          <?php } ?>


          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
          <?php } else { ?>
               <input type="text" name="uname" placeholder="User Name"><br>
          <?php } ?>

          <label>E-mail</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" name="email" placeholder="E-mail" value="<?php echo $_GET['email']; ?>"><br>
          <?php } else { ?>
               <input type="text" name="email" placeholder="E-mail"><br>
          <?php } ?>


          <label>Password</label>
          <input type="password" name="password" placeholder="Password"><br>

          <label>Confirm Password</label>
          <input type="password" name="re_password" placeholder="Confirm Password"><br>

          <button type="submit">Sign Up</button>
          <a href="login.php" class="ca">Already have an account?-Login</a>
     </form>
</body>

</html>