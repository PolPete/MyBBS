<!DOCTYPE html>
<?php
include("includes/get-post.php");
?>
<html lang="ja">

	<head>
		<title>MyBBS</title>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" type="text/css" href="assets/stylesheets/main.css">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700"  rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>

	<body>

		<!-- Navbar -->
		<nav class="w3-top w3-padding-large" id="top_nav">
			<div class="w3-bar">
				<a class="w3-bar-item w3-bt w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="openNav()" title="Toggle Navigation Menu">
					<i class="fa fa-bars"></i>
				</a>
				<a href="index.html" class="w3-bar-item w3-btn w3-padding-large logo">pinBoard</a>
				<div class="w3-right">
					<a href="about.html" class="w3-bar-item w3-btn w3-padding-large w3-hide-small">About</a>
					<a href="signup.html" class="w3-bar-item w3-btn w3-padding-large w3-hide-small">Sign in</a>
					<a href="login.html" class="w3-bar-item w3-btn w3-padding-large w3-hide-small">Log in</a>
					<a href="contact.html" class="w3-bar-item w3-btn w3-padding-large w3-hide-small">Contact</a>
				</div>
			</div>
		</nav>

		<!-- Navbar on small screens -->
		<div id="mobile_nav" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-top w3-padding-large">
			<a href="about.html" class="w3-bar-item w3-btn w3-padding-large">About</a>
			<a href="contact.html" class="w3-bar-item w3-btn w3-padding-large">Contact</a>
			<a href="signup.html" class="w3-bar-item w3-btn w3-padding-large">Sign in</a>
			<a href="login.html" class="w3-bar-item w3-btn w3-padding-large">Log in</a>
		</div>

		<div class="w3-content" style="max-width:1600px" id="back_gr">
			<!-- Header -->
			<header class="w3-container w3-center w3-padding-48">
				<h2 class="logo">Welcome to</h2>
				<h1 class="w3-xxxlarge logo"><b>pinBoard</b></h1>
				<h6>No.1 world's free <span class="w3-tag">Speech Board</span></h6>
			</header>

			<!-- Grid -->
			<div class="w3-row w3-padding">

				<!-- Blog entries -->
				<div class="w3-col l12">

					<div class="container">
						<div class="card">

							<!-- Blog entry -->
							<div class="w3-container w3-white w3-margin w3-padding-large">
								<div class="w3-justify">
									<?php getPosts(); ?>
									<div>
										<h3 class="w3-text-blue">TITLE HEADING</h3>
										<h6><span class="w3-opacity">Posted: May 2, 2016.</span> | <span class="w3-text-orange">By: Admin</span></h6>
									</div>
									<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
									<p class="w3-text-blue">
										<a href="single-post.html">[Read More]</a>
									</p>
									<p class="w3-left">
										<button class="w3-button w3-blue" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> いいね</b></button>
									</p>
									<p class="w3-right">
										<button class="w3-button w3-orange w3-text-white w3-hover-text-grey" onclick="myFunction('demo1')" id="myBtn"><b>コメント  </b> <span class="w3-tag w3-white w3-text-orange">1</span></button>
									</p>
									<p class="w3-clear"></p>
									<div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
										<hr>
										<div class="w3-col l2 m3">
											<img src="assets/images/thumbs/thumb01.jpg" style="width:90px;">
										</div>
										<div class="w3-col l10 m9">
											<h4>George <span class="w3-opacity w3-medium">May 3, 2015, 6:32 PM</span></h4>
											<p>Great blog post! Following</p>
										</div>
									</div>
								</div>
							</div>
							<hr>

							<!-- POST BUTTON -->
							<div class="w3-center w3-margin">
								<button class="w3-button w3-orange w3-text-white w3-hover-text-blue w3-round-xxlarge w3-large post-btn" onclick="document.getElementById('post').style.display='block'">投稿する</button>
							</div>

						</div>

					</div>

				<!-- END BLOG ENTRIES -->
				</div>
				<div class="site-main-background" arai-hidden="true"></div>

			<!-- END GRID -->
			</div>

			<!-- Pagination -->
			<div class="w3-center w3-margin-bottom">
				<div class="w3-bar">
					<a href="#" class="w3-button">&laquo;</a>
					<a href="#" class="w3-button w3-red">1</a>
					<a href="#" class="w3-button">2</a>
					<a href="#" class="w3-button">3</a>
					<a href="#" class="w3-button">4</a>
					<a href="#" class="w3-button">&raquo;</a>
				</div>
			</div>

		<!-- END w3-content -->
		</div>

		<!-- Reply Modal -->
		<div id="post" class="w3-modal w3-animate-opacity">
			<div class="w3-modal-content" style="padding:32px">
				<div class="w3-container w3-white"> <i onclick="document.getElementById('post').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
					<h2>投稿の作成</h2>

					<form id="regForm" action="includes/add-post.php" method="post" onsubmit="return validateForm(this)">
						<p class="form-title"><span class="important">必須</span>お名前を入力してください</p>

						<p class="checked-input">
							<input id="name" type="text" placeholder="山田　太郎" oninput="this.className = ''" maxlength="32" name="name" value="">
						</p>
						<p class="error-box" id="name-error"></p>

						<p class="form-title"><span class="important">必須</span>投稿を入力してください</p>
						<p class="checked-input">
							<textarea placeholder="今なにしてる？" oninput="this.className = ''" maxlength="2000" rows="10" cols="30" name="content" id="textarea"></textarea>
						</p>
						<p class="error-box" id="content-error"></p>

						<button type="submit" id="form-submit" name="formSubmit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">投稿</button>
					</form>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer class="w3-container" style="padding:32px">
			<div class="w3-content" style="max-width:1600px;">

				<!-- Logo column -->
				<div class="w3-third">
					<h3 class="w3-margin-right logo">pinBoard</h3>
					<p>
						<small>All Rights Reserved | ©
							<time>2019</time>
						</small>
					</p>
				</div>

				<!-- About column -->
				<div class="w3-third">
					<h3 class="w3-border-bottom w3-border-white w3-margin-right">About</h3>
					<p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
				</div>

				<!-- SNS column -->
				<div class="w3-third">
					<h3 class="w3-border-bottom w3-border-white w3-margin-right">Follow Us</h3>
					<div class="w3-container w3-xlarge w3-padding">
						<i class="fa fa-facebook-official w3-hover-opacity w3-margin-right"></i>
						<i class="fa fa-instagram w3-hover-opacity w3-margin-right"></i>
						<i class="fa fa-snapchat w3-hover-opacity w3-margin-right"></i>
						<i class="fa fa-pinterest-p w3-hover-opacity w3-margin-right"></i> <i class="fa fa-twitter w3-hover-opacity w3-margin-right"></i>
						<i class="fa fa-linkedin w3-hover-opacity w3-margin-right"></i>
					</div>
				</div>

			</div>
		</footer>

		<script>
		// Used to toggle the menu on small screens when clicking on the menu button
		function openNav() {
			var x = document.getElementById("mobile_nav");
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			} else {
				x.className = x.className.replace(" w3-show", "");
			}
		}
		</script>
		<script>
			// Toggle between hiding and showing blog replies/comments
			document.getElementById("myBtn").click();
			function myFunction(id) {
				var x = document.getElementById(id);
				if (x.className.indexOf("w3-show") == -1) {
					x.className += " w3-show";
				} else {
					x.className = x.className.replace(" w3-show", "");
				}
			}

			function likeFunction(x) {
				x.style.fontWeight = "bold";
				x.innerHTML = "✓ いいね！";
			}
		</script>
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>

		<script src="assets/js/validation.js"></script>
	</body>
</html>
