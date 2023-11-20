<?php

namespace FrameWork\Database;

use PDO;

//2usages
class Connection
{
    //1usage
    public static function make ($config)
    {
        try{
            return new PDO(
                $config["databasetype"].":host=" . $config["host"].";dbname" . $config["name"],$config["user"], $config["password"]);
        } catch (\Exception $e) {
            echo "Error de connexió a la base de dades ";
        }
    }
}