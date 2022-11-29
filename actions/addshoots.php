<?php
include("../controllers/shoot_controller.php");

// Collecting Form Data
if(isset($_POST["addshoots"])){
    $shoot_name=$_POST["shoot_name"];
    $shoot_price=$_POST["shoot_price"];
    $shoot_label =$_POST["shoot_label"];
    $shoot_key=$_POST["shoot_key"];



// Controller
    $result=addShoot_ctr($shoot_name,$shoot_price,$shoot_label,$shoot_key);

    if($result==true){
        header('Location:../Admin/view_shoots.php');
    }
}









?>









