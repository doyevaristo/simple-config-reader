<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__.'/../vendor/autoload.php';

use Doyevaristo\ConfigReader;

$config = ConfigReader::load(__DIR__.'/config/config-database.php');

/*
    Outputs: 

    Array
    (
        [database] => Array
            (
                [database_name] => my_creative_db
                [user] => root
                [pass] => root
                [hostname] => 127.0.0.1
            )

    )

    Note: Notice [database]. It is appended with the file name 'config-database.php'
*/
print_r($config);