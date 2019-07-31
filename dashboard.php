<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic+Coding" rel="stylesheet">
        <link rel="stylesheet" href="/asset/css/dashboard.css">
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
        // 세션_스타트는 무조건 제일위에!
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
                    <a href="writing.php">
                        <button type="button" class="btn btn-raised btn-primary btn-write">글 쓰기<em class="material-icons icon-set02">edit</em>
                        </button>
                    </a>
                    <h5 class="board-title">
                        <strong>최다 추천 청원 목록</strong>
                    </h5>
                    <div class="post-menus">
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">전체</a>
                            </li>
                            <li class="nav-item nav-active">
                                <a class="nav-link" href="dashboard.php">최신인기</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vote_thisweek.php">이주의 청원</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="dashboard.php">청원다시보기</a>
                            </li>
                        </ul>
                    </div>

                    <p class="menu-list">
                        <span class="menu menu02">제목</span>
                        <span class="menu menu03">청원일</span>
                        <span class="menu menu04">참여인원</span>
                    </p>
                    <div class="post-grid">

					<div class="col-md-6 col-sm-6 accordion-margin">
						<div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
                          <?php
                          // echo "제가 살고 있는 도시는 {$_SESSION['city']}입니다.<br>";
                          $sql = "SELECT * FROM ".$_SESSION['session_user_school']."_post ORDER BY post_number DESC";
                          $result = mysqli_query($conn, $sql);//or die(mysqli_error($conn));
                          if($result == true) {
                            while($post = mysqli_fetch_array($result)) {
                                $post_title = htmlspecialchars($post['title']);
                                $post_description = htmlspecialchars($post['description']);

                                echo '
                                    <div class="panel">
                                    <div class="panel-heading" role="tab" id="heading'.$post['post_number'].'">
                                    <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$post['post_number'].'" aria-expanded="true" aria-controls="collapseOne">
                                    <p class="post post-number01">
                                        <span class="post-name">'.$post_title.'</span>
                                        <span class="post-upload-date">'.$post['date'].'</span>
                                        <span class="post-like">
                                            <strong>'.$post['agree_count'].'</strong>
                                        </span>
                                    </p>
                                    </a>
                                </h4>
                                    </div>
                                    <div id="collapse'.$post['post_number'].'" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="post-text">'.$post_description.'</div>
    
                                        <form action="./asset/modules/vote_agree_process.php" method="POST">
                                            <input type="hidden" name="vote-agree-postnumber" value="'.$post['post_number'].'">
                                            <button type="submit" class="btn btn-primary vote-agree">청원동의</button>
                                        </form>
                                        <form action="./asset/modules/report_process.php" method="POST" class="report-margin">
                                            <input type="hidden" name="post-report-postnumber" value="'.$post['post_number'].'">
                                            <button type="submit" class="post-report">Report</button>
                                        </form>
    
                                    </div>
                                    </div>
                                </div>
                                ';
                              }
                          } else if ($result == false) {
                            echo ('<strong>WARNING</strong> | 아직 준비되지 않았습니다.');
                          }
                          /*
                          if($result == true) {
                          } else if ($result == false) {
                            echo ('<strong>WARNING</strong> | 아직 준비되지 않았습니다.');
                          }
                          */
                          ?>
						</div>
					  </div>
                    </div>
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
</body>
</html>