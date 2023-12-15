<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
      text-align: center;
      padding: 50px;
    }
    body {
      color: coral;
      margin: 0;
      padding: 0;
      background-image: url('https://www.shutterstock.com/image-vector/insert-atm-card-credit-slot-600nw-1940138038.jpg');
      background-size: 90%;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      background-image: url('https://www.shutterstock.com/image-vector/insert-atm-card-credit-slot-600nw-1940138038.jpg');
      background-size: cover;
      background-position: center;
      filter: blur(5px); 
    }
    .thank-you-message {
      font-size: 24px;
      margin-bottom: 20px;
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 1s, transform 1s;
    }
    .thank-you-message.show {
      opacity: 1;
      transform: translateY(0);
    }
    .container {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 1s, transform 1s;
    }
    .container.show {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
  <title>Thank You Page</title>
</head>
<body>
<?php
session_start();
$_SESSION = array();
//session_destroy();
//header("Location: start.html");
//exit();
?>
  <div class="container">
    <div class="thank-you-message">
      Thank you for visiting! Have a nice day, Please visit again.
    </div>

    <a href="start.html" class="btn btn-primary">GO TO HOME PAGE</a>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
   
    $(document).ready(function () {
      $(".container, .thank-you-message").addClass("show");
    });
  </script>

</body>
</html>

