<?php

namespace app;


/**
 * Description of ExtraInfo
 *
 * @author KingStuffy
 */
class ExtraInfo
{
    public $course;
    public $reason;
    public $todo;


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
        if ($this->course && $this->reason && $this->todo) {
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
        $stmt = $conn->prepare("INSERT INTO extra (course, reason, todo, user_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $this->course, $this->reason, $this->todo, $userId);

        return $stmt->execute();
    }
}
