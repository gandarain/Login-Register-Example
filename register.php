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
  <link rel="stylesheet" type="text/css" href="stylesheet/registrasi.css">
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
      <div class="mx-auto col-sm-6">
        <!-- form user info -->
        <div class="card">
          <div class="card-header">
            <h4 class="mb-0">User Information</h4>
          </div>
          <div class="card-body">
            <form class="form" role="form" autocomplete="off" action="register.php" method="post">
              <p><?php include('errors.php'); ?><p><br/>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Username</label>
              <div class="col-lg-9">
                <input class="form-control" type="text" name="username">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Email</label>
              <div class="col-lg-9">
                <input class="form-control" type="text" name="email">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Password</label>
              <div class="col-lg-9">
                <input class="form-control" type="password" name="password_1">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label">Confirm Password</label>
              <div class="col-lg-9">
                <input class="form-control" type="password" name="password_2" value="">
              </div>
            </div>
            <!-- <input type="button" Name="submit"> -->
            <button type="submit" class="btn btn-primary" name="reg_user">Submit</button>
            <a href="login.php" class="btn btn-primary">Sign in</a>
          </form>
        </div>
      </div>
                    <!-- /form user info -->
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
