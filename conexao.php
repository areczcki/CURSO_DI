<?php
$host = "localhost";
$db = "diservice";
$user = "root";
$password = "root";

$db = new \PDO("msql:host={$host};dbname={$db}",$user,$password);