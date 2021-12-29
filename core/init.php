<?php

include __DIR__ . "/database/connection.php";
include __DIR__ . "/classes/base.php";
include __DIR__ . "/classes/user.php";
include __DIR__ . "/classes/tweet.php";
include __DIR__ . "/classes/follow.php";

global $pdo;

session_start();

$getFromU = new User($pdo);
$getFromT = new Tweet($pdo);
$getFromF = new Follow($pdo);

define("BASE_URL", "http://localhost/twitter/");
