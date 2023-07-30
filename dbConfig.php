<?php
// локальная БД
define('DBHOST','127.0.0.1');
define('DBNAME','logo_clinic');
define('DBUSER','root');
define('DBPWD','');


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