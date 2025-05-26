
<?php
session_start();

// --- DATABASE CONNECTION ---
// Adjust these settings for your environment
$db_host = 'localhost:3307';
$db_user = 'root';
$db_pass = '';
$db_name = 'game_users'; // <-- CHANGE THIS TO YOUR DB NAME

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// --- FETCH USER EMAIL IF LOGGED IN ---
$user_email = '';
if (isset($_SESSION['username'])) {
    $stmt = $conn->prepare("SELECT email FROM users WHERE username = ?");
    $stmt->bind_param("s", $_SESSION['username']);
    $stmt->execute();
    $stmt->bind_result($user_email);
    $stmt->fetch();
    $stmt->close();
}
?>
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
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>
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
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="page-info">
			<h2>Contact</h2>
		</div>
	</section>
	<!-- Page top end-->

	<!-- Contact page -->
	<section class="contact-page">
		<div class="container"> 
		<div class="map" style="text-align:center; padding: 40px 0;">
			<a 
				href="https://maps.app.goo.gl/r22BhxrDbE67xGjU8" 
				target="_blank" 
				rel="noopener" 
				class="site-btn"
				style="font-size: 1.2rem; padding: 18px 36px; display: inline-block; background: #23243a; color: #fff; border-radius: 8px; box-shadow: 0 4px 16px rgba(31,38,135,0.15); text-decoration: none; transition: background 0.2s;">
				<img src="img/icons/location.png" alt="" style="height: 22px; vertical-align: middle; margin-right: 10px;">
				Open Location in Google Maps App
			</a>
			<div style="margin-top: 12px; color: #aaa; font-size: 0.95rem;">
				Tap the button to open our location in your Google Maps app.
			</div>
		</div>

		<div class="row">
			<div class="col-lg-7 order-2 order-lg-1">
				<?php if (isset($_SESSION['username'])): ?>
					<form class="contact-form">
						<input type="text" placeholder="Your name" value="<?php echo htmlspecialchars($_SESSION['username']); ?>" readonly>
						<input type="text" placeholder="Your e-mail" value="<?php echo htmlspecialchars($user_email); ?>" readonly>
						<input type="text" placeholder="Subject">
						<textarea placeholder="Message"></textarea>
						<button class="site-btn">Send message<img src="img/icons/double-arrow.png" alt="#"/></button>
					</form>
				<?php else: ?>
					<div class="alert alert-warning" style="margin-bottom:20px;">
						You must be <a href="#" id="openLoginModal" style="color:#007bff;text-decoration:underline;">logged in</a> to send a message.
					</div>
					<form class="contact-form">
						<input type="text" placeholder="Your name" disabled>
						<input type="text" placeholder="Your e-mail" disabled>
						<input type="text" placeholder="Subject" disabled>
						<textarea placeholder="Message" disabled></textarea>
						<button class="site-btn" type="button" disabled>Send message<img src="img/icons/double-arrow.png" alt="#"/></button>
					</form>
				<?php endif; ?>
			</div>
			<div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
				<h3>Howdy! Say hello</h3>
				<p>Connect with the game website author for inquiries, feedback, or potential collaborations. I'm passionate about creating engaging content and fostering a vibrant gaming community. Feel free to reach out with your thoughts on articles, game reviews, or suggestions for future content. Your input is valued!</p>
				<div class="cont-info">
					<div class="ci-icon"><img src="img/icons/location.png" alt=""></div>
					<div class="ci-text">QUEZON CITY</div>
				</div>
				<div class="cont-info">
					<div class="ci-icon"><img src="img/icons/phone.png" alt=""></div>
					<div class="ci-text">+6399 5933 8093</div>
				</div>
				<div class="cont-info">
					<div class="ci-icon"><img src="img/icons/mail.png" alt=""></div>
					<div class="ci-text">astrocoders001@gmail.com</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- Contact page end-->

	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe <img src="img/icons/double-arrow.png" alt="#"/></button>
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
