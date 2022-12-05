<?php
	include ("../controllers/wedding_controller.php");
    
    $wedding_key;
		//This file gets the search data and pass it in the search_product controller
	if(isset($_POST['search'])){
	$wedding_key = $_POST['search'];
			
			$wedding_key=searchwedding_ctr($wedding_key);

			header('Location: ../view/wedding_search_results.php?wedding_id='.$wedding_key);
		}
?>