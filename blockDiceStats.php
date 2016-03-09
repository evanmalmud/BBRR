<?php
require_once("classes/global_class_include.php");
require_once("inc/functions.php");

showLogFileDropdown();

if ( isset( $_REQUEST["logFile"] ) ) {

    $arrLog = file( "replays/" . $_REQUEST["logFile"] );
    $arrTeams;

    showBlockDice();

}

/******************************************************************************************
 ******************************************************************************************
 ******************************************************************************************
 ******************************************************************************************
 */

/**
 *
 */
function showBlockDice()
{
    global $arrLog;
    global $arrTeams;

    $lastLine = "";
    $foundTeams = false;

    echo "<h3>Block Dice</h3>";

    foreach ($arrLog as $line) {

        if ( ( ! $foundTeams ) && isTeamVsTeamDeclaration( $line ) ) {
            $team1 = getTeam1FromTeamDeclaration($line);
            $team2 = getTeam2FromTeamDeclaration($line);

            initializeBlockDiceStats($team1, $team2);

            $foundTeams = true;

        } elseif ( isBlockResult( $line ) ) {
            trackBlockDice($line, $lastLine);
        }
        $lastLine = $line;
    }

    // Now display the block dice data from the teams array
    foreach ($arrTeams as $team) {

        $teamName                   = $team["Name"];

        $totalDice                  = $team["attacker down"] + $team["both down"] + $team["pushed"] + $team["defender stumbles"] + $team["defender down"];

        $attackerDown               = $team["attacker down"];
        $bothDown                   = $team["both down"];
        $pushed                     = $team["pushed"];
        $defenderStumbles           = $team["defender stumbles"];
        $defenderDown               = $team["defender down"];
        $doubleSkulls               = $team["double skulls"];
        $doublePows                 = $team["double pows"];

        $attackerDownAverage        = round( $totalDice / 6, 2 );
        $bothDownAverage            = round( $totalDice / 6, 2 );
        $pushedAverage              = round( $totalDice / 3, 2 );              // Remember there are 2x as many chances to roll a Push
        $defenderStumblesAverage    = round( $totalDice / 6, 2 );
        $defenderDownAverage        = round( $totalDice / 6, 2 );

        $attackerClass              = $attackerDown >= $attackerDownAverage ? "green" : "red";
        $bothDownClass              = $bothDown >= $bothDownAverage ? "green" : "red";
        $pushedClass                = $pushed >= $pushedAverage ? "green" : "red";
        $defenderStumblesClass      = $defenderStumbles >= $defenderStumblesAverage ? "green" : "red";
        $defenderDownClass          = $defenderDown >= $defenderDownAverage ? "green" : "red";
        $doubleSkullsClass          = $doubleSkulls > 0 ? "red" : "green";
        $doublePowsClass            = $doublePows > 0 ? "green" : "black";

        echo "<h3>" . $teamName . "</h3>";
        echo "<ul>";
        echo "<li style=\"color:" . $attackerClass . "\">Attacker Down: " . $attackerDown . " (avg " . $attackerDownAverage . ")</li>";
        echo "<li style=\"color:" . $bothDownClass . "\">Both Down: " . $bothDown . " (avg " . $bothDownAverage . ")</li>";
        echo "<li style=\"color:" . $pushedClass . "\">Pushed: " . $pushed . " (avg " . $pushedAverage . ")</li>";
        echo "<li style=\"color:" . $defenderStumblesClass . "\">Defender Stumbles: " . $defenderStumbles . " (avg " . $defenderStumblesAverage . ")</li>";
        echo "<li style=\"color:" . $defenderDownClass . "\">Defender Down: " . $defenderDown . " (avg " . $defenderDownAverage . ")</li>";
        echo "<li style=\"color:" . $doubleSkullsClass . "\">Double Skulls: " . $doubleSkulls . "</li>";
        echo "<li style=\"color:" . $doublePowsClass . "\">Double Pows: " . $doublePows . "</li>";
        echo "<li>TOTAL DICE: " . $totalDice . "</li>";
        echo "</ul>";
    }

}
