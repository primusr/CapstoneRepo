<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CapstoneRepo</title>

</head>
<body>

<div id="container">
	<h1>Login</h1>

	<div id="body">
		<?php
			echo form_open();
			echo form_close();
			echo "<p>Email:";
			echo "<p>";
			echo form_input('email');
			echo "</p>";
			echo "<p>Password:";
			echo "<p>";
			echo form_input('password');
			echo "</p>";

			echo "<p>";
			echo form_submit('login_submit', 'Login');
			echo "</p>";
		?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>