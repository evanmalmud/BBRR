<html>
<head><title>BBRR - BloodBowl Replay Reader</title></head>
<body>
<p>Please choose what you would like to do</p>
<ul>
    <li><a href="teamRosters.php">View Team Rosters</a></li>
    <li><a href="blockDiceStats.php">View Block Dice</a></li>
    <li><a href="gameLogsWithChat.php">View Rough Game Log, with Chat</a></li>
</ul>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="uploadFile"><br>
    <input type="submit" value="Upload" name="submit">
</form>

</body>
</html>
