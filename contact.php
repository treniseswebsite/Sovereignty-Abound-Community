<?php


if ($_POST["message"]) {


	mail(
		"sovereigntyabound@gmail.com",
		"You have a new volunteer for SAAAC!",


		$_POST["insert your message here"] . "From: an@email.address"
	);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<title>Contact</title>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="index.html">
						<img src="LOGO.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
						Sovereignty Abound Community
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">

							<li class="nav-item">
								<a class="nav-link" href="index.html">About<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="engage.html">Give</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="contact.php">Contact</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="food.html">Food Distribution</a>
							</li>


						</ul>
					</div>
				</nav>
			</div>

		</div>


		<div class="col-sm-3">
			<img style="height: 400px; width: 667px; float: left;" src="contactImage.jpg">
		</div>
		<div class="col-sm-9">
			<img style="height: 500px; float: left;" src="contactImage2.jpg">
		</div>
		<div class="container-fluid vh-100 " style="background-color: whitesmoke;">
			<div class="row vh-100">
				<div class="col d-flex align-items-center justify-content-center flex-column bg-contact">
					<div class="card bg-card-contact">
						<div class="card-body">
							<h1 class="card-title d-flex justify-content-center">
								CONTACT
							</h1>
							<p class="lead">
								If you would like to get in touch, partner with us, or have any issues, please call our toll-free number at:

								<br>
								916-572-7541
								<br>

							</p>
							<p class="lead">
								or send us an email at
								<a href="mailto:sovereigntyabound@gmail.com" target="_blank" class="badge badge-info">
									sovereigntyabound@gmail.com</a>

							</p>
							<form method="post" action="subscriberform.php">


								<textarea name="message"></textarea>


								<input type="submit">


							</form>
							<br />

						</div>
					</div>
				</div>
			</div>
		</div>




		<footer>
			<div class="container-fluid">
				<div class="row p-2">
					<div class="col-md d-flex text-center justify-content-center align-items-center">
						<h5>Want to get in touch or talk about a partnership?</h5>
					</div>
					<div class="col-md d-flex text-center justify-content-center align-items-center">
						<h5>
							Feel free to contact us toll-free at
							<span style="color:darkgrey">
								916-572-7541
							</span>
						</h5>
					</div>
					<div class="col-md d-flex text-center justify-content-center align-items-center">
						<h5>
							COPYRIGHT © 2020 SOVEREIGNTY ABOUND - ALL RIGHTS RESERVED
						</h5>
					</div>

				</div>
			</div>
		</footer>
	</div>
</body>

</html>