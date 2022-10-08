<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    if(isset($_GET["erro"])){
        echo("<h3>!<h3>".$erro);
    ?>
    <?php
    }

    ?>
    <h1>Register</h1>
    <div class="credentials">
        <form action="core/core_register.php" method="post">
            <p><input type="text" placeholder="Name" class="credentials" name="name"></p>
            <p><input type="email" placeholder="Email" class="credentials" name="email"></p>
            <p><input type="password" placeholder="Password" class="credentials" name="password"></p>
            <p><input type="password" placeholder="Verify password" class="credentials" name="verify"></p>
            
            <button type="submit" class="login">Register</button>
            <a href="index.php">You have acount?</a>
        </form>
    </div>

    <footer>
        <p>&copy;FVHonorato</p>
    </footer>
</body>
</html>