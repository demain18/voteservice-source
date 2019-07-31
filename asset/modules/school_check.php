<?php
function school_check($input)
{
    if ($input == 'seoulit_highschool') {

            return ('서울아이티고등학교');

    } else if ($input == 'sunrin_internet_highschool') {

            return ('선린인터넷고등학교');

    } else if ($input == 'hansei_cyber_highschool') {

            return ('한세사이버고등학교');

    } else {

            return ('wrong connect.');

    }
}
?>