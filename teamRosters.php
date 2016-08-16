<?php
require_once("classes/global_class_include.php");
require_once("inc/functions.php");
require_once("inc/dbParse.php");
echo '<link href="css/tables.css" rel="stylesheet">';
echo '<a href="/BBRR/">Home</a>';

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

    $arrResult = completePlayers( $myDB , $strTeamType);
    //$strTeamRace = BBRRTeam::getTeamRace( $arrResult[0]["idRaces"] );

echo '<table cellpadding="0" cellspacing="0" class="db-table">';
echo '<tr>	<th>Number</th>
		<th>Race</th>
		<th>Position</th>
		<th>Name</th>
		<th>MA</th>
		<th>STR</th>
		<th>AG</th>
		<th>AV</th>
		<th>Level</th>
		<th>SPP</th>
		<th>Value</th>
		<th>Skills</th></tr>';

    foreach ( $arrResult as $row ) {
	echo '<tr>';
        //$intPlayerNumber = $row["iNumber"];
	echo '<td>',$row["Number"],'</td>';

        //$intPlayerID   = $row["ID"];
	
	echo '<td>',BBRRTeam::getTeamRace($row["idRaces"]),'</td>';

	//$strPosition   = BBRRPlayers::getPlayer ($row["idPlayer_Types"] );
	echo '<td>',BBRRPlayers::getPlayer ($row["idPlayer_Types"] ),'</td>';

        //$strName        = $row["strName"];	
	echo '<td>',$row["strName"],'</td>';

       // $intPlayerMA  = $row["Characteristics_fMovementAllowance"];
	echo '<td>',$row["MovementAllowance"],'</td>';
        //$intPlayerSTR  = $row["Characteristics_fStrength"];
	echo '<td>',$row["Strength"],'</td>';
        //$intPlayerAG  = $row["Characteristics_fAgility"];
	echo '<td>',$row["Agility"],'</td>';
        //$intPlayerAV  = $row["Characteristics_fArmourValue"];
	echo '<td>',$row["ArmourValue"],'</td>';

        //$intPlayerLevel  = $row["idPlayer_Levels"];
	echo '<td>',$row["idPlayer_Levels"],'</td>';

        //$intPlayerSPP  = $row["iExperience"];
	echo '<td>',$row["iExperience"],'</td>';

       // $intPlayerValue  = $row["iValue"];
	echo '<td>',$row["iValue"],'</td>';

	echo '<td>';
	foreach ( $row["Skills"] as $skill) {
          echo '( ',BBRRSkills::getSkill($skill),', ',$skill,'), ';
	}
	echo '</td>';
	echo '</tr>';
    }
echo '</table><br />';

}
