<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/all.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <!-- Custom -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>TISS Register Page</title>
</head>

<body>
  <!-- Top Bar --><!-- 
  <script src="top_bar.js"></script> -->


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="assets/img/logo1.png" class="logo" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item mr-3">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="about.html">About</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item active mr-3">
            <a class="nav-link" href="register.html">
              <i class="fas fa-user-plus"></i> Register</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="login.html">
              <i class="fas fa-sign-in-alt"></i>

              Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section id="register" class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h4>
                <i class="fas fa-user-plus"></i> Register</h4>
            </div>
            <div class="card-body">
                <form action="index.html">
                
                  <div class="form-group">
                  <label for="first_name">Name</label>
                  <input type="text" name="first_name" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="password2">Password</label>
                  <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="password">Confirm Password</label>
                  <input type="password" name="password2" class="form-control" required>
                </div>
                <input type="submit" value="Register" class="btn btn-secondary btn-block">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <script src="footer.js"></script>

</body>

</html>