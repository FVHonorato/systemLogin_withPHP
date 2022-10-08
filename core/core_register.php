<?php
    session_start();

    $register = ["name","email","password","verify"]; // save in db

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $verify = $_POST["verify"];

    $erro="";

    if(!isset($name) or ($name=="")){
        $erro="Name Incorret or Empty";
      
    }
    elseif(!isset($email) or ($email=="")){
        $erro="Email Incorret or Empty";
        
    }
    elseif(!isset($password) or ($password=="")){
        $erro="Password Incorret or Empty";
        
    }
    elseif(!isset($verify) or ($verify=="")){
        $erro="Password Verify Incorret or Empty";
    }
    elseif($verify!=$password){
        $erro="Password Verify Incorret";
    }
    else{
        $register["name"] = $name;
        $register["email"] = $email;
        $register["password"] = $password;
        $register["verify"] = $verify;

        header("Location: ../index.php",true,301);

    }


?>