<?php 
    function generateRngPassword($length){
        if($length%2 === 0) return bin2hex(random_bytes($length/2));
        
        else return substr(bin2hex(random_bytes($length/2 + 0.5)) , 1);
    };
?>