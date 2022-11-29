<?php
include("../controllers/wedding_controller.php");
include("../functions/image_upload.php");

// Collecting Form Data
if(isset($_POST["addwedding"])){
    $wedding_name=$_POST["wedding_name"];
    $wedding_price=$_POST["wedding_price"];
    $wedding_label=$_POST["wedding_label"];
    $wedding_img=$_POST["wedding_img"];
    $wedding_key=$_POST["wedding_key"];
// wedding img
    $img_name = $_FILES['wedding_img']["name"];
    $img_size = $_FILES['wedding_img']['size'];
    $tmp_name =$_FILES['wedding_img']['tmp_name'];

    $folder=file_Upload("images","wedding",$tmp_name,$img_name);


    // Controller
    $result=addWedding_ctr($wedding_name,$wedding_price,$wedding_label,$wedding_img,$wedding_key);
    if($result==true){
        header('Location:../Admin/view_wedding.php');
    }
}










?>