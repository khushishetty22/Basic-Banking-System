<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <style>
    body {
      height: 100vh;
      background-size: cover;
      background-position: center;
      background-image: linear-gradient(rgba(15,6,4,5),rgba(15,6,4,0.5)),url("img/image1.jpeg");
    }
    </style>
    <style>
      body {
        font-family: Arial;
        color: white;
      }

      .split {
        height: 70%;
        width: 50%;
        position: fixed;
        z-index: 1;
        top: 0.5;
        overflow-x: hidden;
        padding-top: 20px;
      }

      .left {
        left: 0;
        
      }

      .right {
        right: 0;
        
      }

      .centered {
        position: absolute;
        top: 50%;
        left: 35%;
        transform: translate(-50%, -50%);
        text-align: center;
      }

      .centeredd {
        position: absolute;
        top: 40%;
        right: 25%;
        transform: translate(-50%, -50%);
        text-align: center;
      }
    </style>

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #644E5B;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h2 style="color: #C96567;">Welcome to</h2>
                  <h1 style="color: white; font-family:Copperplate; font-size:300%;">ALL CITIZENS BANK</h1>
                </div>
              </div>
              
            </div>

      </div>
      <div class="split left">
        <div class="centeredd">
          <div class="btn">
            <a href="createuser.php"><button style="background-color : #9E5A63;">Create Account</button></a>
            <br>
            <br>
            <br>
            <a href="transfermoney.php"><button style="background-color : #9E5A63;">Make a Transaction</button></a>
            <br>
            <br><br>
            <a href="transactionhistory.php"><button style="background-color : #9E5A63;">Transaction History</button></a>
          </div>
        </div>
      </div>

      <div class="split right">
        <div class="centered">
          <h1 style="color: white; font-family: Arial;font-size:300%;">We're here for you.</h1>
          <p style="color: white; font-family: Arial; font-size:150%;"> We're in this together, and here to help our customers and communities.</p>
        </div>
      </div>

      
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>