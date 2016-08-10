<?php
function parsePlayerListingDB($myDB, $strTeamType = "Home") {
  
  $query = "SELECT 	ID, 
			idPlayer_Names,
			strName, 
			idPlayer_Types, 
			idTeam_Listing,
		        idTeam_Listing_Previous,
			idRaces, 
			iPlayerColor,
			iSkinScalePercent,
			iSkinMeshVariant,
			iSkinTextureVariant,
			fAgeing, 
			iNumber, 
			Characteristics_fMovementAllowance, 
			Characteristics_fStrength, 
			Characteristics_fAgility, 
			Characteristics_fArmourValue, 
			idPlayer_Levels, 
			iExperience, 
			idEquipment_Listing_Helmet,
			idEquipment_Listing_Pauldron,
			idEquipment_Listing_Gauntlet,
			idEquipment_Listing_Boot,
			Durability_iHelmet,
			Durability_iPauldron,
			Durability_iGauntlet,
			Durability_iBoot,
			iSalary,
			Contract_iDuration,
			Contract_iSeasonRemaining,
			idNegotiation_Condition_Types,
			Negotiation_iRemainingTries,
			Negotiation_iConditionDemand,
			iValue,
			iMatchSuspended,
			iNbLevelsUp,
			LevelUp_iRollResult,
			LevelUp_iRollResult2,
			LevelUp_bDouble,
			bGenerated,
			bStar,
			bEdited,
			bDead,
			strLevelUp FROM " . $strTeamType . "_Player_Listing";
  $result = $myDB->query( $query );
  if ( ! $result ) {
    echo "Empty Player Listing";
    return;
  }
  $arrResult = $result->fetchAll();
  return $arrResult;
}

function parsePlayerSkillsDB($myDB, $strTeamType = "Home") {
  
  $query = "SELECT 	ID, 
			idPlayer_Listing,
			idSkill_Listing FROM " . $strTeamType . "_Player_Skills";
  $result = $myDB->query( $query );
  if ( ! $result ) {
    echo "Empty Player Skills";
    return;
  }
  $arrResult = $result->fetchAll();
  return $arrResult;
}

function parsePlayerTypeSkillsDB($myDB, $strTeamType = "Home") {
  
  $query = "SELECT 	ID, 
			idPlayer_Types,
			idSkill_Listing,
			DESCRIPTION FROM " . $strTeamType . "_Player_Type_Skills";
  $result = $myDB->query( $query );
  if ( ! $result ) {
    echo "Empty Player Type Skills";
    return;
  }
  $arrResult = $result->fetchAll();
  return $arrResult;
}

function parseRacesDB($myDB, $strTeamType = "Home") {
  
  $query = "SELECT 	ID, 
			DATA_CONSTANT,
			idString_Localized,
			idStrings_localized_Info,
			strName,
			iRerollPrice FROM " . $strTeamType . "_Races";
  $result = $myDB->query( $query );
  if ( ! $result ) {
    echo "Empty Races";
    return;
  }
  $arrResult = $result->fetchAll();
  return $arrResult;
}

function parseStatisticsSeasonPlayersDB($myDB, $strTeamType = "Home") {
  
  $query = "SELECT 	ID, 
			idPlayer_Listing,
			iSeason,
			iMatchPlayed,
			iMVP,
			Inflicted_iPasses,
			Inflicated_iCatches,
			Inflicated_iInterceptions,
			Inflicted_iTouchdowns,
			Inflicted_iCasualties,
			Inflicated_iTackles,
			Inflicted_iKO,
			Inflicted_iStuns,
			Inflicted_iInjuries,
			Inflicted_iDead,
			Inflicted_iMetersRunning,
			Inflicted_iMetersPassing,
			Sustained_iInterceptions,
			Sustained_iCasualties,
			Sustained_iTackles,
			Sustained_iKO, 
			Sustained_iStuns,
			Sustained_iInjuries,
			Sustained_iDead FROM " . $strTeamType . "_Statistics_Season_Players";
  $result = $myDB->query( $query );
  if ( ! $result ) {
    echo "Empty Statics Season Players";
    return;
  }
  $arrResult = $result->fetchAll();
  return $arrResult;
}

function parseStatisticsSeasonTeamDB($myDB, $strTeamType = "Home") {
  
  $query = "SELECT 	ID, 
			idTeam_Listing,
			iSeason,
			iMatchPlayed,
			iMVP,
			Inflicted_iPasses,
			Inflicated_iCatches,
			Inflicated_iInterceptions,
			Inflicted_iTouchdowns,
			Inflicted_iCasualties,
			Inflicated_iTackles,
			Inflicted_iKO,
			Inflicted_iInjuries,
			Inflicted_iDead,
			Inflicted_iMetersRunning,
			Inflicted_iMetersPassing,
			Sustained_iPasses,
			Sustained_iCatches,
			Sustained_iInterceptions,
			Sustained_iTouchdowns,
			Sustained_iCasualties,
			Sustained_iTackles,
			Sustained_iKO, 
			Sustained_iInjuries,
			Sustained_iDead,
			Sustained_iMetersRunning,
			Sustained_iMetersPassing,
			iPoints,
			iWins,
			iDraws,
			iLoss,
			iBestMatchRating,
			Average_iMatchRating,
			Average_iSpectators,
			Average_iCashEarned,
			iSpectators,
			iCashEarned,
			iPossessionBall,
			Occupation_iOwn,
			Occupation_iTheir FROM " . $strTeamType . "_Statistics_Season_Teams";
  $result = $myDB->query( $query );
  if ( ! $result ) {
    echo "Empty Statistics Season Teams";
    return;
  }
  $arrResult = $result->fetchAll();
  return $arrResult;
}

function parseTeamListingDB($myDB, $strTeamType = "Home") {
  
  $query = "SELECT 	ID, 
			strName, 
			idRaces, 
			strLogo,
			iTeamColor,
			strLeitmotiv,
			strBackground,
			iValue, 
			iPopularity, 
			iCash, 
			iCheerleaders,
			iBalms,
			bApothecary,
			iRerolls,
			bEdited,
			idTeam_Listing_Filters,
			idStrings_Formatted_Background,
			idStrings_Localized_Leitmotiv,
			iNextPurchase,
			iAssistantCoaches FROM " . $strTeamType . "_Team_Listing";
  $result = $myDB->query( $query );
  if ( ! $result ) {
    echo "Empty Team Listing";
    return;
  }
  $arrResult = $result->fetchAll();
  return $arrResult;
}

function completePlayers($myDB, $strTeamType = "Home") {
	$arrPlayerListing 	= parsePlayerListingDB($myDB, $strTeamType);
	$arrPlayerSkills 	= parsePlayerSkillsDB($myDB, $strTeamType);
	$arrPlayertypeSkills 	= parsePlayerTypeSkillsDB($myDB, $strTeamType);
	//$arrRaces 		= parseRacesDB($myDB, $strTeamType);
	//$arrPlayerStats 	= parseStatisticsSeasonPlayersDB($myDB, $strTeamType);

	$eightConst = 8.33;

$allPlayerData = array();

foreach ( $arrPlayerListing as $row) {
  //GET SKILLS
  $skills = array();
  foreach ($arrPlayertypeSkills as $line) {
    if($row["idPlayer_Types"] == $line["idPlayer_Types"]) {
      $skills[] = $line["idSkill_Listing"];
    }
  }
  foreach ($arrPlayerSkills as $line) {
    if($row["ID"] == $line["idPlayer_Listing"]) {
      $skills[] = $line["idSkill_Listing"];
    }
  //Characteristics
  $MA = intval(($row["Characteristics_fMovementAllowance"] - 50) / $eightConst + 6.1);
  $ST = intval(($row["Characteristics_fStrength"] - 50) / 10 + 3);
  $AG = intval(($row["Characteristics_fAgility"] - 50) /($eightConst*2) + 3.1);
  $AV = intval(($row["Characteristics_fArmourValue"] - (50 + $eightConst)) /10 + 7);
  //Get Race
  //$race = $arrRaces[1]["DATA_CONSTANT"];
  }
  $playerData =	array(
			"ID" => $row["ID"],
			"strName"=> $row["strName"], 
			"idPlayer_Types"=> $row["idPlayer_Types"], //int value for position
			"idRaces"=> $row["idRaces"], 
			"Ageing"=> $row["fAgeing"], 
			"Number"=> $row["iNumber"], 
			"MovementAllowance"=> $MA, 
			"Strength"=> $ST, 
			"Agility"=> $AG, 
			"ArmourValue"=> $AV, 
			"idPlayer_Levels"=> $row["idPlayer_Levels"], 
			"iExperience"=> $row["iExperience"], 
			"iValue"=> $row["iValue"],
			"bStar"=> $row["bStar"],	//Star Player?
			"bDead"=> $row["bDead"],
			"Skills" => $skills
		);	
  $allPlayerData[] = $playerData;
}

return $allPlayerData;

}


?>
