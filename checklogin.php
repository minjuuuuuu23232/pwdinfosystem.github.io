<?php

// prevent direct access para sa mga php files 

    if(!isset($_SESSION['username']))
    {
        $_SESSION['checklogin'] = "";
        header("Location: login.php");
    }


?>