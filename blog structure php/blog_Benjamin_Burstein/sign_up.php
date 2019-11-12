<?php
	session_start();
	session_regenerate_id();
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="sign_up.css" />
		<title>sign_up</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-dark">
			<ul></ul>
			<img class="nav_icon" src="img/sword.png">
			<a style="color: white;" class="nav_menu">My blog, your artwork</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<ul>
			</ul>
			<div id="nav" class="nav_lien" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a style="color: white;" class="nav_index" href="index.php">Home<span class="sr-only">(current)</span></a>
					</li>
					<ul></ul>
					<li class="nav-item">
						<a style="color: white;" class="nav_sign_up" href="sign_up.php">Sign_up</a>
					</li>
					<ul></ul>
					<li class="nav-item">
						<a style="color: white;" class="nav_login" href="login.php">Login</a>
					</li>
				</ul>
			</div>
		</nav>
		<h1>Sign up</h1>
		<form action="verifSign_up.php" method="POST" enctype="multipart/form-data" id="form">
			<div class="form-group">
				<label for="exampleInputFirstName">FirstName</label>
				<input type="text" maxlength="25" name="firstname" required class="form-control"  placeholder="Enter your FirstName">
			</div>
			<div class="form-group">
				<label for="exampleInputLastName">LastName</label>
				<input type="text" maxlength="25" name="lastname" required class="form-control" placeholder="Enter your Lastame">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" name="email" maxlength="30" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" maxlength="16" name="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<button id="check" type="submit" class="btn btn-primary">Submit</button>
		</form>
		<?php
			if(isset($_GET['error']) && $_GET['error']) {
				echo '<h2 style="color: red;">E-mail déjà utilisé !</h2>';
			} 
		?>
	</body>
</html>