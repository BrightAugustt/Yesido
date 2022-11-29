<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class awards_class extends db_connection
{
	//--INSERT--//
    public function add_product($product_cat, $product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords){

		// Write query
		$sql = "INSERT INTO `products`( `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
		// Return  
		return $this -> db_query($sql);
	}

	//--SELECT--//



	//--UPDATE--//



	//--DELETE--//
	

}

?>