<?php

    $_POST['key'] = base64_encode("CHVP0L$43VEr");

    $key = $_POST['key'];
    $auth = "Authorization: Basic ". $key;

    $headers = array(
        'Content-Type: application/x-www-form-urlencoded',
        $auth
    );

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://propelrrtools.ap-southeast-1.elasticbeanstalk.com/listener/wing/form/phone-number/verify");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($_POST));

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
    exit;

?>