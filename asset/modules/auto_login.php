<?php

    require('db_connect.php');
    session_start();

    $user_iseet = $_SESSION["session_user_id"];
    if(isset($user_iseet))
    {

        echo("<script>location.replace('/dashboard.php');</script>");

    }

?>