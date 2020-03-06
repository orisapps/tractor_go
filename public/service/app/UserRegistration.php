<?php

namespace app;

require('mailer.php');

/**
 * Description of UserRegistration
 *
 * @author osi
 */
class UserRegistration
{
    // general
    public $first_name;
    public $last_name;
    public $email;
    public $password;

    // farmer
    public $farm_type;
    public $farm_name;
    public $farm_location;
    public $farm_cluster;
    public $farm_bio;

    // operator
    public $tractor_type;
    public $tractor_model;
    public $tractor_location;
    public $operator_cluster;
    public $mileage;

    // agent
    public $agent_code;


    public function processRequest($thing)
    {
        if (!$this->verifyRequest($thing)) {
            return [
                'status' => false,
                'message' => 'Some fields are missing'
            ];
        }

        if (!$this->ifExists($thing)) {
            return [
                'status' => false,
                'message' => ucfirst($this->typeswitcher($thing)) . ' exists already. Login instead?'
            ];
        }

        $password = $this->password;

        $this->password = md5($this->password);

        $db = $this->saveToDb($thing);

        started($this->email, $password, $this->first_name, ucfirst($this->typeswitcher($thing)));



        if ($db) {
            return [
                'status' => true,
            ];
        }

        return [
            'status' => false,
            'message' => 'Some errors occurred, please try again'
        ];
    }


    protected function verifyRequest($thing)
    {
        if ($thing == '1') {
            if ($this->email && $this->password && $this->first_name && $this->last_name && $this->farm_type && $this->farm_name && $this->farm_bio && $this->farm_location) {
                return true;
            }
        } elseif ($thing == '2') {
            if ($this->email && $this->password && $this->first_name && $this->last_name && $this->tractor_type && $this->tractor_model && $this->tractor_location && $this->mileage) {
                return true;
            }
        } elseif ($thing == '3') {
            if ($this->email && $this->password && $this->first_name && $this->last_name && $this->agent_code) {
                return true;
            }
        }

        return false;
    }

    public function typeSwitcher($thing) {
        switch($thing) {
            case '1':
                return 'Farmer';
            case '2':
                return 'Operator';
            case '3':
                return 'Agent';
        }
    }

    protected function ifExists($thing)
    {
        $conn = DbConfig::getConnection();

        // Check connection
        if ($conn->connect_error) {
            return false;
        }

        if ($thing == '1') {
            $sql = mysqli_query($conn, "SELECT * from farmers WHERE email = '$this->email'");

            if (mysqli_num_rows($sql) > 0) {
                return false;
            } else return true;
        } elseif ($thing == '2') {
            $sql = mysqli_query($conn, "SELECT * from operators WHERE email = '$this->email'");

            if (mysqli_num_rows($sql) > 0) {
                return false;
            } else return true;
        } elseif ($thing == '3') {
            $sql = mysqli_query($conn, "SELECT * from agents WHERE email = '$this->email'");

            if (mysqli_num_rows($sql) > 0) {
                return false;
            } else return true;
        }
    }


    protected function saveToDb($thing)
    {
        $conn = DbConfig::getConnection();
        $curr_date = date('Y/m/d H:i:s');

        // Check connection
        if ($conn->connect_error) {
            return false;
        }

        if($thing == '1') {
            // prepare and bind
            $stmt = $conn->prepare("INSERT INTO farmers (first_name, last_name, email, password, created_at, last_updated_at, farm_name, farm_address, farm_type, attached_cluster, description, user_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssssi", $this->first_name, $this->last_name, $this->email, $this->password, $curr_date, $curr_date, $this->farm_name, $this->farm_location, $this->farm_type, $this->farm_cluster, $this->farm_bio, $thing);

            return $stmt->execute();

        } elseif($thing == '2') {
            // prepare and bind
            $stmt = $conn->prepare("INSERT INTO operators (first_name, last_name, email, password, created_at, updated_at, tractor_type, tractor_model, tractor_location, attached_cluster, mileage, user_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssssi", $this->first_name, $this->last_name, $this->email, $this->password, $curr_date, $curr_date, $this->tractor_type, $this->tractor_model, $this->tractor_location, $this->operator_cluster, $this->mileage, $thing);

            return $stmt->execute();

        } elseif($thing == '3') {
            // prepare and bind
            $stmt = $conn->prepare("INSERT INTO agents (first_name, last_name, email, password, created_at, last_updated_at, agent_code, user_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssi", $this->first_name, $this->last_name, $this->email, $this->password, $curr_date, $curr_date, $this->agent_code, $thing);

            return $stmt->execute();
        }
    }
}
