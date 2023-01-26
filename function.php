<?php 
function generateRngPassword($length){
    return bin2hex(random_bytes($length));
}
?>