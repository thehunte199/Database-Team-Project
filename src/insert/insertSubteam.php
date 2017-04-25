<?php
include("accessTest.txt");
mysql_select_db("DBS17T-9",$mydb);


$sql="INSERT INTO subteam(teamName, joinDate, parentTeam, bannerID, purpose, leaderID)
VALUES
('$_POST[teamName]','$_POST[joinDate]','$_POST[parentTeam]','$_POST[bannerID]','$_POST[purpose]','$_POST[leaderID]')";
if (!mysql_query($sql,$mydb))
{
die('Error: ' . mysql_error());
}
echo "1 record added";
?>
