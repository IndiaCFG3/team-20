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

  <title>TISS Home Page</title>
</head>

<body>
  <!-- Top Bar -->
  <!-- <script src="top_bar.js"></script> -->
  

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
            <li class="nav-item active mr-3">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="about.html">About</a>
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
              <a class="nav-link" href="register.php">
                <i class="fas fa-user-plus"></i> Register</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="login.php">
                <i class="fas fa-sign-in-alt"></i>

                Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

 <br>

 <h1 align="center">Enter new course details</h1>
<!-- Admin Form -->

  <div class="container">
      <form>
        <div class="form-group">
          <label>Course Name</label>
          <input type="text" class="form-control" placeholder="Add Name" name="coursename">
        </div>

        <div class="form-group" >
          <label>Category</label>
          <input type="text" class="form-control" placeholder="Add Category" name="category">

        </div>

        <div class="form-group">
          <label>Description</label>
          <textarea name="description" class="form-control" placeholder="Add Message" ></textarea>
        </div>

      <!--   <div class="form-group">
          <label>Gender</label>
          <select class="form-control">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div> -->

       <!--  <div class="form-group">
          <label>Upload File</label>
          <input type="file">
          <p class="help-block">Only png and jpg allowed</p>
        </div> -->

        <!-- <div class="checkbox">
          <label>
            <input type="checkbox"> Check me out
          </label>
        </div> -->

        <button type="submit" class="btn btn-default" name="addcourse">Add Course</button>
        </form>

        <hr>
</div>
      


  <!-- Footer -->
  <script src="footer.js"></script>

</body>

</html>