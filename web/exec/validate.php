<?php
    ini_set('display_errors', 1);
    ini_set('max_execution_time', -1);
    ignore_user_abort(1);
    $_POST['key'] = base64_encode("CHVP0L$43VEr");

    $key = $_POST['key'];
    $auth = "Authorization: Basic ". $key;

    $headers = array(
        'Content-Type: application/x-www-form-urlencoded',
        $auth
    );

    $ch = curl_init();

//    curl_setopt($ch, CURLOPT_URL, "http://propelrrtools.ap-southeast-1.elasticbeanstalk.com/listener/wing/form/data");
    curl_setopt($ch, CURLOPT_URL, "http://tools.propelrr.com.local/listener/wing/form/data");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($_POST));

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    set_time_limit(0);
    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
    exit;

?>