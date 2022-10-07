<?php
    session_start();
    $erro = "";

    //case input empty
    if(!isset($_POST["email"]) or $_POST["email"]==""){
        $erro = "erro";
    }
    elseif(!isset($_POST["senha"]) or $_POST["senha"]==""){
        $erro = "erro";
    }
    else{

        $login = $_POST["email"];
        $senha = $_POST["senha"];
        if($login != "admin" || $senha != "1234"){
            $erro = "erro"; // erro password or email
        }
        else{
            $_SESSION["usuario"] = "administrador"; // login sucefuly
        }

    }

   
    if($erro!=""){ //case erro return erro to index.php
        header("Location: index.php?erro=$erro",true,301);
    }
    else{
        header("Location: system.php",true,301);
    }