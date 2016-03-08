<?php
function showReplayDropdown() {
    echo "<form action='' method='post' onchange='this.submit()'>\n";
    echo "<select name='replayFile'>\n";
    echo "<option value=''></option>\n";

    $arrFiles = scandir("replays");
    foreach ($arrFiles as $file) {
        if ( strrchr($file, '.') == ".sqlite" ) {
            $selected = "";
            if ($_REQUEST["replayFile"] == $file)
                $selected = "selected";
            echo "<option value='$file' $selected>$file</option>\n";
        }
    }

    echo "</select>";
}

function showLogFileDropdown() {
    echo "<form action='' method='post' onchange='this.submit()'>\n";
    echo "<select name='logFile'>\n";
    echo "<option value=''></option>\n";

    $arrFiles = scandir("replays");
    foreach ($arrFiles as $file) {
        if ( strrchr($file, '.') == ".log" ) {
            $selected = "";
            if ($_REQUEST["replayFile"] == $file)
                $selected = "selected";
            echo "<option value='$file' $selected>$file</option>\n";
        }
    }

    echo "</select>";
}