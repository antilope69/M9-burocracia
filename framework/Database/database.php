<?php

use PDO;

//2 usages

class Database

{

    //2 usages
    protected $pdo;

    //1 usage
    protected $pdo;

    //1 usage
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    //no usages
    public function selectAll($table)
    {

        $statement = $this->pdo->preapre("SELECT * FROM $table;");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);