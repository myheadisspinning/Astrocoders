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


	<!-- Hero section -->
	<section class="hero-section overflow-hidden">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/slider-bg-1.jpg">
				<div class="container">
					<h2>Game on!</h2>
					<p>"Dark brown was the pain, cherished both in and of itself, a deliberate injury to the lake. The life of time, however, is painful, sitting amidst the elements of sorrow. The course of time is useless."</p>
					<a href="#" class="site-btn">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
				</div>
			</div>
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/slider-bg-2.jpg">
				<div class="container">
					<h2>Game on!</h2>
					<p>The bruise of memory, a dark bloom she nurtured, poisoned the clear wellspring of her spirit. Each passing day only deepened the ache, a constant companion in her desolate existence. Time itself offered no escape, merely a drawn-out suffering.</p>
					<a href="#" class="site-btn">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end-->


	<!-- Intro section -->
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
						<h3>The best online game is out now!</h3>
						<p>Get ready for intense combat and adrenaline-fueled moments that will keep you on the edge of your seat.....</p>
						<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Playstation</a></div>
						<h3>Top 5 best games in november</h3>
						<p>Team up with allies and conquer challenging dungeons together in a cooperative experience.....</p>
						<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Reviews</a></div>
						<h3>Get this game at a promo price</h3>
						<p>Check their "Special Offers" page. They often have weekend deals, mid-week madness sales, and free-to-keep promotions. Keep an eye out for their "Free Promotions" page on SteamDB as well.....</p>
						<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="section-title text-white">
						<h2>Latest News</h2>
					</div>
					<ul class="blog-filter">
						<li><a href="#">Racing</a></li>
						<li><a href="#">Shooters</a></li>
						<li><a href="#">Strategy</a></li>
						<li><a href="#">Online</a></li>
					</ul>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="img/games/SOK1.jpg" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>The ultimate online gaming experience has landed! Immerse yourself in a vast, dynamic world brimming with adventure, challenges, and endless possibilities. Connect with a global community, forge alliances, and conquer epic quests. Don't just play a game, live an unforgettable adventure. The best is finally here – dive in now!</p>
						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="./img/blog/1.jpg" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>Prepare for the next evolution of online gaming! This groundbreaking title offers innovative gameplay, stunning visuals, and a thriving community eager to connect. Whether you crave intense competition or collaborative adventures, the best online game delivers. Your journey to legendary status starts today. Join the phenomenon!</p>

						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="./img/blog/2.jpg" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>The wait is over! The best online game is now available for everyone to enjoy. Easy to pick up, yet endlessly engaging, it promises hours of fun, thrilling challenges, and the chance to build lasting friendships. Explore a vibrant world, customize your experience, and discover why this is the must-play title of the year. Start your adventure today!</p>

						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<h4 class="widget-title">Trending</h4>
							<div class="trending-widget">
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="img/games/2.jpg" style="height: 80px; width: 75px;" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="img/games/SOK6.jpg" style="height: 80px; width: 75px;" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="img/games/SOK5.jpg" style="height: 80px; width: 75px;" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="./img/blog-widget/4.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
							</div>
						</div>
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
						<a href="#" class="add">
							<img src="./img/add.jpg" alt="">
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->


	<!-- Intro section -->
	<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="./img/promo-bg.jpg">
		<a href="video/sokoban.mp4" class="video-play-btn video-popup"><img src="img/icons/solid-right-arrow.png" alt="#"></a>
		<div class="container">
			<div class="video-text">
				<h2>SOKOBAN</h2>
				<p>Deceptively simple, incredibly challenging. Test your spatial reasoning and problem-solving skills by moving crates.</p>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Featured section -->
	<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="img/featured-bg.jpg"></div>
		<div class="featured-box">
			<div class="text-box">
				<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
				<h3>The game you’ve been waiting  for is out now</h3>
				<p>The global community is buzzing with excitement, and soon you can join them! The game you've been patiently waiting for is on the horizon, promising a chance to connect with friends, forge new alliances, and compete in epic online battles. Get ready to share unforgettable moments and create lasting memories in a vibrant, evolving world. The wait is nearly done – prepare to unite!</p>

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
				<img src="img/astro.png" class="astro" alt="">
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
