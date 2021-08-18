<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Landing Page</title>
	<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

</head>
<body>
	<div class="home-header">
		<strong>ANANNYA COOKING HOUSE</strong>
	</div>
	<br><br><br><br>
	<table align="center">
		<tr>
			<td colspan="2"><span class="welcome"><strong>Welcome To Our Shop</strong></span></td>
		</tr>
		<tr><td><br></td></tr>
		<tr>
			<td colspan="2"><span class="text_cntr"><h1>HOME</h1></span></td>
		</tr>
		<tr><td><br></td></tr>
		<tr>
			<td><a href="view/home-page.php" class="btn login-btn">
					<?php
						if(isset($_SESSION['username']))
						{
							echo $_SESSION['username'];
						}
						else
						{
							echo "Login";
						}
					?>
				</a></td>
			<td><a href="view/registration-form.php" class="btn"> Registration</a></td>
		</tr>
	</table>
	<table align="center">
		<tr><td><br><br></td></tr>
		<tr>
			<td><img src="resources/images/1.jpg" alt="Food" width="280px"></td>
			<td><img src="resources/images/2.jpg" alt="Food" width="280px"></td>
			<td><img src="resources/images/3.jpg" alt="Food" width="280px"></td>
			<td><img src="resources/images/4.jpg" alt="Food" width="280px"></td>
		</tr>
	</table>
 <?php include 'view/footer.php' ; ?>

</body>
</html>