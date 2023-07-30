<?php
// локальная БД
define('DBHOST','127.0.0.1');
define('DBNAME','logo_clinic');
define('DBUSER','root');
define('DBPWD','');

// БД
// define('DBHOST','localhost');
// define('DBNAME','d90618j6_logo');
// define('DBUSER','d90618j6_logo');
// define('DBPWD','8*rsC*PK');

$dbhost = DBHOST;
$dbname = DBNAME;
$dbuser = DBUSER;
$dbpassword = DBPWD;

$db = new PDO(
    "mysql:host=$dbhost;
        dbname=$dbname",
    $dbuser,
    $dbpassword
);


?>