<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $url = 'https://order.drcash.sh/v1/order';

// Data
    $data = [
        'stream_code' => 'iu244',
        'client' => [
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
        ],
        'sub1' => $_POST['hidden-field'],
    ];

// Headers
    $options = [
        'http' => [
            'header' => "Content-type: application/json\r\n" .
                "Authorization: Bearer NWJLZGEWOWETNTGZMS00MZK4LWFIZJUTNJVMOTG0NJQXOTI3\r\n",
            'method' => 'POST',
            'content' => json_encode($data),
        ],
    ];

    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

//  response
    if ($response === FALSE) {
        header("Location: error.php");
        exit();
    } else {
        $responseData = json_decode($response, true);

        if ($responseData['uuid']) {

            session_start();
            $_SESSION['uuid'] = $responseData['uuid'];
            header("Location: thank-you.php");
            exit();
        } else {

            header("Location: error.php");
            exit();
        }
    }
}

