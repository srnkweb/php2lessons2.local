<?php

namespace App;

abstract class Model
{
    const string SQL = '';

    public static function FindAll()
    {
        $db = Db::getInstance();
        return $db->query(
            static::SQL, static::class
        );
    }

    public static function findById()
    {
        $db = Db::getInstance();
        return $db->queryById(static::SQL, static::class);

    }


}