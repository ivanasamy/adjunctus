<?php
	include 'index.php';
	$name = $_POST["name"];
	$bio = $_POST["bio"];
	$type = $_POST["type"];
	$sex = $_POST["sex"];
	$field = $_POST["field"];

	try {
        $rowsAffected = $db->exec(insert($name, $bio, $type, $sex, $field));
        print(json_encode(["success" => "Success! $name added to your $type!"]));
    } catch (PDOException $pdoex) {
        header("HTTP/1.1 400 Bad request");
        print(json_encode(["error" => "Error: $type $name already found."]));
    }
>