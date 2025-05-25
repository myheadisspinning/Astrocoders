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
	<section class="games-single-page">
		<div class="container">
			<div class="game-single-preview">
				<img src="img/games/SOK5.jpg" style="margin-left:270px;"  width= "50%;" height="300px" alt="">
			</div>
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
					<div class="gs-meta">11.11.18  /  in <a href="">Games</a></div>
					<h2 class="gs-title">Sokoban</h2>
					<h4>Gameplay</h4>
					<p>Sokoban gameplay typically involves a lone warehouse worker pushing boxes onto designated goal locations within a confined grid. The core challenge lies in the inability to pull boxes, demanding careful planning to avoid getting stuck. Now, imagine this classic formula with a twist: an enemy. This foe could patrol the warehouse, adding a layer of avoidance or perhaps even interacting with the boxes, complicating your task. You might need to strategically use boxes to block the enemy's path or lure it into traps while simultaneously solving the spatial puzzle. This addition injects tension and requires thinking beyond just box placement, demanding awareness of the moving threat as you navigate the warehouse.</p>
					<h4>Conclusion</h4>
					<p>In conclusion, the enduring appeal of Sokoban lies in its deceptively simple yet profoundly challenging gameplay. The act of pushing boxes onto designated goals within confined spaces demands meticulous planning and spatial reasoning. Each level presents a unique puzzle, requiring players to foresee the consequences of every move, as a single misstep can lead to an unsolvable state. The game's elegance is found in its minimalist design, focusing purely on the core mechanics of movement and obstruction. Despite its straightforward premise, Sokoban offers a deep and rewarding experience, fostering problem-solving skills and a satisfying sense of accomplishment upon conquering a particularly intricate layout. Its timeless design continues to captivate puzzle enthusiasts, proving that even without complex narratives or flashy graphics, a well-crafted mechanical challenge can stand the test of time.
					</p>
					<div class="geme-social-share pt-5 d-flex">
						<p>Share:</p>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						<div class="widget-item">
							<div class="rating-widget">
								<h4 class="widget-title">Ratings</h4>
								<ul>
									<li>Price<span>3.5/5</span></li>
									<li>Graphics<span>4.5/5</span></li>
									<li>Levels<span>3.5/5</span></li>
									<li>Levels<span>4.5/5</span></li>
									<li>Dificulty<span>4.5/5</span></li>
								</ul>
								<div class="rating">
									<h5><i>Rating</i><span>4.5</span> / 5</h5>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<div class="testimonials-widget">
								<h4 class="widget-title">Testimonials</h4>
								<div class="testim-text">
									<p>"Sokoban is a brilliant test of spatial thinking! Each puzzle is a satisfying challenge, demanding careful planning. It's deceptively simple but incredibly rewarding when you finally solve it. A true classic!"</p>
									<h6><span>Sen Bene, </span>Gamer</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Games end-->

	<section class="game-author-section">
		<div class="container">
			<div class="game-author-pic set-bg" data-setbg="img/games/SOK7.jpg"></div>
			<div class="game-author-info">
				<h4>Written by: Astrocoders</h4>
				<p>As an author, We strive to weave narratives that resonate with the human experience. Through carefully chosen words, We aim to evoke emotion, spark curiosity, and transport readers to worlds both familiar and new, leaving a lasting impression long after the final page is turned.</p>
			</div>
		</div>
	</section>


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
