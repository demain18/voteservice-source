<?php
function user_profile($input)
{
    if ($input == 'student') {

            return ('학생');

    } else if ($input == 'teacher') {

            return ('선생님');

    } else {

            return ("error.");
        
    }
}
?>