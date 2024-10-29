<?php

    session_start();
    require_once('include/include_db_oo.php');

    $response = [];


    $user_id = $_SESSION['users_id'];
    $data = json_encode($_POST["answers"]);


    $data = json_decode($data, true);


    $sql = "INSERT INTO quiz (quiz_user_id, quiz_1, quiz_2, quiz_3, quiz_4, quiz_5, quiz_6, quiz_7, quiz_8, quiz_9, quiz_10) VALUES ('$user_id', '$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$data[9]')";
    $conn->query($sql);

    $response['status'] = 'success';

    echo json_encode($response);






?>