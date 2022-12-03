<?php
include("../controllers/shoot_controller.php");

// Collecting Form Data
if(isset($_POST["addshoots"])){
    $allowTypes = array('jpg','png','jpeg','gif');
    $shoot_name=$_POST["shoot_name"];
    $shoot_price=$_POST["shoot_price"];
    $shoot_label =$_POST["shoot_label"];
    $shoot_key=$_POST["shoot_key"];


    $output_dir = "../images/images/shoots";
    $RandomNum = time();
    $ImageName = str_replace(' ','-',strtolower($_FILES['shoot_img']['name'][0]));
    $ImageType = $_FILES['shoot_img']['type'][0];
    $ImageExt = substr($ImageName,strrpos($ImageName,'.'));
    $ImageExt = str_replace('.','',$ImageExt);
    $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;

    move_uploaded_file($_FILES["shoot_img"]["tmp_name"][0],$output_dir."/".$NewImageName);
    if(addShoot_ctr($shoot_name,$shoot_price,$shoot_label,$shoot_key,$NewImageName)==TRUE){
        echo"<script>alert('Wedding submitted successfully')</script>";
        header('Location:../Admin/view_products.php');
    }else{
        echo "<script>alert('Wedding not submitted successfully')</script>";
    }
}else{
echo "Something went wrong";
}










?>









