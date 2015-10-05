<?php

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

// 10)
require __DIR__.'/vendor/autoload.php';
require 'config/database.php';

use Microventures\Dog;
use Microventures\Cat;

//11
$dog = new Dog("Santa's Little Helper",mt_rand(1,5));
$cat = new Cat('Snowball II',mt_rand(1,5));

//19
$insert = $query_factory->newInsert();
$insert->into('records')
    ->cols(array(
        'animal_type' => 'Dog',
        'animal_name' => $dog->name(),
        'animal_age' => $dog->age(),
        'timestamp' => date('Y-m-d h:i:sa')
    ));

// set up the second row
$insert->addRow();
$insert->cols(array(
    'animal_type' => 'Cat',
    'animal_name' => $cat->name(),
    'animal_age' => $cat->age(),
    'timestamp' => date('Y-m-d h:i:sa')
));
// prepare the statement
$sth = $pdo->prepare($insert->getStatement());
$sth->execute($insert->getBindValues());

// get the last insert ID
$name = $insert->getLastInsertIdName('id');
$id = $pdo->lastInsertId($name);

//12
print "{$dog->name()} is currently {$dog->age()} years old. \r\n";

//13
print "{$dog->name()} says {$dog->speak('meow')}? Nah, {$dog->name()} says {$dog->speak()}! Now {$dog->name()} is {$dog->age()}. \r\n";

//14
print "The cat's name is {$cat->name()}.\r\n";

//15
$cat->setName('Garfield');

//16
print "The cat's name has been changed to {$cat->name()}. The average length of the cat's name is {$cat->getAverageNameLength()}.\r\n";

// explicitly forces disconnection
$pdo->disconnect();
