﻿<!DOCTYPE html>
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

  <title> TISS Dashboard</title>
</head>

<body>
  <!-- Top Bar -->
  <script src="top_bar.js"></script>


  <!-- Navbar -->
  <script src="nav_bar.js"></script>
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
          <li class="nav-item  mr-3">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item active  mr-3">
            <a class="nav-link" href="dashboard.html">Explore</a>
          </li>
          <li class="nav-item  mr-3">
            <a class="nav-link" href="mycourses.html">My courses</a>
          </li>
          <!-- <li class="nav-item mr-3">
            <a class="nav-link" href="listings.html"></a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="dashboard.html">dashboard</a>
          </li> -->
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-3">
            <a class="nav-link" href="login.html">
              <i class="fas fa-user-plus-alt"></i> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="showcase-inner" class="py-5 text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h1 class="display-4">Browse Our Courses</h1>
          <p class="lead">Education is the kindling of a flame.Not the filling of a vessel.</p>
        </div>
      </div>
    </div>
  </section>

  
  <!-- Listings -->
  <section id="listings" class="py-4">
    <div class="container">
        <div class="row">
            <?php
            // Create connection

            $conn = mysqli_connect('localhost', 'root','','tiss');

            // Check connection
            if (!$conn)
            {
            die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM course";
            $result = mysqli_query($conn, $sql);
?>

             <?php if ($result->num_rows > 0) :?>
                           <?php while($row = mysqli_fetch_assoc($result)) :?>
            <!-- Listing 1 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card listing-preview">

                    <div class="card-img-overlay">
                    </div>
                    <div class="card-body">
                        <div class="listing-heading text-center">
                           
                          
                            <h4 class="text-primary"><?php echo $row["coursename"] ?></h4>
                            <p><i class="fas  text-secondary"></i><?php echo $row["category"]?></p>
                        </div>
                        <hr>
                        <div class="row py-2 text-secondary">
                            <i class="fas"></i> Description: <p><?php echo $row["description"]?></p>
                        </div>
                        <hr>
                        <a href="listing.html" class="btn btn-primary btn-block">Register to the Course</a>
                    </div>
                </div>
            </div>
<?php endwhile;?>
 
                            <?php else:?>
                            echo "0 results";
                           <?php endif;?>

            

</section>
        <section>
      <div class="row ">
        <div class="col-md-12  ">
          <ul class="pagination justify-content-center ">
            <li class="page-item disabled">
              <a class="page-link" href="#">&laquo;</a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">&raquo;</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="main-footer" class="py-4 bg-primary text-white text-center">
    Have fun learning!!! Powered by TISS
  </footer>

  <script src="assets/js/jquery-3.3.1.min.js "></script>
  <script src="assets/js/bootstrap.bundle.min.js "></script>
  <script src="assets/js/main.js "></script>
</body>

</html>