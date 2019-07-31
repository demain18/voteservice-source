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
