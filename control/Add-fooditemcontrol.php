<?php 
    include "header.php";
	require_once ('../model/model.php');

	session_start();
	$id = "";
	$user ="";
    $type ="";
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
    }
	if(isset($_SESSION['name']))
    {
        $user = $_SESSION['name'];
    } 
    if(isset($_SESSION['type']))
    {
        $type = $_SESSION['type'];
    }
    else
    {
        header("location: ../view/login-form.php");
    }
	
	$foodname = $category = $description = $price = $image = "";
	$foodnameErr = $categoryErr = $descriptionErr = $priceErr = $imageErr = "";
	$successfulMessage = '';
	$errorMessage = '';

	if(isset($_POST['submit']))
	{
		$foodname = $_POST['foodname'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$price = $_POST['price'];
	

		if (empty($_POST['foodname']))
		{
			$foodnameErr = "please insert Food name";
		}
		if (empty($_POST['category']))
		{
			$categoryErr = "please insert category";
		}
		if (empty($_POST['description']))
		{
			$descriptionErr = "please fill up description";
		}
		if (empty($_POST['price']))
		{
			$priceErr = "please insert price";
		}
		
		$target_dir = "../resources/food_img/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
						
		if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
		{
			$image = $_FILES["image"]["name"];
		} 
		else 
		{
			$errorMessage = "error occurred while Inserting New Record";
		}	

		if (!empty($_POST['foodname']) || !empty($_POST['category']) || !empty($_POST['image']) || !empty($_POST['price']) || !empty($_POST['description']))
		{
			$connection = new db();
			$conn=$connection->OpenCon();    
			$userQuery=$connection->InsertItem($conn,"foodlist",$foodname ,$category , $description ,$price ,$image); 
					
			$flag=1;
			if($flag==1)
			{
				$successfulMessage = "New Record Inserted by $user"; 
			}
			else
			{ 
				$errorMessage = "error occurred while Inserting New Record";
			}	
			$conn->close();
		}
	}
				
										
	
?>
