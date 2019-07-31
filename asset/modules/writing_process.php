<?php
  session_start();
  require('db_connect.php');
  $today = date("Y-m-d");
  $title = mysqli_real_escape_string($conn,$_POST['title']);
  // sql인젝션 방어
  $descrition = nl2br($_POST['description']);
  $descrition_filter = mysqli_real_escape_string($conn, $descrition);
  // n12br함수를 이용해서 엔터값을 </br>으로 변환해준다
  $uploader = $_SESSION['session_user_id'];
  $sql = "
    INSERT INTO {$_SESSION['session_user_school']}_post
      (post_number, title, description, uploader, date, agree_count, report_count)
      VALUES(
          '',
          '$title',
          '$descrition_filter',
          '$uploader',
          '$today',
          '0',
          '0'
      )
  ";
  $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
  // writing.php에서 가져온 값을 유저학교_post테이블에 저장함
  if($result == false)
  {

      echo '<script>alert("저장 하는 과정에서 문제가 생겼습니다, 관리자에게 문의해 주세요.")</script>';
      error_log(mysqli_error($conn));
      echo("<script>location.replace('/dashboard.php');</script>");

  }
  
  else
  {

      echo("<script>location.replace('/dashboard.php');</script>");

  }
?>