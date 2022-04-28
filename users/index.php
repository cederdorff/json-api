<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Methods: *");
    header("Content-Type: application/json; charset=UTF-8");
    include_once("../classes/MySQL.php");

    $request_method = $_SERVER['REQUEST_METHOD'];
    $mySQL = new MySQL(true);

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $userId = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id = '$userId'";
        echo $mySQL->Query($sql, true);
    } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $sql = "SELECT * FROM users";
        echo $mySQL->Query($sql, true);
    }
?>