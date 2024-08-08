<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

// Definindo os campos e valores a serem inseridos
$fieldsAndValues = [
    'nome'          => 'pablo',
    'cpf'          => '000-000-000-00',
    'rg'          => '000-000-000-00',
    'data_nascimento' => '2001/11/11'
];
// Executando a query de inserção
InsertQuery::table('aluno')->save($fieldsAndValues);

$disciplina = [

    'nome' => 'carlos',
    'ativo' => 'true'
];

InsertQuery::table('disciplina')->save($disciplina);

$turma = [

    'quantidades_de_alunos' => '10',
    'data_de_inicio' => '2001.11.11',
    'data_de_fim' => '2001.11.11'
];

InsertQuery::table('turma')->save($turma);


$empresa = [

    'nome_fantasia' => 'pablo',
    'cnpj' => '2001-11-11',
    'inscricao_estadual' => '2001-11-11',
    'data_de_nascimento' => '2001-11-11'
];

InsertQuery::table('empresa')->save($empresa);



