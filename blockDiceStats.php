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

        $skullAvg = round($totalDice / 6, 2);
        $bothDownAvg = round($totalDice / 6, 2);
        $pushedAvg = round($totalDice / 3, 2);              // Remember there are 2x as many chances to roll a Push
        $powBangAvg = round($totalDice / 6, 2);
        $powAvg = round($totalDice / 6, 2);

        $skullClass = $team["attacker down"] >= $skullAvg ? "green" : "red";
        $bothDownClass = $team["both down"] >= $bothDownAvg ? "green" : "red";
        $pushedClass = $team["pushed"] >= $pushedAvg ? "green" : "red";
        $powBangClass = $team["defender stumbles"] >= $powBangAvg ? "green" : "red";
        $powClass = $team["defender down"] >= $powAvg ? "green" : "red";
        $doubleSkullsClass = $team["double skulls"] > 0 ? "red" : "green";
        $doublePowsClass = $team["double pows"] > 0 ? "green" : "black";

        echo "<h3>" . $teamName . "</h3>";
        echo "<ul>";
        echo "<li style=\"color:" . $skullClass . "\">Attacker Down: " . $team["attacker down"] . " (avg " . $skullAvg . ")</li>";
        echo "<li style=\"color:" . $bothDownClass . "\">Both Down: " . $team["both down"] . " (avg " . $bothDownAvg . ")</li>";
        echo "<li style=\"color:" . $pushedClass . "\">Pushed: " . $team["pushed"] . " (avg " . $pushedAvg . ")</li>";
        echo "<li style=\"color:" . $powBangClass . "\">Defender Stumbles: " . $team["defender stumbles"] . " (avg " . $powBangAvg . ")</li>";
        echo "<li style=\"color:" . $powClass . "\">Defender Down: " . $team["defender down"] . " (avg " . $powAvg . ")</li>";
        echo "<li style=\"color:" . $doubleSkullsClass . "\">Double Skulls: " . $team["double skulls"] . "</li>";
        echo "<li style=\"color:" . $doublePowsClass . "\">Double Pows: " . $team["double pows"] . "</li>";
        echo "<li>TOTAL DICE: " . $totalDice . "</li>";
        echo "</ul>";
    }
}