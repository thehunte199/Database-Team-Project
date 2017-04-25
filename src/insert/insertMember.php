<?php
include("accessTest.txt");
mysql_select_db("DBS17T-9",$mydb);


$sql="INSERT INTO member (memFName,bannerID,memCollege,shirtSize,memMName,memEmail,memMajor,memberStatus,memLname,memPhoneNum,memClass)
VALUES
('$_POST[memFName]','$_POST[bannerID]','$_POST[memCollege]','$_POST[shirtSize]','$_POST[memMName]','$_POST[memEmail]','$_POST[memMajor]','$_POST[memberStatus]','$_POST[memLName]','$POST_[memPhoneNum]','$POST_[memClass]')";
if (!mysql_query($sql,$mydb))
{
die('Error: ' . mysql_error());
}
echo "1 record added";
?>
