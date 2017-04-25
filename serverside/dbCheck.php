<?php
/**
 * Created by PhpStorm.
 * User: Jon
 * Date: 2017-04-25
 * Time: 1:43 PM
 */
namespace Database;
if($_SERVER["REQUEST_METHOD"] != "GET"){
    echo "Get is required to use this page";
}
require_once "DatabaseManager.php";
try {
    $databaseConn = new DatabaseManager();
    echo "Connection established";
    //close connection to save space
    $databaseConn->nullConn();
}
catch (\PDOException $e){
    echo "Error occured: " . $e->getMessage();
}
