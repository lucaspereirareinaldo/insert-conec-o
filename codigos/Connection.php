<?php

namespace app\database;

use PDO;

class Connection
{
    #Variavel de conexão com banco de dados.
    private static $pdo = null;
    public static function open()
    {
        #verifica se a conexão já existe e rotorna se sim
        if (static::$pdo) {
            return static::$pdo;
        }
        #Define as opçoes de conexão
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_PERSISTENT =>false,
            PDO::ATTR_STRINGIFY_FETCHES => false,
           
        ];
        try {
            $dsn ='pgsql:host=localhost;port=5432;dbname=ativdadeSC';

            static::$pdo = new PDO($dsn,'senaccurso','senaccurso2',$options);

            static::$pdo->exec("set NAMES 'utf8'");
            return static::$pdo;
        }catch(\PDOException $e) {
              throw new \PDOException("restrição:" . $e ->getMessage(),1);
        }
        }
    }