<?php
include_once('user/includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>3D Navbar Animation</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="menu">
          <h3 class="logo"><h1>IIIN</h1>
          <div class="hamburger-menu">
            <div class="bar"></div>
          </div>
        </div>
      </div>

      <div class="main-container">
        <div class="main">
          <header>
            <div class="overlay">
              <div class="inner">
                <h2 class="title">Welcome to Admission Web Portal</h2>
              </div>
            </div>
          </header>
        </div>

        <div class="shadow one"></div>
        <div class="shadow two"></div>
      </div>

      <div class="links">
        <ul>
          <li>
            <a href="index.php" style="--i: 0.05s;">Home</a>
          </li>
          <li>
            <a href="user/signup.php" style="--i: 0.1s;">Student Register</a>
          </li>
          <li>
            <a href="user/login.php" style="--i: 0.15s;">Student Login</a>
          </li>
          <li>
            <a href="admin/login.php" style="--i: 0.2s;">Admin Login</a>
          </li>
          <li>
            <a href="#" style="--i: 0.25s;">About</a>
          </li>
        </ul>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>