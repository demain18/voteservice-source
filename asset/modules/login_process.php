<?php
    require('db_connect.php');
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $user_pw = mysqli_real_escape_string($conn, $_POST['user_pw']);
    // sql인젝션 보호처리
    
    $sql = "SELECT * FROM user_info WHERE user_id='$user_id'";
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    $total_rows = mysqli_num_rows($result);
    if ($total_rows == 1)
    // user_info 테이블에서 user_id가 $_POST['user_id']인 값이 1일때 실행
    {
        $sql = "SELECT * FROM user_info WHERE user_id='$user_id' and user_pw='$user_pw'";
        $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
        $total_rows = mysqli_num_rows($result);
        // 위 조건에 부합되면서도 추가로 user_pw가 $_POST['user_pw']인 값이 1일때 실행
        if($total_rows == 1)
        {
            // 사용자 세션 정보
            $sql = "SELECT * FROM user_info WHERE user_id='$user_id'";
            $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
            $insession_result = mysqli_fetch_array($result);
            echo "<h2>분기 1 불러오기 통과";
            $insession_user_number = $insession_result['user_number'];
            $insession_user_id = $insession_result['user_id'];
            $insession_user_name = $insession_result['user_name'];
            $insession_user_school = $insession_result['school'];
            $insession_user_type = $insession_result['user_type'];
            $insession_user_ip = $_SERVER['REMOTE_ADDR'];

            echo "<h2>분기 2 변수지정 통과";

            session_start();
            $_SESSION["session_user_number"] = "{$insession_user_number}";
            $_SESSION["session_user_id"] = "{$insession_user_id}";
            $_SESSION["session_user_name"] = "{$insession_user_name}";
            $_SESSION["session_user_school"] = "{$insession_user_school}";
            $_SESSION["session_user_type"] = "{$insession_user_type}";
            // 해당 유저정보를 user_info에서 불러와 유저세션을 추가해 줌
            $_SESSION["session_user_ip"] = "$insession_user_ip";
            $_SESSION["session_empty01"] = " ";
            // 중복 로그인 방지기능 구현을 위해 사용자 ip수집
            echo "<h2>분기 3 세션값 통과";

            
            $sql = "SELECT * FROM user_info WHERE user_id='$user_id'";
            $result_out = mysqli_query($conn, $sql)or die(mysqli_error($conn));
            $result = mysqli_fetch_array($result_out);
            $online_whether = $result['condition_now'];
            if($online_whether == 'online')
            {

                echo("<script>alert('이미 온라인인 사용자가 있습니다.')</script>");
                echo("<script>location.replace('/index.php');</script>");
                

            }
            
            else if($online_whether == 'offline')
            {

                $time_string = date( 'Y-m-d H:i:s', time() );
                $sql = "
                INSERT INTO login_log
                    (log_count, id, name, type, register_whether, time)
                    VALUES(
                        '',
                        '{$_SESSION["session_user_id"]}',
                        '{$_SESSION["session_user_name"]}',
                        '{$_SESSION["session_user_type"]}',
                        '',
                        '$time_string'
                    )
                ";
                /* $result = */mysqli_query($conn, $sql)or die(mysqli_error($conn));
                // login_log테이블에 로그인했다는 로그를 남김

                $sql = "
                UPDATE user_info
                    SET condition_now = 'online', ip_now = '{$_SESSION["session_user_ip"]}'
                    WHERE user_id='$user_id'
                ";
                /* $result = */mysqli_query($conn, $sql)or die(mysqli_error($conn));

                $sql = "SELECT * FROM user_info WHERE user_id='$user_id'";
                $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
                $user_name_alert = mysqli_fetch_array($result);

                echo("<script>alert('환영합니다, {$user_name_alert['user_name']}님.')</script>");
                echo("<script>location.replace('/dashboard.php');</script>");

            }
            

            else
            {

                echo("<script>alert('프로세스에 오류가 있습니다, 관리자에게 문의해주세요.')</script>");
                echo("<script>location.replace('/index.php');</script>");

            }
        } 
    
        else
        {
            echo("<script>alert('비밀번호가 틀립니다.')</script>");
            echo("<script>location.replace('/index.php');</script>");
        
            exit();
        }
    } 
    
    else
    {
        echo("<script>alert('아이디가 틀립니다.')</script>");
        echo("<script>location.replace('/index.php');</script>");
        exit();
    }
?>