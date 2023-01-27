<?php
    session_start();
    include_once __DIR__ . '/function.php';

    
    if(intval($_GET['user-length']) > 0 && is_numeric($_GET['user-length'])){
        $userLength = $_GET['user-length'];
        $_SESSION['rngPassword'] = generateRngPassword(intval($userLength , 10));
    }

    else{
        session_unset();
        session_destroy();
    }
    
    header('Location: ./index.php');
?>