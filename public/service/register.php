<?php
require_once './autoload.php';

// general registration
use app\UserRegistration;

$error = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reg = new UserRegistration();
    $thing = filter_input(INPUT_POST, 'thing');

    $reg->email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $reg->password = filter_input(INPUT_POST, 'password');
    $reg->first_name = filter_input(INPUT_POST, 'first_name');
    $reg->last_name = filter_input(INPUT_POST, 'last_name');

    if($thing == '1') {
        $reg->farm_type = filter_input(INPUT_POST, 'farm_type');
        $reg->farm_name = filter_input(INPUT_POST, 'farm_name');
        $reg->farm_location = filter_input(INPUT_POST, 'farm_location');
        $reg->farm_cluster = filter_input(INPUT_POST, 'farm_cluster');
        $reg->farm_bio = filter_input(INPUT_POST, 'farmer_bio');

    } elseif($thing == '2') {
        $reg->tractor_type = filter_input(INPUT_POST, 'tractor_type');
        $reg->tractor_model = filter_input(INPUT_POST, 'tractor_model');
        $reg->tractor_location = filter_input(INPUT_POST, 'tractor_location');
        $reg->operator_cluster = filter_input(INPUT_POST, 'operator_cluster');
        $reg->mileage = filter_input(INPUT_POST, 'mileage');

    } elseif($thing == '3') {
        $reg->agent_code = filter_input(INPUT_POST, 'agent_code');
    }

    $user = $reg->processRequest($thing);

    if ($user['status']) {
        $json = array("status" => 1, "type" => ucfirst($reg->typeswitcher($thing)), "msg" => "You have been successfully registered on TractorOnTheGo as a " . ucfirst($reg->typeswitcher($thing)) . " You will receive a notification shortly.");
    } else {
        $error = $user['message'];
        $json = array("status" => 0, "msg" => $error);
    }
} else {
    echo "error";
    $json = array("status" => 0, "msg" => "Request method not accepted.");
}

@mysqli_close($conn);

header('Content-type: application/json');
echo json_encode($json);


?>