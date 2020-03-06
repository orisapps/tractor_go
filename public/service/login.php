<?php
require_once './autoload.php';

use app\Login;

$error = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = new Login();

    $login->email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $login->password = filter_input(INPUT_POST, 'password');

    $user = $login->login();

    if ($user['status']) {
    //  redirect header
        $json = array("status" => 1, "msg" => "Login successful.", 'user_type' => $user['user_type']);

    } else {
        $error = $user['message'];
        $json = array("status" => 0, "msg" => $error);
    }
}
else {
    $json = array("status" => 0, "msg" => "Request method not accepted.");
}

@mysqli_close($conn);

header('Content-type: application/json');
echo json_encode($json);

?>
