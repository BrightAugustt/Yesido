<?php
include("../controllers/wedding_controller.php");

if(isset($_POST["delete"])){
    $wedding_id = $_POST["wedding_id"];

    // controller
    $result=deletewedding_ctr($wedding_id);
    
    if($result==true){
        header('Location:../Admin/view_weddings.php');
    }else{
        echo"Couldn't delete";
    }
}else{
    echo "Something went wrong";
}




?>