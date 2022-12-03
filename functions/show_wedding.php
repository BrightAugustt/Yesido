<?php
require("../controllers/wedding_controller.php");

function showweddings(){
    $result=selectall_wedding_ctr();
    $i=0;
    if($result!=false){
        while($i < count($result)){
        ?>
        
        <?php
        }
    }
}
?>








?>