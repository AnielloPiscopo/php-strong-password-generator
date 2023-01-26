<!DOCTYPE html>
<html lang="ita">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password Generator</title>
</head>
<?php
include_once __DIR__ . '/function.php';
?>

<body>
    <main>
        <form action="./index.php" method="GET">
            <input type="text" placeholder="Inserisci la lunghezza della password" name="user-length">
        </form>

        <?php 
        $userLength = $_GET['user-length'];
        echo  "<p>";
        echo generateRngPassword(intval($userLength , 10));
        echo "</p>";
        ?>
    </main>
</body>

</html>