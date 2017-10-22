<?php
	if(isset($_POST["delete"])) {
		$name = $_POST["name"];
		$type = $_POST["type"]
        $rowsAffected = $db->exec(delete($name, $type));
        if($rowsAffected == 0) {
            notFound($name, $type);
        } elseif($rowsAffected == 1) {
            removeSuccess($name, $type);
        }
	}
>