<!DOCTYPE html>
<html lang="ita">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password Generator</title>
</head>

<body>
    <main>
        <form action="./password.php" method="GET">
            <input type="text" placeholder="Inserisci la lunghezza della password" name="user-length">
        </form>

        <p>
            <?php
                session_start();
                
                if(isset($_SESSION['rngPassword'])){
                    echo $_SESSION['rngPassword']; 
                }
            ?>
        </p>

    </main>
</body>

</html>