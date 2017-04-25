<?php
include("../access.txt");
mysql_select_db("DBS17T-9",$mydb);

$table = $_POST[table];
$dkey = $_POST[dkey];
$operator = $_POST[op];
$value = $_POST[value];

$sql="DELETE FROM " . $_POST[table] . " WHERE " . $_POST[dkey] . "" . $_POST[compOperator] . "" . $_POST[condition];

if (!mysql_query($sql,$mydb))
 {
 die('Error: ' . mysql_error());
 }

mysql_close($mydb);
?> 
