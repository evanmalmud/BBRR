<?php
class BBRRTeam {

    public static function getTeamRace( $idRaces ) {

        $raceDefinitions[0]     = "Amazon";
        $raceDefinitions[1]     = "Human";          // CONFIRMED
        $raceDefinitions[2]     = "Dwarf";          // CONFIRMED
        $raceDefinitions[3]     = "Skaven";         // CONFIRMED
        $raceDefinitions[4]     = "Dark Elf";
        $raceDefinitions[5]     = "Elf";
        $raceDefinitions[6]     = "Goblin";
        $raceDefinitions[7]     = "Halfling";
        $raceDefinitions[8]     = "Chaos";          // CONFIRMED
        $raceDefinitions[9]     = "Chaos Dwarf";
        $raceDefinitions[10]    = "Khemri";
        $raceDefinitions[11]    = "Khorne Daemon";
        $raceDefinitions[12]    = "Norse";          // CONFIRMED
        $raceDefinitions[13]    = "Necromantic";
        $raceDefinitions[14]    = "Lizardmen";
        $raceDefinitions[15]    = "Nurgle";
        $raceDefinitions[16]    = "Ogre";
        $raceDefinitions[17]    = "Orc";
        $raceDefinitions[18]    = "High Elf";
        $raceDefinitions[19]    = "Undead";
        $raceDefinitions[20]    = "Underworld";
        $raceDefinitions[21]    = "Vampire";
        $raceDefinitions[22]    = "Wood Elf";

        // Remember this is 0-indexed!
        if ( (int)$idRaces >= 0 && (int)$idRaces < count( $raceDefinitions ) )
            return $raceDefinitions[$idRaces];
        else
            return "Unknown team";

    }

}
