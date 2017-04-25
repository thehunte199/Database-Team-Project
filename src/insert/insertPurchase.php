<?php
include("accessTest.txt");
mysql_select_db("DBS17T-9",$mydb);


$sql="INSERT INTO purchase(purchaseID, arrivalDate, quantityOrdered, orderDescription, subteamName, orderDate, purchaseType, unitPrice, purchasedFrom, partNumber,arrivalStatus, quantityRequired, purchasePriority, orderName)
VALUES
('$_POST[purchaseID]','$_POST[arrivalDate]','$_POST[quantityOrdered]','$_POST[orderDescription]','$_POST[subteamName]','$_POST[orderDate]','$POST_[purchaseType]','$POST_[unitPrice]','$POST_[purchasedFrom]','$POST_[partNumber]','$POST_[arrivalStatus]','$POST_[quantityRequired]','$POST_[purchasePriority]','$POST_[orderName]')";
if (!mysql_query($sql,$mydb))
{
die('Error: ' . mysql_error());
}
echo "1 record added";
?>
