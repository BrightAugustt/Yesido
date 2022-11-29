<?php
include("../controllers/wedding_controller.php");

// Collecting Form Data
if(isset($_POST["addwedding"])){
    $wedding_name=$_POST["wedding_name"];
    $wedding_price=$_POST["wedding_price"];
    $wedding_label=$_POST["wedding_label"];
    $wedding_key=$_POST["wedding_key"];
// wedding img




    // Controller
    $result=addWedding_ctr($wedding_name,$wedding_price,$wedding_label,$wedding_img,$wedding_key);
    if($result==true){
        header('Location:../Admin/view_wedding.php');
    }
}










?>