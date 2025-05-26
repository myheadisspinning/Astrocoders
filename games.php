<?php session_start(); ?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>AstoCoders - Gaming EX</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="header-social d-flex justify-content-end">
				<p>Follow us:</p>
				<a href="https://www.pinterest.com/astrocoders/" target="_blank"><i class="fa fa-pinterest"></i></a>
				<a href="https://www.facebook.com/profile.php?id=61576539719767" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://x.com/astrocoders001" target="_blank"><i class="fa fa-twitter"></i></a>
			</div>
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="index.php" class="site-logo">
					<img src="img/astro.png" class="astro" alt="">
				</a>
				<nav class="top-nav-area w-100">
				<div class="user-panel">
						<?php if (isset($_SESSION['username'])): ?>
								Hello, <?php echo htmlspecialchars($_SESSION['username']); ?> 
								<a href="logout.php" style="margin-left:10px;">Logout</a>
						<?php else: ?>
								<a href="#" id="openLoginModal">Login</a> / 
								<a href="#" id="openRegisterModal">Register</a>
						<?php endif; ?>
				</div>
									<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="games.php">Games</a>
							<ul class="sub-menu">
								<li><a href="game-single.php">Game Single</a></li>
							</ul>
						</li>
						<li><a href="download.php">Download</a></li>
						<li><a href="leaderboard.php">Leaderboard</a></li>
						<li><a href="forum.php">Forum</a></li>
						<li><a href="patch.php">Patch Notes</a></li>
						<li><a href="contact.php">Support</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="page-info">
			<h2>Games</h2>
		</div>
	</section>
	<!-- Page top end-->




	<!-- Games section -->
	<section class="games-section">
		<div class="container">
			<ul class="game-filter">
				<li><a href="">A</a></li>
				<li><a href="">B</a></li>
				<li><a href="">C</a></li>
				<li><a href="">D</a></li>
				<li><a href="">E</a></li>
				<li><a href="">F</a></li>
				<li><a href="">G</a></li>
				<li><a href="">H</a></li>
				<li><a href="">I</a></li>
				<li><a href="">J</a></li>
				<li><a href="">K</a></li>
				<li><a href="">L</a></li>
				<li><a href="">M</a></li>
				<li><a href="">N</a></li>
				<li><a href="">O</a></li>
				<li><a href="">P</a></li>
				<li><a href="">Q</a></li>
				<li><a href="">R</a></li>
				<li><a href="">S</a></li>
				<li><a href="">T</a></li>
				<li><a href="">U</a></li>
				<li><a href="">V</a></li>
				<li><a href="">W</a></li>
				<li><a href="">X</a></li>
				<li><a href="">Y</a></li>
				<li><a href="">Z</a></li>
			</ul>
			<div class="row">
				<div class="col-xl-7 col-lg-8 col-md-7">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="img/games/SOK5.jpg" alt="#">
								<h5>Sokoban</h5>
								<a href="game-single.php" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="img/games/2.jpg" alt="#">
								<h5>Dooms Day</h5>
								<a href="game-single.html" style="pointer-events: none;" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="img/games/3.jpg" alt="#">
								<h5>The Huricane</h5>
								<a href="game-single.html" style="pointer-events: none;" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="img/games/4.jpg" alt="#">
								<h5>Star Wars</h5>
								<a href="game-single.html" style="pointer-events: none;" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="img/games/5.jpg" alt="#">
								<h5>Candy land</h5>
								<a href="game-single.html" style="pointer-events: none;" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="img/games/6.jpg" alt="#">
								<h5>E.T.</h5>
								<a href="game-single.html" style="pointer-events: none;" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="img/games/7.jpg" alt="#">
								<h5>Zombie Appocalipse 2</h5>
								<a href="game-single.html" style="pointer-events: none;" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="img/games/8.jpg" alt="#">
								<h5>Dooms Day</h5>
								<a href="game-single.html" style="pointer-events: none;" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="game-item">
								<img src="img/games/9.jpg" alt="#">
								<h5>The Huricane</h5>
								<a href="game-single.html" style="pointer-events: none;" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
							</div>
						</div>
					</div>
					<div class="site-pagination">
						<a href="#" class="active">01.</a>
						<a href="#" style="pointer-events: none;">02.</a>
						<a href="#" style="pointer-events: none;">03.</a>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">categories</h4>
								<ul>
									<li><a href="" style="pointer-events: none;">Games</a></li>
									<li><a href="" style="pointer-events: none;">Gaming Tips & Tricks</a></li>
									<li><a href="" style="pointer-events: none;">Online Games</a></li>
									<li><a href="" style="pointer-events: none;">Team Games</a></li>
									<li><a href="" style="pointer-events: none;">Community</a></li>
									<li><a href="" style="pointer-events: none;">Uncategorized</a></li>
								</ul>
							</div>
						</div>
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">platform</h4>
								<ul>
									<li><a href="" style="pointer-events: none;">Xbox</a></li>
									<li><a href="" style="pointer-events: none;">X box 360</a></li>
									<li><a href="" style="pointer-events: none;">Play Station</a></li>
									<li><a href="" style="pointer-events: none;">Play Station VR</a></li>
									<li><a href="" style="pointer-events: none;">Nintendo Wii</a></li>
									<li><a href="" style="pointer-events: none;">Nintendo Wii U</a></li>
								</ul>
							</div>
						</div>
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">Genre</h4>
								<ul>
									<li><a href="" style="pointer-events: none;">Online</a></li>
									<li><a href="" style="pointer-events: none;">Adventure</a></li>
									<li><a href="" style="pointer-events: none;">S.F.</a></li>
									<li><a href="" style="pointer-events: none;">Strategy</a></li>
									<li><a href="" style="pointer-events: none;">> Racing</a></li>
									<li><a href="" style="pointer-events: none;">>Shooter</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Games end-->


	<!-- Featured section -->
	<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="img/featured-bg.jpg"></div>
		<div class="featured-box">
			<div class="text-box">
				<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
				<h3>The game you’ve been waiting  for is out now</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum posuere porttitor justo id pellentesque. Proin id lacus feugiat, posuere erat sit amet, commodo ipsum. Donec pellentesque vestibulum metus...</p>
				<a href="#" class="read-more">Read More <img src="img/icons/double-arrow.png" alt="#"/></a>
			</div>
		</div>
	</section>
	<!-- Featured section end-->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe  <img src="img/icons/double-arrow.png" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-left-pic">
				<img src="img/footer-left-pic.png" alt="">
			</div>
			<div class="footer-right-pic">
				<img src="img/footer-right-pic.png" alt="">
			</div>
			<a href="#" class="footer-logo">
				<img src="img/astro.png" class="astro" alt="" title="Visit us now!">
			</a>
			<ul class="main-menu footer-menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="games.php">Games</a>
				<li><a href="forum.php">Forum</a></li>
				<li><a href="contact.php">Support</a></li>
			</ul>
			<div class="footer-social d-flex justify-content-center">
				<a href="https://www.pinterest.com/astrocoders/" target="_blank"><i class="fa fa-pinterest"></i></a>
				<a href="https://www.facebook.com/profile.php?id=61576539719767" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://x.com/astrocoders001" target="_blank"><i class="fa fa-twitter"></i></a>
			</div>
			<div class="copyright"><a href="">Astrocoders</a> 2025 @ All rights reserved</div>
		</div>
	</footer>
	<!-- Footer section end -->

    <!-- Modals (only show if not logged in) -->
    <?php if (!isset($_SESSION['username'])): ?>
        <!-- Login Modal -->
        <div id="loginModal" class="custom-modal">
            <div class="custom-modal-content">
                <span class="custom-modal-close" id="closeLoginModal">&times;</span>
                <div class="custom-modal-header">
                    <img src="img/astro.png" alt="Logo" style="height:40px; margin-bottom: 10px;">
                    <h2>Login to Your Account</h2>
                </div>
                <?php if (!empty($_SESSION['login_error'])): ?>
                    <div class="form-error" style="color:red;"><?php echo htmlspecialchars($_SESSION['login_error']); ?></div>
                    <?php unset($_SESSION['login_error']); ?>
                <?php endif; ?>
                <form action="login.php" class="custom-modal-form" id="loginForm" method="POST">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="site-btn" style="width:100%;">Login</button>
                    <div class="custom-modal-footer">
                        <a href="#" style="color:#aaa; font-size:13px;">Forgot password?</a>
                        <span style="float:right; color:#aaa; font-size:13px;">
                            No account? 
                            <a href="#" id="switchToRegister" style="color:#fff; text-decoration:underline;">Register</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>

        <!-- Register Modal -->
        <div id="registerModal" class="custom-modal">
            <div class="custom-modal-content">
                <span class="custom-modal-close" id="closeRegisterModal">&times;</span>
                <div class="custom-modal-header">
                    <img src="img/astro.png" alt="Logo" style="height:40px; margin-bottom: 10px;">
                    <h2>Create Your Account</h2>
                </div>
                <?php if (!empty($_SESSION['register_error'])): ?>
                    <div class="form-error" style="color:red;"><?php echo htmlspecialchars($_SESSION['register_error']); ?></div>
                    <?php unset($_SESSION['register_error']); ?>
                <?php endif; ?>
                <?php if (!empty($_SESSION['register_success'])): ?>
                    <div class="form-success" style="color:green;"><?php echo htmlspecialchars($_SESSION['register_success']); ?></div>
                    <?php unset($_SESSION['register_success']); ?>
                <?php endif; ?>
                <form action="register.php" class="custom-modal-form" id="registerForm" method="POST">
                    <div class="form-group">
                        <input type="text" class="usernamereg" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="site-btn" style="width:100%;">Register</button>
                    <div class="custom-modal-footer">
                        <span style="color:#aaa; font-size:13px;">Already have an account? <a href="#" id="switchToLogin" style="color:#fff; text-decoration:underline;">Login</a></span>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/auth.js"></script>

	</body>
</html>
