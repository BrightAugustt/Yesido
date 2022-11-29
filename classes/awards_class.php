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
    public function add_product($award_cat, $award_brand,$award_title,$award_price,$award_desc,$award_image,$award_keywords){

		// Write query
		$sql = "INSERT INTO `awards`( `award_cat`, `award_brand`, `award_title`, `award_price`, `award_desc`, `award_image`, `award_keywords`) VALUES ('$award_cat','$award_brand','$award_title','$award_price','$award_desc','$award_image','$award_keywords')";
		// Return  
		return $this -> db_query($sql);
	}

	//--SELECT--//



	//--UPDATE--//



	//--DELETE--//
	

}

?>