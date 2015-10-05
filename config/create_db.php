<?php

require '../vendor/autoload.php';

use Aura\Sql\ExtendedPdo;

$pdo = new ExtendedPdo('sqlite:../database.sqlite');

$pdo->exec('CREATE TABLE records (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE, animal_type TEXT,  animal_name TEXT, animal_age INTEGER, timestamp NUMERIC);');

if (file_exists('../database.sqlite'))
{
    echo 'Database and tables created.';
}
else
{
    echo 'Database was not created. Please check to make sure this directory is writeable.';
}
?>