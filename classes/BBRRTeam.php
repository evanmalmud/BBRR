<?php
class BBRRTeam {

    public static function getTeamRace( $idRaces ) {

        $raceDefinitions[0]     = "Star Player";
        $raceDefinitions[1]     = "Human";
        $raceDefinitions[2]     = "Dwarf";
        $raceDefinitions[3]     = "Skaven";
        $raceDefinitions[4]     = "Orc";
        $raceDefinitions[5]     = "Lizardmen";
        $raceDefinitions[6]     = "Goblin";
        $raceDefinitions[7]     = "Wood Elf";
        $raceDefinitions[8]     = "Chaos";
        $raceDefinitions[9]     = "Dark Elf";
        $raceDefinitions[10]    = "Undead";      
        $raceDefinitions[11]    = "Halflings";
        $raceDefinitions[12]    = "Norse";
        $raceDefinitions[13]    = "Amazon";
        $raceDefinitions[14]    = "Elf";
        $raceDefinitions[15]    = "High Elf";
        $raceDefinitions[16]    = "Khemri";
        $raceDefinitions[17]    = "Necromantic";
        $raceDefinitions[18]    = "Nurgle";
        $raceDefinitions[19]    = "Ogre";
        $raceDefinitions[20]    = "Vampire";
        $raceDefinitions[21]    = "Choas Dwarf"; 
        $raceDefinitions[22]    = "Underworld";     
        $raceDefinitions[23]    = "Khorne Daemons"; 


        // Remember this is 0-indexed!
        if ( (int)$idRaces >= 0 && (int)$idRaces < count( $raceDefinitions ) )
            return $raceDefinitions[$idRaces];
        else
            return "UNKNOWN TEAM";

    }

}
