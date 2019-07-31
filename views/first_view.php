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
