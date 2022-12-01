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

class wedding_class extends db_connection
{
	//--INSERT--//
	public function add_wedding($wedding_name,$wedding_price,$wedding_label,$wedding_img,$wedding_key){

		// Write query
		$sql = "INSERT INTO `wedding`( `wedding_name`, `wedding_price`, `wedding_label`, `wedding_img`, `wedding_key`) VALUES ('$wedding_name','$wedding_price','$wedding_label','$wedding_img','$wedding_key')";
		// Return  
		return $this -> db_query($sql);

	}

	//--SELECTAll--//

	public function select_all_wedding(){
        $sql = "SELECT * FROM `wedding`";
		// Return
		return $this->db_fetch_all($sql);
		
	
	} 

	//--SELECTONE--//
	public function selectone_wedding($wedding_id){

		// Write query
		$sql =  "SELECT * FROM `wedding` WHERE `wedding_id`='$wedding_id'";
		// Return  
		return $this->db_fetch_all($sql);
	}

	//--UPDATE--//

	public function update_wedding($wedding_id,$wedding_name,$wedding_price,$wedding_label,$wedding_img,$wedding_key){

		// Write query
		$sql = "UPDATE `wedding` SET `wedding_name`='$wedding_name',`wedding_price`='$wedding_price',`wedding_label`='$wedding_label',`wedding_img`='$wedding_img',`wedding_key`='$wedding_key' WHERE `wedding_id` = '$wedding_id'";
		// Return  
		return $this -> db_query($sql);
	}

	
	//--DELETE--//

	public function delete_wedding($wedding_id){

		// Write query
		$sql =  "DELETE FROM `wedding` WHERE `wedding_id` = '$wedding_id'";
		// Return  
		return $this->db_query($sql);
	}



	

}

?>