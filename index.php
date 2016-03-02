<?php
require_once("classes/global_class_include.php");

$myDB = new SQLiteDB("replays/Replay_2016-02-24_21-12-09.db");

if ( isset( $myDB->error ) )
    die( $myDB->error );

$query = "SELECT ID, strName, idRaces FROM Away_Player_Listing";
$result = $myDB->query($query);

if ( ! $result ) {
    echo "Empty result";
} else {

    $result_array = $result->fetchAll();
    $teamRace = BBRRTeam::get_team_race( $result_array[0]["idRaces"] );

    foreach ($result_array as $row) {
        echo "<strong>" . $teamRace . "</strong>: player " . $row["ID"] . ": " . $row["strName"] . "<br>";
    }
}
