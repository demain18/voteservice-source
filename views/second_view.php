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
