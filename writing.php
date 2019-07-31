<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic+Coding" rel="stylesheet">
        <link rel="stylesheet" href="/asset/css/writing.css">
		<link rel="stylesheet" href="/asset/css/my-navbar.css?ver=1">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
        <script>
            
                $(document).ready(function () {
                    $('body').bootstrapMaterialDesign();
                });
            </script>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!-- Bootstrap Material Webframework, Google Material Icons -->
            <title>청원 서비스</title>
        </head>
        <body>
            <div class="background-grid1">
				<div class="background-color01"></div>
                <!--<nav class="navbar sticky-top navbar-expand-lg navbar-light navbar-custom">
                    <a class="navbar-brand" href="index.html">
                        <strong>
                            <span></span>청원 서비스</strong>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="material-icons">notifications</i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.html">
                                    <i class="material-icons">account_circle</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>-->
				
				
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
					<div class="writing-rules">
						<h6><strong>청원 서비스 운영원칙</strong></h6>
						<p class="td1">- 모든 종류의 저격글은 금지합니다, 예를들어 '0학년00반000, 맘에 안들어요' 등이 있습니다.<br>&nbsp;&nbsp;위에 사항에 부합되는 글 적발시 경고없이 삭제될 수 있습니다.</p>
						<p>- 청원채택은 일주일에 한번 이루어지며, 월~금요일 동안 가장 많은 추천을 받은 글이 채택되며<br>&nbsp;&nbsp;토~일요일 까지 메인에 올라옵니다.</p>
						<p>- 글을 올리고 난 후 학생들이 공감을 받아 채택된 글은 자동으로 본교 선생님에게 전송되며, 작성인은 익명으로 보장됩니다.<br>&nbsp;&nbsp;또한 채택받고 선생님의 대답을 들은 글은 '청원 다시보기' 메뉴에서 언제든지 확인할 수 있습니다.</p>
					</div>
					
					<div class="input">
					<form action="./asset/modules/writing_process.php" method="POST">
					  <div class="margin1"></div>
					  <h5><strong>제목</strong></h5>
					  <input type="text" name="title" class="input1">
					  <h5 class="td2"><strong>본문</strong></h5>
					  <textarea name="description" id="" cols="117" rows="9"></textarea>
					  <button type="submit" class="btn btn-raised btn-primary btn-write1">작성</button>
					</form>
					</div>
					<a href="dashboard.php"><button type="button" class="btn btn-outline-dark btn-write2">목록</button></a>
                </div>
            </div>
        </body>
    </html>