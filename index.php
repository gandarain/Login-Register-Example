<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
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
  <link rel="stylesheet" type="text/css" href="stylesheet/index.css">
</head>
<body>
	<div class="containe-fluid" id="header">
  	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    	<ul class="navbar-nav">
      	<li class="nav-item active">
        	<a class="nav-link" href="#">Header</a>
    	</li>
		</nav>
	</div>

		<div class="containe-fluid" id="body">
			<?php if (isset($_SESSION['success'])) : ?>
				<div class="error success" >
					<h3>
						<?php
							echo $_SESSION['success'];
							unset($_SESSION['success']);
						?>
					</h3>
				</div>
			<?php endif ?>
			<?php  if (isset($_SESSION['username'])) : ?>
				<h1>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1>
				<p> <a href="index.php?logout='1'" class="btn btn-info">Logout</a> </p>
			<?php endif ?>
	  </div>

	<div class="containe-fluid" id="footer">
  	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    	<ul class="navbar-nav">
      	<li class="nav-item active">
        	<a class="nav-link" href="#">Footer</a>
    	</li>
		</nav>
	</div>

</body>
</html>
