<?php

namespace App;

class Config
{
    private static ?Config $instance = null;
    protected static array $data = ['db' => [
                                             'host' => 'mysql:host=mysql-8.4;dbname=php2lesson1',
                                             'user_name' => 'root',
                                             'pass' => ''
                                            ]
                                   ];
   protected function __construct()
    {

    }

    private function __clone()
    {

    }


    public static function getInstance(): static
    {
        if (null === static::$instance){
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function __wakeup(): never
    {
        throw new \RuntimeException('Отработка RuntimeException');
    }
}