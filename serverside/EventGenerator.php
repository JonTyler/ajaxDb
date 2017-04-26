<?php
/**
 * Created by PhpStorm.
 * User: Jon
 * Date: 2017-04-26
 * Time: 2:32 PM
 * Generates events from the database.
 */
namespace Database;
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
require_once "DatabaseManager.php";
$db = new DatabaseManager();
$sql = "SELECT CURTIME()";
$conn = $db->getConn();
try {
    foreach ($conn->query($sql) as $row) {
        echo "data: {$row[0]}";
    }
} catch (\PDOException $e) {
    echo "data: Error occurred: " . $e->getMessage();
}
flush();
