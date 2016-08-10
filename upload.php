<html>
<head>
<title>Process Uploaded File</title>
</head>
<body>

<?php
//NEED /srv/uploads/ folder with correct permissions
//Need php.ini file_uploads=on
//Cant figure out permissions for upload to replays folder.

define("UPLOAD_DIR", "/srv/uploads/");
echo UPLOAD_DIR;
if (!empty($_FILES["uploadFile"])) {
	echo "inside";
    $myFile = $_FILES["uploadFile"];

    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
        exit;
    }

    // ensure a safe filename
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

    // don't overwrite an existing file
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }

    // preserve file from temporary directory
    $success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR . $name);
    if (!$success) { 
        echo "<p>Unable to save file.</p>";
        exit;
    }

    // set proper permissions on the new file
    chmod(UPLOAD_DIR . $name, 0644);
}

?>
