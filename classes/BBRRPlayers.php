<?php
class BBRRPlayers {

    public static function getPlayer( $playerid ) {

        $playerDefinitions[0]     = "0";      	//FIX
        //HUMAN     
        $playerDefinitions[1]     = "Lineman";
        $playerDefinitions[2]     = "Catcher";      
        $playerDefinitions[3]     = "Thrower";      
        $playerDefinitions[4]     = "Blitzer";      
        $playerDefinitions[5]     = "Ogre";      
        //DWARF
        $playerDefinitions[6]     = "Blocker";      
        $playerDefinitions[7]     = "Runner";      
        $playerDefinitions[8]     = "Blitzer";      
        $playerDefinitions[9]     = "Troll Slayer";      
        $playerDefinitions[10]     = "Deathroller"; 
        //WOOD ELF     
        $playerDefinitions[11]     = "Wardancer";      
        $playerDefinitions[12]     = "Thrower";      
        $playerDefinitions[13]     = "Catcher";      
        $playerDefinitions[14]     = "Treemen";      
        $playerDefinitions[15]     = "Linemen";      
        //SKAVEN      
        $playerDefinitions[16]     = "Lineman";
        $playerDefinitions[17]     = "Thrower";      
        $playerDefinitions[18]     = "Gutter Runner";      
        $playerDefinitions[19]     = "Blitzer";      
        $playerDefinitions[20]     = "Rat Ogre";     
	//ORC
        $playerDefinitions[21]     = "Lineman";
        $playerDefinitions[22]     = "Goblin"; 
        $playerDefinitions[23]     = "Thrower";  
        $playerDefinitions[24]     = "Black Orc"; 
        $playerDefinitions[25]     = "Blitzer";
        $playerDefinitions[26]     = "Troll";
        //LIZARDMEN    
        $playerDefinitions[27]     = "Skink";      
        $playerDefinitions[28]     = "Saurus";      
        $playerDefinitions[29]     = "Kroxigor";      
        //GOBLIN Part 1
        $playerDefinitions[30]     = "Goblin";      
        $playerDefinitions[31]     = "Looney";      
        //CHAOS
        $playerDefinitions[32]     = "Beastmen";     
        $playerDefinitions[33]     = "Choas Warrior";
        $playerDefinitions[34]     = "Minotaur";

        $playerDefinitions[35]     = "35";     	//FIX
        $playerDefinitions[36]     = "Champion Garshnak";      
        $playerDefinitions[37]     = "Champion Griff";      
        $playerDefinitions[38]     = "Champion Grim";      
        $playerDefinitions[39]     = "Champion HeadSpliter";      
        $playerDefinitions[40]     = "Champion Jordell";      
        $playerDefinitions[41]     = "Champion Ripper";      
        $playerDefinitions[42]     = "Champion Slibli";      
        $playerDefinitions[43]     = "Champion Varag";    
	//GOBLIN Part 2  
        $playerDefinitions[44]     = "Troll";      
        $playerDefinitions[45]     = "Fanatic";      
        $playerDefinitions[46]     = "Pogoer";
	//DARK ELF      
        $playerDefinitions[47]     = "Lineman";      
        $playerDefinitions[48]     = "Runners";       
        $playerDefinitions[49]     = "Assassin";     
        $playerDefinitions[50]     = "Blitzer";      
        $playerDefinitions[51]     = "Witch Elf";     
        //
        $playerDefinitions[52]     = "Champion Horkon";      
        $playerDefinitions[53]     = "Champion Morg";    
        //UNDEAD  
        $playerDefinitions[54]     = "Skeleton";
        $playerDefinitions[55]     = "Zombie";
        $playerDefinitions[56]     = "Ghoul";  
        $playerDefinitions[57]     = "Wight";   
        $playerDefinitions[58]     = "Mummy";
        //   
        $playerDefinitions[59]     = "Champion Count Luthor con Drakenborg";
	//HALFLING      
        $playerDefinitions[60]     = "Halfling";      
        $playerDefinitions[61]     = "Treeman";      
	//NORSE
        $playerDefinitions[62]     = "Linemen";
        $playerDefinitions[63]     = "Thrower";
        $playerDefinitions[64]     = "Runner"; 
        $playerDefinitions[65]     = "Berzerkers";
        $playerDefinitions[66]     = "Werewolves";
        $playerDefinitions[67]     = "Yhetee";
	//AMAZON
        $playerDefinitions[68]     = "Linewoman";
        $playerDefinitions[69]     = "Thrower";
        $playerDefinitions[70]     = "Catcher";
        $playerDefinitions[71]     = "Blitzer";
        //ELF
        $playerDefinitions[72]     = "Lineman";
        $playerDefinitions[73]     = "Thrower";
        $playerDefinitions[74]     = "Catcher";
        $playerDefinitions[75]     = "Blitzer";
        $playerDefinitions[76]     = "76";	//FIX
        //HIGH ELF
        $playerDefinitions[77]     = "Lineman";
        $playerDefinitions[78]     = "Thrower";
        $playerDefinitions[79]     = "Catcher";
        $playerDefinitions[80]     = "Blitzer";
        //KHEMRI
        $playerDefinitions[81]     = "Skeleton";
        $playerDefinitions[82]     = "Throw-Ra";
        $playerDefinitions[83]     = "Blitz-Ra";
        $playerDefinitions[84]     = "Tomb Guardian";
        $playerDefinitions[85]     = "85";	//FIX
        //NECROMANTIC
        $playerDefinitions[86]     = "Zombie";
        $playerDefinitions[87]     = "Ghoul";
        $playerDefinitions[88]     = "Wight";
        $playerDefinitions[89]     = "Flesh Golem";
        $playerDefinitions[90]     = "Werewolf";
        //NURGLE
        $playerDefinitions[91]     = "Rotter";
        $playerDefinitions[92]     = "Pestigor";
        $playerDefinitions[93]     = "Nurgle Warriror";
        $playerDefinitions[94]     = "Beast of Nurgle";
        //OGRE
        $playerDefinitions[95]     = "Ogre";
        $playerDefinitions[96]     = "Snotling";

        $playerDefinitions[97]     = "97";	//FIX
        //VAMPIRE
        $playerDefinitions[98]     = "Vampire";
        //
        $playerDefinitions[99]     = "Champion Zara";
        $playerDefinitions[100]     = "Champion Scrappa";
        $playerDefinitions[101]     = "Champion Eldril";
        $playerDefinitions[102]     = "Champion Borak";
        $playerDefinitions[103]     = "Champion Deeproot Strongbranch";
        $playerDefinitions[104]     = "Champion Nekbrekerekh";
        $playerDefinitions[105]     = "Champion Ramtut";
        $playerDefinitions[106]     = "Champion Hammerblow";
        //GOBLIN Part 3
        $playerDefinitions[107]     = "Bombardier";
        //CHAOS DWARF
        $playerDefinitions[108]     = "Hobgoblin";
        $playerDefinitions[109]     = "Choas Dwarf Blocker";
        $playerDefinitions[110]     = "Bull Centaur";
        $playerDefinitions[111]     = "Minotaur";
        //
        $playerDefinitions[112]     = "112";	//FIX
        $playerDefinitions[113]     = "113";	//FIX
        $playerDefinitions[114]     = "114";	//FIX
        $playerDefinitions[115]     = "115";	//FIX
        $playerDefinitions[116]     = "116";	//FIX
        $playerDefinitions[117]     = "117";	//FIX
        $playerDefinitions[118]     = "118";	//FIX
        $playerDefinitions[119]     = "119";	//FIX
        $playerDefinitions[120]     = "120";	//FIX
        $playerDefinitions[121]     = "121";	//FIX
        $playerDefinitions[122]     = "122";	//FIX
        //UNDERWORLD
        $playerDefinitions[123]     = "Underworld Goblin";
        $playerDefinitions[124]     = "Skaven Lineman";
        $playerDefinitions[125]     = "Skaven Thrower";
        $playerDefinitions[126]     = "Skaven Blitzer";
        $playerDefinitions[127]     = "Warpstone Troll";
        $playerDefinitions[128]     = "128";	//FIX
        $playerDefinitions[129]     = "129";	//FIX
        //KHORNE DAEMONS
        $playerDefinitions[130]     = "Khorne Herald";
        $playerDefinitions[131]     = "Bloodletter Daemon";
        $playerDefinitions[132]     = "Bloodthirster";
        $playerDefinitions[133]     = "Champion Bomber Dribblesnot";
        $playerDefinitions[134]     = "Champion Zzharg Madeye";


        // Remember this is 0-indexed!
        if ( (int)$playerid >= 0 && (int)$playerid < count( $playerDefinitions ) )
            return $playerDefinitions[$playerid];
        else
            return "UNKNOWN PLAYER";

    }

}
