<?php 
	include('../control/sessioncontrol.php');
	include('../control/update-food-itemControl.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Food Item</title>
	<link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="header"><h2>Online Food Ordering System</h2></strong></div>
	<p><a href="../view/home-page.php" class="link-hvr">← Back to Home</a><p>
	<p><a href="../view/View-Menu.php" class="link-hvr">← Back to Food Menu</a><p>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<table align="center">
			<tr>
				<td colspan="2"><h1>UPDATE FOOD ITEM</h1></td>
			</tr>
			<tr>
				<td><label>Food ID </label></td>
				<td><span class="green f20">: <?php echo $id ?></span>
				<input type="hidden" name="food_id" value="<?php echo $id ?>"> </td>
				<td rowspan="5"><img src="../resources/food_img/<?php echo $image ?>" alt="Food" width="150px"></td>
			</tr>
			<tr>
				<td><label>Food Name </label></td>
				<td>: <input type="text" name="foodname" id="foodname" value="<?php echo $foodname ?>">
					<span id="foodnameErr"class="red">*</span></td>
			</tr>
			<tr>
				<td><label>Category </label></td>
				<td>: <input type="text" name="category" id="category" value="<?php echo $category ?>">
					<span id="categoryErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label>Description </label></td>
				<td>: <input type="text" name="description" id="description" value="<?php echo $description ?>">
					<span id="descriptionErr" class="red">*</span></td>
			</tr>
			<tr>
				<td><label>Price </label></td>
				<td>: <input type="text" name="price" id="price" value="<?php echo $price ?>">
					<span id="priceErr" class="red">*</span></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td><input type="submit" name="submit" value="Update" class="btn"></td>
			</tr>
			<tr>
				<td colspan="2"><p class="green"><?php echo $successfulMessage; ?></p></td>
			</tr>
			<tr>
				<td colspan="2"><p class="red"><?php echo $errorMessage; ?></p></td>
			</tr>
		</table>
	</form>

 	<?php include 'footer.php' ; ?>
    <script src="../javascript/ofos.js?v=<?php echo time(); ?>"></script>
</body>
</html>