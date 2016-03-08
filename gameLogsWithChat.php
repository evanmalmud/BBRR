<?php
require_once("classes/global_class_include.php");
require_once("inc/functions.php");

showLogFileDropdown();

if ( isset( $_REQUEST["logFile"] ) ) {

    $arrLog = file( "replays/" . $_REQUEST["logFile"] );

    showGameLog();

}

/******************************************************************************************
 ******************************************************************************************
 ******************************************************************************************
 ******************************************************************************************
 */

/**
 *
 */
function showGameLog()
{
    global $arrLog;

    echo "<h3>Viewing Game Log: " . $_REQUEST["logFile"] . "</h3>";

    foreach ($arrLog as $line) {
        if ( isGameLog( $line ) )
            echo $line . "<br />";
        elseif ( isChat( $line ) )
            echo "<span style=\"color: #f00;\">" . $line . "</span><br />";
        elseif ( isBlockResult( $line ) )
            echo "<span style=\"font-weight: bold;\">" . $line . "</span><br />";
    }

}

function isGameLog( $line ) {
    if ( substr( $line, 0, 14 ) == " |  | GameLog(" )
        return true;
    else
        return false;
}

function isChat( $line ) {
    if ( substr( $line, 0, 11 ) == " |  | Chat:" )
        return true;
    else
        return false;
}

function isBlockResult( $line ) {
    if ( substr( $line, 0, 1 ) == "[" )
        return true;
    else
        return false;
}