<?php

namespace App;

use PDO;

class Db extends Config
{
    private object $dbh;
    protected function __construct()
    {
        parent::__construct();
        $this->dbh = new PDO(
                             parent::$data['db']['host'],
                             parent::$data['db']['user_name'],
                             parent::$data['db']['pass']
                            );
    }

    public function execute($sql, $sqlParams = [])
    {
        $sth = $this->dbh->prepare($sql, $sqlParams);
        return $sth->execute();
    }

    public function query($sql, $class)
    {
        $sth = $this->dbh->prepare($sql);

        $res = $sth->execute();
        if (false !== $res){
            return $sth->fetchAll(PDO::FETCH_CLASS, $class);
        }
        return [];
    }

    public function queryById($sql, $class)
    {
        $id = $_GET['id'];
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':id', $id,PDO::PARAM_INT  );
        $res = $stmt->execute();
        if (false !== $res){
            return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}