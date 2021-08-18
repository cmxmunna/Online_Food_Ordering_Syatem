<?php 
    include "header.php";
    require_once ('../model/model.php');

	session_start();
	$username ="";
	$successfulMessage = $errorMessage = "";
	if(isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];
    } 
    else
    {
        header("location: ../view/login-form.php");
    }
    $id= $_GET['food_id'];
    $connection = new db();
    $conn=$connection->OpenCon();    
    $userQuery=$connection->viewFoodProfile($conn,"foodlist",$id);

    if($userQuery->num_rows > 0)
    {
        while($row=$userQuery->fetch_assoc())
        {
            $foodname = $row['foodname'];
            $category = $row['category'];
            $description = $row['description'];
            $price = $row['price'];
            $image = $row['image'];
        }
    }

    if(isset($_POST['submit']))
    {
        $food_id = $_POST['food_id'];
        $update_foodname = $_POST['foodname'];
        $update_category = $_POST['category'];
        $update_description = $_POST['description'];
        $update_price = $_POST['price'];

        $userQuery2=$connection->UpdateFoodProfile($conn,"foodlist",$update_foodname, $update_category, $update_description, $update_price, $food_id);
			$flag=1;
			if($flag==1)
			{
                header('location: ../view/View-Menu.php');
				$successfulMessage = "Food Data Updated | Refresh this page to see Updated Data <button onload='Reload()'>Reload</button>"; 
			}
			else
			{ 
				$errorMessage = "error occurred while updating"; 
			}
			$conn->close();
    }
?>