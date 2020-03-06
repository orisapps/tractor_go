<?php
require_once '../autoload.php';

use app\DbConfig;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $conn = DbConfig::getConnection();

    if ($conn->connect_error) {
        return false;
    }

    $query = "SELECT cluster_id, label, country_code, total_count FROM tractor_clusters";

    if ($result = mysqli_query($conn, $query)) {

        $newArr = array();
        while ($db_field = mysqli_fetch_assoc($result)) {
            $newArr[] = $db_field;
        }

        header('Content-type: application/json');
        echo json_encode($newArr);
    } else {
        echo json_encode(array('error' => 'sql error', 'desc' => mysqli_error($conn)));
    }
} else {
    echo json_encode(array('error' => 'unknown error'));
}


?>
