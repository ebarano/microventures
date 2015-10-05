<?php namespace database;

use Aura\SqlQuery\QueryFactory;
use Aura\Sql\ExtendedPdo;

$query_factory = new QueryFactory('sqlite');

$pdo = new ExtendedPdo('sqlite:database.sqlite');
$pdo->connect();

?>