<?php
  session_start();
  require('db_connect.php');
  $comment_description = mysqli_real_escape_string($conn,$_POST['description']);
  // sql인젝션 방어
  $comment_user_id = $_SESSION["session_user_id"];
  $comment_user_name = $_SESSION["session_user_name"];
  $comment_post = mysqli_real_escape_string($conn,$_POST['vote_number']);

  $sql = "
    INSERT INTO comments
      (comment_description, comment_user_id, comment_user_name, comment_post)
      VALUES(
          '$comment_description',
          '$comment_user_id',
          '$comment_user_name',
          '$comment_post'
      )
  ";
  $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
  if($result == false)
  {

      echo '<script>alert("comment를 저장 하는 과정에서 문제가 생겼습니다, 관리자에게 문의해 주세요.")</script>';
      error_log(mysqli_error($conn));
      echo("<script>location.replace('/vote_thisweek.php');</script>");

  }
  echo("<script>location.replace('/vote_thisweek.php');</script>");
?>