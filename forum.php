
<?php
session_start();

// --- DATABASE CONNECTION ---
$db_host = 'localhost:3307';
$db_user = 'root';
$db_pass = '';
$db_name = 'game_users'; // <-- CHANGE THIS TO YOUR DB NAME

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// --- AJAX HANDLER FOR COMMENTS ---
if (isset($_POST['ajax']) && $_POST['ajax'] === 'add_comment') {
    $thread_title = $_POST['thread_title'];
    $comment = trim($_POST['comment']);
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
    $email = null;

    // If logged in, fetch email from DB (not used in display)
    if ($username) {
        $stmt = $conn->prepare("SELECT email FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->fetch();
        $stmt->close();
    } else {
        $email = null;
    }

    if ($comment !== '') {
        $stmt = $conn->prepare("INSERT INTO forum_comments (thread_title, username, email, comment) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $thread_title, $username, $email, $comment);
        $stmt->execute();
        $stmt->close();
    }

    // Return updated comments for this thread as JSON
    $comments = [];
    $stmt = $conn->prepare("SELECT username, comment, created_at FROM forum_comments WHERE thread_title = ? ORDER BY created_at ASC");
    $stmt->bind_param("s", $thread_title);
    $stmt->execute();
    $stmt->bind_result($c_username, $c_comment, $c_created_at);
    while ($stmt->fetch()) {
        $comments[] = [
            'username' => $c_username,
            'comment' => $c_comment,
            'created_at' => $c_created_at
        ];
    }
    $stmt->close();
    header('Content-Type: application/json');
    echo json_encode($comments);
    exit;
}

// --- THREADS ---
$forumThreads = [
    [
        "title" => "Welcome to the EndGam Forum!",
        "author" => "Admin",
        "replies" => 12,
        "lastPost" => "2024-06-01 14:23"
    ],
    [
        "title" => "Share your best gaming moments",
        "author" => "GamerX",
        "replies" => 34,
        "lastPost" => "2024-06-02 09:10"
    ],
    [
        "title" => "Looking for a team",
        "author" => "SoloPlayer",
        "replies" => 8,
        "lastPost" => "2024-06-01 20:45"
    ],
    [
        "title" => "Patch 1.2.0 Discussion",
        "author" => "PatchNotes",
        "replies" => 21,
        "lastPost" => "2024-06-03 11:05"
    ],
    [
        "title" => "Off-topic: Favorite snacks?",
        "author" => "SnackMaster",
        "replies" => 15,
        "lastPost" => "2024-06-02 17:30"
    ]
];

// --- FETCH ALL COMMENTS ---
$all_comments = [];
$res = $conn->query("SELECT * FROM forum_comments ORDER BY created_at ASC");
while ($row = $res->fetch_assoc()) {
    $all_comments[] = $row;
}
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>AstoCoders - Gaming EX</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template - Forum">
	<meta name="keywords" content="endGam,gGaming, forum, html">
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
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/3.jpg">
		<div class="page-info">
			<h2>Forum</h2>
		</div>
	</section>
	<!-- Page top end-->

<!-- Forum Section -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-7">
                <div class="forum-table-wrap">
                    <table class="table table-dark table-striped forum-table">
                        <thead>
                            <tr>
                                <th scope="col">Thread</th>
                                <th scope="col">Author</th>
                                <th scope="col">Replies</th>
                                <th scope="col">Last Post</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($forumThreads as $idx => $thread): ?>
                            <tr>
                                <td>
                                    <a href="#" onclick="toggleComments(<?php echo $idx; ?>);return false;"><?php echo htmlspecialchars($thread['title']); ?></a>
                                    <button class="view-comments-btn" onclick="toggleComments(<?php echo $idx; ?>)">View Comments</button>
                                </td>
                                <td><?php echo htmlspecialchars($thread['author']); ?></td>
                                <td>
                                    <?php
                                    $reply_count = 0;
                                    foreach ($all_comments as $c) {
                                        if ($c['thread_title'] === $thread['title']) $reply_count++;
                                    }
                                    echo $reply_count;
                                    ?>
                                </td>
                                <td><?php echo htmlspecialchars($thread['lastPost']); ?></td>
                            </tr>
                            <tr class="comment-row" id="comments-row-<?php echo $idx; ?>" style="display:none;">
                                <td colspan="4">
                                    <strong>Comments:</strong>
                                    <ul class="comments-list" id="comments-list-<?php echo $idx; ?>">
                                        <?php
                                        $has_comments = false;
                                        foreach ($all_comments as $c):
                                            if ($c['thread_title'] === $thread['title']):
                                                $has_comments = true;
                                        ?>
                                            <li>
                                                <b><?php echo htmlspecialchars($c['username'] ?: 'Guest'); ?>:</b>
                                                <?php echo htmlspecialchars($c['comment']); ?>
                                                <span style="color:#aaa;font-size:11px;">[<?php echo $c['created_at']; ?>]</span>
                                            </li>
                                        <?php
                                            endif;
                                        endforeach;
                                        if (!$has_comments) echo "<li>No comments yet.</li>";
                                        ?>
                                    </ul>
                                    <!-- Comment form -->
                                    <form class="ajax-comment-form" data-thread="<?php echo htmlspecialchars($thread['title']); ?>" data-idx="<?php echo $idx; ?>" style="margin-top:10px;">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="comment" placeholder="Write a comment..." required>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit">Post</button>
                                            </div>
                                        </div>
                                        <div class="ajax-comment-error text-danger" style="margin-top:5px;display:none;"></div>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="text-right mt-3">
                        <a href="#" class="site-btn">Create New Thread</a>
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
										<img src="img/games/SOK1.jpg" style="height: 80px; width: 75px;" alt="#">
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
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Forum Section End -->

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
function toggleComments(idx) {
    var row = document.getElementById('comments-row-' + idx);
    if (row.style.display === 'none') {
        row.style.display = '';
    } else {
        row.style.display = 'none';
    }
}

// AJAX comment submission
$(function() {
    $('.ajax-comment-form').on('submit', function(e) {
        e.preventDefault();
        var $form = $(this);
        var thread_title = $form.data('thread');
        var idx = $form.data('idx');
        var comment = $form.find('input[name="comment"]').val().trim();
        var $error = $form.find('.ajax-comment-error');
        $error.hide();

        if (comment === '') {
            $error.text('Comment cannot be empty.').show();
            return;
        }

        $.post('forum.php', {
            ajax: 'add_comment',
            thread_title: thread_title,
            comment: comment
        }, function(data) {
            // Update the comments list
            var $ul = $('#comments-list-' + idx);
            $ul.empty();
            if (data.length === 0) {
                $ul.append('<li>No comments yet.</li>');
            } else {
                data.forEach(function(c) {
                    $ul.append('<li><b>' + (c.username ? $('<div>').text(c.username).html() : 'Guest') + ':</b> ' +
                        $('<div>').text(c.comment).html() +
                        ' <span style="color:#aaa;font-size:11px;">[' + c.created_at + ']</span></li>');
                });
            }
            $form[0].reset();
        }, 'json').fail(function() {
            $error.text('Failed to post comment. Please try again.').show();
        });
    });
});
	</script>
</body>
</html>
 {
		renderForumThreads(forumThreads);
	});
	</script>
</body>
</html>
 {
		renderForumThreads(forumThreads);
	});
	</script>
</body>
</html>
