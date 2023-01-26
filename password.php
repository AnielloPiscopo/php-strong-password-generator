<?php
    session_start();
    include_once __DIR__ . '/function.php';
    $userLength = $_GET['user-length'];
    $_SESSION['rngPassword'] = generateRngPassword(intval($userLength , 10));
    header('Location: ./index.php');
?>