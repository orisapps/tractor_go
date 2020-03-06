<?php
require_once './autoload.php';

function destroySession() {
    $_SESSION = array();
    if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
}

if (isset($_SESSION['farmer']) || isset($_SESSION['operator']) || isset($_SESSION['agent'])) {
    destroySession();
    header("Location:/togdev/home/login.php");
}



?>
