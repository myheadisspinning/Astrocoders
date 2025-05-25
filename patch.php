<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>AstoCoders - Gaming EX</title>
    <meta charset="UTF-8">
    <meta name="description" content="EndGam Patch Notes and Upcoming Game Updates">
    <meta name="keywords" content="endGam, gaming, patch notes, updates, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

    <!-- Page Preloader -->
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
                <a href="home.php" class="site-logo">
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
            <section class="page-top-section" style="background-image: url('img/page-top-bg/1.jpg'); background-size: cover; background-position: center;">
                <div class="page-info">
                    <h2>Patch Notes</h2>
                </div>
            </section>
    <!-- Page top end-->

    <!-- Patch Notes Section -->
    <section class="patch-section">
        <div class="container">
            <div class="section-title text-white">
                <h2>Upcoming Game Updates</h2>
            </div>
            <ul class="patch-list" id="patch-list">
                <!-- Dynamic patch notes will be inserted here -->
            </ul>
        </div>
    </section>
    <!-- Patch Notes Section End -->

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
    <script>
    // Example dynamic patch notes data
    const patches = [
        {
            title: "Patch 1.3.0 - New Hero & Map",
            date: "2024-06-15",
            summary: "Introducing a new hero, 'Valkyrie', and the 'Crystal Caverns' map. Major balance changes included.",
            details: `
                <ul>
                    <li><b>New Hero:</b> Valkyrie - A versatile support with shield and heal abilities.</li>
                    <li><b>New Map:</b> Crystal Caverns - Explore new tactical opportunities and hidden paths.</li>
                    <li><b>Balance:</b> Adjusted damage for Sniper class, improved tank mobility.</li>
                    <li><b>Bug Fixes:</b> Fixed rare crash on match start, improved matchmaking speed.</li>
                </ul>
            `
        },
        {
            title: "Patch 1.2.5 - Summer Event",
            date: "2024-07-01",
            summary: "Kick off the summer with limited-time skins, double XP weekends, and special event quests.",
            details: `
                <ul>
                    <li><b>Event:</b> Summer Splash - Earn exclusive skins and emotes.</li>
                    <li><b>XP:</b> Double XP every weekend in July.</li>
                    <li><b>Quests:</b> Complete event quests for bonus rewards.</li>
                    <li><b>UI:</b> Improved event calendar and notifications.</li>
                </ul>
            `
        },
        {
            title: "Patch 1.2.1 - Quality of Life",
            date: "2024-06-25",
            summary: "UI improvements, new settings, and minor bug fixes for a smoother experience.",
            details: `
                <ul>
                    <li><b>UI:</b> Added quick chat wheel and customizable HUD.</li>
                    <li><b>Settings:</b> New colorblind modes and audio sliders.</li>
                    <li><b>Bug Fixes:</b> Fixed leaderboard display issue, improved friend invite reliability.</li>
                </ul>
            `
        }
    ];

    function renderPatches() {
        const list = document.getElementById('patch-list');
        list.innerHTML = '';
        patches.forEach((patch, idx) => {
            const li = document.createElement('li');
            li.className = 'patch-item';
            li.innerHTML = `
                <div class="patch-title">${patch.title}</div>
                <div class="patch-meta">Release: ${patch.date}</div>
                <div class="patch-summary">${patch.summary}</div>
                <button class="show-details-btn" data-idx="${idx}">Show Details</button>
                <div class="patch-details" id="patch-details-${idx}">
                    ${patch.details}
                </div>
            `;
            list.appendChild(li);
        });

        // Toggle details
        document.querySelectorAll('.show-details-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const idx = this.getAttribute('data-idx');
                const details = document.getElementById('patch-details-' + idx);
                if (details.style.display === 'block') {
                    details.style.display = 'none';
                    this.textContent = 'Show Details';
                } else {
                    details.style.display = 'block';
                    this.textContent = 'Hide Details';
                }
            });
        });
    }

    document.addEventListener('DOMContentLoaded', renderPatches);
    </script>
</body>
</html>