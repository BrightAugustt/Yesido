<?php
	include ("../controllers/wedding_controller.php");
    
    $product_brand;
		//This file gets the search data and pass it in the search_product controller
	if(isset($_POST['submit'])){
	$product_brand = $_POST['search'];
			
			$product_brand_search=search($product_brand);

			header('Location: ../view/product_search_results.php?product_id='.$product_brand);
		}
?>