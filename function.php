<?php 
    function generateRngPassword($length){
        $length = ($length > 30) ? 30 : $length; 
        
        if($length%2 === 0) return bin2hex(random_bytes($length/2));
        
        else return substr(bin2hex(random_bytes($length/2 + 0.5)) , 1);
    };
?>