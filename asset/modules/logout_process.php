<?php
    require('db_connect.php');
    session_start();
    $user_id = $_SESSION["session_user_id"];
    $sql = "
    UPDATE user_info
        SET condition_now = 'offline'
        WHERE user_id='$user_id'
    ";
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    session_destroy();
    
    
    echo("<script>alert('로그아웃 됬습니다.')</script>");
    echo("<script>location.replace('/index.php');</script>");
?>