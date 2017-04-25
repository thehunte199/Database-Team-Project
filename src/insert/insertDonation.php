<?php
include("accessTest.txt");
mysql_select_db("DBS17T-9",$mydb);


$sql="INSERT INTO donation(donationID,amount,donationType,donatedFrom,dateReceived,reason)
VALUES
('$_POST[donationID]','$_POST[amount]','$_POST[donationType]','$_POST[donatedFrom]','$_POST[dateReceived]','$_POST[reason]')";
if (!mysql_query($sql,$mydb))
{
die('Error: ' . mysql_error());
}
echo "1 record added";
?>
