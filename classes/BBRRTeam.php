<?php
class BBRRTeam {

    public static function getTeamRace( $idRaces ) {

        $raceDefinitions[0]     = "Stars";          // CONFIRMED
        $raceDefinitions[1]     = "Human";          // CONFIRMED
        $raceDefinitions[2]     = "Dwarf";          // CONFIRMED
        $raceDefinitions[3]     = "Skaven";         // CONFIRMED
        $raceDefinitions[4]     = "Chaos Dwarf";
        $raceDefinitions[5]     = "Elf";
        $raceDefinitions[6]     = "Goblin";
        $raceDefinitions[7]     = "Necromantic";
        $raceDefinitions[8]     = "Chaos";          // CONFIRMED
        $raceDefinitions[9]     = "Dark Elf";       // CONFIRMED
        $raceDefinitions[10]    = "Khemri";
        $raceDefinitions[11]    = "Halflings";      // CONFIRMED
        $raceDefinitions[12]    = "Norse";          // CONFIRMED
        $raceDefinitions[13]    = "Amazon";         // CONFIRMED
        $raceDefinitions[14]    = "Lizardmen";  
        $raceDefinitions[15]    = "Nurgle";
        $raceDefinitions[16]    = "Ogre";
        $raceDefinitions[17]    = "Orc";
        $raceDefinitions[18]    = "High Elf";
        $raceDefinitions[19]    = "Undead";
        $raceDefinitions[20]    = "Underworld";
        $raceDefinitions[21]    = "Vampire";
        $raceDefinitions[22]    = "Wood Elf";
	$raceDefinitions[22]    =  "Khorne Daemon";

        // Remember this is 0-indexed!
        if ( (int)$idRaces >= 0 && (int)$idRaces < count( $raceDefinitions ) )
            return $raceDefinitions[$idRaces];
        else
            return "Unknown team";

    }

}
