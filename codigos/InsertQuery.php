<?php

namespace app\database\builder;

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
        var_dump($valores);
        die;
        $campos = implode(',', array_keys($valores));
        #$parametros = ':' . implode(',:', array_keys($valores));
        var_dump($campos);
        #var_dump($parametros);
        #$sql = "insert into {$this->table} ($campos) values ($parametros)";
    }
}
