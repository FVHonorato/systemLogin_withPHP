<?php
    session_start();
    if(isset($_SESSION["usuario"])){
        header("Location: system.php",true,301);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Combat</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome To The Pet Combat</h1>
    <div>
        
        <h2>Login</h2>
        <form action="core_login.php" method="post">
            <p>
                <input type="text" name="email" class="credentials" placeholder="Email">
            </p>
            <p>
                <input type="password" name="senha" class="credentials" placeholder="Password">
            </p>
            <p>
                <button type="submit" id="login">Login</button>
            </p>
            <?php

                if(isset($_GET["erro"])){
            ?>
                        <script>alert("Login ou Senha Incorreto(s)")//javascript for alert</script>
            <?php
                }

            ?>
    </div>


    <footer>
        <p>&copy;FVHonorato</p>
    </footer>
</body>
</html>