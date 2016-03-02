<?php
require_once("classes/global_class_include.php");

$myDB = new sqliteDB("replays/Replay_2016-02-24_21-12-09.db");

$query = "SELECT ID, strName FROM Home_Player_Listing";
$result = $myDB->q($query);

foreach ($result as $row) {
    echo $row["ID"] . ": " . $row["strName"] . "<br>";
}
