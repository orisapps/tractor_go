<?php

namespace app;

/**
 * Description of ContactForm
 *
 * @author KingStuffy
 */
class ContactForm 
{
    public function save($name, $email, $phoneNumber, $subject, $media, $message)
    {
        $conn = new \mysqli(DbConfig::HOST, DbConfig::USERNAME, DbConfig::PASSWORD, DbConfig::DB_NAME);

        // Check connection
        if ($conn->connect_error) {
            return false;
        }

        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO contact_form (name, email, phone_number, subject, media, message) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $email, $phoneNumber, $subject, $media, $message);
        
        return $stmt->execute();
    }
}
