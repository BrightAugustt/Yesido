<?php
function file_Upload($dir,$sdir,$temp,$image){
    $folder= "../$dir/$sdir/".$image;
    if(!file_exists("../$dir/$sdir/")){
        @mkdir("../$dir/$sdir/",0777,true);

        echo("Folder_created");
        move_uploaded_file($temp,$folder);
        return $folder;

    }else{
        move_uploaded_file($temp,$folder);
        return $folder;
    }
    return false;

    
}

?>