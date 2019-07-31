<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic+Coding" rel="stylesheet">
		<link rel="stylesheet" href="/asset/css/my-navbar.css?ver=2">
        <link rel="stylesheet" href="/asset/css/index.css?ver=2">
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
            <div class="background-img1">
				<div class="my-navbar">
					<div class="navbar-container">
						<span class="brand"><a href="index.php"><strong>청원서비스</strong></a></span>
						<span class="alerm navbar-icon-setting"><em class="material-icons">notifications</em></span>
						<span class="account navbar-icon-setting"><a href="login.html"><em class="material-icons">account_circle</em></a></span>
					</div>
				</div>

			  <div class="row grid-td1">
				`	<div class="grid-td2">
					<h5><strong>학생들의 진짜 목소리, 궁금하지 않으신가요?</strong></h5>
			  		<img src="asset/img/img-iphone.png" width="350" height="230" class="index-image">
				</div>
				<form action="./asset/modules/login_process.php" method="POST">
					<div class="login-grid">
						<h3>로그인</h3>
						<div class="input-group mb-3">
							<input type="text" class="form-control" name="user_id" placeholder="아이디" aria-label="Recipient's username" aria-describedby="basic-addon2">
						</div>
						<div class="input-group mb-3">
							<input type="password" class="form-control" name="user_pw" placeholder="비밀번호" aria-label="Recipient's username" aria-describedby="basic-addon2">
						</div>
							<button type="submit" class="btn btn-raised btn-primary btn-td1">로그인하기</button>
							<a href="register.php"><p class="go-register">회원가입하기 <em class="material-icons icon-td1">keyboard_arrow_right</em></p></a>
					  </div>
				</form>
				</div>
            </div>
        </body>
    </html>
