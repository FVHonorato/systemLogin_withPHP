<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome The System</h1>
    <div>
        <?php
            session_start();
            if(isset($_SESSION["usuario"])){
                echo("welcome ".$_SESSION["usuario"]);
        ?>
                <a href="/logout.php">logout</a>
        <?php
            }
        ?>

    </div>
    <footer>
        <p>&copy;FVHonorato</p>
    </footer>
</body>
</html>