<?php

namespace App\Models;


use App\Db;

class User
{
    protected static $table = 'users';

    public $id;
    public $login;
    public $email;
    public $password;

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . self::$table;
        $db = new Db;
        return $db->query($sql, [], self::class);
    }
}