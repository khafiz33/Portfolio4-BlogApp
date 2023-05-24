<?php
require 'config/constants.php';
$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Google font (Montserrat) -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
	<!-- Iconscout cdn -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
	<!-- Custom stylesheet -->
	<link rel="stylesheet" href="<?= ROOT_URL ?>css/main.css" />
	<title>PHP & MySQL Blog Application with Admin Panel</title>
</head>

<body>
	<section class="form__section">
		<div class="container form__section-container">
			<h2>Sign In</h2>
			<?php if (isset($_SESSION['signup-success'])) : ?>
				<div class="alert__message success">
					<p>
						<?= $_SESSION['signup-success'];
						unset($_SESSION['signup-success']);
						?>
					</p>
				</div>
			<?php elseif(isset($_SESSION['signin'])) : ?>
				<div class="alert__message error">
					<p>
						<?= $_SESSION['signin'];
						unset($_SESSION['signin']);
						?>
					</p>
				</div>
			<?php endif ?>
			<form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
				<input type="text" name="username_email" value="<?= $username_email ?>" placeholder="UserName or Email" />
				<input type="password" name="password" value="<?= $password ?>" placeholder="Password" />
				<button class="btn" name="submit" type="submit">Sign in</button>
				<small>Don't have account? <a href="signup.php">Sign Up</a></small>
			</form>
		</div>
	</section>
</body>

</html>