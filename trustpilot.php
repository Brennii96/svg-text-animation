<?php

$host = 'localhost';
$db   = 'bpuk';
$user = 'root';
$pass = '';

$businessUnitId = 'businessunitid';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8";

$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
);

$pdo = new PDO($dsn, $user, $pass, $opt);

$trustpilot = file_get_contents('https://widget.trustpilot.com/base-data?businessUnitId='.$businessUnitId.'&locale=en-GB&includeReviews=true&reviewsPerPage=5&reviewStars=5');

$trustpilot = utf8_decode( $trustpilot );

$stmt = $pdo->prepare("UPDATE trustpilot SET `value` = ?");
$stmt->execute(array( $trustpilot ));
