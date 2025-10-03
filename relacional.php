<?php

$pdo = new PDO(
    'pgsql:host=relacional;dbname=postgres', // string de conexão
    'postgres',
    'senha_postgres'
);

var_dump($pdo);
