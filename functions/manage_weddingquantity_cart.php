
<?php
include("../controllers/cart_controller.php");
session_start();


if (isset($_POST['addTocart'])){
    $p_id = $_POST['p_id'];
	$state = $_POST['state'];

	if ($state== 'addtocart'){
        decrease_from_cart($p_id,$_SESSION['c_id'],$_SERVER['REMOTE_ADDR']);

	}else{
        increase_cart_qty($p_id,$_SESSION['c_id'],$_SERVER['REMOTE_ADDR']);
	}
   header('Location: ../view/cart.php');
   
}
?>