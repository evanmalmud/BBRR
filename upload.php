<html>
<head>
<title>Process Uploaded File</title>
</head>
<body>

<?php
//Need php.ini file_uploads=on
//sudo chown apache:apache -R /var/www/html/BBRR
//cd /var/www/html/BBRR
//# File permissions, recursive
//find . -type f -exec chmod 0644 {} \;
//# Dir permissions, recursive
//find . -type d -exec chmod 0755 {} \;
//# SELinux serve files off Apache, resursive
//sudo chcon -t httpd_sys_content_t /var/www/html/BBRR -R
//# Allow write only to specific dirs
//sudo chcon -t httpd_sys_rw_content_t /var/www/html/BBRR/replays -R

define("UPLOAD_DIR", "replays/");
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
