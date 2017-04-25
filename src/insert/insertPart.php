<?php
include("accessTest.txt");
mysql_select_db("DBS17T-9",$mydb);


$sql="INSERT INTO part(partNumber,category,donationID,partName,partLocation,quantity,partManufacturer)
VALUES
('$_POST[partNumber]','$_POST[category]','$_POST[donationID]','$_POST[partName]','$_POST[partLocation]','$_POST[quantity]','$POST_[partManufacturer]')";
if (!mysql_query($sql,$mydb))
{
die('Error: ' . mysql_error());
}
echo "1 record added";
?>
