<?php
	error_reporting(E_ALL);
    $db = new PDO("mysql:dbname=hw7;host=localhost;charset=utf8", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    header("Content-Type: application/json");
    date_default_timezone_set('America/Los_Angeles');

    function insert($name, $bio, $type, $sex, $field, $email) {
    	return "INSERT INTO $type
           	(name, bio, sex, field, email)
       	VALUES
           	('$name', '$bio', '$sex', '$field', '$email')";
    }

    function delete($name, $type) {
        return "DELETE FROM $type
            WHERE name = '$name'";
    }

    function removeSuccess($name, $type) {
        print(json_encode(["success" => "Success! $name removed from your $type!"]));
    }
    
    function notFound($name, $type) {
        header("HTTP/1.1 400 Bad request");
        print(json_encode(["error" => "Error: $type $name not found in your database."]));
    }
>