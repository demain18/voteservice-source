<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
				<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic+Coding" rel="stylesheet">
				<link rel="stylesheet" href="/asset/css/my-navbar.css">
        <link rel="stylesheet" href="/asset/css/register.css?ver=2">
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
			  <div class="register-grid">
					<form action="./asset/modules/register_process.php" method="POST">


						<h3>회원가입</h3>
					  <div class="input-group mb-3">
						  <div class="input-group-prepend">
							<label class="input-group-text input-group-text-td1" for="inputGroupSelect01">학교명</label>
						  </div>
						  <select class="custom-select" id="inputGroupSelect01" name="school_select">
							<option selected disabled>학교를 선택하세요.</option>
							<option value="seoulit_highschool">서울아이티고등학교</option>
							<option disabled value="sunrin_internet_highschool">선린인터넷고등학교(Locked)</option>
							<option disabled value="hansei_cyber_highschool">한세사이버보안고등학교(Locked)</option>
						  </select>
					  </div>
				  	  <div class="input-group mb-3">	
						  <input type="text" class="form-control" placeholder="이름" name="user_name" aria-label="Recipient's username" aria-describedby="basic-addon2">
					  </div>
					  <div class="input-group mb-3">	
						  <input type="text" class="form-control" placeholder="아이디" name="user_id" aria-label="Recipient's username" aria-describedby="basic-addon2">
					  </div>
					  <div class="input-group mb-3">
						  <input type="password" class="form-control" placeholder="비밀번호" name="user_pw" aria-label="Recipient's username" aria-describedby="basic-addon2">
					  </div>
				  	<div class="input-group mb-3">
						  <input type="password" class="form-control" placeholder="비밀번호 재입력" name="user_pwc" aria-label="Recipient's username" aria-describedby="basic-addon2">
					  </div>
					  <div class="input-group mb-3">
						  <label class="radio-inline">
							<input type="radio" class="input-td1" name="user_type" id="inlineRadio1" value="student"">학생
						  </label>
						  <label class="radio-inline">
							<input type="radio" class="input-td1" name="user_type" id="inlineRadio2" value="teacher">선생님
							</label>
					  </div>
						<button type="submit" class="btn btn-raised btn-primary btn-td1">가입하기</button>
						

					</form>
				</div>
				</div>
				  		
				  	
                
            </div>
        </body>
    </html>