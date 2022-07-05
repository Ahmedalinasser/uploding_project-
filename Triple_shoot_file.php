<?php
$new_var = "new";
$old_var = "old";


function check( $value){
    $new_var = "new";
    if($new_var == $value){
        return "<p>"."This is the new version. ". "</p>";
    }else{
        return "<p>"."this is the old version. "."</p>";
    }
}

check($new_var);

// var_dump();
// we have modified the function to be useable 

?>