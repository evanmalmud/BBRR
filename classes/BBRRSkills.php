<?php
class BBRRSkills {

    public static function getSkill( $idSkill ) {

        $skillDefinitions[0]     = "0";      
        $skillDefinitions[1]     = "Strip Ball";      
        $skillDefinitions[2]     = "+1 in Strength";
        $skillDefinitions[3]     = "+1 in Agility";
        $skillDefinitions[4]     = "+1 Movement Allowance";      
        $skillDefinitions[5]     = "+1 in Armor Value";     
        $skillDefinitions[6]     = "Catch";      
        $skillDefinitions[7]     = "Dodge";      
        $skillDefinitions[8]     = "Sprint";      
        $skillDefinitions[9]     = "Pass Block";      
        $skillDefinitions[10]     = "Foul Appearance";      
        $skillDefinitions[11]     = "Leap";      
        $skillDefinitions[12]     = "Extra Arms";      
        $skillDefinitions[13]     = "Mighty Blow";      
        $skillDefinitions[14]     = "Leader";      
        $skillDefinitions[15]     = "Horns";      
        $skillDefinitions[16]     = "Two Heads";      
        $skillDefinitions[17]     = "Stand Firm";      
        $skillDefinitions[18]     = "Always Hungry";      
        $skillDefinitions[19]     = "Regeneration";      
        $skillDefinitions[20]     = "Take Root";      
        $skillDefinitions[21]     = "Accurate";      
        $skillDefinitions[22]     = "Break Tackle";      
        $skillDefinitions[23]     = "Sneaky Git";      
        $skillDefinitions[24]     = "24";     // FIX
        $skillDefinitions[25]     = "Chainsaw";      
        $skillDefinitions[26]     = "Dauntless";      
        $skillDefinitions[27]     = "Dirty Player";      
        $skillDefinitions[28]     = "Diving Catch";      
        $skillDefinitions[29]     = "Dump-Off";      
        $skillDefinitions[30]     = "Block";      
        $skillDefinitions[31]     = "Bone-Head";      
        $skillDefinitions[32]     = "Very Long Legs";      
        $skillDefinitions[33]     = "Disturbing Presence";      
        $skillDefinitions[34]     = "Diving Tackle";      
        $skillDefinitions[35]     = "Fend";      
        $skillDefinitions[36]     = "Frenzy";      
        $skillDefinitions[37]     = "Grab";      
        $skillDefinitions[38]     = "Guard";      
        $skillDefinitions[39]     = "Hail Mary Pass";      
        $skillDefinitions[40]     = "Juggernaut";      
        $skillDefinitions[41]     = "Jump Up";      
        $skillDefinitions[42]     = "42";      // FIX
        $skillDefinitions[43]     = "43";      // FIX
        $skillDefinitions[44]     = "Loner";      
        $skillDefinitions[45]     = "Nerves of Steel";      
        $skillDefinitions[46]     = "No Hands";
        $skillDefinitions[47]     = "Pass";      
        $skillDefinitions[48]     = "Piling On";      
        $skillDefinitions[49]     = "Prehensile Tail";      
        $skillDefinitions[50]     = "Pro";      
        $skillDefinitions[51]     = "Really Stupid";      
        $skillDefinitions[52]     = "Right Stuff";      
        $skillDefinitions[53]     = "Safe Throw";      
        $skillDefinitions[54]     = "Secret Weapon";      
        $skillDefinitions[55]     = "Shadowing";      
        $skillDefinitions[56]     = "Side Step";      
        $skillDefinitions[57]     = "Tackle";      
        $skillDefinitions[58]     = "Strong Arm";      
        $skillDefinitions[59]     = "Stunty";      
        $skillDefinitions[60]     = "Sure Feet";      
        $skillDefinitions[61]     = "Sure Hands";      
        $skillDefinitions[62]     = "62";       // FIX
        $skillDefinitions[63]     = "Thick Skull";
        $skillDefinitions[64]     = "Throw Team-Mate";
        $skillDefinitions[65]     = "65";	// FIX
        $skillDefinitions[66]     = "66";	// FIX
        $skillDefinitions[67]     = "Wild Animal";
        $skillDefinitions[68]     = "Wrestle";
        $skillDefinitions[69]     = "Tentacles";
        $skillDefinitions[70]     = "Multiple Block";
        $skillDefinitions[71]     = "Kick";
        $skillDefinitions[72]     = "Kick-Off Return";
        $skillDefinitions[73]     = "73";	// FIX
        $skillDefinitions[74]     = "Big Head";
        $skillDefinitions[75]     = "Claw";
        $skillDefinitions[76]     = "Ball & Chain";
        $skillDefinitions[77]     = "Stab";
        $skillDefinitions[78]     = "Hyptnotic Gaze";
        $skillDefinitions[79]     = "Stakes";
        $skillDefinitions[80]     = "Bombardier";
        $skillDefinitions[81]     = "Deacy";
        $skillDefinitions[82]     = "Nurgle's Rot";
        $skillDefinitions[83]     = "Titchy";
        $skillDefinitions[84]     = "Bloodlust";
        $skillDefinitions[85]     = "Fan Favourite";
        $skillDefinitions[86]     = "Animosity";

        // Remember this is 0-indexed!
        if ( (int)$idSkill >= 0 && (int)$idSkill < count( $skillDefinitions ) )
            return $skillDefinitions[$idSkill];
        else
            return "UNKNOWN SKILL";

    }

}
