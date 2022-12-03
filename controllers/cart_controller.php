<?php
include("../classes/cart_class.php");

// sanitize data
function addcart_ctr($p_id,$ip_add,$c_id,$qty){

    // Create an instance of the cart class. 
    $addcart= new cart_class();

     return $addcart->add_cart($p_id,$ip_add,$c_id,$qty);

}

function selectallcart_ctr(){

    // Create an instance of the cart class. 
    $selectcart= new cart_class();

     return $selectcart->selectall_cart();

}

function selectonecart_ctr($p_id){

    // Create an instance of the cart class. 
    $selectone= new cart_class();

     return $selectone->selectone_cart($p_id);

}

function deletecart_ctr($p_id,$c_id){

    // Create an instance of the cart class. 
    $selectone= new cart_class();

     return $selectone->delete_cart($p_id,$c_id);

}

function increasecart_ctr($p_id,$c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->increase_cart($p_id,$c_id);

}

function decreasecart_ctr($p_id,$c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->decrease_cart($p_id,$c_id);

}

function getuser_cart_ctr($c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->getuser_cart($c_id);

}

function selectuser_ctr($c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->getuser_details($c_id);

}

function deleteuser__from_cart_ctr($c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->delteuser_from_cart($c_id);

}

function updatecart_qty_ctr($p_id,$c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->updatecart_quantity($p_id,$c_id);

}

function count_cart_ctr($c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->countcart_quantity($c_id);

}

function select_already_existing_carts_ctr($p_id,$c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->select_already_existing_carts($p_id,$c_id);

}

function get_from_cart_ctr($a){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->getfrom_cart($a);

}

function insert_orders_ctr($customer_id,$invoice_no, $order_date){
    $add = new cart_class();
    return $add->insert_orders($customer_id,$invoice_no, $order_date);
}

function insert_payment_ctr($amt,$customer_id,$order_id, $payment_date){
    $add = new cart_class();
    return $add->insert_payment($amt,$customer_id,$order_id, $payment_date);
}

function get_order_id_ctr(){
    $add = new cart_class();
    return $add->get_order_id();
}

function get_order_date_ctr(){
    $add = new cart_class();
    return $add->get_order_date();
}

function insert_orderdetails_ctr($order_id,$cart_id,$qty){
    $add = new cart_class();
    return $add->insert_orderdetails($order_id,$cart_id,$qty);
}

function delete_after_pay_ctr($cid){
    $add = new cart_class();
    return $add->delete_after_pay_cart($cid);
}

function get_cart_details_ctr($c_id){
    $add = new cart_class();
    return $add->get_cart_details($c_id);
}


function total_cart_price_ctr($a){
    $get_total = new cart_class();
    return $get_total->total_cart_price($a);
}






?>