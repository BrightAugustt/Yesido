<?php
include("../controllers/wedding_controller.php");
// include("../functions/image_upload.php");

// Collecting Form Data
if(isset($_POST["addwedding"])){
    $allowTypes = array('jpg','png','jpeg','gif');
    $wedding_name=$_POST["wedding_name"];
    $wedding_price=$_POST["wedding_price"];
    $wedding_label=$_POST["wedding_label"];
    $wedding_key=$_POST["wedding_key"];

    // echo $wedding_key;
    // echo $wedding_name;
    // echo $wedding_price;
    // echo $wedding_label;


    // image upload 
    $output_dir = "../images/images/wedding/";
    $RandomNum = time();
    $ImageName = str_replace(' ','-',strtolower($_FILES['wedding_img']['name'][0]));
    $ImageType = $_FILES['wedding_img']['type'][0];
    $ImageExt = substr($ImageName,strrpos($ImageName,'.'));
    $ImageExt = str_replace('.','',$ImageExt);
    $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;

    move_uploaded_file($_FILES["wedding_img"]["tmp_name"][0],$output_dir."/".$NewImageName);
        if(addWedding_ctr($wedding_name,$wedding_price,$wedding_label,$NewImageName,$wedding_key)==TRUE){
            echo"<script>alert('Wedding submitted successfully')</script>";
            header('Location:../Admin/view_weddings.php');
        }else{
            echo "<script>alert('Wedding not submitted successfully')</script>";
        }
}else{
    echo "Something went wrong";
}










?>