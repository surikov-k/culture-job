<?php
session_start();

const API_ROOT = 'https://order.drcash.sh/v1/order';
const API_TOKEN = 'NWJLZGEWOWETNTGZMS00MZK4LWFIZJUTNJVMOTG0NJQXOTI3';

const VALIDATE_PHONE_REGEX = '/^\+\d{1,3}\s*\(\d{3}\)\s*\d{3}-\d{2}-\d{2}$/';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

// Validate fields
    if (!preg_match(VALIDATE_PHONE_REGEX, $_POST['phone'])) {
        header("Location: error.php");
        exit();
    }

    if (empty($_POST['name'])) {
        header("Location: error.php");
        exit();
    }

    if (empty($_POST['hidden-field'])) {
        header("Location: error.php");
        exit();
    }

// db
    $db_host = 'mysql';
    $db_user = 'root';
    $db_password = 'root';
    $db_name = 'culture_job_orders';

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

//    mysqli_real_escape_string($conn, $_POST['phone']);

    // Validate phone unique
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $hiddenField = htmlspecialchars($_POST['hidden-field']);

    $checkQuery = "SELECT * FROM users WHERE phone = '$phone'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {

        header("Location: error.php?message=Phone number is not unique");
        exit();
    }

    // data
    $data = [
        'stream_code' => 'iu244',
        'client' => [
            'name' => $name,
            'phone' => $phone,
        ],
        'sub1' => $hiddenField,
    ];

    // Headers
    $options = [
        'http' => [
            'header' => "Content-type: application/json\r\n" .
                "Authorization: Bearer " . API_TOKEN . "\r\n",
            'method' => 'POST',
            'content' => json_encode($data),
        ],
    ];

    // Send request
    $context = stream_context_create($options);
    $response = file_get_contents(API_ROOT, false, $context);

//  response
    if ($response === FALSE) {
        header("Location: error.php");
        exit();
    } else {
        $responseData = json_decode($response, true);

        if ($responseData['uuid']) {
            $uuid = $responseData['uuid'];
            $insertQuery = "INSERT INTO users (name, phone, uuid) VALUES ('$name', '$phone', '$uuid')";
            $conn->query($insertQuery);

            $_SESSION['uuid'] = $uuid;
            $_SESSION['phone'] = $phone;
            header("Location: thank-you.php");
            exit();
        } else {

            header("Location: error.php");
            exit();
        }
    }
}

