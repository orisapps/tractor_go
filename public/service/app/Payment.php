<?php

namespace app;

use Yabacon\Paystack;

/**
 * Description of Payment
 *
 * @author osi
 */
class Payment {

    public static function verify() {
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

        $secretKey = 'sk_live_29125e4a09a59693d4942020461a80aa2e9a53ad';

        $reference = filter_input(INPUT_GET, 'reference');
        $flag = filter_input(INPUT_GET, 'flag');

        if (!$reference || !$flag) {
            return false;
        }

        $trx = null;

        try {
            $paystack = new Paystack($secretKey);
            $paystack->disableFileGetContentsFallback();
            $trx = $paystack->transaction->verify([
                'reference' => $reference,
            ]);

        } catch (Exception $e) {
            return false;
        }

        $email = $trx->data->customer->email;
        $amount_raw = $trx->data->amount;
        $amount = $amount_raw / 100;

        if ($flag == 'def') {
            if ($amount_raw < 53250) {
                return false;
            }

            $stmt = $conn->prepare("UPDATE user SET paid = 1, cert = 'YIEN' WHERE id = '$userId' AND email='$email'");
            return $stmt->execute();
        }

        elseif ($flag == 'cert') {
            if ($amount_raw < 2194788) {
                return false;
            }

            $stmt = $conn->prepare("UPDATE user SET paid = 1, cert = 'GRANO' WHERE id = '$userId' AND email='$email'");
            return $stmt->execute();
        }
    }
}
