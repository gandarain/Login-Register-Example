<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="stylesheet/login.css">
</head>
<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Header</a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li> -->
    </ul>
  </nav>

  <div class="containe-fluid" id="body">
    <div class="row">
      <div class="col-sm-8" id="bodykiri">
        <!-- <div class="jumbotron"> -->
          <h1>Hallo</h1>
          <h4>Selamat datang</h4>
          <h4>Ini merupakan contoh sederhana dari login dan register</h4>
        <!-- </div> -->
      </div>
      <div class="col-sm-3" id="form">
        <form method="post" action="login.php">
          <?php include('errors.php'); ?>
          <div class="form-group">
            <label for="email">Username:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter username" name="username">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
          </div>
          <button type="submit" class="btn btn-info" name="login_user">Login</button>
          <a href="register.php" class="btn btn-info" role="button" name="login_user">Register</a>
        </form>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Footer</a>
      </li>
    <!-- <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li> -->
    </ul>
  </nav>

</body>
</html>
