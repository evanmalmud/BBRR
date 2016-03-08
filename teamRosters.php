<?php
require_once("classes/global_class_include.php");
require_once("inc/functions.php");

showReplayDropdown();

if ( isset( $_REQUEST["replayFile"] ) ) {

    $myDB = new SQLiteDB( "replays/" . $_REQUEST["replayFile"] );
    if ( isset( $myDB->error ) )
        die( $myDB->error );

    showTeamData( "Home" );
    showTeamData( "Away" );

}

/******************************************************************************************
 ******************************************************************************************
 ******************************************************************************************
 ******************************************************************************************
 */

/**
 * @param string $strTeamType
 */
function showTeamData( $strTeamType = "Home" )
{
    global $myDB;

    echo "<h3>$strTeamType team</h3>";

    $query = "SELECT ID, strName, idRaces FROM " . $strTeamType . "_Player_Listing";
    $result = $myDB->query( $query );

    if ( ! $result ) {
        echo "Empty result";
        return;
    }

    $arrResult = $result->fetchAll();
    $strTeamRace = BBRRTeam::getTeamRace( $arrResult[0]["idRaces"] );

    foreach ( $arrResult as $row ) {
        $intPlayerID   = $row["ID"];
        $strName        = $row["strName"];

        echo "<strong>$strTeamRace</strong>: player $intPlayerID : $strName<br>";
    }

}