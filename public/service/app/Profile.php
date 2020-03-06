<?php

namespace app;


/**
 * Description of Profile
 *
 * @author KingStuffy
 */
class Profile
{
    public $firstName;
    public $lastName;
    public $phoneNumber;
    public $address;
    public $email;
    public $birthYear;
    public $occupation;
    public $state;


    public function processRequest()
    {
        if (!$this->verifyRequest()) {
            return [
                'status' => false,
                'message' => 'Some fields are missing'
            ];
        }

        $db = $this->saveToDb();

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


    protected function verifyRequest()
    {
        if ($this->email && $this->firstName && $this->lastName && $this->phoneNumber && $this->address && $this->birthYear && $this->occupation && $this->state) {
            return true;
        }

        return false;
    }


    protected function saveToDb()
    {
        $conn = DbConfig::getConnection();

        // Check connection
        if ($conn->connect_error) {
            return false;
        }

        $userId = $_SESSION['user'];
        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO profile (email, firstName, lastName, phoneNumber, address, birthYear, occupation, state, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssi", $this->email, $this->firstName, $this->lastName, $this->phoneNumber, $this->address, $this->birthYear, $this->occupation, $this->state, $userId);

        return $stmt->execute();
    }
}
