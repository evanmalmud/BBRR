<?php
require_once("classes/global_class_include.php");
require_once("inc/functions.php");

showLogFileDropdown();

if ( isset( $_REQUEST["logFile"] ) ) {

    $arrLog = file( "replays/" . $_REQUEST["logFile"] );

    showBlockDice( "All" );
    //showBlockDice( "Home" );
    //showBlockDice( "Away" );

}

/******************************************************************************************
 ******************************************************************************************
 ******************************************************************************************
 ******************************************************************************************
 */

/**
 * @param string $strTeamType
 */
function showBlockDice( $strTeamType = "All" )
{
    global $arrLog;

    echo "<h3>Block Dice for $strTeamType</h3>";

    foreach ($arrLog as $line) {
        if ( isBlockResult( $line ) ) {
            echo $line . "<br>";
        }
    }

}

function isBlockResult( $line ) {
    if ( substr( $line, 0, 1 ) == "[" )
        return true;
    else
        return false;
}