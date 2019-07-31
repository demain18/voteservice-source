<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic+Coding" rel="stylesheet">
        <link rel="stylesheet" href="/asset/css/my-upload.css?ver=20">
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
                <div class="postlist">
                    <?php
                    $user_school = $_SESSION['session_user_school'];
                    $uploader = $_SESSION['session_user_id'];
                    $sql = "SELECT * FROM ".$user_school."_post WHERE uploader = '$uploader'";
                    $result = mysqli_query($conn, $sql);
                    if($result == true) {
                        while($post = mysqli_fetch_array($result)) {
                            $post_title = htmlspecialchars($post['title']);
                            $post_description = htmlspecialchars($post['description']);
                            echo '
                              <h5>'.$post['post_number'].'번 '.$post_title.' <strong>'.$post['date'].'</strong> 추천수 : <strong>'.$post['agree_count'].'</strong></h5>
                              <p>'.$post_description.'</p>
                              <form action="./asset/modules/mypost_delete_process.php" method="POST">
                                  <input type="hidden" name="delete_post" value="'.$post['post_number'].'">
                                  <button type="submit" class="delete-post">삭제하기</button>
                              </form>
                            ';
                          }
                    } else if ($result == false) {
                      echo ('<strong>WARNING</strong> | 아직 준비되지 않았습니다.');
                    }
                    ?>
					<span class="school-info"><strong>서울아이티고등학교</strong><img src="asset/img/highschool-logo1.png" width="25" height="22" class="img-setting01"></span>
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