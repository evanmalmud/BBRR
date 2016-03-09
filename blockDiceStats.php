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
    global $arrTeams;

    echo "<h3>Block Dice</h3>";

    putDiceStatsInTeamObject();

    printDiceStats();

}

function putDiceStatsInTeamObject()
{
    global $arrLog;
    $lastLine = "";

    $foundTeams = false;

    foreach ($arrLog as $line) {

        if ((!$foundTeams) && isTeamVsTeamDeclaration($line)) {
            $team1 = getTeam1FromTeamDeclaration($line);
            $team2 = getTeam2FromTeamDeclaration($line);

            initializeBlockDiceStats($team1, $team2);

            $foundTeams = true;

        } elseif (isBlockResult($line)) {
            trackBlockDice($line, $lastLine);
        }
        $lastLine = $line;
    }
}

function printDiceStats()
{
    global $arrTeams;

    // Now display the block dice data from the teams array
    foreach ($arrTeams as $team) {

        $teamName = $team["Name"];

        $totalDice = $team["attacker down"] + $team["both down"] + $team["pushed"] + $team["defender stumbles"] + $team["defender down"];

        $attackerDownAvg = round($totalDice / 6, 2);
        $bothDownAvg = round($totalDice / 6, 2);
        $pushedAvg = round($totalDice / 3, 2);              // Remember there are 2x as many chances to roll a Push
        $defenderStumblesAvg = round($totalDice / 6, 2);
        $defenderDownAvg = round($totalDice / 6, 2);

        $attackerClass = $team["attacker down"] >= $attackerDownAvg ? "green" : "red";
        $bothDownClass = $team["both down"] >= $bothDownAvg ? "green" : "red";
        $pushedClass = $team["pushed"] >= $pushedAvg ? "green" : "red";
        $defenderStumblesClass = $team["defender stumbles"] >= $defenderStumblesAvg ? "green" : "red";
        $defenderDownClass = $team["defender down"] >= $defenderDownAvg ? "green" : "red";
        $doubleSkullsClass = $team["double skulls"] > 0 ? "red" : "green";
        $doublePowsClass = $team["double pows"] > 0 ? "green" : "black";

        echo "<h3>" . $teamName . "</h3>";
        echo "<ul>";
        echo "<li style=\"color:" . $attackerClass . "\">Attacker Down: " . $team["attacker down"] . " (avg " . $attackerDownAvg . ")</li>";
        echo "<li style=\"color:" . $bothDownClass . "\">Both Down: " . $team["both down"] . " (avg " . $bothDownAvg . ")</li>";
        echo "<li style=\"color:" . $pushedClass . "\">Pushed: " . $team["pushed"] . " (avg " . $pushedAvg . ")</li>";
        echo "<li style=\"color:" . $defenderStumblesClass . "\">Defender Stumbles: " . $team["defender stumbles"] . " (avg " . $defenderStumblesAvg . ")</li>";
        echo "<li style=\"color:" . $defenderDownClass . "\">Defender Down: " . $team["defender down"] . " (avg " . $defenderDownAvg . ")</li>";
        echo "<li style=\"color:" . $doubleSkullsClass . "\">Double Skulls: " . $team["double skulls"] . "</li>";
        echo "<li style=\"color:" . $doublePowsClass . "\">Double Pows: " . $team["double pows"] . "</li>";
        echo "<li>TOTAL DICE: " . $totalDice . "</li>";
        echo "</ul>";
    }
}