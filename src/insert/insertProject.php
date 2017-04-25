<?php
include("accessTest.txt");
mysql_select_db("DBS17T-9",$mydb);


$sql="INSERT INTO project(projectName,completedDate,subteamName,startDate,projDesc,assignDate,dueDate,projPriority,leaderID)
VALUES
('$_POST[projectName]','$_POST[completedDate]','$_POST[subteamName]','$_POST[startDate]','$_POST[projDesc]','$_POST[assignDate]','$POST_[dueDate]','$POST_[projPriority]','$POST_[leaderID]')";
if (!mysql_query($sql,$mydb))
{
die('Error: ' . mysql_error());
}
echo "1 record added";
?>
