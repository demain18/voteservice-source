<?php
    session_start();
    require('db_connect.php');
    $school_post = $_SESSION["session_user_school"];
    $user_id = $_SESSION["session_user_id"];
    $post_number = $_POST['delete_post'];

    $sql = "
    delete from ".$school_post."_post where uploader = '$user_id' and post_number = '$post_number'
    ";

    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    echo("<script>alert('삭제되었습니다.')</script>");
    echo("<script>location.replace('/my-upload.php');</script>");
?>