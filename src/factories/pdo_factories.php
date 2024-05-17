<?php

class pdoFactory
{
    public static function connect()
    {
        $db = new PDO ('mysql:host=DB;dbname=robot_store', 'root', 'password');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $db;
    }
}

?>