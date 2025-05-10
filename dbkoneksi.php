<?php
//1)variable untuk koneksi database
$host = "localhost";
$dbname = "dbservice_kendaraan";
$username = "root";
$password = "";
$charset = "utf8mb4";

//2)Buat DSN dan opsi akses database
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$opsions = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
    ];

try {
    $db = new PDO($dsn, $username, $password, $opsions);
 } catch (\Throwable $th) {
    echo "Database not connected" . $th;
 } 