<?php
    session_start();
    require('db_connect.php');

    $post_number=$_POST['post-report-postnumber'];
    $sql = "SELECT * FROM {$_SESSION['session_user_school']}_post WHERE post_number = $post_number and report_user LIKE '%{$_SESSION["session_user_id"]}%'";
    // 유저학교_post테이블에서 post_number가 해당 글 번호이고 agree_user에서 유저이름이 포함된 값이 있는지 조회함
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    $row_cnt = mysqli_num_rows($result);

    if($row_cnt == 1)
    {

            echo '<script>alert("이미 신고한 청원 입니다.")</script>';
            echo("<script>location.replace('/dashboard.php');</script>");

    } 
    
    else
    {

        $sql = "
            UPDATE {$_SESSION['session_user_school']}_post
                SET report_count = report_count + 1
                WHERE post_number = '$post_number'
            ";
        $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

        $sql = "
            UPDATE {$_SESSION['session_user_school']}_post
                SET report_user = concat(report_user, '{$_SESSION["session_user_id"]}, ')
                WHERE post_number = '$post_number'
            ";
            // report유저 필드에 사용자의 아이디를 추가함
        $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
        echo ('<script>alert("신고 감사합니다, 빠른 조취 취하겠습니다.")</script>');
        echo("<script>location.replace('/dashboard.php');</script>");

    }
?>