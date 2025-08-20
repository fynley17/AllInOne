<?php
$host = 'plesk.remote.ac';
$db = 'WS381211_AllInOne';
$user = 'WS381211_AllInOne';
$pass = 'z%yI6f5kV0wv~qlT';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Connected to MySQL successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
