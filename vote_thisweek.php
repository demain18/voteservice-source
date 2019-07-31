<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic+Coding" rel="stylesheet">
        <link rel="stylesheet" href="/asset/css/vote_thisweek.css">
        <link rel="stylesheet" href="/asset/css/my-navbar.css">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
            $('body').bootstrapMaterialDesign();
            });
        </script>
        <?php
        session_start();
        require('./asset/modules/db_connect.php');
        require('./asset/modules/user_profile.php');
        require('./asset/modules/school_check.php');
        ?>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!-- Bootstrap Material Webframework, Google Material Icons -->
            <title>청원 서비스</title>
        </head>
        <body>
            <div class="background-grid1">
                <div class="background-color01"></div>
                <div class="my-navbar">
                    <div class="navbar-container">
                        <span class="brand">
                            <a href="dashboard.php">
                                <strong>청원서비스</strong>
                            </a>
                        </span>
                        <span class="alerm navbar-icon-setting">
                            <em class="material-icons">notifications</em>
                        </span>
                        <span class="account navbar-icon-setting">
							<div class="dropdown pull-xs-right">
						  <button class="btn bmd-btn-icon dropdown-toggle" type="button" id="lr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<em class="material-icons">account_circle</em>
						  </button>
						  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="lr1">
							<?php
                            $user_name_profile = $_SESSION["session_user_name"];
                            $user_type = $_SESSION["session_user_type"];
                            $user_type_profile = user_profile($user_type);
                            echo '
                            <li class="user_profile">
                                <h5><strong>'.$user_name_profile.'</strong></h5>
                                <p>'.$user_type_profile.'</p>
                            </li>
                            ';
                            ?>
							<a href="my-upload.php"><button class="dropdown-item" type="button">내가 올린 게시물</button></a>
							<a href="setting.php"><button class="dropdown-item" type="button">설정</button></a>
                            <a href="./asset/modules/logout_process.php"><button class="dropdown-item" type="button">로그아웃</button></a>
                            <a href="page-for-admin.php"><button class="dropdown-item disabled" type="button">관리자 모드</button></a>
							<div class="dropdown-divider"> </div>
							<a href="contact.php"><a class="dropdown-item" href="#">Contact us</a></a>
							 
						  </div>
						</div>
                        </span>
                    </div>
                </div>
                <!--<span class="school-info row"><p><strong>서울아이티고등학교</strong></p><img src="asset/img/highschool-logo1.png" width="30" height="25"></span>-->
                <div class="postlist">
                    <div class="post-menus">
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">전체</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">최신인기</a>
                            </li>
                            <li class="nav-item nav-active">
                                <a class="nav-link" href="vote_thisweek.php">이주의 청원</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">청원다시보기</a>
                            </li>
                        </ul>
                    </div>
					<div class="vote-thisweek">
                        <?php
                        /*
                        $sql = "SELECT * FROM user_info WHERE user_id = '$_SESSION['session_user_id']' and user_type = 'teacher'";
                        $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
                        */
                        $date_month = date('n');
                        $date_day = date('j');
                        if($date_day>=1 and $date_day<=7) {
                            $date_vote_thisweek = $date_month."월 첫째 주 청원";
                        } else if($date_day>=8 and $date_day<=14) {
                            $date_vote_thisweek = $date_month."월 둘째 주 청원";
                        } else if($date_day>=15 and $date_day<=21) {
                            $date_vote_thisweek = $date_month."월 셋째 주 청원";
                        } else if($date_day>=21 and $date_day<=28) {
                            $date_vote_thisweek = $date_month."월 넷째 주 청원";
                        } else if($date_day>=28 and $date_day<=31) {
                            $date_vote_thisweek = $date_month."월 마지막 주 청원";
                        }

                        $sql = "SELECT * FROM ".$_SESSION['session_user_school']."_vote_thisweek WHERE vote_select_check = 'yes'";
                        $result = mysqli_query($conn, $sql);

                        if($result == true) {

                            $vote_post = mysqli_fetch_array($result);
                            $voted_post_number = $vote_post['vote_number'];
                            echo '
                            <div class="row page-title-column">
                              <p class="page-title">'.$date_vote_thisweek.'</p>
                              <a href="#" class="custom-icon" data-toggle="tooltip" data-placement="bottom" title="이주의 청원은 매주 월~금요일 동안 가장 많은 청원동의를 받은 글이 채택되며,
                              토~일요일까지 유지됩니다. 갱신시간은 매주 토요일 오후3시입니다.">?</a>
                            </div>
                            <p class="post-info">
                                <span class="post-title"><strong>'.$vote_post['vote_title'].'</strong></span>
                                <span class="post-date">'.$vote_post['vote_date'].'</span>
                            </p>
                            <p class="post-agree">청원추천 수 <span class="post-agree-count"><strong>'.$vote_post['vote_agree_count'].'</strong></span></p>
                            <div class="post-description">'.$vote_post['vote_description'].'</div>
                              ';
    
                            $user_id = $_SESSION["session_user_id"];
                            $sql = "SELECT * FROM user_info WHERE user_id = '$user_id' and user_type = 'teacher'";
                            $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
                            $user_row = mysqli_num_rows($result);
                            if($user_row == 1) {
                                $sql = "SELECT * FROM ".$_SESSION['session_user_school']."_vote_thisweek WHERE vote_select_check = 'yes'";
                                $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
                                $result = mysqli_fetch_array($result);
                                echo '
                                <form action="./asset/modules/vote_thisweek_comment_process.php" method="POST">
                                    <div class="input-group mb-3 comment">
                                    <input type="hidden" name="vote_number" value="'.$result['vote_number'].'">
                                    <input type="text" name="description" placeholder="  한번 청원에 답변하면 수정하거나 삭제할 수 없습니다." class="input-text">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary comment-submit">전송</button>
                                    </div>
                                    </div>
                                </form>
                                ';
                            } else {
                                echo ('<p class="comment-block">댓글을 작성할 권한이 없습니다.<p>');
                            }
    
                            $sql = "SELECT * FROM comments WHERE comment_number = '$voted_post_number'";
                              $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
                              while($comment = mysqli_fetch_array($result)) {
                                echo '
                                <div class="comment-box">
                                    <p class="comments">
                                    <span class="comment-name"><strong>'.$comment['comment_user_name'].'</strong>
                                    <em class="material-icons icon-check">check_circle</em></span>&nbsp;&nbsp;<span class="comment-description">'.$comment['comment_description'].'</span>
                                    </p>
                                </div>
                                ';
                              }
                              
                        } else if ($result == false) {
                          echo ('<strong>WARNING</strong> | 아직 준비되지 않았습니다.');
                        }
                        ?>
                        <!--
						<div class="comment-box">
							<p class="comments">
							<span class="comment-name"><strong>천세진 선생님</strong>
							<em class="material-icons icon-check">check_circle</em></span>&nbsp;&nbsp;<span class="comment-description">댓글 테스트</span>
							</p>
                        </div>
                        -->
						
						
					</div>
                    <!-- <span class="school-info"><strong>서울아이티고등학교</strong><img src="asset/img/highschool-logo1.png" width="25" height="22" class="img-setting01"></span>-->
                    <?php
                    $school_name = $_SESSION["session_user_school"];
                    $school_name_forLogo = school_check($school_name);
                    echo '
                    <span class="school-info">
                        <strong>'.$school_name_forLogo.'</strong>
                        <img src="./asset/img/'.$_SESSION["session_user_school"].'_logo.png" width="25" height="25" class="img-setting01">
                    </span>
                    ';
                    ?>
            	</div>
        	</div>
    </div>
	<script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>
</body>
</html>