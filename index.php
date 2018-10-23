<?php include 'configs/init.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>My Class</title>
		<?php include 'views/view_template.php'; ?>
	</head>

	<body>
		<div class="container">

			<?php include 'views/auth/view_login.php'; ?>

		</div>
	</body>
</html>
<?php ob_end_flush() ?>