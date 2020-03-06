<?php

namespace app;

/**
 * Description of DbConfig
 *
 * @author osi
 */
class DbConfig
{
    const HOST = "localhost";
    const USERNAME = "root";
    const PASSWORD = "";
    const DB_NAME = "tractoronthego_db";



    public static function getConnection()
    {
        return new \mysqli(self::HOST, self::USERNAME, self::PASSWORD, self::DB_NAME);
    }
}
