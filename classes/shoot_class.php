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

class shoot_class extends db_connection
{
	//--INSERT--//
	public function add_shoot($shoot_name,$shoot_price,$shoot_label,$shoot_key){

		// Write query
		$sql = "INSERT INTO `shoots`(`shoot_name`,`shoot_price`,`shoot_label`,`shoot_key`) VALUES ('$shoot_name','$shoot_price','$shoot_label','$shoot_key')";
		// Return  
		return $this -> db_query($sql);

	}

	//--SELECTAll--//

	public function select_all_shoots(){
        $sql = "SELECT * FROM `shoots`";
		// Return
		return $this->db_fetch_all($sql);
		
	
	} 

	//--SELECTONE--//
	public function selectone_shoot($shoot_id){

		// Write query
		$sql =  "SELECT * FROM `shoots` WHERE `shoot_id`='$shoot_id'";
		// Return  
		return $this->db_fetch_one($sql);
	}

	//--UPDATE--//

	public function update_shoot($shoot_id,$shoot_name,$shoot_price,$shoot_label,$shoot_key){

		// Write query
		$sql = "UPDATE `shoots` SET `shoot_name`='$shoot_name',`shoot_price`='$shoot_price',`shoot_label`='$shoot_label',`shoot_key`='$shoot_key' WHERE `shoot_id`='$shoot_id'";
		// Return  
		return $this -> db_query($sql);
	}

	
	//--DELETE--//

	public function delete_shoot($shoot_id){

		// Write query
		$sql =  "DELETE FROM `shoots` WHERE `shoot_id` = '$shoot_id'";
		// Return  
		return $this->db_query($sql);
	}



	

}

?>