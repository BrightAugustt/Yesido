<?php
include("../controllers/wedding_controller.php");

// Collecting Form Data
if(isset($_POST["updatewedding"])){
    $wedding_id = $_POST["wedding_id"];
    $wedding_name = $_POST["wedding_name"];
    $wedding_price = $_POST["wedding_price"];
    $wedding_label = $_POST["wedding_label"];
    $wedding_img = $_POST["wedding_img"];
    $wedding_key = $_POST["wedding_key"];

    // Shoot Controller
    $result = updateWedding_ctr($wedding_id,$wedding_name,$wedding_price,$wedding_label,$wedding_img,$wedding_key);

    if($result==true){
        header('Location:../Admin/view_weddings.php');
    }else{
        echo "Couldn't update changes";
    }
}else{
    echo "SOmething went wrong";
}




?>