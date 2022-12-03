<?php
include("../classes/cart_class.php");

// sanitize data



function addweddingcart_ctr($p_id,$ip_add,$c_id,$qty){

    // Create an instance of the cart class. 
    $addcart= new cart_class();

     return $addcart->addwedding_cart($p_id,$ip_add,$c_id,$qty);

}

function selectallweddingcart_ctr(){

    // Create an instance of the cart class. 
    $selectcart= new cart_class();

     return $selectcart->selectallwedding_cart();

}

function selectoneweddingcart_ctr($c_id){

    // Create an instance of the cart class. 
    $selectone= new cart_class();

     return $selectone->selectonewedding_cart($c_id);

}

function deleteweddingcart_ctr($p_id,$c_id){

    // Create an instance of the cart class. 
    $selectone= new cart_class();

     return $selectone->deletewedding_cart($p_id,$c_id);

}

function increaseweddingcart_ctr($p_id,$c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->increasewedding_cart($p_id,$c_id);

}

function decreaseweddingcart_ctr($p_id,$c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->decreasewedding_cart($p_id,$c_id);

}

function getuser_weddingcart_ctr($c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->getuserwedding_cart($c_id);

}

function selectuserwedding_ctr($c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->getuserwedding_details($c_id);

}

function deleteuser__from_weddingcart_ctr($c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->delteuserwedding_from_cart($c_id);

}

function updatecartwedding_qty_ctr($p_id,$c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->updatecartwedding_quantity($p_id,$c_id);

}

function count_weddingcart_ctr($c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->countcartwedding_quantity($c_id);

}

function select_already_existing_weddingcarts_ctr($p_id,$c_id){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->select_already_existing_weddingproducts($p_id,$c_id);

}

function get_from_weddingcart_ctr($a){

    // Create an instance of the cart class. 
    $increasecart= new cart_class();

     return $increasecart->getfrom_weddingcart($a);

}

function insert_weddingorders_ctr($customer_id,$invoice_no, $order_date){
    $add = new cart_class();
    return $add->insert_weddingorders($customer_id,$invoice_no, $order_date);
}

function insert_weddingpayment_ctr($amt,$customer_id,$order_id, $payment_date){
    $add = new cart_class();
    return $add->insert_weddingpayment($amt,$customer_id,$order_id, $payment_date);
}

function get_weddingorder_id_ctr(){
    $add = new cart_class();
    return $add-> get_weddingorder_id();
}

function get_weddingorder_date_ctr(){
    $add = new cart_class();
    return $add->get_weddingorder_date();
}

function insert_weddingorderdetails_ctr($order_id,$wedding_id,$qty){
    $add = new cart_class();
    return $add->insert_weddingorderdetails($order_id,$wedding_id,$qty);
}

function delete_after_weddingpay_ctr($cid){
    $add = new cart_class();
    return $add->delete_after_pay_weddingcart($cid);
}

function get_cart_weddingdetails_ctr($c_id){
    $add = new cart_class();
    return $add->get_cart_weddingdetails($c_id);
}


function total_weddingcart_price_ctr($a){
    $get_total = new cart_class();
    return $get_total->total_weddingcart_price($a);
}






?>