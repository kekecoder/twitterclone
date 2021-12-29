<?php

$dsn = 'mysql:host=localhost; dbname=twitter';
$user = 'root';
$pass = 'jerusalem1991';

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (Error $e) {
    print "An error occured " . $e->getMessage();
}
