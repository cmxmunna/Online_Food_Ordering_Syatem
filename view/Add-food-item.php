<?php 
	include('../control/Add-fooditemcontrol.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Food Item</title>
	<link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="header"><h2>Online Food Ordering System</h2></strong></div>
	<p><a href="../view/home-page.php" class="link-hvr">← Back to Home</a><p>
	<p>Back to <a href="View-Menu.php" class="link-hvr">View-Menu</a></p>

    <div class="main-body">
	<h1>Add Food Item</h1>

	<form action="" method="POST" onsubmit="return AddFoodValidation()" enctype="multipart/form-data">  
		<table>
			<tr>
				<td><label for="foodname">Food Name</label></td>
				<td> : <input type="text" name="foodname" id="foodname">
				<span id="foodnameErr" class="red">* </span></td>
			</tr>
			<tr>
				<td><label for="category">Category</label></td>
				<td> : <input type="text" name="category" id="category">
				<span id="categoryErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label for="description">Description &nbsp;&nbsp;</label></td>
				<td> : <input type="text" name="description" id="description">
				<span id="descriptionErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label for="price"></label>Price</td>
				<td> : <input type="text" name="price" id="price">
				<span id="priceErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label for="image">Food Image</label></td>
				<td> : <input type="file" name="image" id="image">
				<span id="imageErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="ADD"></td>
			</tr>
		</table>
		
    </form>

	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>

	<br>

	</div>
 	<?php include 'footer.php' ; ?>
    <script src="../javascript/ofos.js?v=<?php echo time(); ?>"></script>

</body>
</html>