<?php
    require('db_connect.php');
    $school = mysqli_real_escape_string($conn, $_POST['school_select']);
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $user_pw = mysqli_real_escape_string($conn, $_POST['user_pw']);
    $user_pwc = mysqli_real_escape_string($conn, $_POST['user_pwc']);
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
    // sql인젝션 방어
    if($school==NULL || $user_name==NULL || $user_id==NULL || $user_pw==NULL || $user_pwc==NULL || $user_type==NULL)
    {

            echo("<script>alert('빈칸을 모두 채워주세요.')</script>");
            echo("<script>location.replace('/register.php');</script>");

            exit();

    }
    if($user_pw!=$user_pwc)
    {

            echo("<script>alert('비밀번호와 비밀번호 재입력이 다릅니다.')</script>");
            echo("<script>location.replace('/register.php');</script>");

            exit();

    }

    $sql = "SELECT * FROM user_info WHERE user_id='$user_id'";
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    $user_row = mysqli_num_rows($result);
    if($user_row == 1) {

            echo("<script>alert('중복된 아이디입니다.')</script>");
            echo("<script>location.replace('/register.php');</script>");

            exit();

    }
    

    if($user_type == 'teacher')
    // user_type filtering request
    {
        $ip_input = $_SERVER['REMOTE_ADDR'];
        $sql = "
        INSERT INTO register_request
        (school, user_name, user_id, user_pw, user_type, condition_now, ip_now)
        VALUES(
                '$school',
                '$user_name',
                '$user_id',
                '$user_pw',
                '$user_type',
                'request_waiting',
                '$ip_input'
        )
        ";
        mysqli_query($conn, $sql);
        echo "
        <script>alert('선생님으로 회원가입하기 위해서는 인증과정을 걸쳐야 합니다.(약 하루정도 소요됨)');</script>
        ";
        echo("<script>location.replace('/index.php');</script>");
    }

    $ip_input = $_SERVER['REMOTE_ADDR'];
    $sql = "
    INSERT INTO user_info
    (school, user_name, user_id, user_pw, user_type, condition_now, ip_now)
    VALUES(
        '$school',
        '$user_name',
        '$user_id',
        '$user_pw',
        '$user_type',
        'online',
        '$ip_input'
    )
    ";
    $result = mysqli_query($conn, $sql);



    if($result === false)
    {

            echo '<script>alert("회원가입하는 과정에서 문제가 발생했습니다, 관리자에게 문의해 주세요.")</script>';
            error_log(mysqli_error($conn));

    }

    else
    {

            // register_log
            $time_string = date( 'Y-m-d H:i:s', time() );
            $sql = "
            INSERT INTO login_log
                (log_count, id, name, type, register_whether, time)
                VALUES(
                    '',
                    '$user_id',
                    '$user_name',
                    '$user_type',
                    'true',
                    '$time_string'
                )
            ";
            mysqli_query($conn, $sql)or die(mysqli_error($conn));
            echo("<script>alert('회원가입에 성공했습니다!')</script>");
            echo("<script>location.replace('/dashboard.php');</script>");

    }
?>