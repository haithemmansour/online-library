<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<style type="text/css">
		
body{
	background-image: url(book.jpg );
	height: 100%;
	margin: 0;
	background-repeat: no-repeat;
	background-size: 1600px 850px  ;
	
}


	</style>
	<div class="header">
		<h2>User Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="#" style="color: red;">+ add file</a>&nbsp;&nbsp;&nbsp;
						<a href="index.php?logout='1'" style="color: red;">logout</a><br>
						
					</small>

				<?php endif ?>
				<br><br>
				<p>document1.pdf&nbsp;&nbsp;</p>
				<p>document2.pdf&nbsp;&nbsp;</p>
			</div>
		</div>
	</div>
</body>
</html>