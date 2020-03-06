<?php

namespace app;


/**
 * Description of PageCheck
 *
 * @author KingStuffy
 */
class PageCheck
{
    public static function checkPage($page)
    {
        if (!@$_SESSION['user']) {
            header('Location: login.php');
        }

        $conn = DbConfig::getConnection();

        // Check connection
        if ($conn->connect_error) {
            return false;
        }

        $userId = $_SESSION['user'];


        $sql = "SELECT * from user WHERE id = $userId";
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();

        if (!$user) {
            header('Location: login.php');
        }


        $sql = "SELECT * from profile WHERE user_id = $userId";
        $result = $conn->query($sql);
        $profile = $result->fetch_assoc();

        if ($page === 'extra' || $page === 'login') {
            if (!$profile) {
                header('Location: profile.php');
            }
        }

        if ($page === 'profile' && $profile) {
            header('Location: extra.php');
        }


        $sql = "SELECT * from extra WHERE user_id = $userId";
        $result = $conn->query($sql);
        $extra = $result->fetch_assoc();

        if ($page === 'extra' && $extra) {
            header('Location: pay.php');
        }

        if ($page === 'pay' || $page === 'login') {
            if (!$extra) {
                header('Location: extra.php');
            }
        }


        if ($page === 'success' || $page === 'login') {
            if (!$user['paid']) {
                header('Location: pay.php');
            }
        }

        if ($page === 'pay') {
            return $user;
        }


    }
}
