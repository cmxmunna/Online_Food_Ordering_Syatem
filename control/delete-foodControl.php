<?php
    require_once '../model/model.php';
        $food_id = $_GET['food_id'];

        $connection = new db();
        $conn=$connection->OpenCon();
        $userQuery=$connection->DeleteItem($conn,"foodlist",$food_id);
		$flag=1;
		if($flag==1)
		{
			header("location: ../view/View-Menu.php");
			$successfulMessage = "Delete Success"; 
		}
		else
		{ 
			$errorMessage = "error occurred while Deleting"; 
		}
		$conn->close();
?>