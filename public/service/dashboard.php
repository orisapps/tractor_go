<?php
require_once 'autoload.php';

use app\DbConfig;

if (isset($_SESSION['farmer'])) {
    $farmer = $_SESSION['farmer'];
    $user_type = 'farmer';

    $conn = DbConfig::getConnection();

    if ($conn->connect_error) {
        return false;
    }

    $first_name = $last_name = '';

    $user_query = "SELECT * from farmers WHERE id = '$farmer'";
    $result_user = $conn->query($user_query);

    if ($result_user->num_rows > 0) {
        while ($row_user = $result_user->fetch_assoc()) {
            $first_name = $row_user['first_name'];
            $last_name = $row_user['last_name'];
        }
    }
} elseif (isset($_SESSION['operator'])) {
    $operator = $_SESSION['operator'];
    $user_type = 'operator';

    $conn = DbConfig::getConnection();

    if ($conn->connect_error) {
        return false;
    }

    $first_name = $last_name = '';

    $user_query = "SELECT * from operators WHERE id = '$operator'";
    $result_user = $conn->query($user_query);

    if ($result_user->num_rows > 0) {
        while ($row_user = $result_user->fetch_assoc()) {
            $first_name = $row_user['first_name'];
            $last_name = $row_user['last_name'];
        }
    }
} elseif (isset($_SESSION['agent'])) {
    $agent = $_SESSION['agent'];
    $user_type = 'agent';

    $conn = DbConfig::getConnection();

    if ($conn->connect_error) {
        return false;
    }

    $first_name = $last_name = '';

    $user_query = "SELECT * from agents WHERE id = '$agent'";
    $result_user = $conn->query($user_query);

    if ($result_user->num_rows > 0) {
        while ($row_user = $result_user->fetch_assoc()) {
            $first_name = $row_user['first_name'];
            $last_name = $row_user['last_name'];
        }
    }
}

else header("Location: https://pctravelsng.com/togdev/app/home/login.php");

?>

