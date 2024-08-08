<?php

namespace app\database\builder;

use app\database\Connection;

class InsertQuery
{
    private static $table;

    public static function table(string $tableName = '')
    {
        $classe_atual = new self;
        $classe_atual->table = $tableName;
        return $classe_atual;
    }

    public function save(array $valores = [])
    {

        try {
            $campos = implode(',', array_keys($valores));
            $parametros = ':' . implode(',:', array_keys($valores));
            #var_dump($campos);
            #var_dump($parametros);
            $sql = "insert into {$this->table} ({$campos}) values ({$parametros});";
            $con = Connection::open();
            $prepare = $con->prepare($sql);
            return $prepare->execute($valores);
        } catch (\PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}
