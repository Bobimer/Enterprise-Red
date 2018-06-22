<?php

    function db_connect() {
        try {
		$host = "localhost";
		$dbname = "greenings";
		$user = "root";
		$password = "root"; // ou $password = "";
		//$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
		$db = new PDO(
					"mysql:host=$host;dbname=$dbname", 
					$user, 
					$password, 
					array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::MYSQL_ATTR_DIRECT_QUERY=>true));
		return $db;
        }
        catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }