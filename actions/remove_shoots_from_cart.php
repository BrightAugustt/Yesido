<?php
include("../controllers/cart_controller.php");
session_start();

if (isset($_POST['deleteCart'])){
    $p_id = $_POST['p_id'];

    deleteshoot_ctr($p_id,$_SESSION['customer_id']);
    
    header('Location: ../view/cart.php');
}
?>