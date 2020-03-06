<?php

namespace app;

/**
 * Description of Login
 *
 * @author osi
 */
class Login
{
    public $email;
    public $password;

    public function login()
    {
        if (!$this->verifyRequest()) {
            return [
                'status' => false,
                'level' => 'start',
                'message' => 'Some fields are missing.'
            ];
        }


        $this->password = md5($this->password);

        $user = $this->getUser();

        if (!$user) {
            return [
                'status' => false,
                'level' => 'progress',
                'message' => 'Invalid credentials. Please try again.',
            ];
        }

        if ($user['user_type'] == '1')
            $_SESSION['farmer'] = $user['id'];

        elseif ($user['user_type'] == '2')
            $_SESSION['operator'] = $user['id'];

        elseif ($user['user_type'] == '3')
            $_SESSION['agent'] = $user['id'];


        $user_type = $user['user_type'];            // is this necessary?

        return [
            'status' => true,
            'level' => 'progress',
            'message' => 'Login successful',
            'user_type' => $user_type
        ];
    }


    protected function verifyRequest()
    {
        if ($this->email && $this->password) {
            return true;
        }

        return false;
    }


    protected function getUser()
    {
        $conn = DbConfig::getConnection();

        // Check connection
        if ($conn->connect_error) {
            return false;
        }

        // prepare and bind
        $sql = "SELECT * from farmers WHERE email = '$this->email'";
        $result = $conn->query($sql);

        $farmer = $result->fetch_assoc();

        if (!$farmer) {
            $sql = "SELECT * from operators WHERE email = '$this->email'";
            $result = $conn->query($sql);

            $operator = $result->fetch_assoc();

            if (!$operator) {
                $sql = "SELECT * from agents WHERE email = '$this->email'";
                $result = $conn->query($sql);

                $agent = $result->fetch_assoc();

                if (!$agent) return false;
                else {
                    $sql = "SELECT * from agents WHERE email = '$this->email' AND password = '$this->password'";
                    $result = $conn->query($sql);

                    $agent = $result->fetch_assoc();

                    return $agent;
                }
            } else {
                $sql = "SELECT * from operators WHERE email = '$this->email' AND password = '$this->password'";
                $result = $conn->query($sql);

                $operator = $result->fetch_assoc();

                return $operator;
            }
        } else {
            $sql = "SELECT * from farmers WHERE email = '$this->email' AND password = '$this->password'";
            $result = $conn->query($sql);

            $farmer = $result->fetch_assoc();

            return $farmer;
        }
    }
}