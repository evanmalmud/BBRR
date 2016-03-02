<?php
class BBRRTeam {

    public static function get_team_race( $idRaces ) {

        $raceDefinitions[0] = "Amazon";
        $raceDefinitions[1] = "Chaos Dwarf";
        $raceDefinitions[2] = "Dwarf";          // CONFIRMED
        $raceDefinitions[3]  = "Chaos";
        $raceDefinitions[4]  = "Dark Elf";
        $raceDefinitions[5]  = "Elf";
        $raceDefinitions[6]  = "Goblin";
        $raceDefinitions[7]  = "Halfling";
        $raceDefinitions[8]  = "High Elf";
        $raceDefinitions[9]  = "Human";
        $raceDefinitions[10]  = "Khemri";
        $raceDefinitions[11]  = "Khorne Daemon";
        $raceDefinitions[12]  = "Lizardmen";
        $raceDefinitions[13]  = "Necromantic";
        $raceDefinitions[14]  = "Norse";
        $raceDefinitions[15]  = "Nurgle";
        $raceDefinitions[16]  = "Ogre";
        $raceDefinitions[17]  = "Orc";
        $raceDefinitions[18]  = "Skaven";
        $raceDefinitions[19]  = "Undead";
        $raceDefinitions[20]  = "Underworld";
        $raceDefinitions[21]  = "Vampire";
        $raceDefinitions[22]  = "Wood Elf";

        // Remember this is 0-indexed!
        if ( (int)$idRaces < count($raceDefinitions) )
            return $raceDefinitions[$idRaces];
        else
            return "Unknown team";

    }

}