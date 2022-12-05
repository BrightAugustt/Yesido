<?php
//connect to the user account class
include("../classes/wedding_class.php");

//sanitize data
//--INSERT--//
function addWedding_ctr($wedding_name,$wedding_price,$wedding_label,$wedding_img,$wedding_key){

    // Create an instance of the class
    $add_customer = new wedding_class();

     return $add_customer->add_wedding($wedding_name,$wedding_price,$wedding_label,$wedding_img,$wedding_key);

}
//--update--//
function updateWedding_ctr($wedding_id,$wedding_name,$wedding_price,$wedding_label,$wedding_img,$wedding_key){

    // Create an instance of the class
    $verify_customer = new wedding_class();

     return $verify_customer->update_wedding($wedding_id,$wedding_name,$wedding_price,$wedding_label,$wedding_img,$wedding_key);

}

function selectall_wedding_ctr(){

    // Create an instance of the product class. 
    $selectall_brand = new wedding_class();

     return $selectall_brand->select_all_wedding();

}

function selectonewedding_ctr($wedding_id){

    // Create an instance of the product class. 
    $selectone= new wedding_class();

     return $selectone->selectone_wedding($wedding_id);

}

function deletewedding_ctr($wedding_id){

    // Create an instance of the product class. 
    $selectone= new wedding_class();

    return $selectone->delete_wedding($wedding_id);

}

function searchwedding_ctr($wedding_key){

    // Create an instance of the product class. 
    $selectone= new wedding_class();

    return $selectone->search_wedding($wedding_key);

}
function updatewedding_img_ctr($wedding_id,$wedding_img){

    // Create an instance of the product class. 
    $selectone= new wedding_class();

    return $selectone->update_wedding_img($wedding_id,$wedding_img);

}

?>