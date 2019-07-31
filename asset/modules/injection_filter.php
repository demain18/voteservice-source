<?php
    $filter_clear_data="";
    $filter_clear_data=array();
    function filter($input)
    {

        $input = htmlspecialchars($input);
        $input = strip_tags($input);
        $input = mysql_real_escape_string($conn, $input);
        
    } 
?>