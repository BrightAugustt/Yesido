<?php
include("../controllers/wedding_controller.php");

// Collecting Form Data
if(isset($_POST["updatewedding"])){
    $wedding_id = $_POST["wedding_id"];
    $wedding_name = $_POST["wedding_name"];
    $wedding_price = $_POST["wedding_price"];
    $wedding_label = $_POST["wedding_label"];
    $wedding_key = $_POST["wedding_key"];
    $img =$_POST['wedding_img'];


    $output_dir = "../images/wedding/";/* Path for file upload */
	$RandomNum   = time();
	$ImageName      = str_replace(' ','-',strtolower($_FILES['wedding_img']['name'][0]));
	$ImageType      = $_FILES['wedding_img']['type'][0];
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt=str_replace('.','',$ImageExt);
	$ImageName=preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
	$ret[$NewImageName]= $output_dir.$NewImageName;
    
    if(empty($ImageName)!=TRUE){
        unlink(("../images/wedding/".$img));
        move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName);
        if(updateWedding_ctr($wedding_id,$wedding_name,$wedding_price,$wedding_label,$wedding_img,$wedding_key)==TRUE){
            header('Location:../Admin/view_weddings.php');
        }else{
            echo "Failed to delete";
        }
    }else{
        if(updateWedding_ctr($wedding_id,$wedding_name,$wedding_price,$wedding_label,$wedding_img,$wedding_key)==TRUE){
            header('Location:../Admin/view_weddings.php');
        }else{
            echo "Failed to delete image";
        }
    }
}else{
    echo "Something went wrong";
}




?>