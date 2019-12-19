<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <?php
		include 'php/user_logged.php';
		if($_SESSION['$user_logged']) {
			echo '<title>Sign Out</title>';
		}
		else {
			echo '<title>Register Page</title>';
		}
		?>
  </head>
  <body>
    <div id="container">
      <?php
        include 'navbar.php';
		if($_SESSION['$user_logged']) {
			include 'logout.php';
		}
		else {
			echo '<div id="container">';
			include 'form_register.html';
			echo '</div>';
			include 'footer.php';
		}
      ?>
    </div>
  </body>
</html>