<?php
include("accessTest.txt");
mysql_select_db("DBS17T-9",$mydb);


$sql="INSERT INTO member (bannerID, memName, memEmail, memPhoneNum, memCollege, memMajor, memClass, shirtSize, memberStatus)
VALUES
('$_POST[bannerID]','$_POST[memName]','$_POST[memEmail]','$_POST[memPhoneNum]','$_POST[memCollege]','$_POST[memMajor]','$_POST[memClass]','$_POST[shirtSize]','$_POST[memberStatus]')";
if (!mysql_query($sql,$mydb))
{
die('Error: ' . mysql_error());
}
echo "1 record added";
?>
