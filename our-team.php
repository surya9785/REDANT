<!-- Secondary Contact -->

<?php

		if(isset($_POST['mail'])){
			$server = "localhost";
			$username = "root";
			$password = "";
			$db = "REDANT";

			$conn = mysqli_connect($server, $username, $password, $db);

			if(!$conn)
				echo "Check the server. Connection not established ".$mysqli_connect_error();

			$email = $_POST['mail'];
			$message = $_POST['message'];

			$sql = "INSERT INTO `contact_2` (`Email`, `Message`, `Date`) VALUES ('$email', '$message', current_timestamp());";

			if($conn->query($sql) == true)
				echo '<script>alert("Form has been submitted Successfully\nThanks for contacting us..!")</script>';
			else
				echo "Error : $sql <br> $conn->error";

			$conn->close();



}

?>













<!DOCTYPE html>
<html>
<head>
	<title>OUR-TEAM | REDANTS</title>
	<link rel="icon" href="img/logo.PNG">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="our-team-style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

	<section class="total">


	<div class="navigation">
		<div class="navi">
			<div class="logo">
				<a href="index.php"> <img src="img/logo.PNG" alt="logo" width="125px"> </a>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="category.php">Categories</a></li>
					<li><a href="our-team.php">Our Team</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
				<a href="#"><img src="img/cart.png" width="25px" height="25px"> </a>
			</nav>
		</div>
	</div>





	<div class="main-container">

			<section class="team">
				<div class="container">
					<h1>RedAnt Team</h1>
					<div class="card">
						<div class="box">
							<img src="img/Our-Team/person1.PNG" alt="team img" />
							<h4>SADHIK</h4>
							<h5>Sr. Developer</h5>
							<p>Developed and structured feature-rich clint websites, ensuring that all needs were meet and company policies and procedures followed, created high quality code</p>
						</div>
					</div>
					<div class="card">
						<div class="box">
							<img src="img/Our-Team/person2.PNG" alt="team img" />
							<h4>VINNELA</h4>
							<h5>Developer</h5>
							<p>Collaborated with project managers and creative team to deliver original, efficient solutions; advised clints and provided expertise. We given our best output code</p>
						</div>
					</div>
					<div class="card">
						<div class="box">
							<img src="img/Our-Team/person3.PNG" alt="team img" />
							<h4>SAI TARUN</h4>
							<h5>Manager</h5>
							<p>Manages a team of 7 freelance web-developers and designers; trained and educated other web developers. Dedicated to learning technologies and coding languages</p>
						</div>
					</div>
					<div class="card">
						<div class="box">
							<img src="img/Our-Team/four.jpg" alt="team img" />
							<h4>HIRANMAI</h4>
							<h5>Sr. Developer</h5>
							<p>Brought in a user perspective to 4 successful projects. Decisions effected a total userbase of 40000+. Led the launch of new invoicing software in 4 months. </p>
						</div>
					</div>
				</div>
			</section>
	</div>


	<!--Footer-->
	<div class="footer">
		<div class="footer-content">
			<div class="footer-section about">
				<a href="index.php"> <img src="img/logo.PNG" alt="logo" width="125px"> </a>
				<p>
					Redant is significantly dominant in the sale of apparel (a position that was bolstered by its acquisition of Myntra), and was described as being "neck and neck" with Amazon in the sale of electronics and mobile phones.
				</p>
				<br>
				<div class="contact">
					<span>&#128222; +91-9705954241</span>
                      <span>&#x2709; redants.support@gmail.com</span>
				</div>
				<div class="social">
					<a href=""><img src="img/facebook.png" alt=""></i></a>
					<a href=""><img src="img/instagram.png" alt=""></i></a>
					<a href="#"><img src="img/twitter.png" alt=""></i></a>
					<a href="#"><img src="img/linkedin.png" alt=""></i></a>
				</div>
			</div>
			<div class="footer-section links">
				<h2>Quick Links</h2>
				<hr>
				<ul>
					<a href="index.php"><li>Home</li></a>
					<a href="category.php"><li>Categories</li></a>
					<a href="our-team.php"><li>Our Team</li></a>
					<a href="contact.php"><li>Contact</li></a>
					<a href="login.php"><li>Login</li></a>
				</ul>
			</div>
			<div class="footer-section contact-form">
				<h2>Contact Us</h2>
				
				<form action="our-team.php" method="post">
					<input type="email" required name="mail" class="text-input contact-input" placeholder="Your Email">
					<textarea name="message" required   class="text-input contact-input" placeholder="Enter your Message"></textarea>
					<button type="submit" class="button">
						&#x2709;
						Send
					</button>
				</form>
			</div>
		</div>
		<div class="footer-bottom">
		  <p> &copy; REDANTS.com | Created by REDANTS Team  </p>
		</div>
	</div>


	

		








</body>
</html>