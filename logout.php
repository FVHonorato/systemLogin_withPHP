<?php
    session_start();
    $_SESSION = array(); // set array as empty
    session_destroy(); // destroy the array
    header("Location: index.php",true,301);